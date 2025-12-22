<?php

return [
    'pages' => [
        'title' => 'Корзина',
    ],
    'tables' => [
        'empty_state' => [
            'title' => 'Нет доступных для восстановления моделей.',
            'description' => 'Когда вы удаляете элементы, они будут отображаться здесь для восстановления или окончательного удаления.',
        ],
        'columns' => [
            'model_id' => 'ID модели',
            'model_type' => 'Тип модели',
            'deleted_by' => 'Удалено',
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
            ],
        ],
        'bulk_actions' => [
            'restore' => [
                'success_notification_title' => '{1} Модель успешно восстановлена|[2,*] Все :count моделей успешно восстановлены',
                'success_notification_body' => '{1} Модель была восстановлена.|[2,*] Все :count моделей были восстановлены.',
                'warning_notification_title' => 'Восстановление частично завершено',
                'warning_notification_body' => 'Восстановлено :success из :total моделей. :failed моделей не удалось восстановить.',
                'failure_notification_title' => 'Восстановление не удалось',
                'failure_notification_body' => '{1} Модель не удалось восстановить.|[2,*] Ни одну из :count моделей не удалось восстановить.',
            ],
            'force_delete' => [
                'success_notification_title' => '{1} Модель удалена безвозвратно|[2,*] Все :count моделей удалены безвозвратно',
                'success_notification_body' => '{1} Модель была удалена безвозвратно.|[2,*] Все :count моделей были удалены безвозвратно.',
                'warning_notification_title' => 'Удаление частично завершено',
                'warning_notification_body' => 'Безвозвратно удалено :success из :total моделей. :failed моделей не удалось удалить.',
                'failure_notification_title' => 'Удаление не удалось',
                'failure_notification_body' => '{1} Модель не удалось удалить безвозвратно.|[2,*] Ни одну из :count моделей не удалось удалить безвозвратно.',
            ],
        ],
    ],
];
