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
        $this->call([
            // RoleTableSeeder::class,
            LevelTableSeeder::class,
        ]);

        // User::create([
        //     'name' => 'Aline ADJIBI',
        //     'email' => 'directrice@cpms.com',
        //     'avatar' => 'directrice.png',
        //     'email_verified_at' => now(),
        //     'password' => bcrypt('cpms@2024*'),
        //     'remember_token' => Str::random(10),
        //     'role_id' => 1,
        // ]);

        // User::create([
        //     'name' => 'Robert ABOH',
        //     'email' => 'abohrobert6@gmail.com',
        //     'avatar' => 'avatar.png',
        //     'email_verified_at' => now(),
        //     'password' => bcrypt('de_cpms@2024*'),
        //     'remember_token' => Str::random(10),
        //     'role_id' => 2,
        // ]);

        // User::create([
        //     'name' => 'DOSSOU Pieree',
        //     'email' => 'parent@cpms.com',
        //     'avatar' => 'avatar.png',
        //     'email_verified_at' => now(),
        //     'password' => bcrypt('parent_cpms@2024*'),
        //     'remember_token' => Str::random(10),
        //     'role_id' => 3,
        // ]);

        // User::create([
        //     'name' => 'Seeder Tester',
        //     'email' => 'visiteur@cpms.com',
        //     'avatar' => 'avatar.png',
        //     'email_verified_at' => now(),
        //     'password' => bcrypt('visiteur_cpms@2024*'),
        //     'remember_token' => Str::random(10),
        //     'role_id' => 2,
        // ]);

        // Classroom::create([
        //     'name' => '1ère Année',
        //     'total_students' => 31,
        //     'total_teaching_units' => 10,
        // ]);

        // $uesData = [

        //     1 => [
        //         'ue' => [
        //             [
        //                 'name' => 'Algèbre 1',
        //                 'credit' => 6,
        //             ],
        //         ],
        //         'ecue' => [],
        //     ],

        //     2 => [
        //         'ue' => [
        //             [
        //                 'name' => 'Analyse 1',
        //                 'credit' => 6,
        //             ],
        //         ],
        //         'ecue' => [],
        //     ],

        //     3 => [
        //         'ue' => [
        //             [
        //                 'name' => 'SNI 1',
        //                 'credit' => 6,
        //             ],
        //         ],
        //         'ecue' => [
        //             [
        //                 'name' => 'Probabilité 1',
        //                 'credit' => 3,
        //             ],
        //             [
        //                 'name' => 'Informatique 1',
        //                 'credit' => 3,
        //             ],
        //         ],
        //     ],
        //     4 => [
        //         'ue' => [
        //             [
        //                 'name' => 'Physique 1A',
        //                 'credit' => 6,
        //             ],
        //         ],
        //         'ecue' => [],
        //     ],
        //     5 => [
        //         'ue' => [
        //             [
        //                 'name' => 'Physique 1B',
        //                 'credit' => 7,
        //             ],
        //         ],
        //         'ecue' => [
        //             [
        //                 'name' => 'Physique',
        //                 'credit' => 4,
        //             ],
        //             [
        //                 'name' => 'TP Physique',
        //                 'credit' => 3,
        //             ],
        //         ],
        //     ],
        //     6 => [
        //         'ue' => [
        //             [
        //                 'name' => 'Chimie 1',
        //                 'credit' => 5,
        //             ],
        //         ],
        //         'ecue' => [
        //             [
        //                 'name' => 'Chimie',
        //                 'credit' => 3,
        //             ],
        //             [
        //                 'name' => 'TP Chimie',
        //                 'credit' => 2,
        //             ],
        //         ],
        //     ],
        //     7 => [
        //         'ue' => [
        //             [
        //                 'name' => 'SII 1',
        //                 'credit' => 6,
        //             ],
        //         ],
        //         'ecue' => [
        //             [
        //                 'name' => 'SII (Analyse)',
        //                 'credit' => 4,
        //             ],
        //             [
        //                 'name' => 'TP SII',
        //                 'credit' => 2,
        //             ],
        //         ],
        //     ],
        //     8 => [
        //         'ue' => [
        //             [
        //                 'name' => 'Humanité 1A',
        //                 'credit' => 7,
        //             ],
        //         ],
        //         'ecue' => [
        //             [
        //                 'name' => 'EPS',
        //                 'credit' => 2,
        //             ],
        //             [
        //                 'name' => 'Anglais écrit',
        //                 'credit' => 3,
        //             ],
        //             [
        //                 'name' => 'Espagnol écrit',
        //                 'credit' => 2,
        //             ],
        //         ],
        //     ],
        //     9 => [
        //         'ue' => [
        //             [
        //                 'name' => 'Humanité 1B',
        //                 'credit' => 6,
        //             ],
        //         ],
        //         'ecue' => [
        //             [
        //                 'name' => 'Oral Anglais',
        //                 'credit' => 2,
        //             ],
        //             [
        //                 'name' => 'Oral Espagnol',
        //                 'credit' => 2,
        //             ],
        //             [
        //                 'name' => 'Projets',
        //                 'credit' => 2,
        //             ],
        //         ],
        //     ],
        //     10 => [
        //         'ue' => [
        //             [
        //                 'name' => 'Humanité 1C (FHS)',
        //                 'credit' => 5,
        //             ],
        //         ],
        //         'ecue' => [],
        //     ],
        // ];

        // foreach($uesData as $key => $ueData) {

        //     if(count($ueData['ecue']) == 0) {

        //         TeachingUnit::create([
        //             'name' => $ueData['ue'][0]['name'],
        //             'credit' => $ueData['ue'][0]['credit'],
        //             'status' => 'singular',
        //             'classroom_id' => 1,
        //         ]);
        //     }else {

        //         $ue = TeachingUnit::create([
        //             'name' => $ueData['ue'][0]['name'],
        //             'credit' => $ueData['ue'][0]['credit'],
        //             'status' => 'multiple',
        //             'classroom_id' => 1,
        //         ]);

        //         foreach($ueData['ecue'] as $ecueData) {
        //             ElementTeachingUnit::create([
        //                 'name' => $ecueData['name'],
        //                 'credit' => $ecueData['credit'],
        //                 'teaching_unit_id' => $ue->id,
        //             ]);
        //         }

        //     }
        // }

        // $studentsData = [
        //     [
        //         'lastname' => 'ABOU',
        //         'firstname' => 'Mardiyath Folakè',
        //         'sexe' => 'F',
        //     ],
        //     [
        //         'lastname' => 'ADEBO',
        //         'firstname' => 'Abd Sobour Adéyinka',
        //         'sexe' => 'M',
        //     ],
        //     [
        //         'lastname' => 'ADIKPONTO',
        //         'firstname' => 'Gigo Salomon',
        //         'sexe' => 'M',
        //     ],
        //     [
        //         'lastname' => 'AGBADO',
        //         'firstname' => 'Setonou Guy Pius Renaud',
        //         'sexe' => 'M',
        //     ],
        //     [
        //         'lastname' => 'AGOSSOU',
        //         'firstname' => 'Ange-Marie',
        //         'sexe' => 'M',
        //     ],
        //     [
        //         'lastname' => 'AHEHEHINNOU',
        //         'firstname' => 'Victoria Dinèle',
        //         'sexe' => 'F',
        //     ],
        //     [
        //         'lastname' => 'AHITCHEME',
        //         'firstname' => 'Sylvie Joinita B.',
        //         'sexe' => 'F',
        //     ],
        //     [
        //         'lastname' => 'AKPOUE',
        //         'firstname' => 'Jennifer Théodora D',
        //         'sexe' => 'F',
        //     ],
        //     [
        //         'lastname' => 'ALLI TIAMIYOU',
        //         'firstname' => 'Malika',
        //         'sexe' => 'F',
        //     ],
        //     [
        //         'lastname' => 'ASSOGBA',
        //         'firstname' => 'Juliette',
        //         'sexe' => 'F',
        //     ],
        //     [
        //         'lastname' => 'ATTIGNON',
        //         'firstname' => 'Marcias',
        //         'sexe' => 'M',
        //     ],
        //     [
        //         'lastname' => 'BADIROU',
        //         'firstname' => 'Mohamed Yaniss A.A.',
        //         'sexe' => 'M',
        //     ],
        //     [
        //         'lastname' => 'BOUSSARI',
        //         'firstname' => 'Adnan Ayinla',
        //         'sexe' => 'M',
        //     ],
        //     [
        //         'lastname' => 'DADAAH',
        //         'firstname' => 'Donalde Précieux K.',
        //         'sexe' => 'M',
        //     ],
        //     [
        //         'lastname' => 'DJOUA',
        //         'firstname' => 'Orlane Marelie M',
        //         'sexe' => 'F',
        //     ],
        //     [
        //         'lastname' => 'DOMINGO',
        //         'firstname' => 'Giovani Akouègnon C. M',
        //         'sexe' => 'M',
        //     ],
        //     [
        //         'lastname' => 'FAGBOHOUN',
        //         'firstname' => 'Mardochée',
        //         'sexe' => 'M',
        //     ],
        //     [
        //         'lastname' => 'FELIHO',
        //         'firstname' => 'Ange-Orphée M',
        //         'sexe' => 'M',
        //     ],
        //     [
        //         'lastname' => 'GUIDJA',
        //         'firstname' => 'Delidji Corneille',
        //         'sexe' => 'M',
        //     ],
        //     [
        //         'lastname' => 'HOUNKPATIN',
        //         'firstname' => 'Adjignon Melchior K.',
        //         'sexe' => 'M',
        //     ],
        //     [
        //         'lastname' => 'HOUNKPE',
        //         'firstname' => 'Orens Candilde',
        //         'sexe' => 'M',
        //     ],
        //     [
        //         'lastname' => 'IGUE',
        //         'firstname' => 'Halide Ichola',
        //         'sexe' => 'M',
        //     ],
        //     [
        //         'lastname' => 'KOKODE',
        //         'firstname' => 'Loîc Yoann Jossè M',
        //         'sexe' => 'M',
        //     ],
        //     [
        //         'lastname' => 'LIADY',
        //         'firstname' => 'Abdoul Manann M',
        //         'sexe' => 'M',
        //     ],
        //     [
        //         'lastname' => 'MAMA ABASS',
        //         'firstname' => 'Yazid El Sadath M',
        //         'sexe' => 'M',
        //     ],
        //     [
        //         'lastname' => 'NOUATIN',
        //         'firstname' => 'Giscard Junior M',
        //         'sexe' => 'M',
        //     ],
        //     [
        //         'lastname' => 'OKPAGNIDE',
        //         'firstname' => 'Monboladji Naïm M',
        //         'sexe' => 'M',
        //     ],
        //     [
        //         'lastname' => 'OMITOGOUN',
        //         'firstname' => 'Chèrifatou F',
        //         'sexe' => 'F',
        //     ],
        //     [
        //         'lastname' => 'PIO',
        //         'firstname' => 'Seiydinan Anli Adissa',
        //         'sexe' => 'M',
        //     ],
        //     [
        //         'lastname' => 'YAROU',
        //         'firstname' => 'Curas',
        //         'sexe' => 'M',
        //     ],
        //     [
        //         'lastname' => 'ZOCLI',
        //         'firstname' => 'Venance',
        //         'sexe' => 'M',
        //     ],
        // ];

        // foreach ($studentsData as $studentData) {

        //     Student::create([
        //         'lastname' => $studentData['lastname'],
        //         'firstname' => $studentData['firstname'],
        //         'sexe' => $studentData['sexe'],
        //         'classroom_id' => 1,
        //     ]);
        // }

        // $ues = TeachingUnit::where('status', 'singular')->get();
        // $ues->each(function ($ue) {
        //     $students = \App\Models\Student::all();

        //     $students->each(function ($student) use ($ue) {
        //         Note::factory()->count(1)->create([
        //             'student_id' => $student->id,
        //             'teaching_unit_id' => $ue->id,
        //         ]);
        //     });
        // });


        // $ecues = ElementTeachingUnit::all();
        // $ecues->each(function ($ecue) {
        //     $students = \App\Models\Student::all();

        //     $students->each(function ($student) use ($ecue) {
        //         Note::factory()->count(1)->create([
        //             'student_id' => $student->id,
        //             'element_teaching_unit_id' => $ecue->id,
        //         ]);
        //     });
        // });

        // $notes = Note::all();

        // $notes->each(function ($note) {
        //     $note->moy_inter = (($note->i1_points + $note->i2_points) * 0.2) / 2;
        //     $note->moy_dev = (($note->d1_points + $note->d2_points) * 0.3) / 2;
        //     $note->moy_ecu = ((($note->i1_points + $note->i2_points) * 0.2) / 2) + ((($note->d1_points + $note->d2_points) * 0.3) / 2) + ($note->e_points * 0.5);
        //     $note->save();
        // });

    }
}
