<?php

namespace Database\Seeders;

use App\Models\ElementTeachingUnit;
use App\Models\Level;
use App\Models\TeachingUnit;
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
        $uesData2 = [

            1 => [
                'ue' => [
                    [
                        'name' => 'Algèbre 2',
                        'credit' => 6,
                    ],
                ],
                'ecue' => [],
            ],

            2 => [
                'ue' => [
                    [
                        'name' => 'Analyse 2',
                        'credit' => 6,
                    ],
                ],
                'ecue' => [],
            ],

            3 => [
                'ue' => [
                    [
                        'name' => 'SNI 2',
                        'credit' => 6,
                    ],
                ],
                'ecue' => [
                    [
                        'name' => 'Probabilité 2',
                        'credit' => 3,
                    ],
                    [
                        'name' => 'Informatique 2',
                        'credit' => 3,
                    ],
                ],
            ],
            4 => [
                'ue' => [
                    [
                        'name' => 'Physique 2A',
                        'credit' => 6,
                    ],
                ],
                'ecue' => [],
            ],
            5 => [
                'ue' => [
                    [
                        'name' => 'Physique 2B',
                        'credit' => 7,
                    ],
                ],
                'ecue' => [
                    [
                        'name' => 'Physique',
                        'credit' => 4,
                    ],
                    [
                        'name' => 'TP Physique',
                        'credit' => 3,
                    ],
                ],
            ],
            6 => [
                'ue' => [
                    [
                        'name' => 'Chimie 2',
                        'credit' => 5,
                    ],
                ],
                'ecue' => [
                    [
                        'name' => 'Chimie',
                        'credit' => 3,
                    ],
                    [
                        'name' => 'TP Chimie',
                        'credit' => 2,
                    ],
                ],
            ],
            7 => [
                'ue' => [
                    [
                        'name' => 'SII 2',
                        'credit' => 6,
                    ],
                ],
                'ecue' => [
                    [
                        'name' => 'SII (Analyse)',
                        'credit' => 4,
                    ],
                    [
                        'name' => 'TP SII',
                        'credit' => 2,
                    ],
                ],
            ],
            8 => [
                'ue' => [
                    [
                        'name' => 'Humanité 2A',
                        'credit' => 7,
                    ],
                ],
                'ecue' => [
                    [
                        'name' => 'EPS',
                        'credit' => 2,
                    ],
                    [
                        'name' => 'Anglais écrit',
                        'credit' => 3,
                    ],
                    [
                        'name' => 'Espagnol écrit',
                        'credit' => 2,
                    ],
                ],
            ],
            9 => [
                'ue' => [
                    [
                        'name' => 'Humanité 2B',
                        'credit' => 6,
                    ],
                ],
                'ecue' => [
                    [
                        'name' => 'Oral Anglais',
                        'credit' => 2,
                    ],
                    [
                        'name' => 'Oral Espagnol',
                        'credit' => 2,
                    ],
                    [
                        'name' => 'Projets',
                        'credit' => 2,
                    ],
                ],
            ],
            10 => [
                'ue' => [
                    [
                        'name' => 'Humanité 2C (FHS)',
                        'credit' => 5,
                    ],
                ],
                'ecue' => [],
            ],
        ];

        $uesData3 = [

            1 => [
                'ue' => [
                    [
                        'name' => 'Algèbre 3',
                        'credit' => 5,
                    ],
                ],
                'ecue' => [],
            ],

            2 => [
                'ue' => [
                    [
                        'name' => 'Analyse 3',
                        'credit' => 6,
                    ],
                ],
                'ecue' => [],
            ],

            3 => [
                'ue' => [
                    [
                        'name' => 'SNI 3',
                        'credit' => 4,
                    ],
                ],
                'ecue' => [
                    [
                        'name' => 'Probabilité 3',
                        'credit' => 2,
                    ],
                    [
                        'name' => 'Informatique 3',
                        'credit' => 2,
                    ],
                ],
            ],
            4 => [
                'ue' => [
                    [
                        'name' => 'Physique 3A',
                        'credit' => 7,
                    ],
                ],
                'ecue' => [],
            ],
            5 => [
                'ue' => [
                    [
                        'name' => 'Physique 3B',
                        'credit' => 5,
                    ],
                ],
                'ecue' => [
                    [
                        'name' => 'Physique',
                        'credit' => 3,
                    ],
                    [
                        'name' => 'TP Physique',
                        'credit' => 2,
                    ],
                ],
            ],
            6 => [
                'ue' => [
                    [
                        'name' => 'Chimie 3',
                        'credit' => 7,
                    ],
                ],
                'ecue' => [
                    [
                        'name' => 'Chimie',
                        'credit' => 5,
                    ],
                    [
                        'name' => 'TP Chimie',
                        'credit' => 2,
                    ],
                ],
            ],
            7 => [
                'ue' => [
                    [
                        'name' => 'SII 3',
                        'credit' => 6,
                    ],
                ],
                'ecue' => [
                    [
                        'name' => 'SII (Analyse)',
                        'credit' => 4,
                    ],
                    [
                        'name' => 'TP SII',
                        'credit' => 2,
                    ],
                ],
            ],
            8 => [
                'ue' => [
                    [
                        'name' => 'Humanité 3A',
                        'credit' => 7,
                    ],
                ],
                'ecue' => [
                    [
                        'name' => 'EPS',
                        'credit' => 2,
                    ],
                    [
                        'name' => 'Anglais écrit',
                        'credit' => 3,
                    ],
                    [
                        'name' => 'Espagnol écrit',
                        'credit' => 2,
                    ],
                ],
            ],
            9 => [
                'ue' => [
                    [
                        'name' => 'Humanité 3B',
                        'credit' => 8,
                    ],
                ],
                'ecue' => [
                    [
                        'name' => 'Oral Anglais',
                        'credit' => 2,
                    ],
                    [
                        'name' => 'Oral Espagnol',
                        'credit' => 2,
                    ],
                    [
                        'name' => 'Projets',
                        'credit' => 4,
                    ],
                ],
            ],
            10 => [
                'ue' => [
                    [
                        'name' => 'Humanité 3C (FHS)',
                        'credit' => 5,
                    ],
                ],
                'ecue' => [],
            ],
        ];

        $uesData4 = [

            1 => [
                'ue' => [
                    [
                        'name' => 'Algèbre 4',
                        'credit' => 5,
                    ],
                ],
                'ecue' => [],
            ],

            2 => [
                'ue' => [
                    [
                        'name' => 'Analyse 4',
                        'credit' => 6,
                    ],
                ],
                'ecue' => [],
            ],

            3 => [
                'ue' => [
                    [
                        'name' => 'SNI 4',
                        'credit' => 4,
                    ],
                ],
                'ecue' => [
                    [
                        'name' => 'Probabilité 4',
                        'credit' => 2,
                    ],
                    [
                        'name' => 'Informatique 4',
                        'credit' => 2,
                    ],
                ],
            ],
            4 => [
                'ue' => [
                    [
                        'name' => 'Physique 4A',
                        'credit' => 7,
                    ],
                ],
                'ecue' => [],
            ],
            5 => [
                'ue' => [
                    [
                        'name' => 'Physique 4B',
                        'credit' => 5,
                    ],
                ],
                'ecue' => [
                    [
                        'name' => 'Physique',
                        'credit' => 3,
                    ],
                    [
                        'name' => 'TP Physique',
                        'credit' => 3,
                    ],
                ],
            ],
            6 => [
                'ue' => [
                    [
                        'name' => 'Chimie 4',
                        'credit' => 7,
                    ],
                ],
                'ecue' => [
                    [
                        'name' => 'Chimie',
                        'credit' => 5,
                    ],
                    [
                        'name' => 'TP Chimie',
                        'credit' => 2,
                    ],
                ],
            ],
            7 => [
                'ue' => [
                    [
                        'name' => 'SII 4',
                        'credit' => 6,
                    ],
                ],
                'ecue' => [
                    [
                        'name' => 'SII (Analyse)',
                        'credit' => 4,
                    ],
                    [
                        'name' => 'TP SII',
                        'credit' => 2,
                    ],
                ],
            ],
            8 => [
                'ue' => [
                    [
                        'name' => 'Humanité 4A',
                        'credit' => 7,
                    ],
                ],
                'ecue' => [
                    [
                        'name' => 'EPS',
                        'credit' => 2,
                    ],
                    [
                        'name' => 'Anglais écrit',
                        'credit' => 3,
                    ],
                    [
                        'name' => 'Espagnol écrit',
                        'credit' => 2,
                    ],
                ],
            ],
            9 => [
                'ue' => [
                    [
                        'name' => 'Humanité 4B',
                        'credit' => 8,
                    ],
                ],
                'ecue' => [
                    [
                        'name' => 'Oral Anglais',
                        'credit' => 2,
                    ],
                    [
                        'name' => 'Oral Espagnol',
                        'credit' => 2,
                    ],
                    [
                        'name' => 'Projets',
                        'credit' => 4,
                    ],
                ],
            ],
            10 => [
                'ue' => [
                    [
                        'name' => 'Humanité 4C (FHS)',
                        'credit' => 5,
                    ],
                ],
                'ecue' => [],
            ],
        ];

        $uesData = [$uesData2, $uesData3, $uesData4];

        foreach($uesData as $item ) {
            foreach($item as $key => $ueData) {

                if(count($ueData['ecue']) == 0) {

                    TeachingUnit::create([
                        'name' => $ueData['ue'][0]['name'],
                        'credit' => $ueData['ue'][0]['credit'],
                        'status' => 'singular',
                        'classroom_id' => 1,
                    ]);
                }else {

                    $ue = TeachingUnit::create([
                        'name' => $ueData['ue'][0]['name'],
                        'credit' => $ueData['ue'][0]['credit'],
                        'status' => 'multiple',
                        'classroom_id' => 1,
                    ]);

                    foreach($ueData['ecue'] as $ecueData) {
                        ElementTeachingUnit::create([
                            'name' => $ecueData['name'],
                            'credit' => $ecueData['credit'],
                            'teaching_unit_id' => $ue->id,
                        ]);
                    }

                }
            }
        }

    }
}
