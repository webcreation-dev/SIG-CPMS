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

    public static function countActionRequise($userId) {
        return Package::where('user_id', $userId)->where('level_id', 1)->count();
    }

    public static function countEnCours($userId) {
        return Package::where('user_id', $userId)->where('level_id', 2)->count();
    }

    public static function countPretEnvoi($userId) {
        return Package::where('user_id', $userId)->where('level_id', 3)->count();
    }

    public static function countEnTransit($userId) {
        return Package::where('user_id', $userId)->where('level_id', 4)->count();
    }

    public static function countLivre($userId) {
        return Package::where('user_id', $userId)->where('level_id', 5)->count();
    }
}
