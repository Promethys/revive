<?php

return [
    'pages' => [
        'title' => 'Tong kitar semula',
    ],
    'tables' => [
        'empty_state' => [
            'title' => 'Tong kitar semula kosong',
            'description' => 'Apabila anda memadam item, item tersebut akan muncul di sini untuk pemulihan atau pemadaman kekal.',
        ],
        'columns' => [
            'model_id' => 'ID Model',
            'model_type' => 'Jenis Model',
            'deleted_by' => 'Dipadam oleh',
            'deleted_at' => 'Dipadam pada',
        ],
        'actions' => [
            'view_details' => [
                'modal_heading' => 'Butiran rekod',
            ],
            'restore' => [
                'modal_heading' => 'Pulihkan rekod',
                'modal_description' => 'Adakah anda pasti mahu memulihkan rekod ini? Rekod akan dipindahkan kembali ke lokasi asal.',
                'success_notification_title' => 'Rekod berjaya dipulihkan',
                'failure_notification_title' => 'Gagal memulihkan rekod',
            ],
            'force_delete' => [
                'modal_heading' => 'Padam rekod secara kekal',
                'modal_description' => 'Adakah anda pasti mahu memadam rekod ini secara kekal? Tindakan ini tidak boleh dibuat asal dan rekod akan dikeluarkan sepenuhnya daripada pangkalan data.',
                'success_notification_title' => 'Rekod dipadam secara kekal',
                'failure_notification_title' => 'Gagal memadam rekod secara kekal',
            ],
        ],
        'bulk_actions' => [
            'restore' => [
                'success_notification_title' => '{1} Rekod berjaya dipulihkan|[2,*] Semua :count rekod berjaya dipulihkan',
                'success_notification_body' => '{1} Rekod telah dipulihkan.|[2,*] Semua :count rekod telah dipulihkan.',
                'warning_notification_title' => 'Pemulihan separa selesai',
                'warning_notification_body' => ':success daripada :total rekod dipulihkan. :failed rekod gagal dipulihkan.',
                'failure_notification_title' => 'Pemulihan gagal',
                'failure_notification_body' => '{1} Rekod gagal dipulihkan.|[2,*] Tiada satu pun daripada :count rekod berjaya dipulihkan.',
            ],
            'force_delete' => [
                'success_notification_title' => '{1} Rekod dipadam secara kekal|[2,*] Semua :count rekod dipadam secara kekal',
                'success_notification_body' => '{1} Rekod telah dipadam secara kekal.|[2,*] Semua :count rekod telah dipadam secara kekal.',
                'warning_notification_title' => 'Pemadaman separa selesai',
                'warning_notification_body' => ':success daripada :total rekod dipadam secara kekal. :failed rekod gagal dipadam.',
                'failure_notification_title' => 'Pemadaman gagal',
                'failure_notification_body' => '{1} Rekod gagal dipadam secara kekal.|[2,*] Tiada satu pun daripada :count rekod berjaya dipadam secara kekal.',
            ],
        ],
    ],
];
