<?php

return [
    'pages' => [
        'title' => 'Çopê',
    ],
    'tables' => [
        'empty_state' => [
            'title' => 'Çopê vala ye',
            'description' => 'Dema ku hûn tiştan jêbirin, ew dê li vir werin nîşandan bo vegerandin an jî jêbirina herdemî.',
        ],
        'columns' => [
            'model_id' => 'ID ya modelê',
            'model_type' => 'Cureyê modelê',
            'deleted_by' => 'Jêbirî ji hêla',
            'deleted_at' => 'Dema jêbirinê',
        ],
        'actions' => [
            'view_details' => [
                'modal_heading' => 'Hûrguliyên tomarê',
            ],
            'restore' => [
                'modal_heading' => 'Tomarê vegerîne',
                'modal_description' => 'Tu piştrast î ku dixwazî vî tomarî vegerînî? Tomar dê vegere cihê xwe yê bingehîn.',
                'success_notification_title' => 'Tomar hate vegerandin',
                'failure_notification_title' => 'Vegera tomarê bi ser neket',
            ],
            'force_delete' => [
                'modal_heading' => 'Tomarê herdemî jê bibe',
                'modal_description' => 'Tu piştrast î ku dixwazî vî tomarî herdemî jê bibî? Ev çalakî nayê vegerandin û tomar dê ji danegehê bi tevahî were rakirin.',
                'success_notification_title' => 'Tomar herdemî hate jêbirin',
                'failure_notification_title' => 'Jêbirina herdemî ya tomarê bi ser neket',
            ],
        ],
        'bulk_actions' => [
            'restore' => [
                'success_notification_title' => '{1} Tomar bi serkeftî hate vegerandin|[2,*] Hemû :count tomar bi serkeftî hatin vegerandin',
                'success_notification_body' => '{1} Tomar hate vegerandin|[2,*] Hemû :count tomar hatin vegerandin',
                'warning_notification_title' => 'Vegera bi temamî nehat kirin',
                'warning_notification_body' => ':success ji :total tomar hatin vegerandin. :failed tomar nehatin vegerandin.',
                'failure_notification_title' => 'Vegera bi ser neket',
                'failure_notification_body' => '{1} Tomar nehat vegerandin|[2,*] Tu ji :count tomaran nehat vegerandin',
            ],
            'force_delete' => [
                'success_notification_title' => '{1} Tomar herdemî hate jêbirin|[2,*] Hemû :count tomar herdemî hatin jêbirin',
                'success_notification_body' => '{1} Tomar herdemî hate jêbirin|[2,*] Hemû :count tomar herdemî hatin jêbirin',
                'warning_notification_title' => 'Jêbirin bi temamî nehat kirin',
                'warning_notification_body' => ':success ji :total tomar herdemî hatin jêbirin. :failed tomar nehatin jêbirin.',
                'failure_notification_title' => 'Jêbirin bi ser neket',
                'failure_notification_body' => '{1} Tomar herdemî nehat jêbirin|[2,*] Tu ji :count tomaran herdemî nehat jêbirin',
            ],
        ],
    ],
];
