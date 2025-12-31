<?php

return [
    'pages' => [
        'title' => 'Tempat Sampah',
    ],
    'tables' => [
        'empty_state' => [
            'title' => 'Tempat sampah kosong',
            'description' => 'Saat Anda menghapus item, item tersebut akan muncul di sini untuk dipulihkan atau dihapus permanen.',
        ],
        'columns' => [
            'model_id' => 'ID Model',
            'model_type' => 'Tipe Model',
            'deleted_by' => 'Dihapus oleh',
            'deleted_at' => 'Tanggal dihapus',
        ],
        'actions' => [
            'view_details' => [
                'modal_heading' => 'Detail rekaman',
            ],
            'restore' => [
                'modal_heading' => 'Pulihkan rekaman',
                'modal_description' => 'Apakah Anda yakin ingin memulihkan rekaman ini?',
                'success_notification_title' => 'Rekaman dipulihkan',
                'failure_notification_title' => 'Gagal memulihkan rekaman',
            ],
            'force_delete' => [
                'modal_heading' => 'Hapus rekaman secara permanen',
                'modal_description' => 'Tindakan ini tidak dapat dibatalkan.',
                'success_notification_title' => 'Rekaman dihapus permanen',
                'failure_notification_title' => 'Gagal menghapus permanen',
            ],
        ],
        'bulk_actions' => [
            'restore' => [
                'success_notification_title' => '{1} Rekaman dipulihkan|[2,*] Semua :count rekaman dipulihkan',
                'success_notification_body' => '{1} Rekaman telah dipulihkan.|[2,*] Semua :count rekaman telah dipulihkan.',
                'warning_notification_title' => 'Pemulihan sebagian',
                'warning_notification_body' => ':success dari :total rekaman dipulihkan. :failed gagal.',
                'failure_notification_title' => 'Pemulihan gagal',
                'failure_notification_body' => '{1} Rekaman tidak dapat dipulihkan.|[2,*] Tidak satu pun dari :count rekaman dapat dipulihkan.',
            ],
            'force_delete' => [
                'success_notification_title' => '{1} Rekaman dihapus permanen|[2,*] Semua :count rekaman dihapus permanen',
                'success_notification_body' => '{1} Rekaman dihapus permanen.|[2,*] Semua :count rekaman dihapus permanen.',
                'warning_notification_title' => 'Penghapusan sebagian',
                'warning_notification_body' => ':success dari :total rekaman dihapus. :failed gagal.',
                'failure_notification_title' => 'Penghapusan gagal',
                'failure_notification_body' => '{1} Rekaman tidak dapat dihapus permanen.|[2,*] Tidak satu pun dari :count rekaman dapat dihapus.',
            ],
        ],
    ],
];
