<?php

return [
    'pages' => [
        'title' => 'Cestino',
    ],
    'tables' => [
        'empty_state' => [
            'title' => 'Il cestino è vuoto',
            'description' => 'Quando elimini elementi, appariranno qui per il ripristino o l’eliminazione definitiva.',
        ],
        'columns' => [
            'model_id' => 'ID modello',
            'model_type' => 'Tipo di modello',
            'deleted_by' => 'Eliminato da',
            'deleted_at' => 'Data di eliminazione',
        ],
        'actions' => [
            'view_details' => [
                'modal_heading' => 'Dettagli del record',
            ],
            'restore' => [
                'modal_heading' => 'Ripristina record',
                'modal_description' => 'Sei sicuro di voler ripristinare questo record?',
                'success_notification_title' => 'Record ripristinato',
                'failure_notification_title' => 'Ripristino non riuscito',
            ],
            'force_delete' => [
                'modal_heading' => 'Elimina definitivamente il record',
                'modal_description' => 'Questa azione non può essere annullata.',
                'success_notification_title' => 'Record eliminato definitivamente',
                'failure_notification_title' => 'Eliminazione definitiva non riuscita',
            ],
        ],
        'bulk_actions' => [
            'restore' => [
                'success_notification_title' => '{1} Record ripristinato|[2,*] Tutti i :count record ripristinati',
                'success_notification_body' => '{1} Il record è stato ripristinato.|[2,*] Tutti i :count record sono stati ripristinati.',
                'warning_notification_title' => 'Ripristino parziale',
                'warning_notification_body' => 'Ripristinati :success su :total record. :failed non riusciti.',
                'failure_notification_title' => 'Ripristino fallito',
                'failure_notification_body' => '{1} Il record non può essere ripristinato.|[2,*] Nessuno dei :count record può essere ripristinato.',
            ],
            'force_delete' => [
                'success_notification_title' => '{1} Record eliminato definitivamente|[2,*] Tutti i :count record eliminati definitivamente',
                'success_notification_body' => '{1} Il record è stato eliminato definitivamente.|[2,*] Tutti i :count record sono stati eliminati definitivamente.',
                'warning_notification_title' => 'Eliminazione parziale',
                'warning_notification_body' => 'Eliminati :success su :total record. :failed non riusciti.',
                'failure_notification_title' => 'Eliminazione fallita',
                'failure_notification_body' => '{1} Il record non può essere eliminato definitivamente.|[2,*] Nessuno dei :count record può essere eliminato.',
            ],
        ],
    ],
];
