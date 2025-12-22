<?php

return [
    'pages' => [
        'title' => 'سلة المحذوفات',
    ],
    'tables' => [
        'empty_state' => [
            'title' => 'ليس لديك أي نموذج قابل للاسترجاع.',
            'description' => 'عند حذف العناصر، ستظهر هنا لاستعادتها أو حذفها نهائيًا.',
        ],
        'columns' => [
            'model_id' => 'معرّف النموذج',
            'model_type' => 'نوع النموذج',
            'deleted_by' => 'تم الحذف بواسطة',
            'deleted_at' => 'تم الحذف في',
        ],
        'actions' => [
            'view_details' => [
                'modal_heading' => 'تفاصيل السجل',
            ],
            'restore' => [
                'modal_heading' => 'استعادة العنصر',
                'modal_description' => 'هل أنت متأكد أنك تريد استعادة هذا العنصر؟',
                'success_notification_title' => 'تم استعادة النموذج',
                'failure_notification_title' => 'فشل في استعادة النموذج',
            ],
            'force_delete' => [
                'modal_heading' => 'حذف العنصر نهائيًا',
                'modal_description' => 'هل أنت متأكد أنك تريد حذف هذا العنصر نهائيًا؟ لا يمكن التراجع عن هذا الإجراء.',
                'success_notification_title' => 'تم حذف النموذج نهائياً',
                'failure_notification_title' => 'فشل في حذف النموذج نهائياً',
            ],
        ],
        'bulk_actions' => [
            'restore' => [
                'success_notification_title' => '{1} تم استعادة النموذج بنجاح|[2,*] تم استعادة جميع :count النماذج بنجاح',
                'success_notification_body' => '{1} تم استعادة النموذج.|[2,*] تم استعادة جميع :count النماذج.',
                'warning_notification_title' => 'اكتملت عملية الاستعادة جزئياً',
                'warning_notification_body' => 'تم استعادة :success من أصل :total نموذجاً. لا يمكن استعادة :failed نموذجاً.',
                'failure_notification_title' => 'فشل الاستعادة',
                'failure_notification_body' => '{1} لا يمكن استعادة النموذج.|[2,*] لا يمكن استعادة أي من النماذج :count.',
            ],
            'force_delete' => [
                'success_notification_title' => '{1} تم حذف النموذج نهائياً|[2,*] تم حذف جميع :count النماذج نهائياً',
                'success_notification_body' => '{1} تم حذف النموذج نهائياً.|[2,*] تم حذف جميع :count النماذج نهائياً.',
                'warning_notification_title' => 'اكتملت عملية الحذف جزئياً',
                'warning_notification_body' => 'تم حذف نهائي لـ :success من أصل :total نموذجاً. لا يمكن حذف :failed نموذجاً.',
                'failure_notification_title' => 'فشل الحذف',
                'failure_notification_body' => '{1} لا يمكن حذف النموذج نهائياً.|[2,*] لا يمكن حذف أي من النماذج :count نهائياً.',
            ],
        ],
    ],
];
