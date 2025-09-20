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

        'bulk_actions' => [
            'restore' => [
                'success_notification_title' => '{1} مۆدێل بە سەرکەوتویی ڕێگەدرا|[2,*] هەموو :count مۆدێل بە سەرکەوتویی ڕێگەدراون',
                'success_notification_body' => '{1} مۆدێل ڕێگەدرا.|[2,*] هەموو :count مۆدێل ڕێگەدراون.',

                'warning_notification_title' => 'ڕێگەدانیەکە بە بەشداربوو بە تەواوی نییە',
                'warning_notification_body' => 'لە :total مۆدێلەوە :success ڕێگەدرایەوە. ناتوانرا مۆدێلە :failed ڕێگە بدرێت.',

                'failure_notification_title' => 'ڕێگەدان ناچالاک بوو',
                'failure_notification_body' => '{1} ناتوانرا مۆدێل ڕێگە بدرێت.|[2,*] هیچ یەک لە :count مۆدێلەوە ناتوانرا ڕێگە بدرێت.',
            ],
            'force_delete' => [
                'success_notification_title' => '{1} مۆدێل بە شێوەیەکی تەواو سڕایەوە|[2,*] هەموو :count مۆدێل بە شێوەیەکی تەواو سڕایەوە',
                'success_notification_body' => '{1} مۆدێل بە شێوەیەکی تەواو سڕایەوە.|[2,*] هەموو :count مۆدێل بە شێوەیەکی تەواو سڕایەوە.',

                'warning_notification_title' => 'سڕینەوە بە بەشداربووی تەواوی نییە',
                'warning_notification_body' => 'لە :total مۆدێلەوە :success بە شێوەیەکی تەواو سڕایەوە. ناتوانرا مۆدێلە :failed سڕێت.',

                'failure_notification_title' => 'سڕینەوە ناچالاک بوو',
                'failure_notification_body' => '{1} ناتوانرا مۆدێل بە شێوەیەکی تەواو سڕێت.|[2,*] هیچ یەک لە :count مۆدێلەوە ناتوانرا بە شێوەیەکی تەواو سڕێت.',
            ],
        ],
    ],
];
