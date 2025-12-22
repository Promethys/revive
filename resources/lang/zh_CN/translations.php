<?php

return [
    'pages' => [
        'title' => '回收站',
    ],
    'tables' => [
        'empty_state' => [
            'title' => '没有可回收的模型。',
            'description' => '当您删除项目时，它们将显示在此处以便恢复或永久删除。',
        ],
        'columns' => [
            'model_id' => '模型ID',
            'model_type' => '模型类型',
            'deleted_by' => '删除者',
            'deleted_at' => '删除时间',
        ],
        'actions' => [
            'view_details' => [
                'modal_heading' => '记录详情',
            ],
            'restore' => [
                'success_notification_title' => '模型已恢复',
                'failure_notification_title' => '模型恢复失败',
            ],
            'force_delete' => [
                'success_notification_title' => '模型已永久删除',
                'failure_notification_title' => '模型永久删除失败',
            ],
        ],
        'bulk_actions' => [
            'restore' => [
                'success_notification_title' => '{1} 模型恢复成功|[2,*] 所有 :count 个模型已成功恢复',
                'success_notification_body' => '{1} 模型已恢复|[2,*] 所有 :count 个模型已恢复',
                'warning_notification_title' => '恢复部分完成',
                'warning_notification_body' => '已恢复 :success 个，总计 :total 个模型。:failed 个模型无法恢复。',
                'failure_notification_title' => '恢复失败',
                'failure_notification_body' => '{1} 无法恢复模型|[2,*] 无法恢复任何 :count 个模型。',
            ],
            'force_delete' => [
                'success_notification_title' => '{1} 模型已永久删除|[2,*] 所有 :count 个模型已永久删除',
                'success_notification_body' => '{1} 模型已被永久删除|[2,*] 所有 :count 个模型已被永久删除',
                'warning_notification_title' => '删除部分完成',
                'warning_notification_body' => '已永久删除 :success 个，总计 :total 个模型。:failed 个模型无法删除。',
                'failure_notification_title' => '删除失败',
                'failure_notification_body' => '{1} 无法永久删除模型|[2,*] 无法永久删除任何 :count 个模型。',
            ],
        ],
    ],
];
