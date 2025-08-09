<?php

return [
    'pages' => [
        'title' => 'Quteya xwîşkirdinê',
    ],
    'tables' => [
        'empty_state' => 'Modela vegerbar tune ye.',

        'columns' => [
            'model_id' => 'ID Model',
            'model_type' => 'Cureyê Model',
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
            ]
        ],
    ],
];
