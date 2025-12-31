<?php

return [
    'pages' => [
        'title' => '回收站',
    ],
    'tables' => [
        'empty_state' => [
            'title' => '回收站为空',
            'description' => '当你删除项目后，它们会显示在这里，以便恢复或永久删除。',
        ],
        'columns' => [
            'model_id' => '模型 ID',
            'model_type' => '模型类型',
            'deleted_by' => '删除者',
            'deleted_at' => '删除时间',
        ],
        'actions' => [
            'view_details' => [
                'modal_heading' => '记录详情',
            ],
            'restore' => [
                'modal_heading' => '恢复记录',
                'modal_description' => '确定要恢复此记录吗？该记录将被移回其原始位置。',
                'success_notification_title' => '记录已恢复',
                'failure_notification_title' => '恢复记录失败',
            ],
            'force_delete' => [
                'modal_heading' => '永久删除记录',
                'modal_description' => '确定要永久删除此记录吗？此操作无法撤销，记录将从数据库中完全移除。',
                'success_notification_title' => '记录已永久删除',
                'failure_notification_title' => '永久删除记录失败',
            ],
        ],
        'bulk_actions' => [
            'restore' => [
                'success_notification_title' => '{1} 记录已成功恢复|[2,*] 所有 :count 条记录已成功恢复',
                'success_notification_body' => '{1} 记录已恢复。|[2,*] 所有 :count 条记录已恢复。',
                'warning_notification_title' => '恢复部分完成',
                'warning_notification_body' => '已恢复 :success 条记录，共 :total 条。:failed 条记录无法恢复。',
                'failure_notification_title' => '恢复失败',
                'failure_notification_body' => '{1} 记录无法恢复。|[2,*] :count 条记录均无法恢复。',
            ],
            'force_delete' => [
                'success_notification_title' => '{1} 记录已永久删除|[2,*] 所有 :count 条记录已永久删除',
                'success_notification_body' => '{1} 记录已被永久删除。|[2,*] 所有 :count 条记录已被永久删除。',
                'warning_notification_title' => '删除部分完成',
                'warning_notification_body' => '已永久删除 :success 条记录，共 :total 条。:failed 条记录无法删除。',
                'failure_notification_title' => '删除失败',
                'failure_notification_body' => '{1} 记录无法永久删除。|[2,*] :count 条记录均无法永久删除。',
            ],
        ],
    ],
];
