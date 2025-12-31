<?php

return [
    'pages' => [
        'title' => 'Kanta za smeće',
    ],
    'tables' => [
        'empty_state' => [
            'title' => 'Kanta za smeće je prazna',
            'description' => 'Kada obrišete zapise, oni će se ovdje pojaviti za vraćanje ili trajno brisanje.',
        ],
        'columns' => [
            'model_id' => 'ID modela',
            'model_type' => 'Tip modela',
            'deleted_by' => 'Obrisao',
            'deleted_at' => 'Vrijeme brisanja',
        ],
        'actions' => [
            'view_details' => [
                'modal_heading' => 'Detalji zapisa',
            ],
            'restore' => [
                'modal_heading' => 'Vrati zapis',
                'modal_description' => 'Da li ste sigurni da želite vratiti ovaj zapis?',
                'success_notification_title' => 'Zapis vraćen',
                'failure_notification_title' => 'Vraćanje zapisa nije uspjelo',
            ],
            'force_delete' => [
                'modal_heading' => 'Trajno obriši zapis',
                'modal_description' => 'Da li ste sigurni? Ova radnja se ne može poništiti.',
                'success_notification_title' => 'Zapis trajno obrisan',
                'failure_notification_title' => 'Trajno brisanje nije uspjelo',
            ],
        ],
        'bulk_actions' => [
            'restore' => [
                'success_notification_title' => '{1} Zapis uspješno vraćen|[2,*] Svi :count zapisi uspješno vraćeni',
                'success_notification_body' => '{1} Zapis je vraćen.|[2,*] Svi :count zapisi su vraćeni.',
                'warning_notification_title' => 'Djelimično vraćanje',
                'warning_notification_body' => 'Vraćeno :success od :total zapisa. :failed nije vraćeno.',
                'failure_notification_title' => 'Vraćanje neuspješno',
                'failure_notification_body' => '{1} Zapis nije moguće vratiti.|[2,*] Nijedan od :count zapisa nije moguće vratiti.',
            ],
            'force_delete' => [
                'success_notification_title' => '{1} Zapis trajno obrisan|[2,*] Svi :count zapisi trajno obrisani',
                'success_notification_body' => '{1} Zapis je trajno obrisan.|[2,*] Svi :count zapisi su trajno obrisani.',
                'warning_notification_title' => 'Djelimično brisanje',
                'warning_notification_body' => 'Obrisano :success od :total zapisa. :failed nije obrisano.',
                'failure_notification_title' => 'Brisanje neuspješno',
                'failure_notification_body' => '{1} Zapis nije moguće trajno obrisati.|[2,*] Nijedan od :count zapisa nije moguće trajno obrisati.',
            ],
        ],
    ],
];
