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
        ]
    ]
];
