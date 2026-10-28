<?php

use App\Models\Classroom;
use App\Models\Student;
use App\Models\Note;
use App\Services\Imports\StudentRosterReader;
use App\Services\Imports\StudentRosterImporter;
use Illuminate\Http\UploadedFile;
use Illuminate\Validation\ValidationException;

function rosterData(int $year = 2026, string $type = 'prepa1'): array
{
    return ['filename' => 'liste.xlsx', 'year' => $year, 'type' => $type, 'filename_year' => $year,
        'warnings' => [], 'target_year' => $year, 'target_type' => $type,
        'students' => [['lastname' => 'TEST COMPOSE', 'firstname' => 'Élodie Anne', 'birthday' => '2008-02-29', 'birthplace' => 'Porto-Novo', 'sexe' => 'F', 'line' => 9]]];
}

function rosterWorkbook(string $year = '2026-2027', string $level = '1è', array $rows = []): string
{
    $path = tempnam(sys_get_temp_dir(), 'roster-test-');
    $zip = new ZipArchive;
    $zip->open($path, ZipArchive::CREATE | ZipArchive::OVERWRITE);
    $zip->addFromString('[Content_Types].xml', '<?xml version="1.0"?><Types xmlns="http://schemas.openxmlformats.org/package/2006/content-types"><Default Extension="rels" ContentType="application/vnd.openxmlformats-package.relationships+xml"/><Default Extension="xml" ContentType="application/xml"/><Override PartName="/xl/workbook.xml" ContentType="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet.main+xml"/></Types>');
    $zip->addFromString('xl/workbook.xml', '<workbook xmlns="http://schemas.openxmlformats.org/spreadsheetml/2006/main" xmlns:r="http://schemas.openxmlformats.org/officeDocument/2006/relationships"><sheets><sheet name="Feuil1" sheetId="1" r:id="rId1"/></sheets></workbook>');
    $zip->addFromString('xl/_rels/workbook.xml.rels', '<Relationships xmlns="http://schemas.openxmlformats.org/package/2006/relationships"><Relationship Id="rId1" Type="http://schemas.openxmlformats.org/officeDocument/2006/relationships/worksheet" Target="worksheets/sheet1.xml"/></Relationships>');
    $cells = [4 => ['B' => 'Année Académique : '.$year], 5 => ['B' => 'LISTE DES ETUDIANTS '.$level.' Année'], 6 => ['B' => 'Effectif : 1'],
        8 => ['A' => 'No', 'B' => 'Nom et Prénoms', 'C' => 'Sexe', 'D' => 'Date et lieu de naissance']];
    $rows = $rows ?: [['TEST COMPOSE Élodie Anne', 'F', '29/02/2008 à Porto-Novo']];
    foreach ($rows as $index => $row) { $cells[9+$index] = ['A' => $index+1, 'B' => $row[0], 'C' => $row[1], 'D' => $row[2]]; }
    $cells[45] = ['A' => '37']; // Numéro seul après la fin des inscriptions.
    $xml = '<worksheet xmlns="http://schemas.openxmlformats.org/spreadsheetml/2006/main"><sheetData>';
    foreach ($cells as $number => $columns) {
        $xml .= '<row r="'.$number.'">';
        foreach ($columns as $column => $value) {
            $xml .= '<c r="'.$column.$number.'" t="inlineStr"><is><t>'.htmlspecialchars((string) $value, ENT_XML1, 'UTF-8').'</t></is></c>';
        }
        $xml .= '</row>';
    }
    $zip->addFromString('xl/worksheets/sheet1.xml', $xml.'</sheetData></worksheet>');
    $zip->close();
    return $path;
}

it('lit le modèle et signale les années contradictoires sans perdre les noms composés', function () {
    $path = rosterWorkbook('2025-2026', '2èe', [['TEST COMPOSE Élodie Anne', 'F', '29-02-2008 à Porto-Novo']]);
    try { $list = app(StudentRosterReader::class)->read($path, 'Liste 2e An_26-27.xlsx'); }
    finally { unlink($path); }
    expect($list['year'])->toBe(2025)->and($list['filename_year'])->toBe(2026)->and($list['type'])->toBe('prepa2');
    expect($list['warnings'])->toHaveCount(1)->and($list['students'])->toHaveCount(1);
    expect($list['students'][0])->toMatchArray(['lastname' => 'TEST COMPOSE', 'firstname' => 'Élodie Anne', 'birthday' => '2008-02-29', 'birthplace' => 'Porto-Novo']);
});

