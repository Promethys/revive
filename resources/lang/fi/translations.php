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
            ],
        ],

        'bulk_actions' => [
            'restore' => [
                'success_notification_title' => '{1} Malli palautettiin onnistuneesti|[2,*] Kaikki :count mallia palautettiin onnistuneesti',
                'success_notification_body' => '{1} Malli on palautettu.|[2,*] Kaikki :count mallia on palautettu.',

                'warning_notification_title' => 'Palautus suoritettu osittain',
                'warning_notification_body' => 'Palautettu :success / :total mallista. :failed mallia ei voitu palauttaa.',

                'failure_notification_title' => 'Palautus epäonnistui',
                'failure_notification_body' => '{1} Mallia ei voitu palauttaa.|[2,*] Yhtään :count mallia ei voitu palauttaa.',
            ],
            'force_delete' => [
                'success_notification_title' => '{1} Malli poistettiin pysyvästi|[2,*] Kaikki :count mallia poistettiin pysyvästi',
                'success_notification_body' => '{1} Malli poistettiin pysyvästi.|[2,*] Kaikki :count mallia poistettiin pysyvästi.',

                'warning_notification_title' => 'Poisto suoritettu osittain',
                'warning_notification_body' => 'Pysyvästi poistettu :success / :total mallista. :failed mallia ei voitu poistaa.',

                'failure_notification_title' => 'Poisto epäonnistui',
                'failure_notification_body' => '{1} Mallia ei voitu poistaa pysyvästi.|[2,*] Yhtään :count mallia ei voitu poistaa pysyvästi.',
            ],
        ],
    ],
];
