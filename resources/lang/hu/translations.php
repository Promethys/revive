<?php

return [
    'pages' => [
        'title' => 'Lomtár',
    ],
    'tables' => [
        'empty_state' => 'Nincs visszaállítható modellje.',

        'columns' => [
            'model_id' => 'Modell azonosító',
            'model_type' => 'Modell típusa',
            'deleted_at' => 'Törlés dátuma',
        ],

        'actions' => [
            'view_details' => [
                'modal_heading' => 'Rekord részletei',
            ],
            'restore' => [
                'success_notification_title' => 'Modell visszaállítva',
                'failure_notification_title' => 'A modell visszaállítása sikertelen',
            ],
            'force_delete' => [
                'success_notification_title' => 'Modell véglegesen törölve',
                'failure_notification_title' => 'A modell végleges törlése sikertelen',
            ],
        ],
    ],
];
