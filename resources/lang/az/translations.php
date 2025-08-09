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
    ],
];
