<?php

use App\Models\Classroom;
use App\Models\Student;
use App\Models\TeachingUnit;
use App\Models\ElementTeachingUnit;
use App\Models\Note;
use App\Services\SemesterValidation;
use Illuminate\Support\Facades\DB;

it('utilise les notes finales et la même décision dans les deux documents', function ($semester, $type, $names) {
    $classroom = Classroom::create(['type' => $type, 'year' => '2026-09-01', 'total_students' => 1, 'total_teaching_units' => 3]);
    $student = Student::create(['lastname' => 'TEST', 'firstname' => 'Validation', 'sexe' => 'M', 'birthday' => '2005-01-01', 'birthplace' => 'Cotonou', 'classroom_id' => $classroom->id]);
    foreach ($names as $index => $name) {
        $id = DB::table('teaching_units')->insertGetId(['name' => $name, 'credit' => 6, 'status' => $index === 1 ? 'multiple' : 'singular', 'type' => $type, 'semester' => $semester]);
        if ($index === 1) {
            foreach ([18, 20] as $score) {
                $ecue = ElementTeachingUnit::create(['name' => 'ECUE '.$score, 'credit' => 3, 'teaching_unit_id' => $id]);
                Note::forceCreate(['student_id' => $student->id, 'element_teaching_unit_id' => $ecue->id, 'moy_ecu' => $score]);
            }
        } else {
            Note::forceCreate(['student_id' => $student->id, 'teaching_unit_id' => $id, 'moy_ecu' => $index === 0 ? 8 : 7, 'moy_catch_up' => $index === 0 ? 10 : null]);
        }
    }
    $result = app(SemesterValidation::class)->forStudent($student, $semester);
    expect($result['average'])->toBe(12.0)->and($result['validated'])->toBeTrue();
    $data = ['studentId' => $student->id, 'semester' => $semester, 'year' => 2026, 'nextYear' => 2027, 'type_classroom' => $type, 'signed' => false];
    foreach (['fiche_de_calcul', 'releve_de_notes'] as $view) {
        $html = view($view, $data)->render();
        expect($html)->not->toContain('Non Validé');
    }
    $global = view('fiche_de_calcul_global_versioned', ['students' => collect([$student])])->render();
    expect(substr_count($global, 'FICHE DE CALCUL DE MOYENNES'))->toBe(2);
    expect(substr_count($global, 'page-break-before: always'))->toBe(1);
    // Une seule scientifique sous 10 interdit toute compensation.
    Note::where('student_id', $student->id)->whereNotNull('teaching_unit_id')->whereNotNull('moy_catch_up')->update(['moy_catch_up' => 9]);
    Note::where('student_id', $student->id)->whereNotNull('teaching_unit_id')->whereNull('moy_catch_up')->update(['moy_ecu' => 8]);
    $failed = app(SemesterValidation::class)->forStudent($student, $semester);
    expect($failed['average'])->toBe(12.0)->and($failed['validated'])->toBeFalse();
    foreach (['fiche_de_calcul', 'releve_de_notes'] as $view) {
        $html = view($view, $data)->render();
        expect(substr_count(mb_strtolower($html), 'non validé'))->toBe(3);
        if ($view === 'fiche_de_calcul') {
            expect($html)->not->toContain('(MG ', '(UE Sci ', '(UE Non Sci ');
            preg_match('/Moyenne générale :(.*)<\/tr>/s', $html, $total);
            expect(preg_replace('/\s+/', ' ', strip_tags($total[1])))->toContain('Non validé')->not->toContain('(');
        }
    }
})->with([
    ['semester1', 'prepa1', ['Algèbre 1', 'SNI 1', 'Humanité 1A']],
    ['semester2', 'prepa1', ['Algèbre 2', 'SNI 2', 'Humanité 2A']],
    ['semester3', 'prepa2', ['Algèbre 3', 'SNI 3', 'Humanité 3A']],
    ['semester4', 'prepa2', ['Algèbre 4', 'SNI 4', 'Humanité 4A']],
]);
