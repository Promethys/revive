<?php

return [
    'pages' => [
        'title' => 'سلة المحذوفات',
    ],
    'tables' => [
        'empty_state' => [
            'title' => 'سلة المحذوفات فارغة',
            'description' => 'عند حذف العناصر، ستظهر هنا لإمكانية الاستعادة أو الحذف النهائي.',
        ],
        'columns' => [
            'model_id' => 'معرّف النموذج',
            'model_type' => 'نوع النموذج',
            'deleted_by' => 'حُذف بواسطة',
            'deleted_at' => 'تاريخ الحذف',
        ],
        'actions' => [
            'view_details' => [
                'modal_heading' => 'تفاصيل السجل',
            ],
            'restore' => [
                'modal_heading' => 'استعادة السجل',
                'modal_description' => 'هل أنت متأكد من استعادة هذا السجل؟ سيتم إرجاعه إلى موقعه الأصلي.',
                'success_notification_title' => 'تمت استعادة السجل',
                'failure_notification_title' => 'فشلت استعادة السجل',
            ],
            'force_delete' => [
                'modal_heading' => 'حذف السجل نهائياً',
                'modal_description' => 'هل أنت متأكد من حذف هذا السجل نهائياً؟ لا يمكن التراجع عن هذا الإجراء وسيتم حذف السجل بالكامل من قاعدة البيانات.',
                'success_notification_title' => 'تم حذف السجل نهائياً',
                'failure_notification_title' => 'فشل حذف السجل نهائياً',
            ],
        ],
        'bulk_actions' => [
            'restore' => [
                'success_notification_title' => '{1} تمت استعادة سجل واحد|[2,*] تمت استعادة جميع السجلات (:count)',
                'success_notification_body' => '{1} تمت استعادة السجل.|[2,*] تمت استعادة جميع السجلات (:count).',
                'warning_notification_title' => 'اكتملت الاستعادة جزئياً',
                'warning_notification_body' => 'تمت استعادة :success من أصل :total سجلات. تعذر استعادة :failed سجلات.',
                'failure_notification_title' => 'فشلت الاستعادة',
                'failure_notification_body' => '{1} تعذر استعادة السجل.|[2,*] تعذر استعادة أي من السجلات (:count).',
            ],
            'force_delete' => [
                'success_notification_title' => '{1} تم حذف سجل نهائياً|[2,*] تم حذف جميع السجلات (:count) نهائياً',
                'success_notification_body' => '{1} تم حذف السجل نهائياً.|[2,*] تم حذف جميع السجلات (:count) نهائياً.',
                'warning_notification_title' => 'اكتمل الحذف جزئياً',
                'warning_notification_body' => 'تم حذف :success من أصل :total سجلات. تعذر حذف :failed سجلات.',
                'failure_notification_title' => 'فشل الحذف',
                'failure_notification_body' => '{1} تعذر حذف السجل نهائياً.|[2,*] تعذر حذف أي من السجلات (:count) نهائياً.',
            ],
        ],
    ],
];
