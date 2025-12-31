<?php

return [
    'pages' => [
        'title' => 'Koš za smeće',
    ],
    'tables' => [
        'empty_state' => [
            'title' => 'Koš za smeće je prazan',
            'description' => 'Kada izbrišete stavke, ovdje će se pojaviti za vraćanje ili trajno brisanje.',
        ],
        'columns' => [
            'model_id' => 'ID modela',
            'model_type' => 'Vrsta modela',
            'deleted_by' => 'Izbrisao',
            'deleted_at' => 'Datum brisanja',
        ],
        'actions' => [
            'view_details' => [
                'modal_heading' => 'Detalji zapisa',
            ],
            'restore' => [
                'modal_heading' => 'Vrati zapis',
                'modal_description' => 'Jeste li sigurni da želite vratiti ovaj zapis?',
                'success_notification_title' => 'Zapis vraćen',
                'failure_notification_title' => 'Vraćanje zapisa nije uspjelo',
            ],
            'force_delete' => [
                'modal_heading' => 'Trajno izbriši zapis',
                'modal_description' => 'Ovu radnju nije moguće poništiti.',
                'success_notification_title' => 'Zapis trajno izbrisan',
                'failure_notification_title' => 'Trajno brisanje nije uspjelo',
            ],
        ],
        'bulk_actions' => [
            'restore' => [
                'success_notification_title' => '{1} Zapis vraćen|[2,*] Svi :count zapisi vraćeni',
                'success_notification_body' => '{1} Zapis je vraćen.|[2,*] Svi :count zapisi su vraćeni.',
                'warning_notification_title' => 'Djelomično vraćanje',
                'warning_notification_body' => 'Vraćeno :success od :total zapisa. :failed nije vraćeno.',
                'failure_notification_title' => 'Vraćanje neuspjelo',
                'failure_notification_body' => '{1} Zapis nije moguće vratiti.|[2,*] Nijedan od :count zapisa nije vraćen.',
            ],
            'force_delete' => [
                'success_notification_title' => '{1} Zapis trajno izbrisan|[2,*] Svi :count zapisi trajno izbrisani',
                'success_notification_body' => '{1} Zapis je trajno izbrisan.|[2,*] Svi :count zapisi su trajno izbrisani.',
                'warning_notification_title' => 'Djelomično brisanje',
                'warning_notification_body' => 'Izbrisano :success od :total zapisa. :failed nije izbrisano.',
                'failure_notification_title' => 'Brisanje neuspjelo',
                'failure_notification_body' => '{1} Zapis nije moguće trajno izbrisati.|[2,*] Nijedan od :count zapisa nije izbrisan.',
            ],
        ],
    ],
];
