<?php

// translations for Promethys/Revive
return [
    'pages' => [
        'title' => 'Recycle bin',
    ],
    'tables' => [
        'empty_state' => 'You don\'t have any Recyclable model.',

        'columns' => [
            'model_id' => 'Model ID',
            'model_type' => 'Model Type',
            'deleted_at' => 'Deleted At',
        ],

        'actions' => [
            'view_details' => [
                'modal_heading' => 'Record details',
            ],
            'restore' => [
                'success_notification_title' => 'Model restored',
                'failure_notification_title' => 'Failed to restore model',
            ],
            'force_delete' => [
                'success_notification_title' => 'Model permanently deleted',
                'failure_notification_title' => 'Failed to permanently delete model',
            ],
        ],
    ],
];
