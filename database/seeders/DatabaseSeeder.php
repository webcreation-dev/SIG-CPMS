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
        //     'type' => 'prepa1',
        //     'total_students' => 31,
        //     'total_teaching_units' => 10,
        //     'year' => '2023-07-01',
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
        //             'type' => 'prepa1',
        //             'semester' => 'semester1',
        //         ]);
        //     }else {

        //         $ue = TeachingUnit::create([
        //             'name' => $ueData['ue'][0]['name'],
        //             'credit' => $ueData['ue'][0]['credit'],
        //             'status' => 'multiple',
        //             'type' => 'prepa1',
        //             'semester' => 'semester1',
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

        /*$this->call([
            LevelTableSeeder::class,
        ]);*/
        
        /*$studentsData1 = [
            [
                'lastname' => 'ABE-CODJO',
                'firstname' => 'Waliyath Oshuntayo Bamilayo A',
                'sexe' => 'F',
                'birthplace' => 'Cotonou',
                'birthday' => '15/03/2007',
            ],
            [
                'lastname' => 'ACODJI VODOUHE',
                'firstname' => 'Béni Sètondji',
                'sexe' => 'M',
                'birthplace' => 'Cotonou',
                'birthday' => '28/03/2007',
            ],
            [
                'lastname' => 'AGNILA',
                'firstname' => 'Andilath Modjissola',
                'sexe' => 'F',
                'birthplace' => 'Cotonou',
                'birthday' => '22/01/2007',
            ],
            [
                'lastname' => 'AHEHEHINNOU',
                'firstname' => 'Charneille Arlette',
                'sexe' => 'F',
                'birthplace' => 'Cotonou',
                'birthday' => '27/04/2006',
            ],
            [
                'lastname' => 'AKOGBETO',
                'firstname' => 'Mathilde Grace',
                'sexe' => 'F',
                'birthplace' => 'Cotonou',
                'birthday' => '21/09/2006',
            ],
            [
                'lastname' => 'AKPOUE',
                'firstname' => 'Jennifer Théodora',
                'sexe' => 'F',
                'birthplace' => 'Cotonou',
                'birthday' => '09/11/2005',
            ],
            [
                'lastname' => 'ATEKODJINA',
                'firstname' => 'Odette Ariana',
                'sexe' => 'F',
                'birthplace' => 'Tossota',
                'birthday' => '11/09/2007',
            ],
            [
                'lastname' => 'AYEDEGUE',
                'firstname' => 'Wilson Aldric',
                'sexe' => 'M',
                'birthplace' => 'Cotonou',
                'birthday' => '06/07/2006',
            ],
            [
                'lastname' => 'CAPO-CHICHI',
                'firstname' => 'Houehanou Gilchrist',
                'sexe' => 'M',
                'birthplace' => 'Porto-Novo',
                'birthday' => '30/08/2007',
            ],
            [
                'lastname' => 'CHADARE',
                'firstname' => 'Koladé Wilson',
                'sexe' => 'M',
                'birthplace' => 'Porto-Novo',
                'birthday' => '12/07/2006',
            ],
            [
                'lastname' => 'DATO',
                'firstname' => 'Pierrick Ubald',
                'sexe' => 'M',
                'birthplace' => 'Cotonou',
                'birthday' => '03/02/2007',
            ],
            [
                'lastname' => 'DJOGBENOU',
                'firstname' => 'FAOLA Fellipet',
                'sexe' => 'M',
                'birthplace' => 'Cotonou',
                'birthday' => '13/05/2006',
            ],
            [
                'lastname' => 'DOMINGO',
                'firstname' => 'Romario Roël',
                'sexe' => 'M',
                'birthplace' => 'Cotonou',
                'birthday' => '13/05/2006',
            ],
            [
                'lastname' => 'DOSSOU',
                'firstname' => 'Orlanne Prescillia Anne-Lyse',
                'sexe' => 'F',
                'birthplace' => 'Cotonou',
                'birthday' => '05/02/2008',
            ],
            [
                'lastname' => 'DOSSOU-GOUCHOLA',
                'firstname' => 'Oré Mélika',
                'sexe' => 'F',
                'birthplace' => 'Cotonou',
                'birthday' => '13/05/2007',
            ],
            [
                'lastname' => 'GBAGUIDI BAHINNOU',
                'firstname' => 'Marcelle Elsie',
                'sexe' => 'F',
                'birthplace' => 'Cotonou',
                'birthday' => '16/01/2007',
            ],
            [
                'lastname' => 'GBESSOU',
                'firstname' => 'Okpèyèmi Merveille Florence',
                'sexe' => 'F',
                'birthplace' => 'Porto-Novo',
                'birthday' => '20/06/2007',
            ],
            [
                'lastname' => 'GNONLONFOUN',
                'firstname' => 'Esther Micheline',
                'sexe' => 'F',
                'birthplace' => 'Adjarra',
                'birthday' => '21/03/2008',
            ],
            [
                'lastname' => 'HOUNDONOUGBO',
                'firstname' => 'Freddy',
                'sexe' => 'M',
                'birthplace' => 'Cotonou',
                'birthday' => '30/03/2008',
            ],
            [
                'lastname' => 'HOUNKPE',
                'firstname' => 'Chrysantus',
                'sexe' => 'M',
                'birthplace' => 'Cotonou',
                'birthday' => '22/10/2007',
            ],
            [
                'lastname' => 'HOUNSONLON',
                'firstname' => 'Sèwèdo Casstanno',
                'sexe' => 'M',
                'birthplace' => 'Cotonou',
                'birthday' => '19/09/2005',
            ],
            [
                'lastname' => 'KPANOU',
                'firstname' => 'Houefa Leilath',
                'sexe' => 'F',
                'birthplace' => 'Cotonou',
                'birthday' => '17/04/2008',
            ],
            [
                'lastname' => 'LANIGNAN',
                'firstname' => 'Akankè Amidath',
                'sexe' => 'F',
                'birthplace' => 'Cotonou',
                'birthday' => '23/09/2004',
            ],
            [
                'lastname' => 'LANIGNAN ',
                'firstname' => 'Boussari Fadil',
                'sexe' => 'M',
                'birthplace' => 'Porto-Novo',
                'birthday' => '04/04/2004',
            ],
            [
                'lastname' => 'LOKOSSOU',
                'firstname' => 'Cédric Franzt',
                'sexe' => 'M',
                'birthplace' => 'Cotonou',
                'birthday' => '13/09/2007',
            ],
            [
                'lastname' => 'MEGNIGBETO',
                'firstname' => 'Airy Alan',
                'sexe' => 'M',
                'birthplace' => 'Cotonou',
                'birthday' => '03/12/2005',
            ],
            [
                'lastname' => 'PADONOU',
                'firstname' => 'Mikael Dègnon',
                'sexe' => 'M',
                'birthplace' => 'Cotonou',
                'birthday' => '16/10/2007',
            ],
            [
                'lastname' => 'SADIKOU',
                'firstname' => 'Aqmar Ichola',
                'sexe' => 'M',
                'birthplace' => 'Porto-Novo',
                'birthday' => '05/06/2006',
            ],
            [
                'lastname' => 'SESSOU',
                'firstname' => 'Marlaine Simone',
                'sexe' => 'F',
                'birthplace' => 'Porto-Novo',
                'birthday' => '07/04/2007',
            ],
            [
                'lastname' => 'TEVOEDJRE',
                'firstname' => 'Mahugnon Axel',
                'sexe' => 'M',
                'birthplace' => 'Cotonou',
                'birthday' => '15/11/2007',
            ],
            [
                'lastname' => 'TIDJANI',
                'firstname' => 'Naofal Atanda Akorede',
                'sexe' => '',
                'birthplace' => '18/03/2005',
                'birthday' => 'Porto-Novo',
            ],
            [
                'lastname' => 'TOHOUEGNON',
                'firstname' => 'Gaêl',
                'sexe' => 'M',
                'birthplace' => 'Comè',
                'birthday' => '16/12/2005',
            ],
            [
                'lastname' => 'WABI',
                'firstname' => 'Mounzirou Agnidé',
                'sexe' => 'M',
                'birthplace' => 'Porto-Novo',
                'birthday' => '18/12/2003',
            ],
            [
                'lastname' => 'ZOCLI',
                'firstname' => 'Antonella Chloé Prévalie',
                'sexe' => 'F',
                'birthplace' => 'Brazzaville',
                'birthday' => '15/10/2006',
            ],
        ];

        $studentsData2 = [
            [
                'lastname' => 'ABOU',
                'firstname' => 'Mardiyath Folakê Mobisola',
                'sexe' => 'F',
                'birthplace' => 'Porto-Novo',
                'birthday' => '30/07/2006',
            ],
            [
                'lastname' => 'ADEBO',
                'firstname' => 'Abd Sobour Adéyèmi Ayinla',
                'sexe' => 'M',
                'birthplace' => 'Porto-Novo',
                'birthday' => '27/102005',
            ],
            [
                'lastname' => 'AGOSSOU',
                'firstname' => 'Ange-Marie',
                'sexe' => 'M',
                'birthplace' => 'Cotonou',
                'birthday' => '07/12/2006',
            ],
            [
                'lastname' => 'AHEHEHINNOU',
                'firstname' => 'Victoria Dinèle',
                'sexe' => 'F',
                'birthplace' => 'Cotonou',
                'birthday' => '24/03/2005',
            ],
            [
                'lastname' => 'AHITCHEME',
                'firstname' => 'Sylvie Joinita',
                'sexe' => 'F',
                'birthplace' => 'Cotonou',
                'birthday' => '05/11/2006',
            ],
            [
                'lastname' => 'ALLI TIAMIYOU',
                'firstname' => 'Malika Arikè Modjissola',
                'sexe' => 'F',
                'birthplace' => 'Cotonou',
                'birthday' => '19/12/2005',
            ],
            [
                'lastname' => 'ASSOGBA',
                'firstname' => 'Juliette',
                'sexe' => 'F',
                'birthplace' => 'Doumè',
                'birthday' => '07/04/2005',
            ],
            [
                'lastname' => 'ATTIGNON',
                'firstname' => 'Marcias',
                'sexe' => '',
                'birthplace' => 'Cotonou',
                'birthday' => '31/01/2006',
            ],
            [
                'lastname' => 'BADIROU',
                'firstname' => 'Mohamed Yaniss',
                'sexe' => 'M',
                'birthplace' => 'Porto-Novo',
                'birthday' => '26/03/2006',
            ],
            [
                'lastname' => 'BOUSSARI',
                'firstname' => 'Adnan Ayinla',
                'sexe' => 'M',
                'birthplace' => 'Cotonou',
                'birthday' => '30/06/2003',
            ],
            [
                'lastname' => 'DADDAH',
                'firstname' => 'Donald Précieux',
                'sexe' => 'M',
                'birthplace' => 'Cotonou',
                'birthday' => '10/04/2007',
            ],
            [
                'lastname' => 'DJOUA',
                'firstname' => 'Orlane Marelie',
                'sexe' => 'M',
                'birthplace' => 'Cotonou',
                'birthday' => '17/09/2006',
            ],
            [
                'lastname' => 'DOMINGO',
                'firstname' => 'Giovani Akouègnon',
                'sexe' => 'M',
                'birthplace' => 'Cotonou',
                'birthday' => '04/12/2006',
            ],
            [
                'lastname' => 'FAGBOHOUN',
                'firstname' => 'Mardochée',
                'sexe' => 'M',
                'birthplace' => 'Cotonou',
                'birthday' => '08/12/2006',
            ],
            [
                'lastname' => 'FELIHO',
                'firstname' => 'Ange-Orphée Sètondji',
                'sexe' => 'M',
                'birthplace' => 'Cotonou',
                'birthday' => '28/09/2005',
            ],
            [
                'lastname' => 'GUIDJA',
                'firstname' => 'Delidji Corneille',
                'sexe' => 'M',
                'birthplace' => 'Cotonou',
                'birthday' => '14/11/2006',
            ],
            [
                'lastname' => 'HOUNKPATIN',
                'firstname' => 'Adjignon Melchior',
                'sexe' => 'M',
                'birthplace' => 'Lokossa',
                'birthday' => '01/08/2006',
            ],
            [
                'lastname' => 'HOUNKPE',
                'firstname' => 'Orens candilde',
                'sexe' => 'M',
                'birthplace' => 'Cotonou',
                'birthday' => '12/03/2004',
            ],
            [
                'lastname' => 'IGUE',
                'firstname' => '',
                'sexe' => 'M',
                'birthplace' => 'Pointe-Noire',
                'birthday' => 'Halide Ichola',
            ],
            [
                'lastname' => 'KOKODE',
                'firstname' => 'Loïc Yoann Jossè',
                'sexe' => 'M',
                'birthplace' => 'Cotonou',
                'birthday' => '27/11/2005',
            ],
            [
                'lastname' => 'LIADY',
                'firstname' => 'Abdoul Manann Adissa',
                'sexe' => 'M',
                'birthplace' => 'Porto-Novo',
                'birthday' => '05/04/2004',
            ],
            [
                'lastname' => 'MAMA',
                'firstname' => 'ABAAS Yazid',
                'sexe' => 'M',
                'birthplace' => 'Parakou',
                'birthday' => '26/09/2004',
            ],
            [
                'lastname' => 'NOUATIN',
                'firstname' => 'Giscard Junior',
                'sexe' => 'M',
                'birthplace' => 'Cotonou',
                'birthday' => '02/06/2006',
            ],
            [
                'lastname' => 'OKPAGNIDE',
                'firstname' => 'Monboladji Naïm',
                'sexe' => 'M',
                'birthplace' => 'Abomey Calavi',
                'birthday' => '31/12/2005',
            ],
            [
                'lastname' => 'OMITOGOUN',
                'firstname' => 'Chèrifatou Yêmi',
                'sexe' => 'F',
                'birthplace' => 'Porto-Novo',
                'birthday' => '03/11/2000',
            ],
            [
                'lastname' => 'PIO',
                'firstname' => 'Seiydinan Anli Adissa Olapeju',
                'sexe' => 'M',
                'birthplace' => 'Cotonou',
                'birthday' => '21/08/2005',
            ],
            [
                'lastname' => 'ZOCLI',
                'firstname' => 'Venance',
                'sexe' => 'M',
                'birthplace' => 'Godomey-Togoudo',
                'birthday' => '12/10/2006',
            ],
        ];


        foreach ($studentsData1 as $studentData) {

            Student::create([
                'lastname' => $studentData['lastname'],
                'firstname' => $studentData['firstname'],
                'sexe' => $studentData['sexe'],
                'birthday' => $studentData['birthday'],
                'birthplace' => $studentData['birthplace'],
                'classroom_id' => 2,
            ]);
        }

        foreach ($studentsData2 as $studentData) {

            Student::create([
                'lastname' => $studentData['lastname'],
                'firstname' => $studentData['firstname'],
                'sexe' => $studentData['sexe'],
                'birthday' => $studentData['birthday'],
                'birthplace' => $studentData['birthplace'],
                'classroom_id' => 3,
            ]);
        }*/

    }
}
