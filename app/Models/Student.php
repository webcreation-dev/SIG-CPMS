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
        'parent_id'
    ];

    public function classroom()
    {
        return $this->belongsTo(Classroom::class);
    }

}
