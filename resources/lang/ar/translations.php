<?php

return [
    'pages' => [
        'title' => 'سلة المحذوفات',
    ],
    'tables' => [
        'empty_state' => 'ليس لديك أي نموذج قابل للاسترجاع.',

        'columns' => [
            'model_id' => 'معرّف النموذج',
            'model_type' => 'نوع النموذج',
            'deleted_at' => 'تم الحذف في',
        ],

        'actions' => [
            'view_details' => [
                'modal_heading' => 'تفاصيل السجل',
            ],
            'restore' => [
                'success_notification_title' => 'تم استعادة النموذج',
                'failure_notification_title' => 'فشل في استعادة النموذج',
            ],
            'force_delete' => [
                'success_notification_title' => 'تم حذف النموذج نهائياً',
                'failure_notification_title' => 'فشل في حذف النموذج نهائياً',
            ]
        ],
    ],
];
