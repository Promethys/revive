<?php

return [
    'pages' => [
        'title' => 'Koš za smeće',
    ],
    'tables' => [
        'empty_state' => 'Nemate nijedan model za oporavak.',

        'columns' => [
            'model_id' => 'ID modela',
            'model_type' => 'Tip modela',
            'deleted_at' => 'Izbrisano dana',
        ],

        'actions' => [
            'view_details' => [
                'modal_heading' => 'Detalji zapisa',
            ],
            'restore' => [
                'success_notification_title' => 'Model obnovljen',
                'failure_notification_title' => 'Obnavljanje modela nije uspjelo',
            ],
            'force_delete' => [
                'success_notification_title' => 'Model trajno obrisan',
                'failure_notification_title' => 'Trajno brisanje modela nije uspjelo',
            ],
        ],
    ],
];
