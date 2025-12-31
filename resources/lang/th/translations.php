<?php

return [
    'pages' => [
        'title' => 'ถังรีไซเคิล',
    ],
    'tables' => [
        'empty_state' => [
            'title' => 'ถังรีไซเคิลว่างเปล่า',
            'description' => 'เมื่อคุณลบรายการ รายการเหล่านั้นจะปรากฏที่นี่เพื่อกู้คืนหรือลบถาวร',
        ],
        'columns' => [
            'model_id' => 'รหัสโมเดล',
            'model_type' => 'ประเภทโมเดล',
            'deleted_by' => 'ลบโดย',
            'deleted_at' => 'ลบเมื่อ',
        ],
        'actions' => [
            'view_details' => [
                'modal_heading' => 'รายละเอียดระเบียน',
            ],
            'restore' => [
                'modal_heading' => 'กู้คืนระเบียน',
                'modal_description' => 'คุณแน่ใจหรือไม่ว่าต้องการกู้คืนระเบียนนี้ ระเบียนจะถูกย้ายกลับไปยังตำแหน่งเดิม',
                'success_notification_title' => 'กู้คืนระเบียนแล้ว',
                'failure_notification_title' => 'ไม่สามารถกู้คืนระเบียนได้',
            ],
            'force_delete' => [
                'modal_heading' => 'ลบระเบียนถาวร',
                'modal_description' => 'คุณแน่ใจหรือไม่ว่าต้องการลบระเบียนนี้ถาวร การดำเนินการนี้ไม่สามารถย้อนกลับได้และระเบียนจะถูกลบออกจากฐานข้อมูลโดยสมบูรณ์',
                'success_notification_title' => 'ลบระเบียนถาวรแล้ว',
                'failure_notification_title' => 'ไม่สามารถลบระเบียนถาวรได้',
            ],
        ],
        'bulk_actions' => [
            'restore' => [
                'success_notification_title' => '{1} กู้คืนระเบียนสำเร็จ|[2,*] กู้คืนระเบียนทั้งหมด :count รายการสำเร็จ',
                'success_notification_body' => '{1} ระเบียนถูกกู้คืนแล้ว|[2,*] ระเบียนทั้งหมด :count รายการถูกกู้คืนแล้ว',
                'warning_notification_title' => 'กู้คืนสำเร็จบางส่วน',
                'warning_notification_body' => 'กู้คืนแล้ว :success จากทั้งหมด :total รายการ ไม่สามารถกู้คืนได้ :failed รายการ',
                'failure_notification_title' => 'การกู้คืนล้มเหลว',
                'failure_notification_body' => '{1} ไม่สามารถกู้คืนระเบียนได้|[2,*] ไม่สามารถกู้คืนระเบียนทั้ง :count รายการได้',
            ],
            'force_delete' => [
                'success_notification_title' => '{1} ลบระเบียนถาวรแล้ว|[2,*] ลบระเบียนทั้งหมด :count รายการถาวรแล้ว',
                'success_notification_body' => '{1} ระเบียนถูกลบถาวรแล้ว|[2,*] ระเบียนทั้งหมด :count รายการถูกลบถาวรแล้ว',
                'warning_notification_title' => 'ลบสำเร็จบางส่วน',
                'warning_notification_body' => 'ลบถาวรแล้ว :success จากทั้งหมด :total รายการ ไม่สามารถลบได้ :failed รายการ',
                'failure_notification_title' => 'การลบล้มเหลว',
                'failure_notification_body' => '{1} ไม่สามารถลบระเบียนถาวรได้|[2,*] ไม่สามารถลบระเบียนทั้ง :count รายการถาวรได้',
            ],
        ],
    ],
];
