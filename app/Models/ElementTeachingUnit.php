<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ElementTeachingUnit extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'credit',
        'teaching_unit_id',
    ];

    public function teachingUnit()
    {
        return $this->belongsTo(TeachingUnit::class);
    }

    public static function getNote($ecueId,$studentId)
    {
        return Note::where('element_teaching_unit_id', $ecueId)->where('student_id', $studentId)->first();
    }

}
