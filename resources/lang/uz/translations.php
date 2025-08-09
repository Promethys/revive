<?php

return [
    'pages' => [
        'title' => 'Qayta ishlash qutisi',
    ],
    'tables' => [
        'empty_state' => 'Hech qanday qayta ishlanishi mumkin bo‘lgan model yo‘q.',

        'columns' => [
            'model_id' => 'Model ID',
            'model_type' => 'Model turi',
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
            ]
        ],
    ],
];
