<?php

return [
    'pages' => [
        'title' => 'Geri Dönüşüm Kutusu',
    ],
    'tables' => [
        'empty_state' => [
            'title' => 'Geri dönüştürülebilir model bulunmamaktadır.',
            'description' => 'Öğeleri sildiğinizde, geri yükleme veya kalıcı silme için burada görünecekler.',
        ],
        'columns' => [
            'model_id' => 'Model Kimliği',
            'model_type' => 'Model Türü',
            'deleted_by' => 'Tarafından silindi',
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
            ],
        ],
        'bulk_actions' => [
            'restore' => [
                'success_notification_title' => '{1} Model başarıyla geri yüklendi|[2,*] Tüm :count model başarıyla geri yüklendi',
                'success_notification_body' => '{1} Model geri yüklendi|[2,*] Tüm :count model geri yüklendi',
                'warning_notification_title' => 'Geri yükleme kısmen tamamlandı',
                'warning_notification_body' => 'Toplam :total modelden :success tanesi geri yüklendi. :failed model geri yüklenemedi.',
                'failure_notification_title' => 'Geri yükleme başarısız',
                'failure_notification_body' => '{1} Model geri yüklenemedi|[2,*] :count modelin hiçbiri geri yüklenemedi.',
            ],
            'force_delete' => [
                'success_notification_title' => '{1} Model kalıcı olarak silindi|[2,*] Tüm :count model kalıcı olarak silindi',
                'success_notification_body' => '{1} Model kalıcı olarak silindi|[2,*] Tüm :count model kalıcı olarak silindi',
                'warning_notification_title' => 'Silme işlemi kısmen tamamlandı',
                'warning_notification_body' => 'Toplam :total modelden :success tanesi kalıcı olarak silindi. :failed model silinemedi.',
                'failure_notification_title' => 'Silme işlemi başarısız',
                'failure_notification_body' => '{1} Model kalıcı olarak silinemedi|[2,*] :count modelin hiçbiri kalıcı olarak silinemedi.',
            ],
        ],
    ],
];
