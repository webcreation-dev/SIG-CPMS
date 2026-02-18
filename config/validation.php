<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Validation Thresholds by Preparation Level
    |--------------------------------------------------------------------------
    |
    | These thresholds define the minimum required averages for semester
    | validation at each preparation level.
    |
    | - moyenne_generale: Minimum overall semester average required
    | - moyenne_scientifique: Minimum scientific UEs average required
    |
    */
    'thresholds' => [
        'prepa1' => [
            'moyenne_generale' => 12,
            'min_scientifique' => 10,
        ],
        'prepa2' => [
            'moyenne_generale' => 12,
            'min_scientifique' => 8,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Scientific UEs Configuration
    |--------------------------------------------------------------------------
    |
    | Lists all scientific UEs by semester. For composite UEs (status = 'multiple'),
    | marking the parent UE automatically includes all child ECUEs as scientific.
    |
    | Note: UE names must match EXACTLY the names in the teaching_units table.
    |
    */
    'scientific_ues' => [
        'semester1' => [
            'Algèbre 1',
            'Analyse 1',
            'SNI 1',
            'Probabilité 1',
            'Informatique 1',
            'Physique 1A',
            'Physique 1B',
            'Chimie 1',
            'SII 1',
        ],
        'semester2' => [
            'Algèbre 2',
            'Analyse 2',
            'SNI 2',
            'Probabilité 2',
            'Informatique 2',
            'Physique 2A',
            'Physique 2B',
            'Chimie 2',
            'SII 2',
        ],
        'semester3' => [
            'Algèbre 3',
            'Analyse 3',
            'SNI 3',
            'Probabilité 3',
            'Informatique 3',
            'Physique 3A',
            'Physique 3B',
            'Chimie 3',
            'SII 3',
        ],
        'semester4' => [
            'Algèbre 4',
            'Analyse 4',
            'SNI 4',
            'Probabilité 4',
            'Informatique 4',
            'Physique 4A',
            'Physique 4B',
            'Chimie 4',
            'SII 4',
        ],
    ],
];
