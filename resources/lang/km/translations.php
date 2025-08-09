<?php

return [
    'pages' => [
        'title' => 'ធុងសំរាម',
    ],
    'tables' => [
        'empty_state' => 'អ្នកមិនមានម៉ូដែលដែលអាចធ្វើឡើងវិញបានទេ។',

        'columns' => [
            'model_id' => 'លេខសម្គាល់ម៉ូដែល',
            'model_type' => 'ប្រភេទម៉ូដែល',
            'deleted_at' => 'បានលុបនៅ',
        ],

        'actions' => [
            'view_details' => [
                'modal_heading' => 'ព័ត៌មានលម្អិតអំពីកំណត់ត្រា',
            ],
            'restore' => [
                'success_notification_title' => 'ម៉ូដែលត្រូវបានស្ដារ',
                'failure_notification_title' => 'បរាជ័យក្នុងការស្ដារម៉ូដែល',
            ],
            'force_delete' => [
                'success_notification_title' => 'ម៉ូដែលត្រូវបានលុបជាអចិន្ត្រៃយ៍',
                'failure_notification_title' => 'បរាជ័យក្នុងការលុបម៉ូដែលជាអចិន្ត្រៃយ៍',
            ]
        ],
    ],
];
