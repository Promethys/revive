<?php

return [
    'pages' => [
        'title' => 'Kanta za otpad',
    ],
    'tables' => [
        'empty_state' => 'Nemate nijedan model za oporavak.',

        'columns' => [
            'model_id' => 'ID modela',
            'model_type' => 'Tip modela',
            'deleted_at' => 'Izbrisano na',
        ],

        'actions' => [
            'view_details' => [
                'modal_heading' => 'Detalji zapisa',
            ],
            'restore' => [
                'success_notification_title' => 'Model je obnovljen',
                'failure_notification_title' => 'Neuspjeh pri obnavljanju modela',
            ],
            'force_delete' => [
                'success_notification_title' => 'Model je trajno obrisan',
                'failure_notification_title' => 'Neuspjeh pri trajnom brisanju modela',
            ],
        ],

        'bulk_actions' => [
            'restore' => [
                'success_notification_title' => '{1} Model je uspješno vraćen|[2,*] Svi :count modeli su uspješno vraćeni',
                'success_notification_body' => '{1} Model je vraćen.|[2,*] Svi :count modeli su vraćeni.',

                'warning_notification_title' => 'Vraćanje djelimično završeno',
                'warning_notification_body' => 'Vraćeno je :success od :total modela. :failed modela nije moglo biti vraćeno.',

                'failure_notification_title' => 'Vraćanje nije uspjelo',
                'failure_notification_body' => '{1} Model nije mogao biti vraćen.|[2,*] Nijedan od :count modela nije mogao biti vraćen.',
            ],
            'force_delete' => [
                'success_notification_title' => '{1} Model je trajno obrisan|[2,*] Svi :count modeli su trajno obrisani',
                'success_notification_body' => '{1} Model je trajno obrisan.|[2,*] Svi :count modeli su trajno obrisani.',

                'warning_notification_title' => 'Brisanje djelimično završeno',
                'warning_notification_body' => 'Trajno obrisano :success od :total modela. :failed modela nije moglo biti obrisano.',

                'failure_notification_title' => 'Brisanje nije uspjelo',
                'failure_notification_body' => '{1} Model nije mogao biti trajno obrisan.|[2,*] Nijedan od :count modela nije mogao biti trajno obrisan.',
            ],
        ],
    ],
];
