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
            'restore' => [
                'success_notification_title' => 'Model obnovljen',
                'failure_notification_title' => 'Obnova modela ni uspela',
            ],
            'force_delete' => [
                'success_notification_title' => 'Model trajno izbrisan',
                'failure_notification_title' => 'Trajni izbris modela ni uspel',
            ],
        ],
    ],
];
