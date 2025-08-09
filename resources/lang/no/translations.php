<?php

return [
    'pages' => [
        'title' => 'Papirkurv',
    ],
    'tables' => [
        'empty_state' => 'Ingen resirkulerbare modeller.',

        'columns' => [
            'model_id' => 'Modell-ID',
            'model_type' => 'Modelltype',
            'deleted_at' => 'Slettet',
        ],

        'actions' => [
            'view_details' => [
                'modal_heading' => 'Postdetaljer',
            ],
            'restore' => [
                'success_notification_title' => 'Modell gjenopprettet',
                'failure_notification_title' => 'Kunne ikke gjenopprette modell',
            ],
            'force_delete' => [
                'success_notification_title' => 'Modell permanent slettet',
                'failure_notification_title' => 'Kunne ikke slette modell permanent',
            ],
        ],
    ],
];
