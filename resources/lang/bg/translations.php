<?php

return [
    'pages' => [
        'title' => 'Кошче',
    ],
    'tables' => [
        'empty_state' => [
            'title' => 'Кошчето е празно',
            'description' => 'Когато изтриете записи, те ще се появят тук за възстановяване или окончателно изтриване.',
        ],
        'columns' => [
            'model_id' => 'ID на модел',
            'model_type' => 'Тип модел',
            'deleted_by' => 'Изтрит от',
            'deleted_at' => 'Дата на изтриване',
        ],
        'actions' => [
            'view_details' => [
                'modal_heading' => 'Детайли за записа',
            ],
            'restore' => [
                'modal_heading' => 'Възстановяване на запис',
                'modal_description' => 'Сигурни ли сте, че искате да възстановите този запис?',
                'success_notification_title' => 'Записът е възстановен',
                'failure_notification_title' => 'Неуспешно възстановяване на записа',
            ],
            'force_delete' => [
                'modal_heading' => 'Окончателно изтриване на запис',
                'modal_description' => 'Сигурни ли сте? Това действие е необратимо.',
                'success_notification_title' => 'Записът е изтрит окончателно',
                'failure_notification_title' => 'Неуспешно окончателно изтриване',
            ],
        ],
        'bulk_actions' => [
            'restore' => [
                'success_notification_title' => '{1} Записът е възстановен|[2,*] Всички :count записа са възстановени',
                'success_notification_body' => '{1} Записът е възстановен.|[2,*] Всички :count записа са възстановени.',
                'warning_notification_title' => 'Частично възстановяване',
                'warning_notification_body' => 'Възстановени :success от :total записа. :failed неуспешни.',
                'failure_notification_title' => 'Възстановяването неуспешно',
                'failure_notification_body' => '{1} Записът не може да бъде възстановен.|[2,*] Нито един от :count записа не беше възстановен.',
            ],
            'force_delete' => [
                'success_notification_title' => '{1} Записът е изтрит окончателно|[2,*] Всички :count записа са изтрити окончателно',
                'success_notification_body' => '{1} Записът е изтрит окончателно.|[2,*] Всички :count записа са изтрити окончателно.',
                'warning_notification_title' => 'Частично изтриване',
                'warning_notification_body' => 'Изтрити :success от :total записа. :failed неуспешни.',
                'failure_notification_title' => 'Изтриването неуспешно',
                'failure_notification_body' => '{1} Записът не може да бъде изтрит окончателно.|[2,*] Нито един от :count записа не беше изтрит.',
            ],
        ],
    ],
];
