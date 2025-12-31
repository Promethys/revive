<?php

return [
    'pages' => [
        'title' => 'Papirkurv',
    ],
    'tables' => [
        'empty_state' => [
            'title' => 'Papirkurven er tom',
            'description' => 'Når du sletter elementer, vil de vises her for gjenoppretting eller permanent sletting.',
        ],
        'columns' => [
            'model_id' => 'Modell-ID',
            'model_type' => 'Modelltype',
            'deleted_by' => 'Slettet av',
            'deleted_at' => 'Slettet dato',
        ],
        'actions' => [
            'view_details' => [
                'modal_heading' => 'Detaljer for oppføring',
            ],
            'restore' => [
                'modal_heading' => 'Gjenopprett oppføring',
                'modal_description' => 'Er du sikker på at du vil gjenopprette denne oppføringen? Oppføringen vil bli flyttet tilbake til sin opprinnelige plassering.',
                'success_notification_title' => 'Oppføring gjenopprettet',
                'failure_notification_title' => 'Kunne ikke gjenopprette oppføring',
            ],
            'force_delete' => [
                'modal_heading' => 'Slett oppføring permanent',
                'modal_description' => 'Er du sikker på at du vil slette denne oppføringen permanent? Denne handlingen kan ikke angres, og oppføringen vil bli fullstendig fjernet fra databasen.',
                'success_notification_title' => 'Oppføring slettet permanent',
                'failure_notification_title' => 'Kunne ikke slette oppføring permanent',
            ],
        ],
        'bulk_actions' => [
            'restore' => [
                'success_notification_title' => '{1} Oppføring gjenopprettet|[2,*] Alle :count oppføringer gjenopprettet',
                'success_notification_body' => '{1} Oppføringen ble gjenopprettet.|[2,*] Alle :count oppføringer ble gjenopprettet.',
                'warning_notification_title' => 'Gjenoppretting delvis fullført',
                'warning_notification_body' => 'Gjenopprettet :success av :total oppføringer. :failed oppføringer kunne ikke gjenopprettes.',
                'failure_notification_title' => 'Gjenoppretting mislyktes',
                'failure_notification_body' => '{1} Oppføringen kunne ikke gjenopprettes.|[2,*] Ingen av :count oppføringer kunne gjenopprettes.',
            ],
            'force_delete' => [
                'success_notification_title' => '{1} Oppføring slettet permanent|[2,*] Alle :count oppføringer slettet permanent',
                'success_notification_body' => '{1} Oppføringen ble slettet permanent.|[2,*] Alle :count oppføringer ble slettet permanent.',
                'warning_notification_title' => 'Sletting delvis fullført',
                'warning_notification_body' => 'Permanent slettet :success av :total oppføringer. :failed oppføringer kunne ikke slettes.',
                'failure_notification_title' => 'Sletting mislyktes',
                'failure_notification_body' => '{1} Oppføringen kunne ikke slettes permanent.|[2,*] Ingen av :count oppføringer kunne slettes permanent.',
            ],
        ],
    ],
];
