<?php

return [
    'pages' => [
        'title' => 'Thùng rác',
    ],
    'tables' => [
        'empty_state' => 'Không có mô hình có thể tái chế.',

        'columns' => [
            'model_id' => 'ID Mô Hình',
            'model_type' => 'Loại Mô Hình',
            'deleted_at' => 'Đã xóa lúc',
        ],

        'actions' => [
            'view_details' => [
                'modal_heading' => 'Chi tiết Bản ghi',
            ],
            'restore' => [
                'success_notification_title' => 'Mô hình đã được khôi phục',
                'failure_notification_title' => 'Không thể khôi phục mô hình',
            ],
            'force_delete' => [
                'success_notification_title' => 'Mô hình đã được xóa vĩnh viễn',
                'failure_notification_title' => 'Không thể xóa vĩnh viễn mô hình',
            ],
        ],

        'bulk_actions' => [
            'restore' => [
                'success_notification_title' => '{1} Khôi phục mẫu thành công|[2,*] Đã khôi phục thành công tất cả :count mẫu',
                'success_notification_body' => '{1} Mẫu đã được khôi phục|[2,*] Tất cả :count mẫu đã được khôi phục',

                'warning_notification_title' => 'Khôi phục hoàn tất một phần',
                'warning_notification_body' => 'Đã khôi phục :success trong tổng số :total mẫu. Không thể khôi phục :failed mẫu.',

                'failure_notification_title' => 'Khôi phục thất bại',
                'failure_notification_body' => '{1} Không thể khôi phục mẫu|[2,*] Không thể khôi phục bất kỳ mẫu nào trong số :count mẫu.',
            ],
            'force_delete' => [
                'success_notification_title' => '{1} Đã xóa vĩnh viễn mẫu|[2,*] Đã xóa vĩnh viễn tất cả :count mẫu',
                'success_notification_body' => '{1} Mẫu đã bị xóa vĩnh viễn|[2,*] Tất cả :count mẫu đã bị xóa vĩnh viễn',

                'warning_notification_title' => 'Xóa hoàn tất một phần',
                'warning_notification_body' => 'Đã xóa vĩnh viễn :success trong tổng số :total mẫu. Không thể xóa :failed mẫu.',

                'failure_notification_title' => 'Xóa thất bại',
                'failure_notification_body' => '{1} Không thể xóa vĩnh viễn mẫu|[2,*] Không thể xóa vĩnh viễn bất kỳ mẫu nào trong số :count mẫu.',
            ],
        ],
    ],
];
