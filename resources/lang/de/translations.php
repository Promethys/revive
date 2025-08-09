<?php

return [
    'pages' => [
        'title' => 'Papierkorb',
    ],
    'tables' => [
        'empty_state' => 'Sie haben kein wiederherstellbares Modell.',

        'columns' => [
            'model_id' => 'Modell-ID',
            'model_type' => 'Modelltyp',
            'deleted_at' => 'Gelöscht am',
        ],

        'actions' => [
            'view_details' => [
                'modal_heading' => 'Datensatzdetails',
            ],
            'restore' => [
                'success_notification_title' => 'Modell wiederhergestellt',
                'failure_notification_title' => 'Wiederherstellung des Modells fehlgeschlagen',
            ],
            'force_delete' => [
                'success_notification_title' => 'Modell dauerhaft gelöscht',
                'failure_notification_title' => 'Dauerhaftes Löschen des Modells fehlgeschlagen',
            ]
        ],
    ],
];
