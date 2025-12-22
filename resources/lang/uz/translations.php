<?php

return [
    'pages' => [
        'title' => 'Qayta ishlash qutisi',
    ],
    'tables' => [
        'empty_state' => [
            'title' => 'Hech qanday qayta ishlanishi mumkin bo‘lgan model yo‘q.',
            'description' => 'Elementlarni o‘chirganingizda, ular tiklash yoki butunlay o‘chirish uchun shu yerda ko‘rinadi.',
        ],
        'columns' => [
            'model_id' => 'Model ID',
            'model_type' => 'Model turi',
            'deleted_by' => 'Tomonidan o‘chirildi',
            'deleted_at' => 'O‘chirildi',
        ],
        'actions' => [
            'view_details' => [
                'modal_heading' => 'Yozuv tafsilotlari',
            ],
            'restore' => [
                'success_notification_title' => 'Model qayta tiklandi',
                'failure_notification_title' => 'Modelni qayta tiklash muvaffaqiyatsiz tugadi',
            ],
            'force_delete' => [
                'success_notification_title' => 'Model butunlay o\'chirildi',
                'failure_notification_title' => 'Modelni butunlay o\'chirish muvaffaqiyatsiz tugadi',
            ],
        ],
        'bulk_actions' => [
            'restore' => [
                'success_notification_title' => '{1} Model muvaffaqiyatli tiklandi|[2,*] Barcha :count ta model muvaffaqiyatli tiklandi',
                'success_notification_body' => '{1} Model tiklandi|[2,*] Barcha :count ta model tiklandi',
                'warning_notification_title' => 'Tiklash qisman tugatildi',
                'warning_notification_body' => 'Jami :total ta modeldan :success tasi tiklandi. :failed ta modelni tiklab bo\'lmadi.',
                'failure_notification_title' => 'Tiklash muvaffaqiyatsiz tugadi',
                'failure_notification_body' => '{1} Modelni tiklab bo\'lmadi|[2,*] :count ta modelning hech biri tiklanmadi.',
            ],
            'force_delete' => [
                'success_notification_title' => '{1} Model butunlay o\'chirildi|[2,*] Barcha :count ta model butunlay o\'chirildi',
                'success_notification_body' => '{1} Model butunlay o\'chirildi|[2,*] Barcha :count ta model butunlay o\'chirildi',
                'warning_notification_title' => 'O\'chirish qisman tugatildi',
                'warning_notification_body' => 'Jami :total ta modeldan :success tasi butunlay o\'chirildi. :failed ta modelni o\'chirib bo\'lmadi.',
                'failure_notification_title' => 'O\'chirish muvaffaqiyatsiz tugadi',
                'failure_notification_body' => '{1} Modelni butunlay o\'chirib bo\'lmadi|[2,*] :count ta modelning hech biri butunlay o\'chirilmadi.',
            ],
        ],
    ],
];
