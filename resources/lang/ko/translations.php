<?php

return [
    'pages' => [
        'title' => '휴지통',
    ],
    'tables' => [
        'empty_state' => [
            'title' => '재활용 가능한 모델이 없습니다.',
            'description' => '항목을 삭제하면 복원 또는 영구 삭제를 위해 여기에 표시됩니다.',
        ],
        'columns' => [
            'model_id' => '모델 ID',
            'model_type' => '모델 유형',
            'deleted_by' => '삭제한 사용자',
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
            ],
        ],
        'bulk_actions' => [
            'restore' => [
                'success_notification_title' => '{1} 모델이 성공적으로 복원되었습니다|[2,*] 모든 :count 모델이 성공적으로 복원되었습니다',
                'success_notification_body' => '{1} 모델이 복원되었습니다.|[2,*] 모든 :count 모델이 복원되었습니다.',
                'warning_notification_title' => '복원이 일부만 완료되었습니다',
                'warning_notification_body' => ':total 개 중 :success 개가 복원되었습니다. :failed 개는 복원할 수 없었습니다.',
                'failure_notification_title' => '복원 실패',
                'failure_notification_body' => '{1} 모델을 복원할 수 없습니다.|[2,*] :count 개 모델 중 아무 것도 복원되지 않았습니다.',
            ],
            'force_delete' => [
                'success_notification_title' => '{1} 모델이 영구적으로 삭제되었습니다|[2,*] 모든 :count 모델이 영구적으로 삭제되었습니다',
                'success_notification_body' => '{1} 모델이 영구적으로 삭제되었습니다.|[2,*] 모든 :count 모델이 영구적으로 삭제되었습니다.',
                'warning_notification_title' => '삭제가 일부만 완료되었습니다',
                'warning_notification_body' => ':total 개 중 :success 개가 영구적으로 삭제되었습니다. :failed 개는 삭제할 수 없었습니다.',
                'failure_notification_title' => '삭제 실패',
                'failure_notification_body' => '{1} 모델을 영구적으로 삭제할 수 없습니다.|[2,*] :count 개 모델 중 아무 것도 삭제되지 않았습니다.',
            ],
        ],
    ],
];