it('refuse les données invalides avant toute création', function ($rows) {
    $path = rosterWorkbook(rows: $rows);
    try { expect(fn () => app(StudentRosterReader::class)->read($path, 'liste.xlsx'))->toThrow(ValidationException::class); }
    finally { unlink($path); }
    expect(Student::count())->toBe(0)->and(Classroom::count())->toBe(0);
})->with([
    'date inexistante' => [[['TEST Élodie', 'F', '31/02/2008 à Cotonou']]],
    'sexe absent' => [[['TEST Élodie', '', '01/02/2008 à Cotonou']]],
    'identité ambiguë' => [[['TEST ELODIE', 'F', '01/02/2008 à Cotonou']]],
    'doublon dans le fichier' => [[['TEST Élodie', 'F', '01/02/2008 à Cotonou'], ['TEST Élodie', 'F', '01/02/2008 à Cotonou']]],
    'ligne incomplète' => [[['', 'F', '01/02/2008 à Cotonou']]],
]);

it('crée les deux classes et ne duplique pas les étudiants lors d’un nouvel import', function () {
    $lists = [rosterData(), rosterData(type: 'prepa2')];
    $lists[1]['year'] = 2025; // En-tête erroné corrigé par l’année cible explicite.
    $service = app(StudentRosterImporter::class);
    $first = $service->import($lists);
    expect(array_sum(array_column($first, 'created')))->toBe(2);
    $second = $service->import($lists);
    expect(array_sum(array_column($second, 'created')))->toBe(0)->and(array_sum(array_column($second, 'skipped')))->toBe(2);
    expect(Classroom::count())->toBe(2)->and(Student::count())->toBe(2);
    expect(Classroom::whereYear('year', 2025)->count())->toBe(0);
});

it('réutilise une classe et une fiche existantes sans écraser leurs données', function () {
    $classroom = Classroom::create(['type' => 'prepa1', 'year' => '2026-11-01', 'total_students' => 1, 'total_teaching_units' => 10]);
    $student = Student::create(rosterData()['students'][0] + ['classroom_id' => $classroom->id]);
    $result = app(StudentRosterImporter::class)->import([rosterData()]);
    expect($result[0]['skipped'])->toBe(1)->and($result[0]['class_created'])->toBeFalse();
    expect($classroom->fresh()->year)->toBe('2026-11-01');
    expect($student->fresh()->import_identity)->not->toBeNull();
});

it('préserve l’inscription et les notes antérieures quand l’étudiant revient l’année suivante', function () {
    $service = app(StudentRosterImporter::class);
    $service->import([rosterData()]);
    $old = Student::first();
    $note = Note::forceCreate(['student_id' => $old->id, 'moy_ecu' => 17]);
    $service->import([rosterData(2027, 'prepa2')]);
    expect(Student::count())->toBe(2)->and(Classroom::count())->toBe(2);
    expect($old->fresh()->classroom_id)->toBe($old->classroom_id)->and($note->fresh()->moy_ecu)->toBe('17');
});

it('annule tout le lot si une seconde liste présente un conflit', function () {
    $service = app(StudentRosterImporter::class);
    $service->import([rosterData(type: 'prepa2')]);
    $conflict = rosterData(type: 'prepa2');
    $conflict['students'][0]['birthplace'] = 'Lieu différent';
    expect(fn () => $service->import([rosterData(), $conflict]))->toThrow(ValidationException::class);
    expect(Student::count())->toBe(1)->and(Classroom::count())->toBe(1);
    expect(Student::first()->birthplace)->toBe('Porto-Novo');
});

it('refuse les années historiques', function () {
    expect(fn () => app(StudentRosterImporter::class)->import([rosterData(2025)]))->toThrow(ValidationException::class);
    expect(Classroom::count())->toBe(0);
});

