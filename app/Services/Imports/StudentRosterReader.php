<?php

namespace App\Services\Imports;

use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use ZipArchive;

class StudentRosterReader
{
    public function read(string $path, string $filename): array
    {
        $zip = new ZipArchive;
        if ($zip->open($path) !== true) {
            $this->fail('Le fichier doit être un classeur Excel .xlsx valide.');
        }
        try {
            $total = 0;
            for ($i = 0; $i < $zip->numFiles; $i++) {
                $stat = $zip->statIndex($i);
                $total += $stat['size'];
                if ($total > 30 * 1024 * 1024 || $zip->numFiles > 2000) {
                    $this->fail('Le classeur est trop volumineux.');
                }
            }
            $strings = [];
            if ($zip->locateName('xl/sharedStrings.xml') !== false) {
                foreach ($this->xml($zip, 'xl/sharedStrings.xml')->xpath('//*[local-name()="si"]') as $item) {
                    $strings[] = implode('', array_map('strval', $item->xpath('.//*[local-name()="t"]')));
                }
            }
            $relations = [];
            foreach ($this->xml($zip, 'xl/_rels/workbook.xml.rels')->xpath('//*[local-name()="Relationship"]') as $rel) {
                if ((string) $rel['TargetMode'] !== 'External') {
                    $relations[(string) $rel['Id']] = (string) $rel['Target'];
                }
            }
            $lists = [];
            foreach ($this->xml($zip, 'xl/workbook.xml')->xpath('//*[local-name()="sheet"]') as $sheet) {
                if (in_array((string) $sheet['state'], ['hidden', 'veryHidden'], true)) {
                    continue;
                }
                $id = (string) $sheet->attributes('http://schemas.openxmlformats.org/officeDocument/2006/relationships')['id'];
                $target = $relations[$id] ?? '';
                $target = str_starts_with($target, '/') ? ltrim($target, '/') : 'xl/'.$target;
                if (!preg_match('~^xl/worksheets/[\w.-]+\.xml$~', $target)) {
                    continue;
                }
                $rows = [];
                foreach ($this->xml($zip, $target)->xpath('//*[local-name()="sheetData"]/*[local-name()="row"]') as $row) {
                    $cells = [];
                    foreach ($row->xpath('./*[local-name()="c"]') as $cell) {
                        preg_match('/^[A-Z]+/', (string) $cell['r'], $column);
                        $value = (string) ($cell->xpath('./*[local-name()="v"]')[0] ?? '');
                        if ((string) $cell['t'] === 's') {
                            $value = $strings[(int) $value] ?? '';
                        } elseif ((string) $cell['t'] === 'inlineStr') {
                            $value = implode('', array_map('strval', $cell->xpath('.//*[local-name()="t"]')));
                        }
                        $cells[$column[0] ?? ''] = ['value' => $this->clean($value), 'formula' => count($cell->xpath('./*[local-name()="f"]')) > 0];
                    }
                    $rows[(int) $row['r']] = $cells;
                }
                if ($list = $this->parseRows($rows)) {
                    $lists[] = $list;
                }
            }
            if (count($lists) !== 1) {
                $this->fail('Le classeur doit contenir une seule liste avec les colonnes « Nom et Prénoms », « Sexe » et « Date et lieu de naissance ».');
            }
            $list = $lists[0];
            $list['filename'] = $filename;
            $list['filename_year'] = null;
            if (preg_match('/(?<!\d)(20\d{2}|\d{2})\s*[-_]\s*(20\d{2}|\d{2})(?!\d)/u', $filename, $matches)) {
                $start = strlen($matches[1]) === 2 ? 2000 + (int) $matches[1] : (int) $matches[1];
                $end = strlen($matches[2]) === 2 ? 2000 + (int) $matches[2] : (int) $matches[2];
                if ($end === $start + 1) {
                    $list['filename_year'] = $start;
                }
            }
            if ($list['filename_year'] !== null && $list['year'] !== null && $list['filename_year'] !== $list['year']) {
                $list['warnings'][] = 'Le nom du fichier et son en-tête indiquent des années différentes. Vérifiez l’année cible.';
            }
            return $list;
        } finally {
            $zip->close();
        }
    }

