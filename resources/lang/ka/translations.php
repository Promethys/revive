<?php

return [
    'pages' => [
        'title' => 'ნაგულისყენი ურნა',
    ],
    'tables' => [
        'empty_state' => 'არ გაქვთ გადამუშავებადი მოდელი.',

        'columns' => [
            'model_id' => 'მოდელის ID',
            'model_type' => 'მოდელის ტიპი',
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
    ],
];
