<?php

return [
    'pages' => [
        'title' => 'Koshi i riciklimit',
    ],
    'tables' => [
        'empty_state' => 'Nuk ka modele të riciklueshme.',

        'columns' => [
            'model_id' => 'ID Modeli',
            'model_type' => 'Lloji i Modelit',
            'deleted_at' => 'Fshirë më',
        ],

        'actions' => [
            'view_details' => [
                'modal_heading' => 'Detajet e Regjistrimit',
            ],
            'restore' => [
                'success_notification_title' => 'Modeli u rikthye',
                'failure_notification_title' => 'Rikthimi i modelit dështoi',
            ],
            'force_delete' => [
                'success_notification_title' => 'Modeli u fshi përgjithmonë',
                'failure_notification_title' => 'Fshirja përgjithmonë e modelit dështoi',
            ],
        ],

        'bulk_actions' => [
            'restore' => [
                'success_notification_title' => '{1} Modeli u rikthye me sukses|[2,*] Të gjithë :count modelet u rikthyen me sukses',
                'success_notification_body' => '{1} Modeli është rikthyer.|[2,*] Të gjithë :count modelet janë rikthyer.',

                'warning_notification_title' => 'Rikthimi përfundoi pjesërisht',
                'warning_notification_body' => 'U rikthyen :success nga :total modele. :failed modele nuk mundën të riktheheshin.',

                'failure_notification_title' => 'Rikthimi dështoi',
                'failure_notification_body' => '{1} Modeli nuk mund të rikthehej.|[2,*] Asnjë nga :count modelet nuk mund të rikthehej.',
            ],
            'force_delete' => [
                'success_notification_title' => '{1} Modeli u fshi përgjithmonë|[2,*] Të gjithë :count modelet u fshinë përgjithmonë',
                'success_notification_body' => '{1} Modeli është fshirë përgjithmonë.|[2,*] Të gjithë :count modelet janë fshirë përgjithmonë.',

                'warning_notification_title' => 'Fshirja përfundoi pjesërisht',
                'warning_notification_body' => 'U fshinë përgjithmonë :success nga :total modele. :failed modele nuk mundën të fshiheshin.',

                'failure_notification_title' => 'Fshirja dështoi',
                'failure_notification_body' => '{1} Modeli nuk mund të fshihej përgjithmonë.|[2,*] Asnjë nga :count modelet nuk mund të fshihej përgjithmonë.',
            ],
        ],
    ],
];
