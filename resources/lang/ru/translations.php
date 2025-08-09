<?php

return [
    'pages' => [
        'title' => 'Корзина',
    ],
    'tables' => [
        'empty_state' => 'Нет доступных для восстановления моделей.',

        'columns' => [
            'model_id' => 'ID модели',
            'model_type' => 'Тип модели',
            'deleted_at' => 'Удалено',
        ],

        'actions' => [
            'view_details' => [
                'modal_heading' => 'Детали записи',
            ],
            'restore' => [
                'success_notification_title' => 'Модель восстановлена',
                'failure_notification_title' => 'Не удалось восстановить модель',
            ],
            'force_delete' => [
                'success_notification_title' => 'Модель удалена навсегда',
                'failure_notification_title' => 'Не удалось удалить модель навсегда',
            ]
        ],
    ],
];
