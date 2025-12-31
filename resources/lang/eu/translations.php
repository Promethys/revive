<?php

return [
    'pages' => [
        'title' => 'Zakarrontzia',
    ],
    'tables' => [
        'empty_state' => [
            'title' => 'Zakarrontzia hutsik dago',
            'description' => 'Elementuak ezabatzean, hemen agertuko dira leheneratzeko edo behin betiko ezabatzeko.',
        ],
        'columns' => [
            'model_id' => 'Modelo IDa',
            'model_type' => 'Modelo mota',
            'deleted_by' => 'Honek ezabatua',
            'deleted_at' => 'Ezabatze data',
        ],
        'actions' => [
            'view_details' => [
                'modal_heading' => 'Erregistroaren xehetasunak',
            ],
            'restore' => [
                'modal_heading' => 'Erregistroa leheneratu',
                'modal_description' => 'Ziur zaude erregistro hau leheneratu nahi duzula?',
                'success_notification_title' => 'Erregistroa leheneratu da',
                'failure_notification_title' => 'Ezin izan da erregistroa leheneratu',
            ],
            'force_delete' => [
                'modal_heading' => 'Erregistroa behin betiko ezabatu',
                'modal_description' => 'Ekintza hau ezin da desegin.',
                'success_notification_title' => 'Erregistroa behin betiko ezabatu da',
                'failure_notification_title' => 'Ezin izan da behin betiko ezabatu',
            ],
        ],
        'bulk_actions' => [
            'restore' => [
                'success_notification_title' => '{1} Erregistroa leheneratua|[2,*] :count erregistro guztiak leheneratuak',
                'success_notification_body' => '{1} Erregistroa leheneratu da.|[2,*] :count erregistro guztiak leheneratu dira.',
                'warning_notification_title' => 'Leheneratze partziala',
                'warning_notification_body' => ':total erregistrotik :success leheneratu dira. :failed huts egin dute.',
                'failure_notification_title' => 'Leheneratzeak huts egin du',
                'failure_notification_body' => '{1} Ezin izan da erregistroa leheneratu.|[2,*] :count erregistrotatik bat ere ez da leheneratu.',
            ],
            'force_delete' => [
                'success_notification_title' => '{1} Erregistroa behin betiko ezabatua|[2,*] :count erregistro guztiak behin betiko ezabatuak',
                'success_notification_body' => '{1} Erregistroa behin betiko ezabatu da.|[2,*] :count erregistro guztiak behin betiko ezabatu dira.',
                'warning_notification_title' => 'Ezabatze partziala',
                'warning_notification_body' => ':total erregistrotik :success ezabatu dira. :failed huts egin dute.',
                'failure_notification_title' => 'Ezabatzeak huts egin du',
                'failure_notification_body' => '{1} Ezin izan da erregistroa behin betiko ezabatu.|[2,*] :count erregistrotatik bat ere ez da ezabatu.',
            ],
        ],
    ],
];
