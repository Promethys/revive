<?php

return [
    'pages' => [
        'title' => '回收站',
    ],
    'tables' => [
        'empty_state' => '没有可回收的模型。',

        'columns' => [
            'model_id' => '模型ID',
            'model_type' => '模型类型',
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
            ]
        ],
    ],
];
