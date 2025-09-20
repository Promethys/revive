<?php

return [
    'pages' => [
        'title' => 'Tempat Sampah',
    ],
    'tables' => [
        'empty_state' => 'Anda tidak memiliki model yang dapat dipulihkan.',

        'columns' => [
            'model_id' => 'ID Model',
            'model_type' => 'Tipe Model',
            'deleted_at' => 'Dihapus pada',
        ],

        'actions' => [
            'view_details' => [
                'modal_heading' => 'Detail Catatan',
            ],
            'restore' => [
                'success_notification_title' => 'Model dipulihkan',
                'failure_notification_title' => 'Gagal memulihkan model',
            ],
            'force_delete' => [
                'success_notification_title' => 'Model dihapus permanen',
                'failure_notification_title' => 'Gagal menghapus model secara permanen',
            ],
        ],

        'bulk_actions' => [
            'restore' => [
                'success_notification_title' => '{1} Model berhasil dipulihkan|[2,*] Semua :count model berhasil dipulihkan',
                'success_notification_body' => '{1} Model telah dipulihkan.|[2,*] Semua :count model telah dipulihkan.',

                'warning_notification_title' => 'Pemulihan selesai sebagian',
                'warning_notification_body' => ':success dari :total model berhasil dipulihkan. :failed model tidak dapat dipulihkan.',

                'failure_notification_title' => 'Pemulihan gagal',
                'failure_notification_body' => '{1} Model tidak dapat dipulihkan.|[2,*] Tidak ada dari :count model yang dapat dipulihkan.',
            ],
            'force_delete' => [
                'success_notification_title' => '{1} Model berhasil dihapus permanen|[2,*] Semua :count model dihapus permanen',
                'success_notification_body' => '{1} Model telah dihapus permanen.|[2,*] Semua :count model telah dihapus permanen.',

                'warning_notification_title' => 'Penghapusan selesai sebagian',
                'warning_notification_body' => ':success dari :total model berhasil dihapus permanen. :failed model tidak dapat dihapus.',

                'failure_notification_title' => 'Penghapusan gagal',
                'failure_notification_body' => '{1} Model tidak dapat dihapus permanen.|[2,*] Tidak ada dari :count model yang dapat dihapus permanen.',
            ],
        ],
    ],
];
