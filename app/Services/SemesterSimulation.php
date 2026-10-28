<?php

namespace App\Services;

use App\Models\TeachingUnit;
use Illuminate\Validation\ValidationException;

class SemesterSimulation
{
    public function catalog(int $year, string $semester)
    {
        $type = in_array($semester, ['semester1', 'semester2'], true) ? 'prepa1' : 'prepa2';
        return TeachingUnit::forAcademicYear($year)->where('type', $type)->where('semester', $semester)->orderBy('id')->get();
    }

    public function simulate(int $year, string $semester, array $scores): array
    {
        $catalog = $this->catalog($year, $semester);
        $service = app(SemesterValidation::class);
        $rule = $service->ruleForYear($year);
        $type = in_array($semester, ['semester1', 'semester2'], true) ? 'prepa1' : 'prepa2';
        $scientific = array_map('trim', $rule['scientific_ues'][$semester] ?? config("validation.scientific_ues.$semester", []));
        $units = [];
        $details = [];
        foreach ($catalog as $unit) {
            $formula = null;
            if ($unit->status === 'multiple' && $unit->usesWeightedAverage($year)) {
                $notes = collect();
                $terms = [];
                foreach ($unit->elementTeachingUnits as $ecue) {
                    $score = $this->score($scores['ecue'][$ecue->id] ?? null, $ecue->name);
                    $notes[$ecue->id] = (object) ['moy_ecu' => $score];
                    $terms[] = $ecue->credit.' × '.$score;
                }
                $average = $unit->averageFromNotes($notes, $year);
                $formula = '('.implode(' + ', $terms).') / '.$unit->elementTeachingUnits->sum('credit');
            } else {
                $average = $this->score($scores['ue'][$unit->id] ?? null, $unit->name);
            }
            $units[$unit->id] = ['average' => $average, 'scientific' => in_array(trim($unit->name), $scientific, true)];
            $details[$unit->id] = ['name' => $unit->name, 'average' => $average, 'scientific' => $units[$unit->id]['scientific'], 'formula' => $formula];
        }
        $reasons = [];
        if ($rule !== null) {
            $result = $service->evaluate($units, $rule);
            $thresholds = $rule;
            if ($result['average'] < $rule['moyenne_generale']) { $reasons[] = 'La moyenne générale est inférieure à '.$rule['moyenne_generale'].'/20.'; }
            foreach ($details as $detail) {
                if ($detail['scientific'] && $detail['average'] < $rule['min_scientifique']) {
                    $reasons[] = $detail['name'].' est en dessous de '.$rule['min_scientifique'].'/20.';
                }
            }
        } else {
            // Reproduction de la logique historique des vues, sans modifier leurs calculs.
            $thresholds = config("validation.thresholds.$type");
            $average = count($units) ? array_sum(array_column($units, 'average')) / count($units) : 0;
            $scientificValid = true;
            $nonScientificValid = true;
            $appreciations = [];
            foreach ($units as $id => $unit) {
                $minimum = $unit['scientific'] ? $thresholds['min_scientifique'] : $thresholds['min_non_scientifique'];
                if ($unit['average'] < $minimum) {
                    $reasons[] = $details[$id]['name'].' est en dessous de '.$minimum.'/20.';
                    if ($unit['scientific']) { $scientificValid = false; } else { $nonScientificValid = false; }
                }
                $appreciations[$id] = ($unit['average'] >= 12 || ($average >= 12 && $unit['average'] >= $minimum)) ? 'Validé' : 'Non Validé';
            }
            if ($average < $thresholds['moyenne_generale']) { array_unshift($reasons, 'La moyenne générale est inférieure à '.$thresholds['moyenne_generale'].'/20.'); }
            $validated = count($units) > 0 && $average >= $thresholds['moyenne_generale'] && $scientificValid && $nonScientificValid;
            $result = compact('average', 'validated', 'scientificValid', 'appreciations');
        }
        if (!$catalog->count()) { $reasons[] = 'Aucune UE configurée pour ce semestre.'; }
        foreach ($details as $id => &$detail) { $detail['appreciation'] = $result['appreciations'][$id]; }
        unset($detail);
        return $result + ['details' => $details, 'reasons' => $reasons, 'version' => $rule['id'] ?? 'historique', 'thresholds' => $thresholds];
    }

    public function calculationSheetData(int $year, string $semester, array $scores): array
    {
        $result = $this->simulate($year, $semester, $scores);
        $catalog = $this->catalog($year, $semester);
        abort_if($catalog->isEmpty(), 422, 'Aucune UE configurée pour ce semestre.');
        $type = in_array($semester, ['semester1', 'semester2'], true) ? 'prepa1' : 'prepa2';
        $student = new \App\Models\Student();
        $student->forceFill(['sexe' => 'M', 'lastname' => 'SIMULATION', 'firstname' => '- DONNÉES FICTIVES']);
        $student->setRelation('classroom', new \App\Models\Classroom(['type' => $type]));
        $notes = collect();
        foreach ($catalog as $unit) {
            if ($unit->status === 'singular') {
                $notes->push((new \App\Models\Note())->forceFill(['teaching_unit_id' => $unit->id, 'moy_ecu' => $result['details'][$unit->id]['average']]));
            } elseif ($unit->usesWeightedAverage($year)) {
                foreach ($unit->elementTeachingUnits as $ecue) {
                    $notes->push((new \App\Models\Note())->forceFill(['element_teaching_unit_id' => $ecue->id, 'moy_ecu' => $scores['ecue'][$ecue->id]]));
                }
            }
        }
        return ['year' => $year, 'nextYear' => $year + 1, 'semester' => $semester, 'type_classroom' => $type,
            'simulation_student' => $student, 'simulation_catalog' => $catalog, 'simulation_notes' => $notes, 'simulation_result' => $result];
    }

    private function score($value, string $name): float
    {
        if (!is_numeric($value) || !is_finite((float) $value) || $value < 0 || $value > 20) {
            throw ValidationException::withMessages(['scores' => 'Indiquez une moyenne entre 0 et 20 pour '.$name.'.']);
        }
        return (float) $value;
    }
}
