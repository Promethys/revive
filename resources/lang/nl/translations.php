<?php

return [
    'pages' => [
        'title' => 'Prullenbak',
    ],
    'tables' => [
        'empty_state' => [
            'title' => 'Geen recyclebare modellen beschikbaar.',
            'description' => 'Wanneer je items verwijdert, verschijnen ze hier voor herstel of permanente verwijdering.',
        ],
        'columns' => [
            'model_id' => 'Model ID',
            'model_type' => 'Modeltype',
            'deleted_by' => 'Verwijderd door',
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
            ],
        ],
        'bulk_actions' => [
            'restore' => [
                'success_notification_title' => '{1} Model succesvol hersteld|[2,*] Alle :count modellen succesvol hersteld',
                'success_notification_body' => '{1} Het model is hersteld.|[2,*] Alle :count modellen zijn hersteld.',
                'warning_notification_title' => 'Herstel gedeeltelijk voltooid',
                'warning_notification_body' => ':success van de :total modellen hersteld. :failed modellen konden niet worden hersteld.',
                'failure_notification_title' => 'Herstel mislukt',
                'failure_notification_body' => '{1} Het model kon niet worden hersteld.|[2,*] Geen van de :count modellen kon worden hersteld.',
            ],
            'force_delete' => [
                'success_notification_title' => '{1} Model permanent verwijderd|[2,*] Alle :count modellen permanent verwijderd',
                'success_notification_body' => '{1} Het model is permanent verwijderd.|[2,*] Alle :count modellen zijn permanent verwijderd.',
                'warning_notification_title' => 'Verwijdering gedeeltelijk voltooid',
                'warning_notification_body' => ':success van de :total modellen permanent verwijderd. :failed modellen konden niet worden verwijderd.',
                'failure_notification_title' => 'Verwijdering mislukt',
                'failure_notification_body' => '{1} Het model kon niet permanent worden verwijderd.|[2,*] Geen van de :count modellen kon permanent worden verwijderd.',
            ],
        ],
    ],
];
