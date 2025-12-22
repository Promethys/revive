<?php

return [
    'pages' => [
        'title' => 'Papirkurv',
    ],
    'tables' => [
        'empty_state' => [
            'title' => 'Ingen resirkulerbare modeller.',
            'description' => 'Når du sletter elementer, vil de vises her for gjenoppretting eller permanent sletting.',
        ],
        'columns' => [
            'model_id' => 'Modell-ID',
            'model_type' => 'Modelltype',
            'deleted_by' => 'Slettet av',
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
        'bulk_actions' => [
            'restore' => [
                'success_notification_title' => '{1} Modell ble gjenopprettet|[2,*] Alle :count modeller ble gjenopprettet',
                'success_notification_body' => '{1} Modellen er gjenopprettet.|[2,*] Alle :count modeller er gjenopprettet.',
                'warning_notification_title' => 'Delvis gjenoppretting fullført',
                'warning_notification_body' => ':success av :total modeller ble gjenopprettet. :failed modeller kunne ikke gjenopprettes.',
                'failure_notification_title' => 'Gjenoppretting mislyktes',
                'failure_notification_body' => '{1} Modellen kunne ikke gjenopprettes.|[2,*] Ingen av de :count modellene kunne gjenopprettes.',
            ],
            'force_delete' => [
                'success_notification_title' => '{1} Modell ble slettet permanent|[2,*] Alle :count modeller ble slettet permanent',
                'success_notification_body' => '{1} Modellen er slettet permanent.|[2,*] Alle :count modeller er slettet permanent.',
                'warning_notification_title' => 'Delvis sletting fullført',
                'warning_notification_body' => ':success av :total modeller ble slettet permanent. :failed modeller kunne ikke slettes.',
                'failure_notification_title' => 'Sletting mislyktes',
                'failure_notification_body' => '{1} Modellen kunne ikke slettes permanent.|[2,*] Ingen av de :count modellene kunne slettes permanent.',
            ],
        ],
    ],
];
