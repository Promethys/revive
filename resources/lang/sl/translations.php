<?php

return [
    'pages' => [
        'title' => 'Koš',
    ],
    'tables' => [
        'empty_state' => [
            'title' => 'Koš je prazen',
            'description' => 'Ko izbrišete elemente, se bodo tukaj prikazali za obnovitev ali trajni izbris.',
        ],
        'columns' => [
            'model_id' => 'ID modela',
            'model_type' => 'Vrsta modela',
            'deleted_by' => 'Izbrisal',
            'deleted_at' => 'Izbrisano',
        ],
        'actions' => [
            'view_details' => [
                'modal_heading' => 'Podrobnosti zapisa',
            ],
            'restore' => [
                'modal_heading' => 'Obnovi zapis',
                'modal_description' => 'Ali ste prepričani, da želite obnoviti ta zapis? Zapis bo premaknjen nazaj na prvotno mesto.',
                'success_notification_title' => 'Zapis obnovljen',
                'failure_notification_title' => 'Obnovitev zapisa ni uspela',
            ],
            'force_delete' => [
                'modal_heading' => 'Trajno izbriši zapis',
                'modal_description' => 'Ali ste prepričani, da želite ta zapis trajno izbrisati? Dejanja ni mogoče razveljaviti in zapis bo popolnoma odstranjen iz baze.',
                'success_notification_title' => 'Zapis trajno izbrisan',
                'failure_notification_title' => 'Trajni izbris zapisa ni uspel',
            ],
        ],
        'bulk_actions' => [
            'restore' => [
                'success_notification_title' => '{1} Zapis uspešno obnovljen|[2,*] Vsi :count zapisi uspešno obnovljeni',
                'success_notification_body' => '{1} Zapis je bil obnovljen.|[2,*] Vsi :count zapisi so bili obnovljeni.',
                'warning_notification_title' => 'Obnovitev delno uspešna',
                'warning_notification_body' => 'Obnovljenih :success od :total zapisov. :failed zapisov ni bilo mogoče obnoviti.',
                'failure_notification_title' => 'Obnovitev ni uspela',
                'failure_notification_body' => '{1} Zapisa ni bilo mogoče obnoviti.|[2,*] Nobenega od :count zapisov ni bilo mogoče obnoviti.',
            ],
            'force_delete' => [
                'success_notification_title' => '{1} Zapis trajno izbrisan|[2,*] Vsi :count zapisi trajno izbrisani',
                'success_notification_body' => '{1} Zapis je bil trajno izbrisan.|[2,*] Vsi :count zapisi so bili trajno izbrisani.',
                'warning_notification_title' => 'Izbris delno uspešen',
                'warning_notification_body' => 'Trajno izbrisanih :success od :total zapisov. :failed zapisov ni bilo mogoče izbrisati.',
                'failure_notification_title' => 'Izbris ni uspel',
                'failure_notification_body' => '{1} Zapisa ni bilo mogoče trajno izbrisati.|[2,*] Nobenega od :count zapisov ni bilo mogoče trajno izbrisati.',
            ],
        ],
    ],
];
