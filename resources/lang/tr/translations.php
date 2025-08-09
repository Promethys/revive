<?php

return [
    'pages' => [
        'title' => 'Geri Dönüşüm Kutusu',
    ],
    'tables' => [
        'empty_state' => 'Geri dönüştürülebilir model bulunmamaktadır.',

        'columns' => [
            'model_id' => 'Model Kimliği',
            'model_type' => 'Model Türü',
            'deleted_at' => 'Silinme Tarihi',
        ],

        'actions' => [
            'view_details' => [
                'modal_heading' => 'Kayıt Detayları',
            ],
            'restore' => [
                'success_notification_title' => 'Model geri yüklendi',
                'failure_notification_title' => 'Model geri yüklenemedi',
            ],
            'force_delete' => [
                'success_notification_title' => 'Model kalıcı olarak silindi',
                'failure_notification_title' => 'Model kalıcı olarak silinemedi',
            ]
        ],
    ],
];
