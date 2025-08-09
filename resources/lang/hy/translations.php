<?php

return [
    'pages' => [
        'title' => 'Վերամշակման աղբարկղ',
    ],
    'tables' => [
        'empty_state' => 'Դուք չունեք վերականգնվող մոդելներ։',

        'columns' => [
            'model_id' => 'Մոդելի ID',
            'model_type' => 'Մոդելի տեսակ',
            'deleted_at' => 'Ջնջվել է',
        ],

        'actions' => [
            'view_details' => [
                'modal_heading' => 'Գրանցման մանրամասներ',
            ],
            'restore' => [
                'success_notification_title' => 'Մոդելը վերականգնվեց',
                'failure_notification_title' => 'Մոդելի վերականգնումը չհաջողվեց',
            ],
            'force_delete' => [
                'success_notification_title' => 'Մոդելը մշտապես ջնջվեց',
                'failure_notification_title' => 'Մոդելի մշտական ջնջումը չհաջողվեց',
            ]
        ],
    ],
];
