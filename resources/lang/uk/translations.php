<?php

return [
    'pages' => [
        'title' => 'Кошик',
    ],
    'tables' => [
        'empty_state' => [
            'title' => 'Кошик порожній',
            'description' => 'Коли ви видаляєте елементи, вони з\'являтимуться тут для відновлення або остаточного видалення.',
        ],
        'columns' => [
            'model_id' => 'ID моделі',
            'model_type' => 'Тип моделі',
            'deleted_by' => 'Видалено',
            'deleted_at' => 'Видалено',
        ],
        'actions' => [
            'view_details' => [
                'modal_heading' => 'Деталі запису',
            ],
            'restore' => [
                'modal_heading' => 'Відновити запис',
                'modal_description' => 'Ви впевнені, що хочете відновити цей запис?',
                'success_notification_title' => 'Запис відновлено',
                'failure_notification_title' => 'Не вдалося відновити запис',
            ],
            'force_delete' => [
                'modal_heading' => 'Видалити запис назавжди',
                'modal_description' => 'Цю дію неможливо скасувати.',
                'success_notification_title' => 'Запис видалено назавжди',
                'failure_notification_title' => 'Не вдалося видалити запис назавжди',
            ],
        ],
        'bulk_actions' => [
            'restore' => [
                'success_notification_title' => '{1} Запис успішно відновлено|[2,*] Усі :count записів успішно відновлено',
                'success_notification_body' => '{1} Запис було відновлено.|[2,*] Усі :count записів було відновлено.',
                'warning_notification_title' => 'Відновлення частково завершено',
                'warning_notification_body' => 'Відновлено :success з :total записів. :failed записів не вдалося відновити.',
                'failure_notification_title' => 'Відновлення не вдалося',
                'failure_notification_body' => '{1} Запис не вдалося відновити.|[2,*] Жоден з :count записів не вдалося відновити.',
            ],
            'force_delete' => [
                'success_notification_title' => '{1} Запис видалено назавжди|[2,*] Усі :count записів видалено назавжди',
                'success_notification_body' => '{1} Запис було видалено назавжди.|[2,*] Усі :count записів було видалено назавжди.',
                'warning_notification_title' => 'Видалення частково завершено',
                'warning_notification_body' => 'Видалено назавжди :success з :total записів. :failed записів не вдалося видалити.',
                'failure_notification_title' => 'Видалення не вдалося',
                'failure_notification_body' => '{1} Запис не вдалося видалити назавжди.|[2,*] Жоден з :count записів не вдалося видалити назавжди.',
            ],
        ],
    ],
];
