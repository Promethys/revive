<?php

return [
    'pages' => [
        'title' => 'Takataka',
    ],
    'tables' => [
        'empty_state' => 'Hakuna modeli inayoweza kurejelewa.',

        'columns' => [
            'model_id' => 'ID ya Mfano',
            'model_type' => 'Aina ya Mfano',
            'deleted_at' => 'Imefutwa',
        ],

        'actions' => [
            'view_details' => [
                'modal_heading' => 'Maelezo ya Rekodi',
            ],
            'restore' => [
                'success_notification_title' => 'Muundo umerejeshwa',
                'failure_notification_title' => 'Imeshindwa kurejesha muundo',
            ],
            'force_delete' => [
                'success_notification_title' => 'Muundo umefutwa kabisa',
                'failure_notification_title' => 'Imeshindwa kufuta muundo kabisa',
            ]
        ],
    ],
];
