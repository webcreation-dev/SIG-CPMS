<?php

use App\Models\Classroom;
use App\Models\Student;
use App\Models\TeachingUnit;
use App\Models\ElementTeachingUnit;
use App\Models\Note;
use App\Services\SemesterValidation;
use App\Http\Livewire\NoteByStudentLivewireController;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpKernel\Exception\HttpException;

it('réserve FHS et Conduite et leur moyenne pondérée aux nouvelles promotions', function ($number) {
    $semester = 'semester'.$number;
    $type = $number <= 2 ? 'prepa1' : 'prepa2';
    $id = DB::table('teaching_units')->insertGetId([
        'name' => 'Humanité '.$number.'C (FHS)', 'status' => 'singular', 'credit' => 5,
        'type' => $type, 'semester' => $semester, 'composite_from_year' => 2026, 'weighted_from_year' => 2026,
    ]);
    $ecues = collect();
    foreach (['FHS' => 4, 'Conduite' => 1] as $name => $credit) {
        $ecues->push(ElementTeachingUnit::forceCreate(['name' => $name, 'credit' => $credit, 'teaching_unit_id' => $id, 'effective_from_year' => 2026]));
    }
    foreach ([2025, 2026, 2027] as $year) {
        $classroom = Classroom::create(['type' => $type, 'year' => $year.'-09-01', 'total_students' => 1, 'total_teaching_units' => 1]);
        $student = Student::create(['firstname' => 'Test', 'lastname' => 'Humanité', 'sexe' => 'M', 'classroom_id' => $classroom->id]);
        $legacy = Note::forceCreate(['student_id' => $student->id, 'teaching_unit_id' => $id, 'moy_ecu' => 19]);
        foreach ($ecues as $ecue) {
            Note::forceCreate(['student_id' => $student->id, 'element_teaching_unit_id' => $ecue->id,
                'moy_ecu' => $ecue->name === 'FHS' ? 8 : 20, 'moy_catch_up' => $ecue->name === 'FHS' ? 10 : null]);
        }
        $unit = TeachingUnit::forAcademicYear($year)->findOrFail($id);
        expect($unit->status)->toBe($year < 2026 ? 'singular' : 'multiple');
        expect($unit->elementTeachingUnits->pluck('credit')->map(fn ($x) => (int) $x)->all())->toBe($year < 2026 ? [] : [4, 1]);
        $component = new NoteByStudentLivewireController;
        $component->student = $student;
        $component->semester = $semester;
        $notes = $component->render()->getData()['notes'];
        expect($notes->pluck('id')->all())->toBe($year < 2026 ? [$legacy->id] : Note::where('student_id', $student->id)->whereNotNull('element_teaching_unit_id')->pluck('id')->all());
        $result = app(SemesterValidation::class)->forStudent($student, $semester);
        if ($year < 2026) {
            expect($result)->toBeNull();
            expect(fn () => TeachingUnit::gradingTarget($classroom, 'ecue', $ecues->first()->id))->toThrow(HttpException::class);
            expect(TeachingUnit::gradingTarget($classroom, 'ue', $id)->id)->toBe($id);
        } else {
            expect($result['average'])->toBe(12.0)->and($result['validated'])->toBeTrue();
            expect(fn () => TeachingUnit::gradingTarget($classroom, 'ue', $id))->toThrow(HttpException::class);
            expect(TeachingUnit::gradingTarget($classroom, 'ecue', $ecues->first()->id)->id)->toBe($ecues->first()->id);
        }
        foreach (['fiche_de_calcul', 'releve_de_notes'] as $view) {
            $html = view($view, ['studentId' => $student->id, 'semester' => $semester, 'year' => $year, 'nextYear' => $year+1, 'type_classroom' => $type, 'signed' => false])->render();
            expect(str_contains($html, 'Conduite'))->toBe($year >= 2026);
            $text = preg_replace('/\s+/', ' ', strip_tags($html));
            expect($text)->toContain($year < 2026 ? '19.00' : '12.00');
        }
    }
    // La lecture des nouvelles promotions n’a changé ni le statut historique ni ses notes.
    expect(TeachingUnit::find($id)->status)->toBe('singular');
    expect(Note::where('teaching_unit_id', $id)->pluck('moy_ecu')->unique()->all())->toBe(['19']);
})->with([1, 2, 3, 4]);

