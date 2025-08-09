<?php

return [
    'pages' => [
        'title' => 'Atkritumu tvertne',
    ],
    'tables' => [
        'empty_state' => 'Nav neviena pārstrādājama modeļa.',

        'columns' => [
            'model_id' => 'Modeļa ID',
            'model_type' => 'Modeļa tips',
            'deleted_at' => 'Dzēsts',
        ],

        'actions' => [
            'view_details' => [
                'modal_heading' => 'Ieraksta detaļas',
            ],
            'restore' => [
                'success_notification_title' => 'Modelis atjaunots',
                'failure_notification_title' => 'Modeļa atjaunošana neizdevās',
            ],
            'force_delete' => [
                'success_notification_title' => 'Modelis neatgriezeniski izdzēsts',
                'failure_notification_title' => 'Modeļa neatgriezeniska dzēšana neizdevās',
            ],
        ],
    ],
];
