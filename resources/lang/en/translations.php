<?php

return [
    'pages' => [
        'title' => 'Recycle bin',
    ],
    'tables' => [
        'empty_state' => [
            'title' => 'The recycle bin is empty',
            'description' => 'When you delete items, they will appear here for restoration or permanent deletion.',
        ],
        'columns' => [
            'model_id' => 'Model ID',
            'model_type' => 'Model Type',
            'deleted_by' => 'Deleted by',
            'deleted_at' => 'Deleted At',
        ],
        'actions' => [
            'view_details' => [
                'modal_heading' => 'Record details',
            ],
            'restore' => [
                'modal_heading' => 'Restore record',
                'modal_description' => 'Are you sure you want to restore this record? The record will be moved back to its original location.',
                'success_notification_title' => 'Record restored',
                'failure_notification_title' => 'Failed to restore record',
            ],
            'force_delete' => [
                'modal_heading' => 'Permanently delete record',
                'modal_description' => 'Are you sure you want to permanently delete this record? This action cannot be undone and the record will be completely removed from the database.',
                'success_notification_title' => 'Record permanently deleted',
                'failure_notification_title' => 'Failed to permanently delete record',
            ],
        ],
        'bulk_actions' => [
            'restore' => [
                'success_notification_title' => '{1} Record restored successfully|[2,*] All :count records restored successfully',
                'success_notification_body' => '{1} The record has been restored.|[2,*] All :count records have been restored.',
                'warning_notification_title' => 'Restoration partially completed',
                'warning_notification_body' => 'Restored :success out of :total records. :failed records could not be restored.',
                'failure_notification_title' => 'Restoration failed',
                'failure_notification_body' => '{1} The record could not be restored.|[2,*] None of the :count records could be restored.',
            ],
            'force_delete' => [
                'success_notification_title' => '{1} Record permanently deleted|[2,*] All :count records permanently deleted',
                'success_notification_body' => '{1} The record has been permanently deleted.|[2,*] All :count records have been permanently deleted.',
                'warning_notification_title' => 'Deletion partially completed',
                'warning_notification_body' => 'Permanently deleted :success out of :total records. :failed records could not be deleted.',
                'failure_notification_title' => 'Deletion failed',
                'failure_notification_body' => '{1} The record could not be permanently deleted.|[2,*] None of the :count records could be permanently deleted.',
            ],
        ],
    ],
];
