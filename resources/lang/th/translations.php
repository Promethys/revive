<?php

return [
    'pages' => [
        'title' => 'ถังรีไซเคิล',
    ],
    'tables' => [
        'empty_state' => 'ไม่มีโมเดลที่สามารถรีไซเคิลได้',

        'columns' => [
            'model_id' => 'รหัสโมเดล',
            'model_type' => 'ประเภทโมเดล',
            'deleted_at' => 'ลบเมื่อ',
        ],

        'actions' => [
            'view_details' => [
                'modal_heading' => 'รายละเอียดเรคคอร์ด',
            ],
        ],
    ],
];
