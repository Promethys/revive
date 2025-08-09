<?php

return [
    'pages' => [
        'title' => 'بۆشاییەکەی دوبارە',
    ],
    'tables' => [
        'empty_state' => 'هیچ مۆدێلی بۆ گەڕاندنەوە نیە.',

        'columns' => [
            'model_id' => 'ناسنامەی مۆدێل',
            'model_type' => 'جۆری مۆدێل',
            'deleted_at' => 'سڕاوە لە',
        ],

        'actions' => [
            'view_details' => [
                'modal_heading' => 'وردەکارییەکانی تۆمار',
            ],
            'restore' => [
                'success_notification_title' => 'مۆدێل گەڕایەوە',
                'failure_notification_title' => 'شکستی گەڕاندنەوەی مۆدێل',
            ],
            'force_delete' => [
                'success_notification_title' => 'مۆدێل بە تەواوی سڕایەوە',
                'failure_notification_title' => 'شکستی سڕینەوەی تەواوی مۆدێل',
            ],
        ],
    ],
];
