<?php

return [
    'pages' => [
        'title' => '휴지통',
    ],
    'tables' => [
        'empty_state' => '재활용 가능한 모델이 없습니다.',

        'columns' => [
            'model_id' => '모델 ID',
            'model_type' => '모델 유형',
            'deleted_at' => '삭제된 날짜',
        ],

        'actions' => [
            'view_details' => [
                'modal_heading' => '레코드 세부정보',
            ],
            'restore' => [
                'success_notification_title' => '모델이 복원되었습니다',
                'failure_notification_title' => '모델 복원에 실패했습니다',
            ],
            'force_delete' => [
                'success_notification_title' => '모델이 영구적으로 삭제되었습니다',
                'failure_notification_title' => '모델 영구 삭제에 실패했습니다',
            ]
        ],
    ],
];
