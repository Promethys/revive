<?php

return [
    'pages' => [
        'title' => 'Кошче',
    ],
    'tables' => [
        'empty_state' => [
            'title' => 'Нямате нито един възстановим модел.',
            'description' => 'Когато изтриете елементи, те ще се появят тук за възстановяване или окончателно изтриване.',
        ],
        'columns' => [
            'model_id' => 'ID на модела',
            'model_type' => 'Тип на модела',
            'deleted_by' => 'Изтрито от',
            'deleted_at' => 'Изтрит на',
        ],
        'actions' => [
            'view_details' => [
                'modal_heading' => 'Детайли за записа',
            ],
            'restore' => [
                'success_notification_title' => 'Моделът е възстановен',
                'failure_notification_title' => 'Неуспешно възстановяване на модела',
            ],
            'force_delete' => [
                'success_notification_title' => 'Моделът е изтрит завинаги',
                'failure_notification_title' => 'Неуспешно окончателно изтриване на модела',
            ],
            'bulk_actions' => [
                'restore' => [
                    'success_notification_title' => '{1} Моделът бе възстановен успешно|[2,*] Всички :count модела бяха възстановени успешно',
                    'success_notification_body' => '{1} Моделът е възстановен.|[2,*] Всички :count модела бяха възстановени.',
                    'warning_notification_title' => 'Възстановяването е частично завършено',
                    'warning_notification_body' => 'Възстановени са :success от :total модела. :failed модела не можа да бъде възстановен.',
                    'failure_notification_title' => 'Възстановяването не бе успешно',
                    'failure_notification_body' => '{1} Моделът не можа да бъде възстановен.|[2,*] Нито един от :count модела не можа да бъде възстановен.',
                ],
                'force_delete' => [
                    'success_notification_title' => '{1} Моделът бе окончателно изтрит|[2,*] Всички :count модела бяха окончателно изтрити',
                    'success_notification_body' => '{1} Моделът е окончателно изтрит.|[2,*] Всички :count модела бяха окончателно изтрити.',
                    'warning_notification_title' => 'Изтриването е частично завършено',
                    'warning_notification_body' => 'Окончателно изтрити :success от :total модела. :failed модела не можаха да бъдат изтрити.',
                    'failure_notification_title' => 'Изтриването не бе успешно',
                    'failure_notification_body' => '{1} Моделът не можа да бъде окончателно изтрит.|[2,*] Нито един от :count модела не можа да бъде окончателно изтрит.',
                ],
            ],
        ],
    ],
];
