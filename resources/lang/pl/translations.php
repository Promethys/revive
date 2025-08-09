<?php

return [
    'pages' => [
        'title' => 'Kosz',
    ],
    'tables' => [
        'empty_state' => 'Brak modeli do odzyskania.',

        'columns' => [
            'model_id' => 'ID modelu',
            'model_type' => 'Typ modelu',
            'deleted_at' => 'Usunięto',
        ],

        'actions' => [
            'view_details' => [
                'modal_heading' => 'Szczegóły rekordu',
            ],
            'restore' => [
                'success_notification_title' => 'Model przywrócony',
                'failure_notification_title' => 'Przywracanie modelu nie powiodło się',
            ],
            'force_delete' => [
                'success_notification_title' => 'Model trwale usunięty',
                'failure_notification_title' => 'Trwałe usunięcie modelu nie powiodło się',
            ]
        ],
    ],
];
