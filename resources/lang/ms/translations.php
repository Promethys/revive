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
            ]
        ],
    ],
];
