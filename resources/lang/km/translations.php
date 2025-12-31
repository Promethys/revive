<?php

return [
    'pages' => [
        'title' => 'ធុងសំរាម',
    ],
    'tables' => [
        'empty_state' => [
            'title' => 'ធុងសំរាមទទេ',
            'description' => 'នៅពេលអ្នកលុបធាតុ វានឹងបង្ហាញនៅទីនេះសម្រាប់ការស្តារឡើងវិញ ឬការលុបជាអចិន្ត្រៃយ៍',
        ],
        'columns' => [
            'model_id' => 'លេខសម្គាល់ម៉ូដែល',
            'model_type' => 'ប្រភេទម៉ូដែល',
            'deleted_by' => 'លុបដោយ',
            'deleted_at' => 'លុបនៅ',
        ],
        'actions' => [
            'view_details' => [
                'modal_heading' => 'ព័ត៌មានលម្អិតនៃកំណត់ត្រា',
            ],
            'restore' => [
                'modal_heading' => 'ស្តារកំណត់ត្រា',
                'modal_description' => 'តើអ្នកប្រាកដថាចង់ស្តារកំណត់ត្រនេះឡើងវិញមែនទេ? កំណត់ត្រានឹងត្រូវបានផ្ទេរត្រឡប់ទៅទីតាំងដើមវិញ។',
                'success_notification_title' => 'បានស្តារកំណត់ត្រា',
                'failure_notification_title' => 'មិនអាចស្តារកំណត់ត្រាបាន',
            ],
            'force_delete' => [
                'modal_heading' => 'លុបកំណត់ត្រាជាអចិន្ត្រៃយ៍',
                'modal_description' => 'តើអ្នកប្រាកដថាចង់លុបកំណត់ត្រនេះជាអចិន្ត្រៃយ៍មែនទេ? សកម្មភាពនេះមិនអាចត្រឡប់វិញបានទេ ហើយកំណត់ត្រនឹងត្រូវបានលុបចេញពីមូលដ្ឋានទិន្នន័យទាំងស្រុង។',
                'success_notification_title' => 'បានលុបកំណត់ត្រាជាអចិន្ត្រៃយ៍',
                'failure_notification_title' => 'មិនអាចលុបកំណត់ត្រាជាអចិន្ត្រៃយ៍បាន',
            ],
        ],
        'bulk_actions' => [
            'restore' => [
                'success_notification_title' => '{1} បានស្តារកំណត់ត្រាសម្រេច|[2,*] បានស្តារកំណត់ត្រាទាំងអស់ :count សម្រេច',
                'success_notification_body' => '{1} កំណត់ត្រាត្រូវបានស្តារឡើងវិញ|[2,*] កំណត់ត្រាទាំងអស់ :count ត្រូវបានស្តារឡើងវិញ',
                'warning_notification_title' => 'ការស្តារសម្រេចតែផ្នែកមួយ',
                'warning_notification_body' => 'បានស្តារ :success ពី :total កំណត់ត្រា។ មិនអាចស្តារ :failed កំណត់ត្រាបាន។',
                'failure_notification_title' => 'ការស្តារបរាជ័យ',
                'failure_notification_body' => '{1} មិនអាចស្តារកំណត់ត្រាបាន|[2,*] មិនអាចស្តារកំណត់ត្រាទាំង :count បានទេ',
            ],
            'force_delete' => [
                'success_notification_title' => '{1} បានលុបកំណត់ត្រាជាអចិន្ត្រៃយ៍|[2,*] បានលុបកំណត់ត្រាទាំងអស់ :count ជាអចិន្ត្រៃយ៍',
                'success_notification_body' => '{1} កំណត់ត្រាត្រូវបានលុបជាអចិន្ត្រៃយ៍|[2,*] កំណត់ត្រាទាំងអស់ :count ត្រូវបានលុបជាអចិន្ត្រៃយ៍',
                'warning_notification_title' => 'ការលុបសម្រេចតែផ្នែកមួយ',
                'warning_notification_body' => 'បានលុបជាអចិន្ត្រៃយ៍ :success ពី :total កំណត់ត្រា។ មិនអាចលុប :failed កំណត់ត្រាបាន។',
                'failure_notification_title' => 'ការលុបបរាជ័យ',
                'failure_notification_body' => '{1} មិនអាចលុបកំណត់ត្រាជាអចិន្ត្រៃយ៍បាន|[2,*] មិនអាចលុបកំណត់ត្រាទាំង :count បានទេ',
            ],
        ],
    ],
];
