<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    use HasFactory;

    protected $fillable = ['type', 'total_students', 'total_teaching_units','year'];

    const TYPES = [
        'prepa1' => 'Prépa 1',
        'prepa2' => 'Prépa 2',
    ];
    const TYPES_VALUES = [
        'prepa1' => '1e Année',
        'prepa2' => '2e Année',
    ];

    public static function list() {
        $classrooms = self::all()->map(function ($classroom) {
            $year = date('Y', strtotime($classroom->year)); // Extraire l'année de la date
            $nextYear = $year + 1;
            $classroom->name = $classroom->type . ' | ' . $year . '-' . $nextYear;
            return $classroom;
        });

        return $classrooms;
    }
}
