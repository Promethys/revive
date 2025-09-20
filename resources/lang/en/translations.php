<?php

// translations for Promethys/Revive
return [
    'pages' => [
        'title' => 'Recycle bin',
    ],
    'tables' => [
        'empty_state' => 'You don\'t have any Recyclable model.',

        'columns' => [
            'model_id' => 'Model ID',
            'model_type' => 'Model Type',
            'deleted_at' => 'Deleted At',
        ],

        'actions' => [
            'view_details' => [
                'modal_heading' => 'Record details',
            ],
            'restore' => [
                'success_notification_title' => 'Model restored',
                'failure_notification_title' => 'Failed to restore model',
            ],
            'force_delete' => [
                'success_notification_title' => 'Model permanently deleted',
                'failure_notification_title' => 'Failed to permanently delete model',
            ],
        ],

        'bulk_actions' => [
            'restore' => [
                'success_notification_title' => '{1} Model restored successfully|[2,*] All :count models restored successfully',
                'success_notification_body' => '{1} The model has been restored.|[2,*] All :count models have been restored.',

                'warning_notification_title' => 'Restoration partially completed',
                'warning_notification_body' => 'Restored :success out of :total models. :failed models could not be restored.',

                'failure_notification_title' => 'Restoration failed',
                'failure_notification_body' => '{1} The model could not be restored.|[2,*] None of the :count models could be restored.',
            ],
            'force_delete' => [
                'success_notification_title' => '{1} Model permanently deleted|[2,*] All :count models permanently deleted',
                'success_notification_body' => '{1} The model has been permanently deleted.|[2,*] All :count models have been permanently deleted.',

                'warning_notification_title' => 'Deletion partially completed',
                'warning_notification_body' => 'Permanently deleted :success out of :total models. :failed models could not be deleted.',

                'failure_notification_title' => 'Deletion failed',
                'failure_notification_body' => '{1} The model could not be permanently deleted.|[2,*] None of the :count models could be permanently deleted.',
            ],
        ],
    ],
];
