<?php

return [
    'pages' => [
        'title' => 'سطل بازیافت',
    ],
    'tables' => [
        'empty_state' => [
            'title' => 'سطل بازیافت خالی است',
            'description' => 'وقتی مواردی را حذف می‌کنید، برای بازیابی یا حذف دائمی در اینجا نمایش داده می‌شوند.',
        ],
        'columns' => [
            'model_id' => 'شناسه مدل',
            'model_type' => 'نوع مدل',
            'deleted_by' => 'حذف شده توسط',
            'deleted_at' => 'تاریخ حذف',
        ],
        'actions' => [
            'view_details' => [
                'modal_heading' => 'جزئیات رکورد',
            ],
            'restore' => [
                'modal_heading' => 'بازیابی رکورد',
                'modal_description' => 'آیا از بازیابی این رکورد مطمئن هستید؟',
                'success_notification_title' => 'رکورد بازیابی شد',
                'failure_notification_title' => 'بازیابی رکورد ناموفق بود',
            ],
            'force_delete' => [
                'modal_heading' => 'حذف دائمی رکورد',
                'modal_description' => 'این عملیات قابل بازگشت نیست.',
                'success_notification_title' => 'رکورد به‌طور دائمی حذف شد',
                'failure_notification_title' => 'حذف دائمی ناموفق بود',
            ],
        ],
        'bulk_actions' => [
            'restore' => [
                'success_notification_title' => '{1} رکورد بازیابی شد|[2,*] همه :count رکورد بازیابی شدند',
                'success_notification_body' => '{1} رکورد بازیابی شد.|[2,*] همه :count رکورد بازیابی شدند.',
                'warning_notification_title' => 'بازیابی جزئی',
                'warning_notification_body' => ':success از :total رکورد بازیابی شدند. :failed بازیابی نشدند.',
                'failure_notification_title' => 'بازیابی ناموفق',
                'failure_notification_body' => '{1} رکورد بازیابی نشد.|[2,*] هیچ‌کدام از :count رکورد بازیابی نشدند.',
            ],
            'force_delete' => [
                'success_notification_title' => '{1} رکورد حذف دائمی شد|[2,*] همه :count رکورد به‌طور دائمی حذف شدند',
                'success_notification_body' => '{1} رکورد به‌طور دائمی حذف شد.|[2,*] همه :count رکورد به‌طور دائمی حذف شدند.',
                'warning_notification_title' => 'حذف جزئی',
                'warning_notification_body' => ':success از :total رکورد حذف شدند. :failed حذف نشدند.',
                'failure_notification_title' => 'حذف ناموفق',
                'failure_notification_body' => '{1} رکورد حذف دائمی نشد.|[2,*] هیچ‌کدام از :count رکورد حذف نشدند.',
            ],
        ],
    ],
];
