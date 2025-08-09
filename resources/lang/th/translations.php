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
            'restore' => [
                'success_notification_title' => 'โมเดลถูกกู้คืนแล้ว',
                'failure_notification_title' => 'การกู้คืนโมเดลล้มเหลว',
            ],
            'force_delete' => [
                'success_notification_title' => 'โมเดลถูกลบอย่างถาวรแล้ว',
                'failure_notification_title' => 'การลบโมเดลอย่างถาวรล้มเหลว',
            ]
        ],
    ],
];
