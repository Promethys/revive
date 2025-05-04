<?php

return [
    'pages' => [
        'title' => 'ゴミ箱',
    ],
    'tables' => [
        'empty_state' => 'リサイクル可能なモデルがありません。',

        'columns' => [
            'model_id' => 'モデルID',
            'model_type' => 'モデルタイプ',
            'deleted_at' => '削除日時',
        ],

        'actions' => [
            'view_details' => [
                'modal_heading' => 'レコードの詳細',
            ],
        ],
    ],
];
