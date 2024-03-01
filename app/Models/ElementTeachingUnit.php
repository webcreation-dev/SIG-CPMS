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

}