it('conserve la moyenne arithmétique des autres UE malgré des crédits différents', function () {
    $unit = TeachingUnit::forceCreate(['name' => 'Humanité 1A', 'status' => 'multiple', 'credit' => 5]);
    $first = ElementTeachingUnit::create(['name' => 'A', 'credit' => 4, 'teaching_unit_id' => $unit->id]);
    $second = ElementTeachingUnit::create(['name' => 'B', 'credit' => 1, 'teaching_unit_id' => $unit->id]);
    $notes = collect([$first->id => (object) ['moy_ecu' => 10], $second->id => (object) ['moy_ecu' => 20]]);
    expect($unit->averageFromNotes($notes, 2026))->toBe(15.0);
});

it('conserve la classe sélectionnée et permet la saisie séparée des deux ECUE', function () {
    $role = App\Models\Role::create(['name' => 'Directrice CPMS']);
    $user = App\Models\User::forceCreate(['name' => 'Test', 'email' => 'test@example.com', 'password' => bcrypt('test'), 'avatar' => 'avatar.png', 'role_id' => $role->id]);
    $this->actingAs($user);
    $unit = TeachingUnit::forceCreate(['name' => 'Humanité 1C (FHS)', 'status' => 'singular', 'type' => 'prepa1', 'semester' => 'semester1', 'credit' => 5, 'composite_from_year' => 2026, 'weighted_from_year' => 2026]);
    $fhs = ElementTeachingUnit::forceCreate(['name' => 'FHS', 'credit' => 4, 'teaching_unit_id' => $unit->id, 'effective_from_year' => 2026]);
    $conduct = ElementTeachingUnit::forceCreate(['name' => 'Conduite', 'credit' => 1, 'teaching_unit_id' => $unit->id, 'effective_from_year' => 2026]);
    $oldClass = Classroom::create(['type' => 'prepa1', 'year' => '2025-09-01', 'total_students' => 1, 'total_teaching_units' => 1]);
    $newClass = Classroom::create(['type' => 'prepa1', 'year' => '2026-09-01', 'total_students' => 1, 'total_teaching_units' => 1]);
    $old = Student::create(['firstname' => 'Ancien', 'lastname' => 'TEST', 'sexe' => 'M', 'classroom_id' => $oldClass->id]);
    $new = Student::create(['firstname' => 'Nouveau', 'lastname' => 'TEST', 'sexe' => 'M', 'classroom_id' => $newClass->id]);
    $original = Note::forceCreate(['student_id' => $old->id, 'teaching_unit_id' => $unit->id, 'moy_ecu' => 18]);
    $this->get(route('element_teaching_units.index', ['teaching_unit_id' => $unit->id, 'classroom_id' => $oldClass->id]))->assertOk()->assertDontSee('Noter l\'ECUE');
    $this->get(route('element_teaching_units.index', ['teaching_unit_id' => $unit->id, 'classroom_id' => $newClass->id]))->assertOk()->assertSee('Conduite')->assertSee('FHS');
    $this->get(route('notes.create', ['classroom_id' => $oldClass->id, 'ue_id' => $unit->id, 'type' => 'ue']))->assertOk()->assertSee('Ancien')->assertDontSee('Nouveau');
    foreach ([$fhs->id => 10, $conduct->id => 20] as $id => $score) {
        $this->get(route('notes.create', ['classroom_id' => $newClass->id, 'ue_id' => $id, 'type' => 'ecue']))->assertOk()->assertSee('Nouveau')->assertDontSee('Ancien');
        $this->post(route('notes.store'), ['classroom_id' => $newClass->id, 'ue_id' => $id, 'type' => 'ecue', 'student_id' => [$new->id], 'moy_ecu' => [$score]])->assertRedirect();
    }
    expect(app(SemesterValidation::class)->forStudent($new, 'semester1')['average'])->toBe(12.0);
    $this->post(route('notes.store'), ['classroom_id' => $oldClass->id, 'ue_id' => $fhs->id, 'type' => 'ecue', 'student_id' => [$old->id], 'moy_ecu' => [1]])->assertStatus(422);
    $this->post(route('notes.store'), ['classroom_id' => $newClass->id, 'ue_id' => $unit->id, 'type' => 'ue', 'student_id' => [$new->id], 'moy_ecu' => [1]])->assertStatus(422);
    expect($original->fresh()->moy_ecu)->toBe('18');
    expect(Note::where('student_id', $old->id)->count())->toBe(1);
});
