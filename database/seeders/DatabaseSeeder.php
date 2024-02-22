<?php

namespace Database\Seeders;

use App\Models\Package;
use App\Models\User;
use Database\Factories\PackageFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RoleTableSeeder::class,
            LevelTableSeeder::class,
        ]);

        User::factory(3)->create();
        Package::factory(20)->create();
    }
}
