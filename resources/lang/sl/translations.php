<?php

return [
    'pages' => [
        'title' => 'Koš',
    ],
    'tables' => [
        'empty_state' => 'Ni reciklirnih modelov.',

        'columns' => [
            'model_id' => 'ID modela',
            'model_type' => 'Tip modela',
            'deleted_at' => 'Izbrisano',
        ],

        'actions' => [
            'view_details' => [
                'modal_heading' => 'Podrobnosti zapisa',
            ],
        ]
    ]
];
