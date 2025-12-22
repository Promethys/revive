<?php

return [
    'pages' => [
        'title' => 'Koš za smeće',
    ],
    'tables' => [
        'empty_state' => [
            'title' => 'Nemate nijedan model za oporavak.',
            'description' => 'Kada izbrišete stavke, one će se ovdje pojaviti za vraćanje ili trajno brisanje.',
        ],
        'columns' => [
            'model_id' => 'ID modela',
            'model_type' => 'Tip modela',
            'deleted_by' => 'Izbrisao',
            'deleted_at' => 'Izbrisano dana',
        ],
        'actions' => [
            'view_details' => [
                'modal_heading' => 'Detalji zapisa',
            ],
            'restore' => [
                'success_notification_title' => 'Model obnovljen',
                'failure_notification_title' => 'Obnavljanje modela nije uspjelo',
            ],
            'force_delete' => [
                'success_notification_title' => 'Model trajno obrisan',
                'failure_notification_title' => 'Trajno brisanje modela nije uspjelo',
            ],
        ],
        'bulk_actions' => [
            'restore' => [
                'success_notification_title' => '{1} Model je uspješno vraćen|[2,*] Svi :count modeli su uspješno vraćeni',
                'success_notification_body' => '{1} Model je vraćen.|[2,*] Svi :count modeli su vraćeni.',
                'warning_notification_title' => 'Vraćanje djelomično završeno',
                'warning_notification_body' => 'Vraćeno :success od :total modela. :failed modela nije vraćeno.',
                'failure_notification_title' => 'Vraćanje nije uspjelo',
                'failure_notification_body' => '{1} Model nije vraćen.|[2,*] Nijedan od :count modela nije vraćen.',
            ],
            'force_delete' => [
                'success_notification_title' => '{1} Model je trajno obrisan|[2,*] Svi :count modeli su trajno obrisani',
                'success_notification_body' => '{1} Model je trajno obrisan.|[2,*] Svi :count modeli su trajno obrisani.',
                'warning_notification_title' => 'Brisanje djelomično završeno',
                'warning_notification_body' => 'Trajno obrisano :success od :total modela. :failed modela nije obrisano.',
                'failure_notification_title' => 'Brisanje nije uspjelo',
                'failure_notification_body' => '{1} Model nije mogao biti trajno obrisan.|[2,*] Nijedan od :count modela nije mogao biti trajno obrisan.',
            ],
        ],
    ],
];
