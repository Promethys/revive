<?php

return [
    'pages' => [
        'title' => 'Roskakori',
    ],
    'tables' => [
        'empty_state' => 'Sinulla ei ole palautettavia malleja.',

        'columns' => [
            'model_id' => 'Mallin tunnus',
            'model_type' => 'Mallin tyyppi',
            'deleted_at' => 'Poistettu',
        ],

        'actions' => [
            'view_details' => [
                'modal_heading' => 'Tietueen tiedot',
            ],
            'restore' => [
                'success_notification_title' => 'Malli palautettu',
                'failure_notification_title' => 'Mallin palauttaminen epäonnistui',
            ],
            'force_delete' => [
                'success_notification_title' => 'Malli poistettu pysyvästi',
                'failure_notification_title' => 'Mallin pysyvä poistaminen epäonnistui',
            ]
        ],
    ],
];
