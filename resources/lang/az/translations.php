<?php

return [
    'pages' => [
        'title' => 'Tullantı qutusu',
    ],
    'tables' => [
        'empty_state' => 'Heç bir bərpa edilə bilən modeliniz yoxdur.',

        'columns' => [
            'model_id' => 'Model ID',
            'model_type' => 'Model Növü',
            'deleted_at' => 'Silinmə Tarixi',
        ],

        'actions' => [
            'view_details' => [
                'modal_heading' => 'Qeydin detalları',
            ],
            'restore' => [
                'success_notification_title' => 'Model bərpa edildi',
                'failure_notification_title' => 'Modeli bərpa etmək alınmadı',
            ],
            'force_delete' => [
                'success_notification_title' => 'Model həmişəlik silindi',
                'failure_notification_title' => 'Modeli həmişəlik silmək alınmadı',
            ],
        ],

        'bulk_actions' => [
            'restore' => [
                'success_notification_title' => '{1} Model uğurla bərpa edildi|[2,*] Bütün :count modellər uğurla bərpa edildi',
                'success_notification_body' => '{1} Model bərpa edildi.|[2,*] Bütün :count modellər bərpa edildi.',

                'warning_notification_title' => 'Bərpa qismən tamamlandı',
                'warning_notification_body' => ':total modeldən :success bərpa edildi. :failed modeli bərpa etmək mümkün olmadı.',

                'failure_notification_title' => 'Bərpa uğursuz oldu',
                'failure_notification_body' => '{1} Model bərpa edilə bilmədi.|[2,*] Heç bir :count model bərpa edilə bilmədi.',
            ],
            'force_delete' => [
                'success_notification_title' => '{1} Model daimi silindi|[2,*] Bütün :count modellər daimi silindi',
                'success_notification_body' => '{1} Model daimi silindi.|[2,*] Bütün :count modellər daimi silindi.',

                'warning_notification_title' => 'Silinmə qismən tamamlandı',
                'warning_notification_body' => 'Daimi silinmə :success modeldən :total modelə. :failed modeli silmək mümkün olmadı.',

                'failure_notification_title' => 'Silinmə uğursuz oldu',
                'failure_notification_body' => '{1} Model daimi silinə bilmədi.|[2,*] Heç bir :count model daimi silinə bilmədi.',
            ],
        ],
    ],
];
