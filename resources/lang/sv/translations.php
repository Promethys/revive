<?php

return [
    'pages' => [
        'title' => 'Papperskorgen',
    ],
    'tables' => [
        'empty_state' => 'Det finns inga återvinningsbara modeller.',

        'columns' => [
            'model_id' => 'Model-ID',
            'model_type' => 'Modeltyp',
            'deleted_at' => 'Raderad',
        ],

        'actions' => [
            'view_details' => [
                'modal_heading' => 'Postdetaljer',
            ],
            'restore' => [
                'success_notification_title' => 'Modell återställd',
                'failure_notification_title' => 'Misslyckades att återställa modell',
            ],
            'force_delete' => [
                'success_notification_title' => 'Modell permanent raderad',
                'failure_notification_title' => 'Misslyckades att permanent radera modell',
            ],
        ],
    ],
];
