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
            ],
        ],

        'bulk_actions' => [
            'restore' => [
                'success_notification_title' => '{1} กู้คืนโมเดลสำเร็จแล้ว|[2,*] กู้คืนโมเดลทั้งหมด :count รายการสำเร็จแล้ว',
                'success_notification_body' => '{1} โมเดลได้รับการกู้คืนแล้ว|[2,*] โมเดลทั้งหมด :count รายการได้รับการกู้คืนแล้ว',

                'warning_notification_title' => 'การกู้คืนสำเร็จเพียงบางส่วน',
                'warning_notification_body' => 'กู้คืนสำเร็จ :success จากทั้งหมด :total โมเดล ไม่สามารถกู้คืนโมเดลได้ :failed รายการ',

                'failure_notification_title' => 'การกู้คืนล้มเหลว',
                'failure_notification_body' => '{1} ไม่สามารถกู้คืนโมเดลได้|[2,*] ไม่สามารถกู้คืนโมเดลใดๆ จากทั้งหมด :count รายการได้',
            ],
            'force_delete' => [
                'success_notification_title' => '{1} ลบโมเดลอย่างถาวรสำเร็จแล้ว|[2,*] ลบโมเดลทั้งหมด :count รายการอย่างถาวรสำเร็จแล้ว',
                'success_notification_body' => '{1} โมเดลถูกลบอย่างถาวรแล้ว|[2,*] โมเดลทั้งหมด :count รายการถูกลบอย่างถาวรแล้ว',

                'warning_notification_title' => 'การลบสำเร็จเพียงบางส่วน',
                'warning_notification_body' => 'ลบอย่างถาวรสำเร็จ :success จากทั้งหมด :total โมเดล ไม่สามารถลบโมเดลได้ :failed รายการ',

                'failure_notification_title' => 'การลบล้มเหลว',
                'failure_notification_body' => '{1} ไม่สามารถลบโมเดลอย่างถาวรได้|[2,*] ไม่สามารถลบโมเดลใดๆ จากทั้งหมด :count รายการอย่างถาวรได้',
            ],
        ],
    ],
];
