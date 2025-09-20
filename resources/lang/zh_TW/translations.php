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
            ],
        ],

        'bulk_actions' => [
            'restore' => [
                'success_notification_title' => '{1} 模型恢復成功|[2,*] 所有 :count 個模型已成功恢復',
                'success_notification_body' => '{1} 模型已恢復|[2,*] 所有 :count 個模型已恢復',

                'warning_notification_title' => '恢復部分完成',
                'warning_notification_body' => '已恢復 :success 個，總計 :total 個模型。:failed 個模型無法恢復。',

                'failure_notification_title' => '恢復失敗',
                'failure_notification_body' => '{1} 無法恢復模型|[2,*] 無法恢復任何 :count 個模型。',
            ],
            'force_delete' => [
                'success_notification_title' => '{1} 模型已永久刪除|[2,*] 所有 :count 個模型已永久刪除',
                'success_notification_body' => '{1} 模型已被永久刪除|[2,*] 所有 :count 個模型已被永久刪除',

                'warning_notification_title' => '刪除部分完成',
                'warning_notification_body' => '已永久刪除 :success 個，總計 :total 個模型。:failed 個模型無法刪除。',

                'failure_notification_title' => '刪除失敗',
                'failure_notification_body' => '{1} 無法永久刪除模型|[2,*] 無法永久刪除任何 :count 個模型。',
            ],
        ],
    ],
];
