<?php

namespace App\Services;

use App\Models\Student;
use App\Models\Note;
use App\Models\TeachingUnit;

class SemesterValidation
{
    public function ruleForYear(int $year): ?array
    {
        $versions = config('validation.versions', []);
        krsort($versions);
        foreach ($versions as $start => $rule) {
            if ($year >= $start) {
                return $rule;
            }
        }
        return null; // Les vues historiques conservent exactement leur logique.
    }

    public function evaluate(array $units, array $rule): array
    {
        $average = count($units) ? array_sum(array_column($units, 'average')) / count($units) : 0;
        $scientificValid = true;
        foreach ($units as $unit) {
            if ($unit['scientific'] && $unit['average'] < $rule['min_scientifique']) {
                $scientificValid = false;
            }
        }
        $validated = count($units) > 0 && $average >= $rule['moyenne_generale'] && $scientificValid;
        $appreciations = [];
        foreach ($units as $id => $unit) {
            $appreciations[$id] = ($unit['average'] >= 12 || $validated) ? 'Validé' : 'Non Validé';
        }
        return compact('average', 'validated', 'scientificValid', 'appreciations');
    }

    public function forStudent(Student $student, string $semester): ?array
    {
        $year = (int) date('Y', strtotime($student->classroom->year));
        $rule = $this->ruleForYear($year);
        if ($rule === null) {
            return null;
        }
        $ues = TeachingUnit::forAcademicYear($year)
            ->where('type', $student->classroom->type)->where('semester', $semester)->get();
        $notes = Note::where('student_id', $student->id)->get();
        $byUe = $notes->whereNotNull('teaching_unit_id')->keyBy('teaching_unit_id');
        $byEcue = $notes->whereNotNull('element_teaching_unit_id')->keyBy('element_teaching_unit_id');
        $scientific = array_map('trim', $rule['scientific_ues'][$semester] ?? []);
        $final = fn ($note) => (float) ($note?->moy_catch_up ?? $note?->moy_ecu ?? 0);
        $units = [];
        foreach ($ues as $ue) {
            $average = $ue->status === 'singular'
                ? $final($byUe->get($ue->id))
                : $ue->averageFromNotes($byEcue, $year);
            $units[$ue->id] = ['average' => $average, 'scientific' => in_array(trim($ue->name), $scientific, true)];
        }
        return $this->evaluate($units, $rule) + ['rule' => $rule];
    }
}
