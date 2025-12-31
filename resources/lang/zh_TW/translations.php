<?php

return [
    'pages' => [
        'title' => '回收桶',
    ],
    'tables' => [
        'empty_state' => [
            'title' => '回收桶是空的',
            'description' => '當你刪除項目後，它們會顯示在這裡，以供還原或永久刪除。',
        ],
        'columns' => [
            'model_id' => '模型 ID',
            'model_type' => '模型類型',
            'deleted_by' => '刪除者',
            'deleted_at' => '刪除時間',
        ],
        'actions' => [
            'view_details' => [
                'modal_heading' => '記錄詳情',
            ],
            'restore' => [
                'modal_heading' => '還原記錄',
                'modal_description' => '確定要還原此記錄嗎？該記錄將被移回原始位置。',
                'success_notification_title' => '記錄已還原',
                'failure_notification_title' => '還原記錄失敗',
            ],
            'force_delete' => [
                'modal_heading' => '永久刪除記錄',
                'modal_description' => '確定要永久刪除此記錄嗎？此操作無法復原，記錄將從資料庫中完全移除。',
                'success_notification_title' => '記錄已永久刪除',
                'failure_notification_title' => '永久刪除記錄失敗',
            ],
        ],
        'bulk_actions' => [
            'restore' => [
                'success_notification_title' => '{1} 記錄已成功還原|[2,*] 所有 :count 筆記錄已成功還原',
                'success_notification_body' => '{1} 記錄已還原。|[2,*] 所有 :count 筆記錄已還原。',
                'warning_notification_title' => '還原部分完成',
                'warning_notification_body' => '已還原 :success 筆記錄，共 :total 筆。:failed 筆記錄無法還原。',
                'failure_notification_title' => '還原失敗',
                'failure_notification_body' => '{1} 記錄無法還原。|[2,*] :count 筆記錄皆無法還原。',
            ],
            'force_delete' => [
                'success_notification_title' => '{1} 記錄已永久刪除|[2,*] 所有 :count 筆記錄已永久刪除',
                'success_notification_body' => '{1} 記錄已被永久刪除。|[2,*] 所有 :count 筆記錄已被永久刪除。',
                'warning_notification_title' => '刪除部分完成',
                'warning_notification_body' => '已永久刪除 :success 筆記錄，共 :total 筆。:failed 筆記錄無法刪除。',
                'failure_notification_title' => '刪除失敗',
                'failure_notification_body' => '{1} 記錄無法永久刪除。|[2,*] :count 筆記錄皆無法永久刪除。',
            ],
        ],
    ],
];
