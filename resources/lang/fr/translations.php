<?php

return [
    'pages' => [
        'title' => 'Corbeille',
    ],
    'tables' => [
        'empty_state' => [
            'title' => 'La corbeille est vide',
            'description' => 'Lorsque vous supprimez des éléments, ils apparaissent ici pour être restaurés ou supprimés définitivement.',
        ],
        'columns' => [
            'model_id' => 'ID du modèle',
            'model_type' => 'Type de modèle',
            'deleted_by' => 'Supprimé par',
            'deleted_at' => 'Date de suppression',
        ],
        'actions' => [
            'view_details' => [
                'modal_heading' => 'Détails de l’enregistrement',
            ],
            'restore' => [
                'modal_heading' => 'Restaurer l’enregistrement',
                'modal_description' => 'Êtes-vous sûr de vouloir restaurer cet enregistrement ?',
                'success_notification_title' => 'Enregistrement restauré',
                'failure_notification_title' => 'Échec de la restauration',
            ],
            'force_delete' => [
                'modal_heading' => 'Supprimer définitivement l’enregistrement',
                'modal_description' => 'Cette action est irréversible.',
                'success_notification_title' => 'Enregistrement supprimé définitivement',
                'failure_notification_title' => 'Échec de la suppression définitive',
            ],
        ],
        'bulk_actions' => [
            'restore' => [
                'success_notification_title' => '{1} Enregistrement restauré|[2,*] Tous les :count enregistrements restaurés',
                'success_notification_body' => '{1} L’enregistrement a été restauré.|[2,*] Tous les :count enregistrements ont été restaurés.',
                'warning_notification_title' => 'Restauration partielle',
                'warning_notification_body' => ':success sur :total enregistrements restaurés. :failed ont échoué.',
                'failure_notification_title' => 'Restauration échouée',
                'failure_notification_body' => '{1} L’enregistrement n’a pas pu être restauré.|[2,*] Aucun des :count enregistrements n’a pu être restauré.',
            ],
            'force_delete' => [
                'success_notification_title' => '{1} Enregistrement supprimé définitivement|[2,*] Tous les :count enregistrements supprimés définitivement',
                'success_notification_body' => '{1} L’enregistrement a été supprimé définitivement.|[2,*] Tous les :count enregistrements ont été supprimés définitivement.',
                'warning_notification_title' => 'Suppression partielle',
                'warning_notification_body' => ':success sur :total enregistrements supprimés. :failed ont échoué.',
                'failure_notification_title' => 'Suppression échouée',
                'failure_notification_body' => '{1} L’enregistrement n’a pas pu être supprimé définitivement.|[2,*] Aucun des :count enregistrements n’a pu être supprimé.',
            ],
        ],
    ],
];
