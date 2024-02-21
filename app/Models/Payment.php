<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'package_id',
        'payment_id',
        'payment_status',
    ];

    public function package() {
        return $this->belongsTo(Package::class, 'package_id');
    }
}
