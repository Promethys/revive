<?php

return [
    'pages' => [
        'title' => 'Coș de reciclare',
    ],
    'tables' => [
        'empty_state' => [
            'title' => 'Coșul de reciclare este gol',
            'description' => 'Când ștergeți elemente, acestea vor apărea aici pentru restaurare sau ștergere definitivă.',
        ],
        'columns' => [
            'model_id' => 'ID Model',
            'model_type' => 'Tip Model',
            'deleted_by' => 'Șters de',
            'deleted_at' => 'Șters la',
        ],
        'actions' => [
            'view_details' => [
                'modal_heading' => 'Detalii înregistrare',
            ],
            'restore' => [
                'modal_heading' => 'Restaurare înregistrare',
                'modal_description' => 'Sigur doriți să restaurați această înregistrare?',
                'success_notification_title' => 'Înregistrare restaurată',
                'failure_notification_title' => 'Restaurarea înregistrării a eșuat',
            ],
            'force_delete' => [
                'modal_heading' => 'Șterge definitiv înregistrarea',
                'modal_description' => 'Această acțiune nu poate fi anulată.',
                'success_notification_title' => 'Înregistrare ștearsă definitiv',
                'failure_notification_title' => 'Ștergerea definitivă a înregistrării a eșuat',
            ],
        ],
        'bulk_actions' => [
            'restore' => [
                'success_notification_title' => '{1} Înregistrare restaurată cu succes|[2,*] Toate cele :count înregistrări au fost restaurate cu succes',
                'success_notification_body' => '{1} Înregistrarea a fost restaurată.|[2,*] Toate cele :count înregistrări au fost restaurate.',
                'warning_notification_title' => 'Restaurare parțial completă',
                'warning_notification_body' => 'Au fost restaurate :success din :total înregistrări. :failed înregistrări nu au putut fi restaurate.',
                'failure_notification_title' => 'Restaurare eșuată',
                'failure_notification_body' => '{1} Înregistrarea nu a putut fi restaurată.|[2,*] Niciunul dintre cele :count înregistrări nu a putut fi restaurat.',
            ],
            'force_delete' => [
                'success_notification_title' => '{1} Înregistrare ștearsă definitiv|[2,*] Toate cele :count înregistrări au fost șterse definitiv',
                'success_notification_body' => '{1} Înregistrarea a fost ștearsă definitiv.|[2,*] Toate cele :count înregistrări au fost șterse definitiv.',
                'warning_notification_title' => 'Ștergere parțial completă',
                'warning_notification_body' => 'Au fost șterse definitiv :success din :total înregistrări. :failed înregistrări nu au putut fi șterse.',
                'failure_notification_title' => 'Ștergere eșuată',
                'failure_notification_body' => '{1} Înregistrarea nu a putut fi ștearsă definitiv.|[2,*] Niciunul dintre cele :count înregistrări nu a putut fi șters definitiv.',
            ],
        ],
    ],
];
