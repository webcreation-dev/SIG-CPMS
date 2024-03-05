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
        'e_points'
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
        if ($note < 0 || $note > 20) {
            return "Note invalide";
        } elseif ($note >= 16) {
            return "Très bien";
        } elseif ($note >= 14) {
            return "Bien";
        } elseif ($note >= 12) {
            return "Assez bien";
        } elseif ($note >= 10) {
            return "Passable";
        } elseif ($note >= 5) {
            return "Insuffisant";
        } else {
            return "Très insuffisant";
        }
    }

}
