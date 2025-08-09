<?php

return [
    'pages' => [
        'title' => 'Кошик',
    ],
    'tables' => [
        'empty_state' => 'Немає доступних для відновлення моделей.',

        'columns' => [
            'model_id' => 'ID моделі',
            'model_type' => 'Тип моделі',
            'deleted_at' => 'Видалено',
        ],

        'actions' => [
            'view_details' => [
                'modal_heading' => 'Деталі запису',
            ],
            'restore' => [
                'success_notification_title' => 'Модель відновлено',
                'failure_notification_title' => 'Не вдалося відновити модель',
            ],
            'force_delete' => [
                'success_notification_title' => 'Модель видалено назавжди',
                'failure_notification_title' => 'Не вдалося видалити модель назавжди',
            ],
        ],
    ],
];
