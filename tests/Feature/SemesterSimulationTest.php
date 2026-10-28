<?php

use App\Models\TeachingUnit;
use App\Models\ElementTeachingUnit;
use App\Services\SemesterSimulation;

beforeEach(function () {
    $role = App\Models\Role::create(['name' => 'Directeur des études']);
    $user = App\Models\User::forceCreate(['name' => 'Test', 'email' => 'simulation@test.local', 'password' => bcrypt('test'), 'avatar' => 'avatar.png', 'role_id' => $role->id]);
    $this->actingAs($user);
});

function simulationFixture(int $number = 1): array
{
    $semester = 'semester'.$number;
    $type = $number <= 2 ? 'prepa1' : 'prepa2';
    $science = TeachingUnit::forceCreate(['name' => 'Algèbre '.$number, 'type' => $type, 'semester' => $semester, 'credit' => 6, 'status' => 'singular']);
    $other = TeachingUnit::forceCreate(['name' => 'Humanité '.$number.'A', 'type' => $type, 'semester' => $semester, 'credit' => 7, 'status' => 'singular']);
    $humanity = TeachingUnit::forceCreate(['name' => 'Humanité '.$number.'C (FHS)', 'type' => $type, 'semester' => $semester, 'credit' => 5, 'status' => 'singular', 'weighted_from_year' => 2026, 'composite_from_year' => 2026]);
    $fhs = ElementTeachingUnit::forceCreate(['name' => 'FHS', 'credit' => 4, 'teaching_unit_id' => $humanity->id, 'effective_from_year' => 2026]);
    $conduct = ElementTeachingUnit::forceCreate(['name' => 'Conduite', 'credit' => 1, 'teaching_unit_id' => $humanity->id, 'effective_from_year' => 2026]);
    $scores = ['ue' => [$science->id => 14, $other->id => 10, $humanity->id => 12], 'ecue' => [$fhs->id => 10, $conduct->id => 20]];
    return compact('science', 'other', 'humanity', 'fhs', 'conduct', 'scores', 'semester');
}

it('affiche le simulateur dans la mise en page de l’administration', function () {
    simulationFixture();
    $this->get(route('simulation.semester'))->assertOk()->assertSee('Simulation de semestre')->assertSee('codex-sidebar')->assertDontSee('<style>', false)->assertSee('Conduite')->assertSee('4 crédit(s)')->assertSee('Données fictives uniquement');
});

it('calcule Humanité avec les vrais coefficients et les appréciations du semestre', function ($number) {
    $f = simulationFixture($number);
    $result = $this->postJson(route('simulation.semester.calculate'), ['year' => 2026, 'semester' => $f['semester'], 'scores' => $f['scores']]);
    $result->assertOk()->assertJsonPath('average', 12)->assertJsonPath('validated', true)
        ->assertJsonPath('details.'.$f['humanity']->id.'.average', 12)
        ->assertJsonPath('details.'.$f['humanity']->id.'.formula', '(4 × 10 + 1 × 20) / 5');
    expect(App\Models\Student::count())->toBe(0)->and(App\Models\Note::count())->toBe(0)->and(App\Models\Classroom::count())->toBe(0);
})->with([1, 2, 3, 4]);

it('bloque la compensation lorsqu’une scientifique descend sous 10 même avec une moyenne suffisante', function () {
    $f = simulationFixture();
    $f['scores']['ue'][$f['science']->id] = 9;
    $f['scores']['ue'][$f['other']->id] = 20;
    $result = app(SemesterSimulation::class)->simulate(2026, 'semester1', $f['scores']);
    expect($result['average'])->toBeGreaterThan(12)->and($result['validated'])->toBeFalse();
    expect($result['appreciations'][$f['science']->id])->toBe('Non Validé');
    expect($result['appreciations'][$f['humanity']->id])->toBe('Validé');
});

it('compense les non scientifiques sous 10 si toutes les conditions globales sont réunies', function () {
    $f = simulationFixture();
    $f['scores']['ue'][$f['science']->id] = 20;
    $f['scores']['ue'][$f['other']->id] = 2;
    $f['scores']['ecue'][$f['fhs']->id] = 15;
    $f['scores']['ecue'][$f['conduct']->id] = 10;
    $result = app(SemesterSimulation::class)->simulate(2026, 'semester1', $f['scores']);
    expect($result['average'])->toBe(12.0)->and($result['validated'])->toBeTrue();
    expect($result['appreciations'][$f['other']->id])->toBe('Validé');
});

it('permet de comparer les seuils historiques avec les nouvelles règles de Prépa 2', function () {
    $f = simulationFixture(3);
    $f['scores']['ue'][$f['science']->id] = 9;
    $f['scores']['ue'][$f['other']->id] = 15;
    $service = app(SemesterSimulation::class);
    $old = $service->simulate(2025, 'semester3', $f['scores']);
    $new = $service->simulate(2026, 'semester3', $f['scores']);
    expect($old['validated'])->toBeTrue()->and($old['version'])->toBe('historique');
    expect($new['validated'])->toBeFalse();
    expect($old['details'][$f['humanity']->id]['formula'])->toBeNull();
    $this->get(route('simulation.semester', ['year' => 2025, 'semester' => 'semester3']))->assertOk()->assertDontSee('name="scores[ecue]', false)->assertSee('Humanité C reste une UE unique');
});

it('refuse les valeurs absentes et hors limites', function ($value) {
    $f = simulationFixture();
    $f['scores']['ecue'][$f['fhs']->id] = $value;
    $this->postJson(route('simulation.semester.calculate'), ['year' => 2026, 'semester' => 'semester1', 'scores' => $f['scores']])->assertUnprocessable()->assertJsonValidationErrors('scores');
})->with([null, '', -1, 21, 'texte']);
