<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'lastname',
        'firstname',
        'sexe',
        'birthday',
        'birthplace',
        'classroom_id',
        'parent_id',
        'total_hours_absence',
        'total_hours_excused_absence',
        'total_hours_unexcused_absence',
    ];

    const PREPA_SEMESTER = [
        'prepa1' => ['semester1', 'semester2'],
        'prepa2' => ['semester3', 'semester4'],
    ];

    const SEMESTER_VALUES = [
        "semester1" => "S1",
        "semester2" => "S2",
        "semester3" => "S3",
        "semester4" => "S4",
    ];

    public function classroom()
    {
        return $this->belongsTo(Classroom::class);
    }

}
