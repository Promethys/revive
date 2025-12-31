<?php

return [
    'pages' => [
        'title' => 'Roskakori',
    ],
    'tables' => [
        'empty_state' => [
            'title' => 'Roskakori on tyhjä',
            'description' => 'Kun poistat kohteita, ne näkyvät täällä palauttamista tai pysyvää poistoa varten.',
        ],
        'columns' => [
            'model_id' => 'Mallin ID',
            'model_type' => 'Mallin tyyppi',
            'deleted_by' => 'Poistanut',
            'deleted_at' => 'Poistopäivä',
        ],
        'actions' => [
            'view_details' => [
                'modal_heading' => 'Tietueen tiedot',
            ],
            'restore' => [
                'modal_heading' => 'Palauta tietue',
                'modal_description' => 'Haluatko varmasti palauttaa tämän tietueen?',
                'success_notification_title' => 'Tietue palautettu',
                'failure_notification_title' => 'Tietueen palautus epäonnistui',
            ],
            'force_delete' => [
                'modal_heading' => 'Poista tietue pysyvästi',
                'modal_description' => 'Tätä toimintoa ei voi perua.',
                'success_notification_title' => 'Tietue poistettu pysyvästi',
                'failure_notification_title' => 'Pysyvä poisto epäonnistui',
            ],
        ],
        'bulk_actions' => [
            'restore' => [
                'success_notification_title' => '{1} Tietue palautettu|[2,*] Kaikki :count tietuetta palautettu',
                'success_notification_body' => '{1} Tietue palautettiin.|[2,*] Kaikki :count tietuetta palautettiin.',
                'warning_notification_title' => 'Osittainen palautus',
                'warning_notification_body' => 'Palautettu :success / :total tietuetta. :failed epäonnistui.',
                'failure_notification_title' => 'Palautus epäonnistui',
                'failure_notification_body' => '{1} Tietuetta ei voitu palauttaa.|[2,*] Yhtäkään :count tietuetta ei voitu palauttaa.',
            ],
            'force_delete' => [
                'success_notification_title' => '{1} Tietue poistettu pysyvästi|[2,*] Kaikki :count tietuetta poistettu pysyvästi',
                'success_notification_body' => '{1} Tietue poistettiin pysyvästi.|[2,*] Kaikki :count tietuetta poistettiin pysyvästi.',
                'warning_notification_title' => 'Osittainen poisto',
                'warning_notification_body' => 'Poistettu :success / :total tietuetta. :failed epäonnistui.',
                'failure_notification_title' => 'Poisto epäonnistui',
                'failure_notification_body' => '{1} Tietuetta ei voitu poistaa pysyvästi.|[2,*] Yhtäkään :count tietuetta ei voitu poistaa.',
            ],
        ],
    ],
];
