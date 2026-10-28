<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeachingUnit extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'credit',
        'status',
        'classroom_id',
    ];

    const SEMESTER_FINAL = [
        'semester2',
        'semester4',
    ];

    const SEMESTER_VALUES = [
        'semester1' => 'Semestre 1',
        'semester2' => 'Semestre 2',
        'semester3' => 'Semestre 3',
        'semester4' => 'Semestre 4',
    ];

    const SEMESTER_FICHE_VALUE = [
        'semester1' => '1er Semestre',
        'semester2' => '2e Semestre',
        'semester3' => '3e Semestre',
        'semester4' => '4e Semestre',
    ];

    public function scopeForAcademicYear($query, int $year)
    {
        // Le statut stocké reste historique ; seul le résultat de lecture varie par promotion.
        return $query->select('teaching_units.*')
            ->selectRaw("CASE WHEN composite_from_year <= ? THEN 'multiple' ELSE status END AS status", [$year])
            // Le libellé enregistré reste celui des anciens bulletins.
            ->selectRaw("CASE WHEN composite_from_year <= ? AND name IN ('Humanité 1C (FHS)', 'Humanité 2C (FHS)', 'Humanité 3C (FHS)', 'Humanité 4C (FHS)') THEN REPLACE(name, ' (FHS)', '') ELSE name END AS name", [$year])
            ->with(['elementTeachingUnits' => fn ($ecues) => $ecues
                ->where(fn ($q) => $q->whereNull('effective_from_year')->orWhere('effective_from_year', '<=', $year))]);
    }

    public static function gradingTarget(Classroom $classroom, string $type, int $id)
    {
        $year = (int) date('Y', strtotime($classroom->year));
        $ecue = $type === 'ecue' ? ElementTeachingUnit::findOrFail($id) : null;
        abort_unless(in_array($type, ['ue', 'ecue'], true), 422);
        $unit = self::forAcademicYear($year)->where('type', $classroom->type)
            ->findOrFail($ecue ? $ecue->teaching_unit_id : $id);
        if ($ecue) {
            abort_unless($unit->status === 'multiple' && $unit->elementTeachingUnits->contains('id', $id), 422);
            return $ecue;
        }
        abort_unless($unit->status === 'singular', 422);
        return $unit;
    }

    public function usesWeightedAverage(int $year): bool
    {
        return $this->weighted_from_year !== null && $year >= $this->weighted_from_year;
    }

    public function averageFromNotes($notesByEcue, int $year): float
    {
        $weighted = $this->usesWeightedAverage($year);
        $sum = 0;
        $divisor = 0;
        foreach ($this->elementTeachingUnits as $ecue) {
            $weight = $weighted ? (float) $ecue->credit : 1;
            $note = $notesByEcue->get($ecue->id);
            $sum += $weight * (float) ($note?->moy_catch_up ?? $note?->moy_ecu ?? 0);
            $divisor += $weight;
        }
        return $divisor > 0 ? $sum / $divisor : 0;
    }

    public function classroom()
    {
        return $this->belongsTo(Classroom::class);
    }

    public static function list() {
        return self::all();
    }

    public static function getLinkTeachingUnit($classroomId) {

        $teachingUnits = self::whereNull('classroom_id')
                        ->orWhere('classroom_id', $classroomId)
                        ->get();
        return $teachingUnits;
    }

    const UE_NAMES = [
        "SNI 1" => "Sciences Numériques et Informatique 1",
        "SII 1" => "Sciences Industrielles de l'Ingénieur 1",
        "Humanité 1C (FHS)" => "Humanité 1C (Formation Humaine et Sociale)"
    ];

    public function elementTeachingUnits() {
        return $this->hasMany(ElementTeachingUnit::class);
    }

}
