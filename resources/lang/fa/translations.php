<?php

return [
    'pages' => [
        'title' => 'سطل بازیافت',
    ],
    'tables' => [
        'empty_state' => 'هیچ مدل قابل بازیابی ندارید.',

        'columns' => [
            'model_id' => 'شناسه مدل',
            'model_type' => 'نوع مدل',
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
            ]
        ],
    ],
];
