<?php

return [
    'pages' => [
        'title' => 'Корзина',
    ],
    'tables' => [
        'empty_state' => [
            'title' => 'Корзина пуста',
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
                'modal_heading' => 'Восстановить запись',
                'modal_description' => 'Вы уверены, что хотите восстановить эту запись?',
                'success_notification_title' => 'Запись восстановлена',
                'failure_notification_title' => 'Не удалось восстановить запись',
            ],
            'force_delete' => [
                'modal_heading' => 'Удалить запись навсегда',
                'modal_description' => 'Это действие необратимо.',
                'success_notification_title' => 'Запись удалена навсегда',
                'failure_notification_title' => 'Не удалось удалить запись навсегда',
            ],
        ],
        'bulk_actions' => [
            'restore' => [
                'success_notification_title' => '{1} Запись успешно восстановлена|[2,*] Все :count записей успешно восстановлены',
                'success_notification_body' => '{1} Запись была восстановлена.|[2,*] Все :count записей были восстановлены.',
                'warning_notification_title' => 'Восстановление частично завершено',
                'warning_notification_body' => 'Восстановлено :success из :total записей. :failed записей не удалось восстановить.',
                'failure_notification_title' => 'Восстановление не удалось',
                'failure_notification_body' => '{1} Запись не удалось восстановить.|[2,*] Ни одну из :count записей не удалось восстановить.',
            ],
            'force_delete' => [
                'success_notification_title' => '{1} Запись удалена безвозвратно|[2,*] Все :count записей удалены безвозвратно',
                'success_notification_body' => '{1} Запись была удалена безвозвратно.|[2,*] Все :count записей были удалены безвозвратно.',
                'warning_notification_title' => 'Удаление частично завершено',
                'warning_notification_body' => 'Безвозвратно удалено :success из :total записей. :failed записей не удалось удалить.',
                'failure_notification_title' => 'Удаление не удалось',
                'failure_notification_body' => '{1} Запись не удалось удалить безвозвратно.|[2,*] Ни одну из :count записей не удалось удалить безвозвратно.',
            ],
        ],
    ],
];
