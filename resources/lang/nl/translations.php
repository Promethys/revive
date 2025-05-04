<?php

return [
    'pages' => [
        'title' => 'Prullenbak',
    ],
    'tables' => [
        'empty_state' => 'Geen recyclebare modellen beschikbaar.',

        'columns' => [
            'model_id' => 'Model ID',
            'model_type' => 'Modeltype',
            'deleted_at' => 'Verwijderd op',
        ],

        'actions' => [
            'view_details' => [
                'modal_heading' => 'Recorddetails',
            ],
        ]
    ]
];
