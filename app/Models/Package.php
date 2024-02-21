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

}
