<?php

return [
    'pages' => [
        'title' => 'Chiqindilar qutisi',
    ],
    'tables' => [
        'empty_state' => [
            'title' => 'Chiqindilar qutisi bo‘sh',
            'description' => 'Elementlarni o‘chirganingizda, ularni tiklash yoki butunlay o‘chirish uchun bu yerda ko‘rinadi.',
        ],
        'columns' => [
            'model_id' => 'Model ID',
            'model_type' => 'Model turi',
            'deleted_by' => 'O‘chirgan',
            'deleted_at' => 'O‘chirilgan sana',
        ],
        'actions' => [
            'view_details' => [
                'modal_heading' => 'Yozuv tafsilotlari',
            ],
            'restore' => [
                'modal_heading' => 'Yozuvni tiklash',
                'modal_description' => 'Ushbu yozuvni tiklashni xohlaysizmi? Yozuv asl joyiga qaytariladi.',
                'success_notification_title' => 'Yozuv tiklandi',
                'failure_notification_title' => 'Yozuvni tiklash amalga oshmadi',
            ],
            'force_delete' => [
                'modal_heading' => 'Yozuvni butunlay o‘chirish',
                'modal_description' => 'Ushbu yozuvni butunlay o‘chirishni xohlaysizmi? Bu amalni bekor qilib bo‘lmaydi va yozuv maʼlumotlar bazasidan to‘liq olib tashlanadi.',
                'success_notification_title' => 'Yozuv butunlay o‘chirildi',
                'failure_notification_title' => 'Yozuvni butunlay o‘chirish amalga oshmadi',
            ],
        ],
        'bulk_actions' => [
            'restore' => [
                'success_notification_title' => '{1} Yozuv muvaffaqiyatli tiklandi|[2,*] Barcha :count yozuv muvaffaqiyatli tiklandi',
                'success_notification_body' => '{1} Yozuv tiklandi|[2,*] Barcha :count yozuv tiklandi',
                'warning_notification_title' => 'Tiklash qisman yakunlandi',
                'warning_notification_body' => ':total yozuvdan :success tasi tiklandi. :failed yozuvni tiklab bo‘lmadi.',
                'failure_notification_title' => 'Tiklash amalga oshmadi',
                'failure_notification_body' => '{1} Yozuvni tiklab bo‘lmadi|[2,*] :count yozuvdan birortasi ham tiklanmadi',
            ],
            'force_delete' => [
                'success_notification_title' => '{1} Yozuv butunlay o‘chirildi|[2,*] Barcha :count yozuv butunlay o‘chirildi',
                'success_notification_body' => '{1} Yozuv butunlay o‘chirildi|[2,*] Barcha :count yozuv butunlay o‘chirildi',
                'warning_notification_title' => 'O‘chirish qisman yakunlandi',
                'warning_notification_body' => ':total yozuvdan :success tasi butunlay o‘chirildi. :failed yozuvni o‘chirib bo‘lmadi.',
                'failure_notification_title' => 'O‘chirish amalga oshmadi',
                'failure_notification_body' => '{1} Yozuvni butunlay o‘chirib bo‘lmadi|[2,*] :count yozuvdan birortasi ham butunlay o‘chirilmadi',
            ],
        ],
    ],
];
