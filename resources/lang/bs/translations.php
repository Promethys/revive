<?php

return [
    'pages' => [
        'title' => 'Kanta za otpad',
    ],
    'tables' => [
        'empty_state' => 'Nemate nijedan model za oporavak.',

        'columns' => [
            'model_id' => 'ID modela',
            'model_type' => 'Tip modela',
            'deleted_at' => 'Izbrisano na',
        ],

        'actions' => [
            'view_details' => [
                'modal_heading' => 'Detalji zapisa',
            ],
            'restore' => [
                'success_notification_title' => 'Model je obnovljen',
                'failure_notification_title' => 'Neuspjeh pri obnavljanju modela',
            ],
            'force_delete' => [
                'success_notification_title' => 'Model je trajno obrisan',
                'failure_notification_title' => 'Neuspjeh pri trajnom brisanju modela',
            ]
        ],
    ],
];
