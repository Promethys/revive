<?php

return [
    'pages' => [
        'title' => 'Coș de reciclare',
    ],
    'tables' => [
        'empty_state' => 'Nu există modele reciclabile.',

        'columns' => [
            'model_id' => 'ID Model',
            'model_type' => 'Tip Model',
            'deleted_at' => 'Șters la',
        ],

        'actions' => [
            'view_details' => [
                'modal_heading' => 'Detalii înregistrare',
            ],
            'restore' => [
                'success_notification_title' => 'Model restaurat',
                'failure_notification_title' => 'Restaurarea modelului a eșuat',
            ],
            'force_delete' => [
                'success_notification_title' => 'Model șters definitiv',
                'failure_notification_title' => 'Ștergerea definitivă a modelului a eșuat',
            ],
        ],
    ],
];
