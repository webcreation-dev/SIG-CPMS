<?php

namespace Database\Seeders;

use App\Models\Package;
use App\Models\User;
use Database\Factories\PackageFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

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

        User::create([
            'name' => 'Lazarre',
            'lastname' => 'CHOUBIYI',
            'email' => 'lynia-shop@gmail.com',
            'country' => 'France',
            'email_verified_at' => now(),
            'password' => bcrypt('lynia@2024'),
            'remember_token' => Str::random(10),
            'role_id' => 1,
        ]);
    }
}