it('limite l’import à la direction et au directeur des études', function () {
    $this->get(route('students.import.index'))->assertRedirect(route('login'));
    $role = App\Models\Role::create(['name' => 'Parent']);
    $user = App\Models\User::forceCreate(['name' => 'Test', 'email' => 'parent@test.local', 'password' => bcrypt('test'), 'avatar' => 'avatar.png', 'role_id' => $role->id]);
    $this->actingAs($user)->get(route('students.import.index'))->assertForbidden();
    $role->update(['name' => 'Directeur des études']);
    $this->actingAs($user->fresh())->get(route('students.import.index'))->assertRedirect(route('classrooms.index'));
    $this->get(route('classrooms.index'))->assertOk()->assertSee('Importer les étudiants (Excel)');
});

it('importe directement le fichier dans la classe sélectionnée depuis le popup', function () {
    $role = App\Models\Role::create(['name' => 'Directrice CPMS']);
    $user = App\Models\User::forceCreate(['name' => 'Test', 'email' => 'admin@test.local', 'password' => bcrypt('test'), 'avatar' => 'avatar.png', 'role_id' => $role->id]);
    $this->actingAs($user);
    $classroom = Classroom::create(['type' => 'prepa2', 'year' => '2026-09-01', 'total_students' => 0, 'total_teaching_units' => 20]);
    $path = rosterWorkbook('2025-2026', '2èe');
    try {
        $this->get(route('classrooms.index'))->assertOk()->assertSee('StudentImportModal')->assertSee('Prépa 2 — 2026-2027')->assertDontSee('Analyser les fichiers');
        $file = new UploadedFile($path, 'Liste 2e An_26-27.xlsx', null, null, true);
        $this->post(route('students.import.store'), ['classroom_id' => $classroom->id, 'file' => $file])->assertRedirect(route('classrooms.index'))->assertSessionHasNoErrors()->assertSessionHas('warning');
        expect(Student::count())->toBe(1)->and(Student::first()->classroom_id)->toBe($classroom->id);
        expect(Classroom::count())->toBe(1);
        $file = new UploadedFile($path, 'Liste 2e An_26-27.xlsx', null, null, true);
        $this->post(route('students.import.store'), ['classroom_id' => $classroom->id, 'file' => $file])->assertSessionHasNoErrors();
        expect(Student::count())->toBe(1);
    } finally { unlink($path); }
});

it('garde les erreurs d’import dans le popup sans écrire de données', function () {
    $role = App\Models\Role::create(['name' => 'Directeur des études']);
    $user = App\Models\User::forceCreate(['name' => 'Test', 'email' => 'manager@test.local', 'password' => bcrypt('test'), 'avatar' => 'avatar.png', 'role_id' => $role->id]);
    $this->actingAs($user);
    $classroom = Classroom::create(['type' => 'prepa1', 'year' => '2026-09-01', 'total_students' => 0, 'total_teaching_units' => 20]);
    $path = rosterWorkbook('2026-2027', '2èe');
    try {
        $this->post(route('students.import.store'), ['classroom_id' => $classroom->id, 'file' => new UploadedFile($path, 'liste.xlsx', null, null, true)])
            ->assertRedirect(route('classrooms.index'))->assertSessionHasErrors(['file'], null, 'studentImport');
        expect(Student::count())->toBe(0);
    } finally { unlink($path); }
});

it('trie les classes par année décroissante sans imposer un tri DataTables sur les images', function () {
    Classroom::create(['type' => 'prepa1', 'year' => '2023-09-01', 'total_students' => 0, 'total_teaching_units' => 10]);
    Classroom::create(['type' => 'prepa1', 'year' => '2026-09-01', 'total_students' => 0, 'total_teaching_units' => 20]);
    Classroom::create(['type' => 'prepa2', 'year' => '2025-09-01', 'total_students' => 0, 'total_teaching_units' => 10]);
    $component = new App\Http\Livewire\ClassroomLivewireController;
    expect($component->render()->getData()['classrooms']->pluck('year')->all())->toBe(['2026-09-01', '2025-09-01', '2023-09-01']);
});
