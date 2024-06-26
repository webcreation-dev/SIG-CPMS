<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'element_teaching_unit_id',
        'teaching_unit_id',
        'i1_points',
        'i2_points',
        'd1_points',
        'd2_points',
        'e_points',
        'moy_catch_up',
        'freq_catch_up'
    ];

    const SEMESTER_NOTES = [
        'semester1' => [
            "skip" => 0,
            "take" => 18
        ],
        'semester2' => [
            "skip" => 18,
            "take" => 18
        ],
        'semester3' => [
            "skip" => 36,
            "take" => 18
        ],
        'semester4' => [
            "skip" => 54,
            "take" => 18
        ],
    ];


    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function elementTeachingUnit()
    {
        return $this->belongsTo(ElementTeachingUnit::class);
    }

    public function teachingUnit()
    {
        return $this->belongsTo(TeachingUnit::class);
    }

    public static function getAppreciation($note) {
        if ($note < 12) {
            return "Non Validé";
        } else {
            return "Validé";
        }
    }

}
