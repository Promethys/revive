<?php

return [
    'pages' => [
        'title' => 'Cestino',
    ],
    'tables' => [
        'empty_state' => 'Non hai nessun modello recuperabile.',

        'columns' => [
            'model_id' => 'ID Modello',
            'model_type' => 'Tipo di Modello',
            'deleted_at' => 'Eliminato il',
        ],

        'actions' => [
            'view_details' => [
                'modal_heading' => 'Dettagli del record',
            ],
            'restore' => [
                'success_notification_title' => 'Modello ripristinato',
                'failure_notification_title' => 'Ripristino del modello fallito',
            ],
            'force_delete' => [
                'success_notification_title' => 'Modello eliminato definitivamente',
                'failure_notification_title' => 'Eliminazione definitiva del modello fallita',
            ],
        ],
    ],
];
