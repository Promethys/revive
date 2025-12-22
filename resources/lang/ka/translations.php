<?php

return [
    'pages' => [
        'title' => 'ნაგულისყენი ურნა',
    ],
    'tables' => [
        'empty_state' => [
            'title' => 'არ გაქვთ გადამუშავებადი მოდელი.',
            'description' => 'როდესაც ელემენტებს წაშლით, ისინი აქ გამოჩნდება აღდგენის ან სამუდამოდ წაშლისთვის.',
        ],
        'columns' => [
            'model_id' => 'მოდელის ID',
            'model_type' => 'მოდელის ტიპი',
            'deleted_by' => 'წაშლილია მიერ',
            'deleted_at' => 'წაშლის თარიღი',
        ],
        'actions' => [
            'view_details' => [
                'modal_heading' => 'ჩანაწერის დეტალები',
            ],
            'restore' => [
                'success_notification_title' => 'მოდელი აღდგა',
                'failure_notification_title' => 'მოდელის აღდგენა ვერ მოხერხდა',
            ],
            'force_delete' => [
                'success_notification_title' => 'მოდელი სამუდამოდ წაიშალა',
                'failure_notification_title' => 'მოდელის სამუდამო წაშლა ვერ მოხერხდა',
            ],
        ],
        'bulk_actions' => [
            'restore' => [
                'success_notification_title' => '{1} მოდელი წარმატებით აღდგა|[2,*] ყველა :count მოდელი წარმატებით აღდგა',
                'success_notification_body' => '{1} მოდელი აღდგა.|[2,*] ყველა :count მოდელი აღდგა.',
                'warning_notification_title' => 'აღდგენა ნაწილობრივ დასრულდა',
                'warning_notification_body' => ':total მოდელიდან :success აღდგა. :failed მოდელის აღდგენა ვერ მოხერხდა.',
                'failure_notification_title' => 'აღდგენა ვერ მოხერხდა',
                'failure_notification_body' => '{1} მოდელის აღდგენა ვერ მოხერხდა.|[2,*] :count მოდელიდან ვერაფერი აღდგა.',
            ],
            'force_delete' => [
                'success_notification_title' => '{1} მოდელი სამუდამოდ წაიშალა|[2,*] ყველა :count მოდელი სამუდამოდ წაიშალა',
                'success_notification_body' => '{1} მოდელი სამუდამოდ წაიშალა.|[2,*] ყველა :count მოდელი სამუდამოდ წაიშალა.',
                'warning_notification_title' => 'წაშლა ნაწილობრივ დასრულდა',
                'warning_notification_body' => ':total მოდელიდან :success სამუდამოდ წაიშალა. :failed მოდელი ვერ წაიშალა.',
                'failure_notification_title' => 'წაშლა ვერ მოხერხდა',
                'failure_notification_body' => '{1} მოდელი სამუდამოდ ვერ წაიშალა.|[2,*] :count მოდელიდან ვერაფერი წაიშალა.',
            ],
        ],
    ],
];
