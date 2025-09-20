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

        'bulk_actions' => [
            'restore' => [
                'success_notification_title' => '{1} Modello ripristinato con successo|[2,*] Tutti i :count modelli ripristinati con successo',
                'success_notification_body' => '{1} Il modello è stato ripristinato.|[2,*] Tutti i :count modelli sono stati ripristinati.',

                'warning_notification_title' => 'Ripristino completato parzialmente',
                'warning_notification_body' => 'Ripristinati :success su :total modelli. :failed modelli non possono essere ripristinati.',

                'failure_notification_title' => 'Ripristino fallito',
                'failure_notification_body' => '{1} Il modello non può essere ripristinato.|[2,*] Nessuno dei :count modelli può essere ripristinato.',
            ],
            'force_delete' => [
                'success_notification_title' => '{1} Modello eliminato definitivamente|[2,*] Tutti i :count modelli eliminati definitivamente',
                'success_notification_body' => '{1} Il modello è stato eliminato definitivamente.|[2,*] Tutti i :count modelli sono stati eliminati definitivamente.',

                'warning_notification_title' => 'Eliminazione completata parzialmente',
                'warning_notification_body' => 'Eliminati definitivamente :success su :total modelli. :failed modelli non possono essere eliminati.',

                'failure_notification_title' => 'Eliminazione fallita',
                'failure_notification_body' => '{1} Il modello non può essere eliminato definitivamente.|[2,*] Nessuno dei :count modelli può essere eliminato definitivamente.',
            ],
        ],
    ],
];
