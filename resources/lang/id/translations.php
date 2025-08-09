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
            ]
        ],
    ],
];
