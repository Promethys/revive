<?php

return [
    'pages' => [
        'title' => 'Takataka',
    ],
    'tables' => [
        'empty_state' => [
            'title' => 'Hakuna modeli inayoweza kurejelewa.',
            'description' => 'Unapofuta vipengee, vitaonekana hapa kwa kurejeshwa au kufutwa kabisa.',
        ],
        'columns' => [
            'model_id' => 'ID ya Mfano',
            'model_type' => 'Aina ya Mfano',
            'deleted_by' => 'Imefutwa na',
            'deleted_at' => 'Imefutwa',
        ],
        'actions' => [
            'view_details' => [
                'modal_heading' => 'Maelezo ya Rekodi',
            ],
            'restore' => [
                'success_notification_title' => 'Muundo umerejeshwa',
                'failure_notification_title' => 'Imeshindwa kurejesha muundo',
            ],
            'force_delete' => [
                'success_notification_title' => 'Muundo umefutwa kabisa',
                'failure_notification_title' => 'Imeshindwa kufuta muundo kabisa',
            ],
        ],
        'bulk_actions' => [
            'restore' => [
                'success_notification_title' => '{1} Mfano umewekwa upya kwa mafanikio|[2,*] Mifano yote :count imewekwa upya kwa mafanikio',
                'success_notification_body' => '{1} Mfano umewekwa upya.|[2,*] Mifano yote :count imewekwa upya.',
                'warning_notification_title' => 'Urejeshaji umekamilika kwa sehemu',
                'warning_notification_body' => ':success kati ya :total mifano imewekwa upya. :failed mifano haikuweza kurejeshwa.',
                'failure_notification_title' => 'Urejeshaji umeshindikana',
                'failure_notification_body' => '{1} Mfano haukuweza kurejeshwa.|[2,*] Hakuna kati ya :count mifano iliyo wekwa upya.',
            ],
            'force_delete' => [
                'success_notification_title' => '{1} Mfano umefutwa kabisa|[2,*] Mifano yote :count imefutwa kabisa',
                'success_notification_body' => '{1} Mfano umefutwa kabisa.|[2,*] Mifano yote :count imefutwa kabisa.',
                'warning_notification_title' => 'Ufutaji umekamilika kwa sehemu',
                'warning_notification_body' => ':success kati ya :total mifano imefutwa kabisa. :failed mifano haikuweza kufutwa.',
                'failure_notification_title' => 'Ufutaji umeshindikana',
                'failure_notification_body' => '{1} Mfano haukuweza kufutwa kabisa.|[2,*] Hakuna kati ya :count mifano iliyo weza kufutwa kabisa.',
            ],
        ],
    ],
];
