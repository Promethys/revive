<?php

return [
    'pages' => [
        'title' => 'Prullenbak',
    ],
    'tables' => [
        'empty_state' => [
            'title' => 'De prullenbak is leeg',
            'description' => 'Wanneer u items verwijdert, verschijnen ze hier voor herstel of permanente verwijdering.',
        ],
        'columns' => [
            'model_id' => 'Model-ID',
            'model_type' => 'Modeltype',
            'deleted_by' => 'Verwijderd door',
            'deleted_at' => 'Verwijderd op',
        ],
        'actions' => [
            'view_details' => [
                'modal_heading' => 'Recorddetails',
            ],
            'restore' => [
                'modal_heading' => 'Record herstellen',
                'modal_description' => 'Weet u zeker dat u dit record wilt herstellen?',
                'success_notification_title' => 'Record hersteld',
                'failure_notification_title' => 'Herstellen mislukt',
            ],
            'force_delete' => [
                'modal_heading' => 'Record permanent verwijderen',
                'modal_description' => 'Deze actie kan niet ongedaan worden gemaakt.',
                'success_notification_title' => 'Record permanent verwijderd',
                'failure_notification_title' => 'Permanent verwijderen mislukt',
            ],
        ],
        'bulk_actions' => [
            'restore' => [
                'success_notification_title' => '{1} Record hersteld|[2,*] Alle :count records hersteld',
                'success_notification_body' => '{1} Het record is hersteld.|[2,*] Alle :count records zijn hersteld.',
                'warning_notification_title' => 'Gedeeltelijk herstel',
                'warning_notification_body' => ':success van :total records hersteld. :failed mislukt.',
                'failure_notification_title' => 'Herstel mislukt',
                'failure_notification_body' => '{1} Het record kon niet worden hersteld.|[2,*] Geen van de :count records kon worden hersteld.',
            ],
            'force_delete' => [
                'success_notification_title' => '{1} Record permanent verwijderd|[2,*] Alle :count records permanent verwijderd',
                'success_notification_body' => '{1} Het record is permanent verwijderd.|[2,*] Alle :count records zijn permanent verwijderd.',
                'warning_notification_title' => 'Gedeeltelijke verwijdering',
                'warning_notification_body' => ':success van :total records verwijderd. :failed mislukt.',
                'failure_notification_title' => 'Verwijderen mislukt',
                'failure_notification_body' => '{1} Het record kon niet permanent worden verwijderd.|[2,*] Geen van de :count records kon worden verwijderd.',
            ],
        ],
    ],
];
