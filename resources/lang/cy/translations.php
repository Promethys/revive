<?php

return [
    'pages' => [
        'title' => 'Bin Ailgylchu',
    ],
    'tables' => [
        'empty_state' => 'Nid oes gennych unrhyw fodel adferadwy.',

        'columns' => [
            'model_id' => 'ID Model',
            'model_type' => 'Math o Fodel',
            'deleted_at' => 'Wedi\'i Ddileu ar',
        ],

        'actions' => [
            'view_details' => [
                'modal_heading' => 'Manylion cofnod',
            ],
            'restore' => [
                'success_notification_title' => 'Model wedi\'i adfer',
                'failure_notification_title' => 'Methodd ag adfer model',
            ],
            'force_delete' => [
                'success_notification_title' => 'Model wedi\'i ddileu\'n barhaol',
                'failure_notification_title' => 'Methodd â dileu model yn barhaol',
            ],
        ],
    ],
];
