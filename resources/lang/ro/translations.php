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

        'bulk_actions' => [
            'restore' => [
                'success_notification_title' => '{1} Model restaurat cu succes|[2,*] Toate cele :count modele au fost restaurate cu succes',
                'success_notification_body' => '{1} Modelul a fost restaurat.|[2,*] Toate cele :count modele au fost restaurate.',

                'warning_notification_title' => 'Restaurare parțial completă',
                'warning_notification_body' => 'Au fost restaurate :success din :total modele. :failed modele nu au putut fi restaurate.',

                'failure_notification_title' => 'Restaurare eșuată',
                'failure_notification_body' => '{1} Modelul nu a putut fi restaurat.|[2,*] Niciunul dintre cele :count modele nu a putut fi restaurat.',
            ],
            'force_delete' => [
                'success_notification_title' => '{1} Model șters definitiv|[2,*] Toate cele :count modele au fost șterse definitiv',
                'success_notification_body' => '{1} Modelul a fost șters definitiv.|[2,*] Toate cele :count modele au fost șterse definitiv.',

                'warning_notification_title' => 'Ștergere parțial completă',
                'warning_notification_body' => 'Au fost șterse definitiv :success din :total modele. :failed modele nu au putut fi șterse.',

                'failure_notification_title' => 'Ștergere eșuată',
                'failure_notification_body' => '{1} Modelul nu a putut fi șters definitiv.|[2,*] Niciunul dintre cele :count modele nu a putut fi șters definitiv.',
            ],
        ],
    ],
];
