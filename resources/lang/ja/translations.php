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
            'restore' => [
                'success_notification_title' => 'モデルが復元されました',
                'failure_notification_title' => 'モデルの復元に失敗しました',
            ],
            'force_delete' => [
                'success_notification_title' => 'モデルが完全に削除されました',
                'failure_notification_title' => 'モデルの完全削除に失敗しました',
            ],
        ],
    ],
];
