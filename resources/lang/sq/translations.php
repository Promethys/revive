<?php

return [
    'pages' => [
        'title' => 'Koshi i riciklimit',
    ],
    'tables' => [
        'empty_state' => [
            'title' => 'Koshi i riciklimit është bosh',
            'description' => 'Kur fshini elemente, ato do të shfaqen këtu për rikthim ose fshirje të përhershme.',
        ],
        'columns' => [
            'model_id' => 'ID e modelit',
            'model_type' => 'Lloji i modelit',
            'deleted_by' => 'Fshirë nga',
            'deleted_at' => 'Fshirë më',
        ],
        'actions' => [
            'view_details' => [
                'modal_heading' => 'Detajet e regjistrimit',
            ],
            'restore' => [
                'modal_heading' => 'Rikthe regjistrimin',
                'modal_description' => 'A jeni i sigurt që dëshironi ta riktheni këtë regjistrim? Regjistrimi do të kthehet në vendndodhjen origjinale.',
                'success_notification_title' => 'Regjistrimi u rikthye',
                'failure_notification_title' => 'Rikthimi i regjistrimit dështoi',
            ],
            'force_delete' => [
                'modal_heading' => 'Fshi përgjithmonë regjistrimin',
                'modal_description' => 'A jeni i sigurt që dëshironi ta fshini përgjithmonë këtë regjistrim? Ky veprim nuk mund të zhbëhet dhe regjistrimi do të hiqet plotësisht nga baza e të dhënave.',
                'success_notification_title' => 'Regjistrimi u fshi përgjithmonë',
                'failure_notification_title' => 'Fshirja e përhershme e regjistrimit dështoi',
            ],
        ],
        'bulk_actions' => [
            'restore' => [
                'success_notification_title' => '{1} Regjistrimi u rikthye me sukses|[2,*] Të gjitha :count regjistrimet u rikthyen me sukses',
                'success_notification_body' => '{1} Regjistrimi u rikthye.|[2,*] Të gjitha :count regjistrimet u rikthyen.',
                'warning_notification_title' => 'Rikthimi u krye pjesërisht',
                'warning_notification_body' => 'U rikthyen :success nga :total regjistrime. :failed regjistrime nuk mund të riktheheshin.',
                'failure_notification_title' => 'Rikthimi dështoi',
                'failure_notification_body' => '{1} Regjistrimi nuk mund të rikthehej.|[2,*] Asnjë nga :count regjistrimet nuk mund të rikthehej.',
            ],
            'force_delete' => [
                'success_notification_title' => '{1} Regjistrimi u fshi përgjithmonë|[2,*] Të gjitha :count regjistrimet u fshinë përgjithmonë',
                'success_notification_body' => '{1} Regjistrimi u fshi përgjithmonë.|[2,*] Të gjitha :count regjistrimet u fshinë përgjithmonë.',
                'warning_notification_title' => 'Fshirja u krye pjesërisht',
                'warning_notification_body' => 'U fshinë përgjithmonë :success nga :total regjistrime. :failed regjistrime nuk mund të fshiheshin.',
                'failure_notification_title' => 'Fshirja dështoi',
                'failure_notification_body' => '{1} Regjistrimi nuk mund të fshihej përgjithmonë.|[2,*] Asnjë nga :count regjistrimet nuk mund të fshihej përgjithmonë.',
            ],
        ],
    ],
];
