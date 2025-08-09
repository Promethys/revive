<?php

return [
    'pages' => [
        'title' => 'Koš',
    ],
    'tables' => [
        'empty_state' => 'Nemáte žádný model k obnovení.',

        'columns' => [
            'model_id' => 'ID modelu',
            'model_type' => 'Typ modelu',
            'deleted_at' => 'Smazáno dne',
        ],

        'actions' => [
            'view_details' => [
                'modal_heading' => 'Detaily záznamu',
            ],
            'restore' => [
                'success_notification_title' => 'Model obnoven',
                'failure_notification_title' => 'Obnovení modelu selhalo',
            ],
            'force_delete' => [
                'success_notification_title' => 'Model trvale smazán',
                'failure_notification_title' => 'Trvalé smazání modelu selhalo',
            ],
        ],
    ],
];
