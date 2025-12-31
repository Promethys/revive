<?php

return [
    'pages' => [
        'title' => 'Koš',
    ],
    'tables' => [
        'empty_state' => [
            'title' => 'Koš je prázdný',
            'description' => 'Když položky smažete, zobrazí se zde pro obnovení nebo trvalé odstranění.',
        ],
        'columns' => [
            'model_id' => 'ID modelu',
            'model_type' => 'Typ modelu',
            'deleted_by' => 'Smazal',
            'deleted_at' => 'Smazáno dne',
        ],
        'actions' => [
            'view_details' => [
                'modal_heading' => 'Podrobnosti záznamu',
            ],
            'restore' => [
                'modal_heading' => 'Obnovit záznam',
                'modal_description' => 'Opravdu chcete tento záznam obnovit?',
                'success_notification_title' => 'Záznam obnoven',
                'failure_notification_title' => 'Obnovení záznamu se nezdařilo',
            ],
            'force_delete' => [
                'modal_heading' => 'Trvale odstranit záznam',
                'modal_description' => 'Tuto akci nelze vrátit zpět.',
                'success_notification_title' => 'Záznam trvale odstraněn',
                'failure_notification_title' => 'Trvalé odstranění se nezdařilo',
            ],
        ],
        'bulk_actions' => [
            'restore' => [
                'success_notification_title' => '{1} Záznam obnoven|[2,*] Všechny :count záznamy obnoveny',
                'success_notification_body' => '{1} Záznam byl obnoven.|[2,*] Všechny :count záznamy byly obnoveny.',
                'warning_notification_title' => 'Částečné obnovení',
                'warning_notification_body' => 'Obnoveno :success z :total záznamů. :failed se nepodařilo obnovit.',
                'failure_notification_title' => 'Obnovení selhalo',
                'failure_notification_body' => '{1} Záznam nebylo možné obnovit.|[2,*] Žádný z :count záznamů nebyl obnoven.',
            ],
            'force_delete' => [
                'success_notification_title' => '{1} Záznam trvale odstraněn|[2,*] Všechny :count záznamy trvale odstraněny',
                'success_notification_body' => '{1} Záznam byl trvale odstraněn.|[2,*] Všechny :count záznamy byly trvale odstraněny.',
                'warning_notification_title' => 'Částečné odstranění',
                'warning_notification_body' => 'Odstraněno :success z :total záznamů. :failed se nepodařilo odstranit.',
                'failure_notification_title' => 'Odstranění selhalo',
                'failure_notification_body' => '{1} Záznam nebylo možné trvale odstranit.|[2,*] Žádný z :count záznamů nebyl odstraněn.',
            ],
        ],
    ],
];
