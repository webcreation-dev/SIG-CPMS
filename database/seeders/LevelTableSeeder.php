<?php

namespace Database\Seeders;

use App\Models\Level;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LevelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Level::create([
            'name' => ' Action Requise',
            'badge' => 'warning',
        ]);

        Level::create([
            'name' => 'En Cours',
            'badge' => 'secondary',
        ]);

        Level::create([
            'name' => 'Prêt À Envoyer',
            'badge' => 'primary',
        ]);

        Level::create([
            'name' => 'En Transit',
            'badge' => 'info',
        ]);

        Level::create([
            'name' => 'Livré',
            'badge' => 'success',
        ]);

    }
}
