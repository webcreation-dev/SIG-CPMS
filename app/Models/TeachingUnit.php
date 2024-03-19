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
        "SIN 1" => "Sciences Numériques de l'Ingénieur 1",
        "SII 1" => "Sciences Industrielles de l'Ingénieur 1",
        "Humanité 1C (FHS)" => "Humanité 1C (Formation Humaine et Sociale)"
    ];

}
