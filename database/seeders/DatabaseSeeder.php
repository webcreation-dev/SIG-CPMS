<?php

namespace Database\Seeders;

use App\Models\Classroom;
use App\Models\ElementTeachingUnit;
use App\Models\Note;
use App\Models\Package;
use App\Models\Student;
use App\Models\TeachingUnit;
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
        // $this->call([
        //     RoleTableSeeder::class,
        // ]);

        User::create([
            'name' => 'Aline ADJIBI',
            'email' => 'contact@cpms.com',
            'email_verified_at' => now(),
            'password' => bcrypt('cpms@2024*'),
            'remember_token' => Str::random(10),
            // 'role_id' => 1,
        ]);

        // User::factory(3)->create();

        Classroom::factory(2)->create();
        TeachingUnit::factory(2)->create();
        ElementTeachingUnit::factory(4)->create();
        Student::factory(2)->create();

        // \App\Models\Note::factory(2)->create();

        $ues = TeachingUnit::where('status', 'singular')->get();
        $ues->each(function ($ue) {
            $students = \App\Models\Student::all();

            $students->each(function ($student) use ($ue) {
                Note::factory()->count(1)->create([
                    'student_id' => $student->id,
                    'teaching_unit_id' => $ue->id,
                ]);
            });
        });

        $ecues = ElementTeachingUnit::all();
        $ecues->each(function ($ecue) {
            $students = \App\Models\Student::all();

            $students->each(function ($student) use ($ecue) {
                Note::factory()->count(1)->create([
                    'student_id' => $student->id,
                    'element_teaching_unit_id' => $ecue->id,
                ]);
            });
        });

    }
}
