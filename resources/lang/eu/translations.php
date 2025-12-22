<?php

return [
    'pages' => [
        'title' => 'Birziklatze ontzia',
    ],
    'tables' => [
        'empty_state' => [
            'title' => 'Ez duzu berreskuragarri den modelorik.',
            'description' => 'Elementuak ezabatzen dituzunean, hemen agertuko dira leheneratzeko edo behin betiko ezabatzeko.',
        ],
        'columns' => [
            'model_id' => 'Modelu IDa',
            'model_type' => 'Modelu mota',
            'deleted_by' => 'Honek ezabatua',
            'deleted_at' => 'Ezabatuta',
        ],
        'actions' => [
            'view_details' => [
                'modal_heading' => 'Erregistroaren xehetasunak',
            ],
            'restore' => [
                'success_notification_title' => 'Eredua berreskuratu da',
                'failure_notification_title' => 'Eredua berreskuratzeak huts egin du',
            ],
            'force_delete' => [
                'success_notification_title' => 'Eredua betirako ezabatu da',
                'failure_notification_title' => 'Eredua betirako ezabatzeak huts egin du',
            ],
        ],
        'bulk_actions' => [
            'restore' => [
                'success_notification_title' => '{1} Eredua ondo berreskuratu da|[2,*] :count eredu guztiak ondo berreskuratu dira',
                'success_notification_body' => '{1} Eredua berreskuratu da.|[2,*] :count eredu guztiak berreskuratu dira.',
                'warning_notification_title' => 'Berreskuratzea partzialki burutu da',
                'warning_notification_body' => ':total ereduetatik :success berreskuratu dira. :failed ereduak ezin izan dira berreskuratu.',
                'failure_notification_title' => 'Berreskuratzea huts egin du',
                'failure_notification_body' => '{1} Eredua ezin izan da berreskuratu.|[2,*] :count eredutik bat bera ere ezin izan da berreskuratu.',
            ],
            'force_delete' => [
                'success_notification_title' => '{1} Eredua behin betiko ezabatu da|[2,*] :count eredu guztiak behin betiko ezabatu dira',
                'success_notification_body' => '{1} Eredua behin betiko ezabatu da.|[2,*] :count eredu guztiak behin betiko ezabatu dira.',
                'warning_notification_title' => 'Ezabatzea partzialki burutu da',
                'warning_notification_body' => ':total ereduetatik :success behin betiko ezabatu dira. :failed ereduak ezin izan dira ezabatu.',
                'failure_notification_title' => 'Ezabatzea huts egin du',
                'failure_notification_body' => '{1} Eredua ezin izan da behin betiko ezabatu.|[2,*] :count eredutik bat bera ere ezin izan da behin betiko ezabatu.',
            ],
        ],
    ],
];