    private function parseRows(array $rows): ?array
    {
        $header = null;
        $columns = [];
        $metadata = [];
        foreach ($rows as $number => $cells) {
            $found = [];
            foreach ($cells as $column => $cell) {
                $label = Str::lower(Str::ascii($cell['value']));
                if (preg_match('/^nom.*prenom/', $label)) { $found['name'] = $column; }
                if ($label === 'sexe') { $found['sex'] = $column; }
                if (str_contains($label, 'date') && str_contains($label, 'naissance')) { $found['birth'] = $column; }
            }
            if (count($found) === 3) { $header = $number; $columns = $found; break; }
            $metadata[] = implode(' ', array_column($cells, 'value'));
        }
        if ($header === null) { return null; }
        $metadata = implode(' ', $metadata);
        $year = null;
        if (preg_match('/(20\d{2})\s*[-–\/]\s*(20\d{2})/u', $metadata, $m)) {
            if ((int) $m[2] !== (int) $m[1] + 1) { $this->fail('Année académique incohérente dans l’en-tête.'); }
            $year = (int) $m[1];
        }
        $type = null;
        if (preg_match('/\b([12])\s*(?:e|er|ere|eme|è|ère|ème|é)[\p{L}]*\s+Ann[ée]e/iu', $metadata, $m)) {
            $type = 'prepa'.$m[1];
        }
        $students = [];
        $seen = [];
        foreach ($rows as $number => $cells) {
            if ($number <= $header) { continue; }
            $values = [];
            foreach ($columns as $key => $column) {
                if ($cells[$column]['formula'] ?? false) { $this->fail("Ligne $number : les données doivent être des valeurs, sans formule."); }
                $values[$key] = $cells[$column]['value'] ?? '';
            }
            if (implode('', $values) === '') { continue; } // Numéros préremplis sans étudiant.
            if ($values['name'] === '' || !in_array(mb_strtoupper($values['sex']), ['M', 'F'], true)) {
                $this->fail("Ligne $number : nom, prénoms et sexe M/F sont requis.");
            }
            if (mb_strtoupper($values['name']) === $values['name']) { $this->fail("Ligne $number : distinguez les noms en MAJUSCULES et les prénoms en minuscules/majuscules."); }
            $parts = preg_split('/\s+/u', $values['name']);
            $surname = [];
            while (count($parts) > 1 && preg_match('/\p{L}/u', $parts[0]) && mb_strtoupper($parts[0]) === $parts[0]) {
                $surname[] = array_shift($parts);
            }
            if (!$surname || !$parts) { $this->fail("Ligne $number : écrivez le nom de famille en MAJUSCULES, puis les prénoms."); }
            if (!preg_match('/^(\d{1,2})[\/-](\d{1,2})[\/-](\d{4})\s+à\s+(.+)$/iu', $values['birth'], $birth)) {
                $this->fail("Ligne $number : naissance attendue au format jj/mm/aaaa à Lieu (ou jj-mm-aaaa à Lieu).");
            }
            if (!checkdate((int) $birth[2], (int) $birth[1], (int) $birth[3])) { $this->fail("Ligne $number : date de naissance invalide."); }
            $birthday = sprintf('%04d-%02d-%02d', $birth[3], $birth[2], $birth[1]);
            if ($birthday > date('Y-m-d') || (int) $birth[3] < 1900) { $this->fail("Ligne $number : date de naissance incohérente."); }
            $student = ['lastname' => implode(' ', $surname), 'firstname' => implode(' ', $parts), 'sexe' => mb_strtoupper($values['sex']), 'birthday' => $birthday, 'birthplace' => $this->clean($birth[4])];
            foreach ($student as $value) { if (mb_strlen($value) > 255) { $this->fail("Ligne $number : une valeur dépasse 255 caractères."); } }
            $identity = StudentRosterImporter::identity($student);
            if (isset($seen[$identity])) { $this->fail("Lignes {$seen[$identity]} et $number : étudiant présent deux fois dans le fichier."); }
            $seen[$identity] = $number;
            $students[] = $student + ['line' => $number];
        }
        if (!$students) { $this->fail('La liste ne contient aucun étudiant.'); }
        if (count($students) > 1000) { $this->fail('La liste dépasse 1 000 étudiants.'); }
        $warnings = [];
        if (preg_match('/Effectif\s*:\s*(\d+)/iu', $metadata, $m) && (int) $m[1] !== count($students)) {
            $warnings[] = 'L’effectif annoncé ('.$m[1].') diffère des '.count($students).' lignes d’étudiants trouvées.';
        }
        return compact('year', 'type', 'students', 'warnings');
    }

    private function clean(string $value): string
    {
        return trim(preg_replace('/[\s\x{00A0}]+/u', ' ', $value));
    }

    private function xml(ZipArchive $zip, string $name): \SimpleXMLElement
    {
        $contents = $zip->getFromName($name);
        if ($contents === false || stripos($contents, '<!DOCTYPE') !== false || stripos($contents, '<!ENTITY') !== false) {
            $this->fail('Structure Excel invalide ou non prise en charge.');
        }
        $previous = libxml_use_internal_errors(true);
        try {
            $xml = simplexml_load_string($contents, 'SimpleXMLElement', LIBXML_NONET);
            if ($xml === false) { $this->fail('Un document XML du classeur est invalide.'); }
            return $xml;
        } finally {
            libxml_clear_errors();
            libxml_use_internal_errors($previous);
        }
    }

    private function fail(string $message): void
    {
        throw ValidationException::withMessages(['files' => $message]);
    }
}
