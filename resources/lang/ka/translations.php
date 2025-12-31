<?php

return [
    'pages' => [
        'title' => 'ნაგვის ყუთი',
    ],
    'tables' => [
        'empty_state' => [
            'title' => 'ნაგვის ყუთი ცარიელია',
            'description' => 'წაშლილი ელემენტები აქ გამოჩნდება აღდგენის ან სამუდამოდ წაშლისთვის.',
        ],
        'columns' => [
            'model_id' => 'მოდელის ID',
            'model_type' => 'მოდელის ტიპი',
            'deleted_by' => 'წაშალა',
            'deleted_at' => 'წაშლის თარიღი',
        ],
        'actions' => [
            'view_details' => [
                'modal_heading' => 'ჩანაწერის დეტალები',
            ],
            'restore' => [
                'modal_heading' => 'ჩანაწერის აღდგენა',
                'modal_description' => 'დარწმუნებული ხართ, რომ გსურთ ამ ჩანაწერის აღდგენა? ჩანაწერი დაბრუნდება საწყის მდებარეობაზე.',
                'success_notification_title' => 'ჩანაწერი აღდგენილია',
                'failure_notification_title' => 'ჩანაწერის აღდგენა ვერ მოხერხდა',
            ],
            'force_delete' => [
                'modal_heading' => 'ჩანაწერის სამუდამოდ წაშლა',
                'modal_description' => 'დარწმუნებული ხართ, რომ გსურთ ამ ჩანაწერის სამუდამოდ წაშლა? ეს ქმედება შეუქცევადია და ჩანაწერი სრულად წაიშლება მონაცემთა ბაზიდან.',
                'success_notification_title' => 'ჩანაწერი სამუდამოდ წაიშალა',
                'failure_notification_title' => 'ჩანაწერის სამუდამოდ წაშლა ვერ მოხერხდა',
            ],
        ],
        'bulk_actions' => [
            'restore' => [
                'success_notification_title' => '{1} ჩანაწერი წარმატებით აღდგენილია|[2,*] ყველა :count ჩანაწერი წარმატებით აღდგენილია',
                'success_notification_body' => '{1} ჩანაწერი აღდგენილია|[2,*] ყველა :count ჩანაწერი აღდგენილია',
                'warning_notification_title' => 'აღდგენა ნაწილობრივ დასრულდა',
                'warning_notification_body' => 'აღდგენილია :success ჩანაწერი :total-დან. :failed ჩანაწერის აღდგენა ვერ მოხერხდა.',
                'failure_notification_title' => 'აღდგენა ვერ მოხერხდა',
                'failure_notification_body' => '{1} ჩანაწერის აღდგენა ვერ მოხერხდა|[2,*] :count ჩანაწერიდან არც ერთი არ აღდგენილა',
            ],
            'force_delete' => [
                'success_notification_title' => '{1} ჩანაწერი სამუდამოდ წაიშალა|[2,*] ყველა :count ჩანაწერი სამუდამოდ წაიშალა',
                'success_notification_body' => '{1} ჩანაწერი სამუდამოდ წაიშალა|[2,*] ყველა :count ჩანაწერი სამუდამოდ წაიშალა',
                'warning_notification_title' => 'წაშლა ნაწილობრივ დასრულდა',
                'warning_notification_body' => 'სამუდამოდ წაიშალა :success ჩანაწერი :total-დან. :failed ჩანაწერის წაშლა ვერ მოხერხდა.',
                'failure_notification_title' => 'წაშლა ვერ მოხერხდა',
                'failure_notification_body' => '{1} ჩანაწერის სამუდამოდ წაშლა ვერ მოხერხდა|[2,*] :count ჩანაწერიდან არც ერთი არ წაიშალა',
            ],
        ],
    ],
];
