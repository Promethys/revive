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
    ],
];
