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
        ]
    ]
];
