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
        ]
    ]
];
