<?php

return [
    'pages' => [
        'title' => 'Zibil qutusu',
    ],
    'tables' => [
        'empty_state' => [
            'title' => 'Zibil qutusu boşdur',
            'description' => 'Elementləri sildikdə, bərpa və ya daimi silmə üçün burada görünəcəklər.',
        ],
        'columns' => [
            'model_id' => 'Model ID',
            'model_type' => 'Model növü',
            'deleted_by' => 'Silib',
            'deleted_at' => 'Silinmə tarixi',
        ],
        'actions' => [
            'view_details' => [
                'modal_heading' => 'Qeyd detalları',
            ],
            'restore' => [
                'modal_heading' => 'Qeydi bərpa et',
                'modal_description' => 'Bu qeydi bərpa etmək istədiyinizə əminsiniz? Qeyd əvvəlki yerinə qaytarılacaq.',
                'success_notification_title' => 'Qeyd bərpa edildi',
                'failure_notification_title' => 'Qeydi bərpa etmək mümkün olmadı',
            ],
            'force_delete' => [
                'modal_heading' => 'Qeydi daimi sil',
                'modal_description' => 'Bu qeydi daimi silmək istədiyinizə əminsiniz? Bu əməliyyat geri qaytarıla bilməz.',
                'success_notification_title' => 'Qeyd daimi silindi',
                'failure_notification_title' => 'Qeydi daimi silmək mümkün olmadı',
            ],
        ],
        'bulk_actions' => [
            'restore' => [
                'success_notification_title' => '{1} Qeyd uğurla bərpa edildi|[2,*] Bütün :count qeydlər uğurla bərpa edildi',
                'success_notification_body' => '{1} Qeyd bərpa edildi.|[2,*] Bütün :count qeydlər bərpa edildi.',
                'warning_notification_title' => 'Bərpa qismən tamamlandı',
                'warning_notification_body' => ':total qeyddən :success bərpa edildi. :failed qeydi bərpa etmək mümkün olmadı.',
                'failure_notification_title' => 'Bərpa uğursuz oldu',
                'failure_notification_body' => '{1} Qeyd bərpa edilə bilmədi.|[2,*] :count qeyddən heç biri bərpa edilə bilmədi.',
            ],
            'force_delete' => [
                'success_notification_title' => '{1} Qeyd daimi silindi|[2,*] Bütün :count qeydlər daimi silindi',
                'success_notification_body' => '{1} Qeyd daimi silindi.|[2,*] Bütün :count qeydlər daimi silindi.',
                'warning_notification_title' => 'Silmə qismən tamamlandı',
                'warning_notification_body' => ':total qeyddən :success silindi. :failed qeydi silmək mümkün olmadı.',
                'failure_notification_title' => 'Silmə uğursuz oldu',
                'failure_notification_body' => '{1} Qeyd daimi silinə bilmədi.|[2,*] :count qeyddən heç biri daimi silinə bilmədi.',
            ],
        ],
    ],
];
