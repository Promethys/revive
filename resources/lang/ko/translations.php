<?php

return [
    'pages' => [
        'title' => '휴지통',
    ],
    'tables' => [
        'empty_state' => [
            'title' => '휴지통이 비어 있습니다',
            'description' => '항목을 삭제하면 복원하거나 영구 삭제할 수 있도록 여기에 표시됩니다.',
        ],
        'columns' => [
            'model_id' => '모델 ID',
            'model_type' => '모델 유형',
            'deleted_by' => '삭제한 사용자',
            'deleted_at' => '삭제 일시',
        ],
        'actions' => [
            'view_details' => [
                'modal_heading' => '레코드 상세 정보',
            ],
            'restore' => [
                'modal_heading' => '레코드 복원',
                'modal_description' => '이 레코드를 복원하시겠습니까? 레코드는 원래 위치로 이동됩니다.',
                'success_notification_title' => '레코드가 복원되었습니다',
                'failure_notification_title' => '레코드 복원에 실패했습니다',
            ],
            'force_delete' => [
                'modal_heading' => '레코드 영구 삭제',
                'modal_description' => '이 레코드를 영구적으로 삭제하시겠습니까? 이 작업은 되돌릴 수 없으며 레코드는 데이터베이스에서 완전히 제거됩니다.',
                'success_notification_title' => '레코드가 영구 삭제되었습니다',
                'failure_notification_title' => '레코드 영구 삭제에 실패했습니다',
            ],
        ],
        'bulk_actions' => [
            'restore' => [
                'success_notification_title' => '{1} 레코드가 성공적으로 복원되었습니다|[2,*] 모든 :count개 레코드가 성공적으로 복원되었습니다',
                'success_notification_body' => '{1} 레코드가 복원되었습니다|[2,*] 모든 :count개 레코드가 복원되었습니다',
                'warning_notification_title' => '복원이 부분적으로 완료되었습니다',
                'warning_notification_body' => '총 :total개 중 :success개가 복원되었습니다. :failed개는 복원할 수 없습니다.',
                'failure_notification_title' => '복원 실패',
                'failure_notification_body' => '{1} 레코드를 복원할 수 없습니다|[2,*] :count개 레코드 중 어느 것도 복원할 수 없습니다',
            ],
            'force_delete' => [
                'success_notification_title' => '{1} 레코드가 영구 삭제되었습니다|[2,*] 모든 :count개 레코드가 영구 삭제되었습니다',
                'success_notification_body' => '{1} 레코드가 영구 삭제되었습니다|[2,*] 모든 :count개 레코드가 영구 삭제되었습니다',
                'warning_notification_title' => '삭제가 부분적으로 완료되었습니다',
                'warning_notification_body' => '총 :total개 중 :success개가 영구 삭제되었습니다. :failed개는 삭제할 수 없습니다.',
                'failure_notification_title' => '삭제 실패',
                'failure_notification_body' => '{1} 레코드를 영구 삭제할 수 없습니다|[2,*] :count개 레코드 중 어느 것도 영구 삭제할 수 없습니다',
            ],
        ],
    ],
];
