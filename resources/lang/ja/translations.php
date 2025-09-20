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

        'bulk_actions' => [
            'restore' => [
                'success_notification_title' => '{1} モデルが正常に復元されました|[2,*] :count 件のモデルがすべて正常に復元されました',
                'success_notification_body' => '{1} モデルが復元されました。|[2,*] :count 件のモデルがすべて復元されました。',

                'warning_notification_title' => '復元が一部完了しました',
                'warning_notification_body' => ':total 件のうち :success 件が復元されました。:failed 件は復元できませんでした。',

                'failure_notification_title' => '復元に失敗しました',
                'failure_notification_body' => '{1} モデルを復元できませんでした。|[2,*] :count 件のモデルは1つも復元できませんでした。',
            ],
            'force_delete' => [
                'success_notification_title' => '{1} モデルが完全に削除されました|[2,*] :count 件のモデルがすべて完全に削除されました',
                'success_notification_body' => '{1} モデルが完全に削除されました。|[2,*] :count 件のモデルがすべて完全に削除されました。',

                'warning_notification_title' => '削除が一部完了しました',
                'warning_notification_body' => ':total 件のうち :success 件が完全に削除されました。:failed 件は削除できませんでした。',

                'failure_notification_title' => '削除に失敗しました',
                'failure_notification_body' => '{1} モデルを完全に削除できませんでした。|[2,*] :count 件のモデルは1つも完全に削除できませんでした。',
            ],
        ],
    ],
];
