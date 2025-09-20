<?php

return [
    'pages' => [
        'title' => 'Tong Kitar Semula',
    ],
    'tables' => [
        'empty_state' => 'Tiada model boleh dikitar semula.',

        'columns' => [
            'model_id' => 'ID Model',
            'model_type' => 'Jenis Model',
            'deleted_at' => 'Dihapus Pada',
        ],

        'actions' => [
            'view_details' => [
                'modal_heading' => 'Butiran Rekod',
            ],
            'restore' => [
                'success_notification_title' => 'Model dipulihkan',
                'failure_notification_title' => 'Gagal memulihkan model',
            ],
            'force_delete' => [
                'success_notification_title' => 'Model dipadam secara kekal',
                'failure_notification_title' => 'Gagal memadam model secara kekal',
            ],
        ],

        'bulk_actions' => [
            'restore' => [
                'success_notification_title' => '{1} Model berjaya dipulihkan|[2,*] Semua :count model berjaya dipulihkan',
                'success_notification_body' => '{1} Model telah dipulihkan.|[2,*] Semua :count model telah dipulihkan.',

                'warning_notification_title' => 'Pemulihan sebahagian sahaja selesai',
                'warning_notification_body' => ':success daripada :total model telah dipulihkan. :failed model tidak dapat dipulihkan.',

                'failure_notification_title' => 'Pemulihan gagal',
                'failure_notification_body' => '{1} Model tidak dapat dipulihkan.|[2,*] Tiada daripada :count model yang dapat dipulihkan.',
            ],
            'force_delete' => [
                'success_notification_title' => '{1} Model telah dipadam secara kekal|[2,*] Semua :count model telah dipadam secara kekal',
                'success_notification_body' => '{1} Model telah dipadam secara kekal.|[2,*] Semua :count model telah dipadam secara kekal.',

                'warning_notification_title' => 'Pemadaman sebahagian sahaja selesai',
                'warning_notification_body' => ':success daripada :total model telah dipadam secara kekal. :failed model tidak dapat dipadam.',

                'failure_notification_title' => 'Pemadaman gagal',
                'failure_notification_body' => '{1} Model tidak dapat dipadam secara kekal.|[2,*] Tiada daripada :count model yang dapat dipadam secara kekal.',
            ],
        ],
    ],
];
