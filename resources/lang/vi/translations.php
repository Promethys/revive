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
    ],
];
