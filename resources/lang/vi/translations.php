<?php

return [
    'pages' => [
        'title' => 'Thùng rác',
    ],
    'tables' => [
        'empty_state' => [
            'title' => 'Thùng rác trống',
            'description' => 'Khi bạn xóa các mục, chúng sẽ xuất hiện ở đây để khôi phục hoặc xóa vĩnh viễn.',
        ],
        'columns' => [
            'model_id' => 'ID mô hình',
            'model_type' => 'Loại mô hình',
            'deleted_by' => 'Đã xóa bởi',
            'deleted_at' => 'Đã xóa lúc',
        ],
        'actions' => [
            'view_details' => [
                'modal_heading' => 'Chi tiết bản ghi',
            ],
            'restore' => [
                'modal_heading' => 'Khôi phục bản ghi',
                'modal_description' => 'Bạn có chắc chắn muốn khôi phục bản ghi này không?',
                'success_notification_title' => 'Đã khôi phục bản ghi',
                'failure_notification_title' => 'Không thể khôi phục bản ghi',
            ],
            'force_delete' => [
                'modal_heading' => 'Xóa vĩnh viễn bản ghi',
                'modal_description' => 'Hành động này không thể hoàn tác.',
                'success_notification_title' => 'Đã xóa vĩnh viễn bản ghi',
                'failure_notification_title' => 'Không thể xóa vĩnh viễn bản ghi',
            ],
        ],
        'bulk_actions' => [
            'restore' => [
                'success_notification_title' => '{1} Đã khôi phục bản ghi thành công|[2,*] Đã khôi phục thành công tất cả :count bản ghi',
                'success_notification_body' => '{1} Bản ghi đã được khôi phục.|[2,*] Tất cả :count bản ghi đã được khôi phục.',
                'warning_notification_title' => 'Khôi phục hoàn thành một phần',
                'warning_notification_body' => 'Đã khôi phục :success trong số :total bản ghi. :failed bản ghi không thể khôi phục.',
                'failure_notification_title' => 'Khôi phục thất bại',
                'failure_notification_body' => '{1} Không thể khôi phục bản ghi.|[2,*] Không thể khôi phục bất kỳ bản ghi nào trong số :count bản ghi.',
            ],
            'force_delete' => [
                'success_notification_title' => '{1} Đã xóa vĩnh viễn bản ghi|[2,*] Đã xóa vĩnh viễn tất cả :count bản ghi',
                'success_notification_body' => '{1} Bản ghi đã được xóa vĩnh viễn.|[2,*] Tất cả :count bản ghi đã được xóa vĩnh viễn.',
                'warning_notification_title' => 'Xóa hoàn thành một phần',
                'warning_notification_body' => 'Đã xóa vĩnh viễn :success trong số :total bản ghi. :failed bản ghi không thể xóa.',
                'failure_notification_title' => 'Xóa thất bại',
                'failure_notification_body' => '{1} Không thể xóa vĩnh viễn bản ghi.|[2,*] Không thể xóa vĩnh viễn bất kỳ bản ghi nào trong số :count bản ghi.',
            ],
        ],
    ],
];
