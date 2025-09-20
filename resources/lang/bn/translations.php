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
            ],
        ],

        'bulk_actions' => [
            'restore' => [
                'success_notification_title' => '{1} মডেল সফলভাবে পুনরুদ্ধার করা হয়েছে|[2,*] সকল :count মডেল সফলভাবে পুনরুদ্ধার করা হয়েছে',
                'success_notification_body' => '{1} মডেলটি পুনরুদ্ধার করা হয়েছে।|[2,*] সকল :count মডেল পুনরুদ্ধার করা হয়েছে।',

                'warning_notification_title' => 'পুনরুদ্ধার আংশিকভাবে সম্পন্ন হয়েছে',
                'warning_notification_body' => ':total মডেল থেকে :success পুনরুদ্ধার করা হয়েছে। :failed মডেল পুনরুদ্ধার করা যায়নি।',

                'failure_notification_title' => 'পুনরুদ্ধার ব্যর্থ',
                'failure_notification_body' => '{1} মডেলটি পুনরুদ্ধার করা যায়নি।|[2,*] :count কোন মডেলই পুনরুদ্ধার করা যায়নি।',
            ],
            'force_delete' => [
                'success_notification_title' => '{1} মডেল স্থায়ীভাবে মোছা হয়েছে|[2,*] সকল :count মডেল স্থায়ীভাবে মোছা হয়েছে',
                'success_notification_body' => '{1} মডেলটি স্থায়ীভাবে মোছা হয়েছে।|[2,*] সকল :count মডেল স্থায়ীভাবে মোছা হয়েছে।',

                'warning_notification_title' => 'মুছা আংশিকভাবে সম্পন্ন হয়েছে',
                'warning_notification_body' => ':total মডেল থেকে :success স্থায়ীভাবে মোছা হয়েছে। :failed মডেল মোছা যায়নি।',

                'failure_notification_title' => 'মুছা ব্যর্থ',
                'failure_notification_body' => '{1} মডেলটি স্থায়ীভাবে মোছা যায়নি।|[2,*] কোনো একটি :count মডেলই স্থায়ীভাবে মোছা যায়নি।',
            ],
        ],
    ],
];
