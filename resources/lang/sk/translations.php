<?php

return [
    'pages' => [
        'title' => 'Kôš',
    ],
    'tables' => [
        'empty_state' => 'Žiadne recyklovateľné modely.',

        'columns' => [
            'model_id' => 'ID modelu',
            'model_type' => 'Typ modelu',
            'deleted_at' => 'Vymazané',
        ],

        'actions' => [
            'view_details' => [
                'modal_heading' => 'Podrobnosti záznamu',
            ],
            'restore' => [
                'success_notification_title' => 'Model obnovený',
                'failure_notification_title' => 'Obnovenie modelu zlyhalo',
            ],
            'force_delete' => [
                'success_notification_title' => 'Model natrvalo zmazaný',
                'failure_notification_title' => 'Trvalé zmazanie modelu zlyhalo',
            ]
        ],
    ],
];
