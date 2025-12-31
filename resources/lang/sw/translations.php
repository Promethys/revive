<?php

return [
    'pages' => [
        'title' => 'Pipa la taka',
    ],
    'tables' => [
        'empty_state' => [
            'title' => 'Pipa la taka liko tupu',
            'description' => 'Unapofuta vipengee, vitaonekana hapa kwa ajili ya kurejeshwa au kufutwa kabisa.',
        ],
        'columns' => [
            'model_id' => 'Kitambulisho cha modeli',
            'model_type' => 'Aina ya modeli',
            'deleted_by' => 'Imefutwa na',
            'deleted_at' => 'Imefutwa tarehe',
        ],
        'actions' => [
            'view_details' => [
                'modal_heading' => 'Maelezo ya rekodi',
            ],
            'restore' => [
                'modal_heading' => 'Rejesha rekodi',
                'modal_description' => 'Je, una uhakika unataka kurejesha rekodi hii? Rekodi itarudishwa katika eneo lake la awali.',
                'success_notification_title' => 'Rekodi imerejeshwa',
                'failure_notification_title' => 'Imeshindikana kurejesha rekodi',
            ],
            'force_delete' => [
                'modal_heading' => 'Futa rekodi kabisa',
                'modal_description' => 'Je, una uhakika unataka kufuta rekodi hii kabisa? Hatua hii haiwezi kutenduliwa na rekodi itaondolewa kabisa kutoka kwenye hifadhidata.',
                'success_notification_title' => 'Rekodi imefutwa kabisa',
                'failure_notification_title' => 'Imeshindikana kufuta rekodi kabisa',
            ],
        ],
        'bulk_actions' => [
            'restore' => [
                'success_notification_title' => '{1} Rekodi imerejeshwa kwa mafanikio|[2,*] Rekodi zote :count zimerejeshwa kwa mafanikio',
                'success_notification_body' => '{1} Rekodi imerejeshwa|[2,*] Rekodi zote :count zimerejeshwa',
                'warning_notification_title' => 'Urejeshaji umekamilika kwa sehemu',
                'warning_notification_body' => 'Zimerejeshwa rekodi :success kati ya :total. Rekodi :failed hazikuweza kurejeshwa.',
                'failure_notification_title' => 'Urejeshaji umeshindikana',
                'failure_notification_body' => '{1} Rekodi haikuweza kurejeshwa|[2,*] Hakuna hata rekodi moja kati ya :count iliyoweza kurejeshwa',
            ],
            'force_delete' => [
                'success_notification_title' => '{1} Rekodi imefutwa kabisa|[2,*] Rekodi zote :count zimefutwa kabisa',
                'success_notification_body' => '{1} Rekodi imefutwa kabisa|[2,*] Rekodi zote :count zimefutwa kabisa',
                'warning_notification_title' => 'Ufutaji umekamilika kwa sehemu',
                'warning_notification_body' => 'Zimefutwa kabisa rekodi :success kati ya :total. Rekodi :failed hazikuweza kufutwa.',
                'failure_notification_title' => 'Ufutaji umeshindikana',
                'failure_notification_body' => '{1} Rekodi haikuweza kufutwa kabisa|[2,*] Hakuna hata rekodi moja kati ya :count iliyoweza kufutwa kabisa',
            ],
        ],
    ],
];
