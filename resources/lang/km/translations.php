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
            ],
        ],

        'bulk_actions' => [
            'restore' => [
                'success_notification_title' => '{1} ម៉ូដែលបានស្តារឡើងវិញដោយជោគជ័យ|[2,*] ម៉ូដែល :count ទាំងអស់ត្រូវបានស្តារឡើងវិញដោយជោគជ័យ',
                'success_notification_body' => '{1} ម៉ូដែលត្រូវបានស្តារឡើងវិញ។|[2,*] ម៉ូដែល :count ទាំងអស់ត្រូវបានស្តារឡើងវិញ។',

                'warning_notification_title' => 'ការស្តារឡើងវិញបានបញ្ចប់ត្រឹមផ្នែកខ្លះ',
                'warning_notification_body' => 'បានស្តារឡើងវិញ :success នៃ :total ម៉ូដែល។ :failed ម៉ូដែលមិនអាចស្តារឡើងវិញបានទេ។',

                'failure_notification_title' => 'ការស្តារឡើងវិញបរាជ័យ',
                'failure_notification_body' => '{1} ម៉ូដែលមិនអាចស្តារឡើងវិញបានទេ។|[2,*] គ្មានម៉ូដែល :count ត្រូវបានស្តារឡើងវិញទេ។',
            ],
            'force_delete' => [
                'success_notification_title' => '{1} ម៉ូដែលត្រូវបានលុបអចិន្ត្រៃយ៍|[2,*] ម៉ូដែល :count ទាំងអស់ត្រូវបានលុបអចិន្ត្រៃយ៍',
                'success_notification_body' => '{1} ម៉ូដែលត្រូវបានលុបអចិន្ត្រៃយ៍។|[2,*] ម៉ូដែល :count ទាំងអស់ត្រូវបានលុបអចិន្ត្រៃយ៍។',

                'warning_notification_title' => 'ការលុបបានបញ្ចប់ត្រឹមផ្នែកខ្លះ',
                'warning_notification_body' => 'បានលុបអចិន្ត្រៃយ៍ :success នៃ :total ម៉ូដែល។ :failed ម៉ូដែលមិនអាចលុបបានទេ។',

                'failure_notification_title' => 'ការលុបបរាជ័យ',
                'failure_notification_body' => '{1} ម៉ូដែលមិនអាចលុបអចិន្ត្រៃយ៍បានទេ។|[2,*] គ្មានម៉ូដែល :count ត្រូវបានលុបអចិន្ត្រៃយ៍ទេ។',
            ],
        ],
    ],
];
