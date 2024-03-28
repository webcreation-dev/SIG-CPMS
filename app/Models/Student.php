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

    public function classroom()
    {
        return $this->belongsTo(Classroom::class);
    }

}
