<?php

return [
    'pages' => [
        'title' => '回收桶',
    ],
    'tables' => [
        'empty_state' => '沒有可回收的模型。',

        'columns' => [
            'model_id' => '模型ID',
            'model_type' => '模型類型',
            'deleted_at' => '刪除時間',
        ],

        'actions' => [
            'view_details' => [
                'modal_heading' => '記錄詳情',
            ],
            'restore' => [
                'success_notification_title' => '模型已恢復',
                'failure_notification_title' => '模型恢復失敗',
            ],
            'force_delete' => [
                'success_notification_title' => '模型已永久刪除',
                'failure_notification_title' => '模型永久刪除失敗',
            ]
        ],
    ],
];
