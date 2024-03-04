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

        User::create([
            'name' => 'John DOE',
            'email' => 'visiteur@cpms.com',
            'email_verified_at' => now(),
            'password' => bcrypt('cpms@2024*'),
            'remember_token' => Str::random(10),
            // 'role_id' => 1,
        ]);

        // User::factory(3)->create();

        Classroom::create([
                'name' => '1ère Année',
                'total_students' => 32,
        ]);

        // Classroom::factory(2)->create();
        TeachingUnit::factory(7)->create();
        ElementTeachingUnit::factory(10)->create();
        // Student::factory(2)->create();

        // \App\Models\Note::factory(2)->create();

        $studentsData = [
            [
                'lastname' => 'ABOU',
                'firstname' => 'Mardiyath Folakè',
                'sexe' => 'F',
            ],
            [
                'lastname' => 'ADEBO',
                'firstname' => 'Abd Sobour Adéyinka',
                'sexe' => 'M',
            ],
            [
                'lastname' => 'ADIKPONTO',
                'firstname' => 'Gigo Salomon',
                'sexe' => 'M',
            ],
            [
                'lastname' => 'AGBADO',
                'firstname' => 'Setonou Guy Pius Renaud',
                'sexe' => 'M',
            ],
            [
                'lastname' => 'AGOSSOU',
                'firstname' => 'Ange-Marie',
                'sexe' => 'M',
            ],
            [
                'lastname' => 'AHEHEHINNOU',
                'firstname' => 'Victoria Dinèle',
                'sexe' => 'F',
            ],
            [
                'lastname' => 'AHITCHEME',
                'firstname' => 'Sylvie Joinita B.',
                'sexe' => 'F',
            ],
            [
                'lastname' => 'AKPOUE',
                'firstname' => 'Jennifer Théodora D',
                'sexe' => 'F',
            ],
            [
                'lastname' => 'ALLI TIAMIYOU',
                'firstname' => 'Malika',
                'sexe' => 'F',
            ],
            [
                'lastname' => 'ASSOGBA',
                'firstname' => 'Juliette',
                'sexe' => 'F',
            ],
            [
                'lastname' => 'ATTIGNON',
                'firstname' => 'Marcias',
                'sexe' => 'M',
            ],
            [
                'lastname' => 'BADIROU',
                'firstname' => 'Mohamed Yaniss A.A.',
                'sexe' => 'M',
            ],
            [
                'lastname' => 'BOUSSARI',
                'firstname' => 'Adnan Ayinla',
                'sexe' => 'M',
            ],
            [
                'lastname' => 'DADAAH',
                'firstname' => 'Donalde Précieux K.',
                'sexe' => 'M',
            ],
            [
                'lastname' => 'DJOUA',
                'firstname' => 'Orlane Marelie M',
                'sexe' => 'F',
            ],
            [
                'lastname' => 'DOMINGO',
                'firstname' => 'Giovani Akouègnon C. M',
                'sexe' => 'M',
            ],
            [
                'lastname' => 'FAGBOHOUN',
                'firstname' => 'Mardochée',
                'sexe' => 'M',
            ],
            [
                'lastname' => 'FELIHO',
                'firstname' => 'Ange-Orphée M',
                'sexe' => 'M',
            ],
            [
                'lastname' => 'GUIDJA',
                'firstname' => 'Delidji Corneille',
                'sexe' => 'M',
            ],
            [
                'lastname' => 'HOUNKPATIN',
                'firstname' => 'Adjignon Melchior K.',
                'sexe' => 'M',
            ],
            [
                'lastname' => 'HOUNKPE',
                'firstname' => 'Orens Candilde',
                'sexe' => 'M',
            ],
            [
                'lastname' => 'IGUE',
                'firstname' => 'Halide Ichola',
                'sexe' => 'M',
            ],
            [
                'lastname' => 'KOKODE',
                'firstname' => 'Loîc Yoann Jossè M',
                'sexe' => 'M',
            ],
            [
                'lastname' => 'LIADY',
                'firstname' => 'Abdoul Manann M',
                'sexe' => 'M',
            ],
            [
                'lastname' => 'MAMA ABASS',
                'firstname' => 'Yazid El Sadath M',
                'sexe' => 'M',
            ],
            [
                'lastname' => 'NOUATIN',
                'firstname' => 'Giscard Junior M',
                'sexe' => 'M',
            ],
            [
                'lastname' => 'OKPAGNIDE',
                'firstname' => 'Monboladji Naïm M',
                'sexe' => 'M',
            ],
            [
                'lastname' => 'OMITOGOUN',
                'firstname' => 'Chèrifatou F',
                'sexe' => 'F',
            ],
            [
                'lastname' => 'PIO',
                'firstname' => 'Seiydinan Anli Adissa',
                'sexe' => 'M',
            ],
            [
                'lastname' => 'RAIMI',
                'firstname' => 'Sadjidath Bidémi',
                'sexe' => 'F',
            ],
            [
                'lastname' => 'YAROU',
                'firstname' => 'Curas',
                'sexe' => 'M',
            ],
            [
                'lastname' => 'ZOCLI',
                'firstname' => 'Venance',
                'sexe' => 'M',
            ],
        ];

        foreach ($studentsData as $studentData) {

            Student::create([
                'lastname' => $studentData['lastname'],
                'firstname' => $studentData['firstname'],
                'sexe' => $studentData['sexe'],
                'classroom_id' => 1,
            ]);
        }

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
