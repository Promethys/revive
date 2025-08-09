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
            'restore' => [
                'success_notification_title' => 'Model hersteld',
                'failure_notification_title' => 'Herstellen van model mislukt',
            ],
            'force_delete' => [
                'success_notification_title' => 'Model permanent verwijderd',
                'failure_notification_title' => 'Permanent verwijderen van model mislukt',
            ]
        ],
    ],
];
