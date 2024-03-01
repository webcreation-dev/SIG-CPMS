<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    protected $fillable = [
        'points',
        'control_type',
        'student_id',
        'element_teaching_unit_id',
        'teaching_unit_id',
    ];

    const CONTROL_TYPES = [
        'I1',
        'I2',
        'D1',
        'D2',
        'E',
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
}
