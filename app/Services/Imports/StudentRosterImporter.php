<?php

namespace App\Services\Imports;

use App\Models\Classroom;
use App\Models\Student;
use App\Models\TeachingUnit;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class StudentRosterImporter
{
    public static function identity(array $student): string
    {
        return hash('sha256', self::normalize($student['lastname'].' '.$student['firstname']).'|'.$student['birthday']);
    }

    public static function normalize(string $value): string
    {
        if (class_exists(\Normalizer::class)) {
            $value = \Normalizer::normalize($value, \Normalizer::FORM_C);
        }
        return mb_strtolower(trim(preg_replace('/[\s\x{00A0}]+/u', ' ', str_replace(['’', '‐', '‑', '–'], ["'", '-', '-', '-'], $value))));
    }

    /** Toutes les listes du lot sont validées et écrites dans une seule transaction. */
    public function import(array $lists): array
    {
        return Cache::lock('student-roster-import', 120)->block(10, function () use ($lists) {
            return DB::transaction(function () use ($lists) {
                $results = [];
                $targets = [];
                foreach ($lists as $list) {
                    $year = (int) ($list['target_year'] ?? 0);
                    $type = $list['target_type'] ?? '';
                    if ($year < 2026 || $year > 2100 || !isset(Classroom::TYPES[$type]) || empty($list['students'])) {
                        $this->fail('Choisissez une année à partir de 2026-2027 et un niveau Prépa 1 ou Prépa 2.');
                    }
                    $key = "$type:$year";
                    if (isset($targets[$key])) { $this->fail('Deux fichiers ciblent la même classe dans ce lot. Importez une seule liste complète par classe.'); }
                    $targets[$key] = true;
                    $classes = Classroom::where('type', $type)->whereYear('year', $year)->lockForUpdate()->get();
                    if ($classes->count() > 1) { $this->fail("Plusieurs classes existent pour $type en $year. Corrigez ce doublon avant l’import."); }
                    $classroom = $classes->first();
                    $classCreated = $classroom === null;
                    if (!$classroom) {
                        $classroom = Classroom::forceCreate(['type' => $type, 'year' => "$year-09-01", 'total_students' => 0,
                            'total_teaching_units' => TeachingUnit::where('type', $type)->count(), 'roster_key' => $key]);
                    } else {
                        $classroom->forceFill(['roster_key' => $key])->save();
                    }
                    $existing = [];
                    foreach (Student::where('classroom_id', $classroom->id)->lockForUpdate()->get() as $student) {
                        $identity = self::identity($student->toArray());
                        if (isset($existing[$identity])) { $this->fail('La classe contient déjà des doublons d’identité. Corrigez-les avant l’import.'); }
                        $existing[$identity] = $student;
                    }
                    $created = 0;
                    $skipped = 0;
                    foreach ($list['students'] as $row) {
                        $identity = self::identity($row);
                        if (isset($existing[$identity])) {
                            $student = $existing[$identity];
                            if ($student->sexe !== $row['sexe'] || self::normalize($student->birthplace ?? '') !== self::normalize($row['birthplace'])) {
                                $this->fail('Ligne '.$row['line'].' : un étudiant existe déjà avec des informations différentes. Corrigez sa fiche ou le fichier avant de recommencer.');
                            }
                            $student->forceFill(['import_identity' => $identity])->save();
                            $skipped++;
                            continue;
                        }
                        // Un homonyme avec une date différente doit être vérifié, jamais ajouté silencieusement.
                        foreach ($existing as $other) {
                            if (self::normalize($other->lastname.' '.$other->firstname) === self::normalize($row['lastname'].' '.$row['firstname'])) {
                                $this->fail('Ligne '.$row['line'].' : même nom et prénoms qu’une fiche existante mais date de naissance différente. Vérifiez la fiche avant l’import.');
                            }
                        }
                        $student = Student::forceCreate(array_intersect_key($row, array_flip(['lastname', 'firstname', 'sexe', 'birthday', 'birthplace']))
                            + ['classroom_id' => $classroom->id, 'import_identity' => $identity]);
                        $existing[$identity] = $student;
                        $created++;
                    }
                    $classroom->total_students = Student::where('classroom_id', $classroom->id)->count();
                    $classroom->save();
                    $results[] = ['classroom_id' => $classroom->id, 'type' => $type, 'year' => $year,
                        'class_created' => $classCreated, 'created' => $created, 'skipped' => $skipped, 'total' => $classroom->total_students];
                }
                return $results;
            });
        });
    }

    private function fail(string $message): void
    {
        throw ValidationException::withMessages(['import' => $message]);
    }
}
