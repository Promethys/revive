<?php

return [
    'pages' => [
        'title' => 'Хогийн сав',
    ],
    'tables' => [
        'empty_state' => 'Дахин боловсруулах боломжтой загвар байхгүй байна.',

        'columns' => [
            'model_id' => 'Загварын ID',
            'model_type' => 'Загварын төрөл',
            'deleted_at' => 'Устгасан огноо',
        ],

        'actions' => [
            'view_details' => [
                'modal_heading' => 'Бичлэгийн дэлгэрэнгүй',
            ],
            'restore' => [
                'success_notification_title' => 'Загвар сэргээгдлээ',
                'failure_notification_title' => 'Загвар сэргээхэд алдаа гарлаа',
            ],
            'force_delete' => [
                'success_notification_title' => 'Загвар бүрмөсөн устгагдлаа',
                'failure_notification_title' => 'Загвар бүрмөсөн устгахад алдаа гарлаа',
            ],
        ],

        'bulk_actions' => [
            'restore' => [
                'success_notification_title' => '{1} Загвар амжилттай сэргээгдлээ|[2,*] Бүх :count загвар амжилттай сэргээгдлээ',
                'success_notification_body' => '{1} Загвар сэргээгдсэн.|[2,*] Бүх :count загвар сэргээгдсэн.',

                'warning_notification_title' => 'Сэргээх үйл явц хэсэгчлэн хийгдсэн',
                'warning_notification_body' => ':total загвараас :success сэргээгдсэн. :failed загварыг сэргээж чадсангүй.',

                'failure_notification_title' => 'Сэргээхэд алдаа гарлаа',
                'failure_notification_body' => '{1} Загварыг сэргээж чадсангүй.|[2,*] :count загвараас нэгийг ч сэргээж чадсангүй.',
            ],
            'force_delete' => [
                'success_notification_title' => '{1} Загвар бүрмөсөн устгагдсан|[2,*] Бүх :count загвар бүрмөсөн устгагдсан',
                'success_notification_body' => '{1} Загвар бүрмөсөн устгагдсан.|[2,*] Бүх :count загвар бүрмөсөн устгагдсан.',

                'warning_notification_title' => 'Устгах үйл явц хэсэгчлэн хийгдсэн',
                'warning_notification_body' => ':total загвараас :success бүрмөсөн устгагдсан. :failed загварыг устгаж чадсангүй.',

                'failure_notification_title' => 'Устгах үйл явц амжилтгүй',
                'failure_notification_body' => '{1} Загварыг бүрмөсөн устгаж чадсангүй.|[2,*] :count загвараас нэгийг ч бүрмөсөн устгаж чадсангүй.',
            ],
        ],
    ],
];
