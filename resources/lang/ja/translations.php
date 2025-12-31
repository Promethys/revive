<?php

return [
    'pages' => [
        'title' => 'ごみ箱',
    ],
    'tables' => [
        'empty_state' => [
            'title' => 'ごみ箱は空です',
            'description' => '項目を削除すると、復元または完全削除のためにここに表示されます。',
        ],
        'columns' => [
            'model_id' => 'モデルID',
            'model_type' => 'モデルタイプ',
            'deleted_by' => '削除者',
            'deleted_at' => '削除日時',
        ],
        'actions' => [
            'view_details' => [
                'modal_heading' => 'レコードの詳細',
            ],
            'restore' => [
                'modal_heading' => 'レコードを復元',
                'modal_description' => 'このレコードを復元してもよろしいですか？',
                'success_notification_title' => 'レコードが復元されました',
                'failure_notification_title' => 'レコードの復元に失敗しました',
            ],
            'force_delete' => [
                'modal_heading' => 'レコードを完全に削除',
                'modal_description' => 'この操作は元に戻せません。',
                'success_notification_title' => 'レコードが完全に削除されました',
                'failure_notification_title' => '完全削除に失敗しました',
            ],
        ],
        'bulk_actions' => [
            'restore' => [
                'success_notification_title' => '{1} レコードが復元されました|[2,*] :count 件のレコードがすべて復元されました',
                'success_notification_body' => '{1} レコードが復元されました。|[2,*] :count 件のレコードがすべて復元されました。',
                'warning_notification_title' => '一部のみ復元されました',
                'warning_notification_body' => ':total 件中 :success 件が復元されました。:failed 件は失敗しました。',
                'failure_notification_title' => '復元に失敗しました',
                'failure_notification_body' => '{1} レコードを復元できませんでした。|[2,*] :count 件のレコードはいずれも復元できませんでした。',
            ],
            'force_delete' => [
                'success_notification_title' => '{1} レコードが完全に削除されました|[2,*] :count 件のレコードがすべて完全に削除されました',
                'success_notification_body' => '{1} レコードが完全に削除されました。|[2,*] :count 件のレコードがすべて完全に削除されました。',
                'warning_notification_title' => '一部のみ削除されました',
                'warning_notification_body' => ':total 件中 :success 件が削除されました。:failed 件は失敗しました。',
                'failure_notification_title' => '削除に失敗しました',
                'failure_notification_body' => '{1} レコードを削除できませんでした。|[2,*] :count 件のレコードはいずれも削除できませんでした。',
            ],
        ],
    ],
];
