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
        ],
    ],
];
