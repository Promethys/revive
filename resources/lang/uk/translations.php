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

        'bulk_actions' => [
            'restore' => [
                'success_notification_title' => '{1} Модель успішно відновлено|[2,*] Усі :count моделей успішно відновлено',
                'success_notification_body' => '{1} Модель була відновлена|[2,*] Усі :count моделей були відновлені',

                'warning_notification_title' => 'Відновлення частково завершено',
                'warning_notification_body' => 'Відновлено :success з :total моделей. Не вдалося відновити :failed моделей.',

                'failure_notification_title' => 'Не вдалося відновити',
                'failure_notification_body' => '{1} Не вдалося відновити модель|[2,*] Жодну з :count моделей не вдалося відновити.',
            ],
            'force_delete' => [
                'success_notification_title' => '{1} Модель остаточно видалено|[2,*] Усі :count моделей остаточно видалено',
                'success_notification_body' => '{1} Модель була остаточно видалена|[2,*] Усі :count моделей були остаточно видалені',

                'warning_notification_title' => 'Видалення частково завершено',
                'warning_notification_body' => 'Остаточно видалено :success з :total моделей. Не вдалося видалити :failed моделей.',

                'failure_notification_title' => 'Не вдалося видалити',
                'failure_notification_body' => '{1} Не вдалося остаточно видалити модель|[2,*] Жодну з :count моделей не вдалося остаточно видалити.',
            ],
        ],
    ],
];
