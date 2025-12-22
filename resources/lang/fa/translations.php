<?php

return [
    'pages' => [
        'title' => 'سطل بازیافت',
    ],
    'tables' => [
        'empty_state' => [
            'title' => 'هیچ مدل قابل بازیابی ندارید.',
            'description' => 'وقتی موارد را حذف می‌کنید، برای بازیابی یا حذف دائمی در اینجا نمایش داده می‌شوند.',
        ],
        'columns' => [
            'model_id' => 'شناسه مدل',
            'model_type' => 'نوع مدل',
            'deleted_by' => 'حذف‌شده توسط',
            'deleted_at' => 'حذف شده در',
        ],
        'actions' => [
            'view_details' => [
                'modal_heading' => 'جزئیات رکورد',
            ],
            'restore' => [
                'success_notification_title' => 'مدل بازیابی شد',
                'failure_notification_title' => 'بازیابی مدل ناموفق بود',
            ],
            'force_delete' => [
                'success_notification_title' => 'مدل به طور دائمی حذف شد',
                'failure_notification_title' => 'حذف دائمی مدل ناموفق بود',
            ],
        ],
        'bulk_actions' => [
            'restore' => [
                'success_notification_title' => '{1} مدل با موفقیت بازیابی شد|[2,*] همه :count مدل با موفقیت بازیابی شدند',
                'success_notification_body' => '{1} مدل بازیابی شد.|[2,*] همه :count مدل بازیابی شدند.',
                'warning_notification_title' => 'بازیابی به صورت جزئی انجام شد',
                'warning_notification_body' => ':success از :total مدل بازیابی شد. :failed مدل قابل بازیابی نبودند.',
                'failure_notification_title' => 'بازیابی ناموفق بود',
                'failure_notification_body' => '{1} مدل قابل بازیابی نبود.|[2,*] هیچ‌یک از :count مدل قابل بازیابی نبود.',
            ],
            'force_delete' => [
                'success_notification_title' => '{1} مدل برای همیشه حذف شد|[2,*] همه :count مدل برای همیشه حذف شدند',
                'success_notification_body' => '{1} مدل برای همیشه حذف شد.|[2,*] همه :count مدل برای همیشه حذف شدند.',
                'warning_notification_title' => 'حذف به صورت جزئی انجام شد',
                'warning_notification_body' => ':success از :total مدل برای همیشه حذف شد. :failed مدل قابل حذف نبودند.',
                'failure_notification_title' => 'حذف ناموفق بود',
                'failure_notification_body' => '{1} مدل قابل حذف دائمی نبود.|[2,*] هیچ‌یک از :count مدل قابل حذف دائمی نبود.',
            ],
        ],
    ],
];
