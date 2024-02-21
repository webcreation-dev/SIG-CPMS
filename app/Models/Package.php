<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_package',
        'description',
        'weight',
        'price',
        'date',
        'status',
        'level_id',
        'user_id',
    ];

    const LEVEL_BADGE = [
        1 => 'warning',
        2 => 'secondary',
        3 => 'primary',
        4 => 'info',
        5 => 'success',
    ];

    public function level() {
        return $this->belongsTo(Level::class, 'level_id');
    }
}
