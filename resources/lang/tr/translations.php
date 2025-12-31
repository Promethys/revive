<?php

return [
    'pages' => [
        'title' => 'Geri Dönüşüm Kutusu',
    ],
    'tables' => [
        'empty_state' => [
            'title' => 'Geri dönüşüm kutusu boş',
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
                'modal_heading' => 'Kayıt detayları',
            ],
            'restore' => [
                'modal_heading' => 'Kaydı geri yükle',
                'modal_description' => 'Bu kaydı geri yüklemek istediğinize emin misiniz?',
                'success_notification_title' => 'Kayıt geri yüklendi',
                'failure_notification_title' => 'Kayıt geri yüklenemedi',
            ],
            'force_delete' => [
                'modal_heading' => 'Kaydı kalıcı olarak sil',
                'modal_description' => 'Bu işlem geri alınamaz.',
                'success_notification_title' => 'Kayıt kalıcı olarak silindi',
                'failure_notification_title' => 'Kayıt kalıcı olarak silinemedi',
            ],
        ],
        'bulk_actions' => [
            'restore' => [
                'success_notification_title' => '{1} Kayıt başarıyla geri yüklendi|[2,*] Tüm :count kayıt başarıyla geri yüklendi',
                'success_notification_body' => '{1} Kayıt geri yüklendi|[2,*] Tüm :count kayıt geri yüklendi',
                'warning_notification_title' => 'Geri yükleme kısmen tamamlandı',
                'warning_notification_body' => 'Toplam :total kayıttan :success tanesi geri yüklendi. :failed kayıt geri yüklenemedi.',
                'failure_notification_title' => 'Geri yükleme başarısız',
                'failure_notification_body' => '{1} Kayıt geri yüklenemedi|[2,*] :count kaydın hiçbiri geri yüklenemedi.',
            ],
            'force_delete' => [
                'success_notification_title' => '{1} Kayıt kalıcı olarak silindi|[2,*] Tüm :count kayıt kalıcı olarak silindi',
                'success_notification_body' => '{1} Kayıt kalıcı olarak silindi|[2,*] Tüm :count kayıt kalıcı olarak silindi',
                'warning_notification_title' => 'Silme işlemi kısmen tamamlandı',
                'warning_notification_body' => 'Toplam :total kayıttan :success tanesi kalıcı olarak silindi. :failed kayıt silinemedi.',
                'failure_notification_title' => 'Silme işlemi başarısız',
                'failure_notification_body' => '{1} Kayıt kalıcı olarak silinemedi|[2,*] :count kaydın hiçbiri kalıcı olarak silinemedi.',
            ],
        ],
    ],
];
