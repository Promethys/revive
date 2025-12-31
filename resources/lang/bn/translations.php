<?php

return [
    'pages' => [
        'title' => 'রিসাইকেল বিন',
    ],
    'tables' => [
        'empty_state' => [
            'title' => 'রিসাইকেল বিন খালি',
            'description' => 'আপনি কোনো আইটেম মুছে ফেললে, সেগুলো এখানে পুনরুদ্ধার বা স্থায়ীভাবে মুছে ফেলার জন্য দেখানো হবে।',
        ],
        'columns' => [
            'model_id' => 'মডেল আইডি',
            'model_type' => 'মডেলের ধরন',
            'deleted_by' => 'মুছে ফেলেছে',
            'deleted_at' => 'মুছে ফেলার সময়',
        ],
        'actions' => [
            'view_details' => [
                'modal_heading' => 'রেকর্ডের বিস্তারিত',
            ],
            'restore' => [
                'modal_heading' => 'রেকর্ড পুনরুদ্ধার',
                'modal_description' => 'আপনি কি নিশ্চিত যে এই রেকর্ডটি পুনরুদ্ধার করতে চান?',
                'success_notification_title' => 'রেকর্ড পুনরুদ্ধার করা হয়েছে',
                'failure_notification_title' => 'রেকর্ড পুনরুদ্ধার ব্যর্থ হয়েছে',
            ],
            'force_delete' => [
                'modal_heading' => 'স্থায়ীভাবে রেকর্ড মুছে ফেলুন',
                'modal_description' => 'আপনি কি নিশ্চিত? এই কাজটি ফেরত নেওয়া যাবে না।',
                'success_notification_title' => 'রেকর্ড স্থায়ীভাবে মুছে ফেলা হয়েছে',
                'failure_notification_title' => 'স্থায়ীভাবে মুছে ফেলা ব্যর্থ হয়েছে',
            ],
        ],
        'bulk_actions' => [
            'restore' => [
                'success_notification_title' => '{1} রেকর্ড পুনরুদ্ধার হয়েছে|[2,*] সব :count টি রেকর্ড পুনরুদ্ধার হয়েছে',
                'success_notification_body' => '{1} রেকর্ডটি পুনরুদ্ধার করা হয়েছে।|[2,*] সব :count টি রেকর্ড পুনরুদ্ধার করা হয়েছে।',
                'warning_notification_title' => 'আংশিক পুনরুদ্ধার সম্পন্ন',
                'warning_notification_body' => ':total এর মধ্যে :success টি পুনরুদ্ধার হয়েছে। :failed টি ব্যর্থ হয়েছে।',
                'failure_notification_title' => 'পুনরুদ্ধার ব্যর্থ',
                'failure_notification_body' => '{1} রেকর্ডটি পুনরুদ্ধার করা যায়নি।|[2,*] কোনো :count টি রেকর্ডই পুনরুদ্ধার করা যায়নি।',
            ],
            'force_delete' => [
                'success_notification_title' => '{1} রেকর্ড স্থায়ীভাবে মুছে ফেলা হয়েছে|[2,*] সব :count টি রেকর্ড স্থায়ীভাবে মুছে ফেলা হয়েছে',
                'success_notification_body' => '{1} রেকর্ডটি স্থায়ীভাবে মুছে ফেলা হয়েছে।|[2,*] সব :count টি রেকর্ড স্থায়ীভাবে মুছে ফেলা হয়েছে।',
                'warning_notification_title' => 'আংশিক মুছে ফেলা সম্পন্ন',
                'warning_notification_body' => ':total এর মধ্যে :success টি মুছে ফেলা হয়েছে। :failed টি ব্যর্থ হয়েছে।',
                'failure_notification_title' => 'মুছে ফেলা ব্যর্থ',
                'failure_notification_body' => '{1} রেকর্ডটি স্থায়ীভাবে মুছে ফেলা যায়নি।|[2,*] কোনো :count টি রেকর্ডই মুছে ফেলা যায়নি।',
            ],
        ],
    ],
];
