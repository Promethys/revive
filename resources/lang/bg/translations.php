<?php

return [
    'pages' => [
        'title' => 'Кошче',
    ],
    'tables' => [
        'empty_state' => 'Нямате нито един възстановим модел.',

        'columns' => [
            'model_id' => 'ID на модела',
            'model_type' => 'Тип на модела',
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
        ],
    ],
];
