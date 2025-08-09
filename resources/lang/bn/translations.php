<?php

return [
    'pages' => [
        'title' => 'রিসাইকেল বিন',
    ],
    'tables' => [
        'empty_state' => 'আপনার কোনো পুনরুদ্ধারযোগ্য মডেল নেই।',

        'columns' => [
            'model_id' => 'মডেল আইডি',
            'model_type' => 'মডেল টাইপ',
            'deleted_at' => 'ডিলিট হয়েছে',
        ],

        'actions' => [
            'view_details' => [
                'modal_heading' => 'রেকর্ডের বিস্তারিত',
            ],
            'restore' => [
                'success_notification_title' => 'মডেল পুনরুদ্ধার করা হয়েছে',
                'failure_notification_title' => 'মডেল পুনরুদ্ধার করতে ব্যর্থ',
            ],
            'force_delete' => [
                'success_notification_title' => 'মডেল স্থায়ীভাবে মুছে ফেলা হয়েছে',
                'failure_notification_title' => 'মডেল স্থায়ীভাবে মুছে ফেলতে ব্যর্থ',
            ]
        ],
    ],
];
