<?php

return [
    'pages' => [
        'title' => 'سەبەتەی سڕاوەکان',
    ],
    'tables' => [
        'empty_state' => [
            'title' => 'سەبەتەی سڕاوەکان بەتاڵە',
            'description' => 'کاتێک تۆمارەکان دەسڕیتەوە، لێرە دەردەکەون بۆ گەڕاندنەوە یان سڕینەوەی هەمیشەیی.',
        ],
        'columns' => [
            'model_id' => 'ناسنامەی مۆدێل',
            'model_type' => 'جۆری مۆدێل',
            'deleted_by' => 'سڕاوە لەلایەن',
            'deleted_at' => 'کاتی سڕینەوە',
        ],
        'actions' => [
            'view_details' => [
                'modal_heading' => 'وردەکاری تۆمار',
            ],
            'restore' => [
                'modal_heading' => 'گەڕاندنەوەی تۆمار',
                'modal_description' => 'دڵنیایت لە گەڕاندنەوەی ئەم تۆمارە؟',
                'success_notification_title' => 'تۆمار گەڕێندرایەوە',
                'failure_notification_title' => 'گەڕاندنەوە سەرکەوتوو نەبوو',
            ],
            'force_delete' => [
                'modal_heading' => 'سڕینەوەی هەمیشەیی تۆمار',
                'modal_description' => 'ئەم کردارە ناتوانرێت پاشگەز بکرێتەوە.',
                'success_notification_title' => 'تۆمار بە هەمیشەیی سڕایەوە',
                'failure_notification_title' => 'سڕینەوەی هەمیشەیی سەرکەوتوو نەبوو',
            ],
        ],
        'bulk_actions' => [
            'restore' => [
                'success_notification_title' => '{1} تۆمار گەڕێندرایەوە|[2,*] هەموو :count تۆمار گەڕێندرانەوە',
                'success_notification_body' => '{1} تۆمارەکە گەڕێندرایەوە.|[2,*] هەموو :count تۆمارەکان گەڕێندرانەوە.',
                'warning_notification_title' => 'گەڕاندنەوە بەشێوەیەکی تەواو نەبوو',
                'warning_notification_body' => ':success لە :total تۆمار گەڕێندرانەوە. :failed گەڕێندنەوەیان سەرکەوتوو نەبوو.',
                'failure_notification_title' => 'گەڕاندنەوە سەرکەوتوو نەبوو',
                'failure_notification_body' => '{1} تۆمارەکە گەڕێنرانەوە.|[2,*] هیچ کام لە :count تۆمارەکان گەڕێنرانەوە.',
            ],
            'force_delete' => [
                'success_notification_title' => '{1} تۆمار بە هەمیشەیی سڕایەوە|[2,*] هەموو :count تۆمار بە هەمیشەیی سڕانەوە',
                'success_notification_body' => '{1} تۆمارەکە بە هەمیشەیی سڕایەوە.|[2,*] هەموو :count تۆمارەکان بە هەمیشەیی سڕانەوە.',
                'warning_notification_title' => 'سڕینەوە بەشێوەیەکی تەواو نەبوو',
                'warning_notification_body' => ':success لە :total تۆمار سڕانەوە. :failed سڕینەوەیان سەرکەوتوو نەبوو.',
                'failure_notification_title' => 'سڕینەوە سەرکەوتوو نەبوو',
                'failure_notification_body' => '{1} تۆمارەکە نەسڕایەوە.|[2,*] هیچ کام لە :count تۆمارەکان نەسڕانەوە.',
            ],
        ],
    ],
];
