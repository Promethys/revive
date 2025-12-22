<?php

return [
    'pages' => [
        'title' => 'Koš',
    ],
    'tables' => [
        'empty_state' => [
            'title' => 'Ni reciklirnih modelov.',
            'description' => 'Ko izbrišete elemente, se bodo tukaj prikazali za obnovitev ali trajni izbris.',
        ],
        'columns' => [
            'model_id' => 'ID modela',
            'model_type' => 'Tip modela',
            'deleted_by' => 'Izbrisal',
            'deleted_at' => 'Izbrisano',
        ],
        'actions' => [
            'view_details' => [
                'modal_heading' => 'Podrobnosti zapisa',
            ],
            'restore' => [
                'success_notification_title' => 'Model obnovljen',
                'failure_notification_title' => 'Obnova modela ni uspela',
            ],
            'force_delete' => [
                'success_notification_title' => 'Model trajno izbrisan',
                'failure_notification_title' => 'Trajni izbris modela ni uspel',
            ],
        ],
        'bulk_actions' => [
            'restore' => [
                'success_notification_title' => '{1} Model je bil uspešno obnovljen|[2,*] Vseh :count modelov je bilo uspešno obnovljenih',
                'success_notification_body' => '{1} Model je bil obnovljen.|[2,*] Vseh :count modelov je bilo obnovljenih.',
                'warning_notification_title' => 'Obnovitev delno zaključena',
                'warning_notification_body' => 'Obnovljenih :success od :total modelov. :failed modelov ni bilo mogoče obnoviti.',
                'failure_notification_title' => 'Obnovitev ni uspela',
                'failure_notification_body' => '{1} Modela ni bilo mogoče obnoviti.|[2,*] Nobenega od :count modelov ni bilo mogoče obnoviti.',
            ],
            'force_delete' => [
                'success_notification_title' => '{1} Model trajno izbrisan|[2,*] Vseh :count modelov trajno izbrisanih',
                'success_notification_body' => '{1} Model je bil trajno izbrisan.|[2,*] Vseh :count modelov je bilo trajno izbrisanih.',
                'warning_notification_title' => 'Brisanje delno zaključeno',
                'warning_notification_body' => 'Trajno izbrisanih :success od :total modelov. :failed modelov ni bilo mogoče izbrisati.',
                'failure_notification_title' => 'Brisanje ni uspelo',
                'failure_notification_body' => '{1} Modela ni bilo mogoče trajno izbrisati.|[2,*] Nobenega od :count modelov ni bilo mogoče trajno izbrisati.',
            ],
        ],
    ],
];
