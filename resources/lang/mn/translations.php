<?php

return [
    'pages' => [
        'title' => 'Хогийн сав',
    ],
    'tables' => [
        'empty_state' => [
            'title' => 'Хогийн сав хоосон байна',
            'description' => 'Та зүйлсийг устгасны дараа сэргээх эсвэл бүрмөсөн устгах боломжтойгоор энд харагдана.',
        ],
        'columns' => [
            'model_id' => 'Моделийн ID',
            'model_type' => 'Моделийн төрөл',
            'deleted_by' => 'Устгасан',
            'deleted_at' => 'Устгасан огноо',
        ],
        'actions' => [
            'view_details' => [
                'modal_heading' => 'Бичлэгийн дэлгэрэнгүй',
            ],
            'restore' => [
                'modal_heading' => 'Бичлэг сэргээх',
                'modal_description' => 'Та энэ бичлэгийг сэргээхдээ итгэлтэй байна уу? Бичлэг анхны байршилдаа буцна.',
                'success_notification_title' => 'Бичлэг сэргээгдлээ',
                'failure_notification_title' => 'Бичлэгийг сэргээж чадсангүй',
            ],
            'force_delete' => [
                'modal_heading' => 'Бичлэгийг бүрмөсөн устгах',
                'modal_description' => 'Та энэ бичлэгийг бүрмөсөн устгахдаа итгэлтэй байна уу? Энэ үйлдлийг буцаах боломжгүй бөгөөд бичлэг өгөгдлийн сангаас бүрэн устах болно.',
                'success_notification_title' => 'Бичлэг бүрмөсөн устгагдлаа',
                'failure_notification_title' => 'Бичлэгийг бүрмөсөн устгаж чадсангүй',
            ],
        ],
        'bulk_actions' => [
            'restore' => [
                'success_notification_title' => '{1} Бичлэг амжилттай сэргээгдлээ|[2,*] Бүх :count бичлэг амжилттай сэргээгдлээ',
                'success_notification_body' => '{1} Бичлэг сэргээгдсэн|[2,*] Бүх :count бичлэг сэргээгдсэн',
                'warning_notification_title' => 'Сэргээх ажиллагаа хэсэгчлэн дууссан',
                'warning_notification_body' => ':total бичлэгээс :success-ийг сэргээв. :failed бичлэгийг сэргээж чадсангүй.',
                'failure_notification_title' => 'Сэргээх ажиллагаа амжилтгүй боллоо',
                'failure_notification_body' => '{1} Бичлэгийг сэргээж чадсангүй|[2,*] :count бичлэгийн аль нь ч сэргээгдсэнгүй',
            ],
            'force_delete' => [
                'success_notification_title' => '{1} Бичлэг бүрмөсөн устгагдлаа|[2,*] Бүх :count бичлэг бүрмөсөн устгагдлаа',
                'success_notification_body' => '{1} Бичлэг бүрмөсөн устгагдсан|[2,*] Бүх :count бичлэг бүрмөсөн устгагдсан',
                'warning_notification_title' => 'Устгал хэсэгчлэн дууссан',
                'warning_notification_body' => ':total бичлэгээс :success-ийг бүрмөсөн устгав. :failed бичлэгийг устгаж чадсангүй.',
                'failure_notification_title' => 'Устгал амжилтгүй боллоо',
                'failure_notification_body' => '{1} Бичлэгийг бүрмөсөн устгаж чадсангүй|[2,*] :count бичлэгийн аль нь ч бүрмөсөн устгагдсангүй',
            ],
        ],
    ],
];
