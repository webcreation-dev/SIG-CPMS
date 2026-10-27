<?php

use App\Services\SemesterValidation;

it('applique les conditions de compensation à toutes les UE', function ($units, $validated, $expected) {
    $service = new SemesterValidation;
    $result = $service->evaluate(array_map(fn ($u) => ['average' => $u[0], 'scientific' => $u[1]], $units), ['moyenne_generale' => 12, 'min_scientifique' => 10]);
    expect($result['validated'])->toBe($validated);
    expect($result['appreciations'])->toBe($expected);
})->with([
    'toutes les UE à 12' => [[[12, true], [12, false]], true, ['Validé', 'Validé']],
    'scientifique à 10 compensée' => [[[10, true], [14, false]], true, ['Validé', 'Validé']],
    'une scientifique sous 10 bloque toutes les compensations' => [[[10, true], [9, true], [17, false]], false, ['Non Validé', 'Non Validé', 'Validé']],
    'non scientifique sous 10 compensée' => [[[10, true], [20, true], [6, false]], true, ['Validé', 'Validé', 'Validé']],
    'moyenne générale insuffisante' => [[[10, true], [12, false]], false, ['Non Validé', 'Validé']],
    'scientifique juste sous 10' => [[[9.99, true], [20, false]], false, ['Non Validé', 'Validé']],
    'moyenne juste sous 12' => [[[10, true], [13.99, false]], false, ['Non Validé', 'Validé']],
    'aucune UE' => [[], false, []],
]);

it('choisit la version selon l’année scolaire et permet une nouvelle version', function () {
    $app = require __DIR__.'/../../bootstrap/app.php';
    $app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();
    $service = new SemesterValidation;
    foreach ([2023, 2024, 2025] as $year) {
        expect($service->ruleForYear($year))->toBeNull();
    }
    expect($service->ruleForYear(2026)['id'])->toBe('2026-2027');
    config(['validation.versions.2028' => ['id' => '2028-2029', 'moyenne_generale' => 13, 'min_scientifique' => 11]]);
    expect($service->ruleForYear(2027)['id'])->toBe('2026-2027');
    expect($service->ruleForYear(2028)['id'])->toBe('2028-2029');
    expect($service->ruleForYear(2026)['min_scientifique'])->toBe(10);
});
