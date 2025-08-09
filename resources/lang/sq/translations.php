<?php

return [
    'pages' => [
        'title' => 'Koshi i riciklimit',
    ],
    'tables' => [
        'empty_state' => 'Nuk ka modele të riciklueshme.',

        'columns' => [
            'model_id' => 'ID Modeli',
            'model_type' => 'Lloji i Modelit',
            'deleted_at' => 'Fshirë më',
        ],

        'actions' => [
            'view_details' => [
                'modal_heading' => 'Detajet e Regjistrimit',
            ],
            'restore' => [
                'success_notification_title' => 'Modeli u rikthye',
                'failure_notification_title' => 'Rikthimi i modelit dështoi',
            ],
            'force_delete' => [
                'success_notification_title' => 'Modeli u fshi përgjithmonë',
                'failure_notification_title' => 'Fshirja përgjithmonë e modelit dështoi',
            ],
        ],
    ],
];
