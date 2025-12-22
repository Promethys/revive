<?php

return [
    'pages' => [
        'title' => 'Quteya xwîşkirdinê',
    ],
    'tables' => [
        'empty_state' => [
            'title' => 'Modela vegerbar tune ye.',
            'description' => 'Dema ku tu hêmanan jê dibî, ew li vir xuya dibin ji bo vegerandin an jî jêbirina herdemî.',
        ],
        'columns' => [
            'model_id' => 'ID Model',
            'model_type' => 'Cureyê Model',
            'deleted_by' => 'Jê hat jêbirin',
            'deleted_at' => 'Demjimêrandinê',
        ],
        'actions' => [
            'view_details' => [
                'modal_heading' => 'Hûrguliyên Tomarê',
            ],
            'restore' => [
                'success_notification_title' => 'Model hate vegerandin',
                'failure_notification_title' => 'Vegerandina modelê têk çû',
            ],
            'force_delete' => [
                'success_notification_title' => 'Model bi temamî hate jêbirin',
                'failure_notification_title' => 'Jêbirina bi temamî ya modelê têk çû',
            ],
        ],
        'bulk_actions' => [
            'restore' => [
                'success_notification_title' => '{1} Model bi serkeftî hate vegerandin|[2,*] Hemû :count model bi serkeftî hatin vegerandin',
                'success_notification_body' => '{1} Model hate vegerandin.|[2,*] Hemû :count model hatin vegerandin.',
                'warning_notification_title' => 'Vegerandin bi parve hate temamkirin',
                'warning_notification_body' => ':success ji :total model hatin vegerandin. :failed model nehatin vegerandin.',
                'failure_notification_title' => 'Vegerandin bi ser neket',
                'failure_notification_body' => '{1} Model nehat vegerandin.|[2,*] Tu ji :count model nehat vegerandin.',
            ],
            'force_delete' => [
                'success_notification_title' => '{1} Model bi temamî hate jêbirin|[2,*] Hemû :count model bi temamî hatin jêbirin',
                'success_notification_body' => '{1} Model bi temamî hate jêbirin.|[2,*] Hemû :count model hatin jêbirin.',
                'warning_notification_title' => 'Jêbirin bi parve hate temamkirin',
                'warning_notification_body' => ':success ji :total model bi temamî hate jêbirin. :failed model nehatin jêbirin.',
                'failure_notification_title' => 'Jêbirin bi ser neket',
                'failure_notification_body' => '{1} Model nehat bi temamî jêbirin.|[2,*] Tu ji :count model nehat bi temamî jêbirin.',
            ],
        ],
    ],
];
