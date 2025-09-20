<?php

return [
    'pages' => [
        'title' => 'Corbeille',
    ],
    'tables' => [
        'empty_state' => 'Vous n\'avez aucun modèle récupérable.',

        'columns' => [
            'model_id' => 'ID du modèle',
            'model_type' => 'Type de modèle',
            'deleted_at' => 'Supprimé le',
        ],

        'actions' => [
            'view_details' => [
                'modal_heading' => 'Détails de l\'enregistrement',
            ],
            'restore' => [
                'success_notification_title' => 'Modèle restauré',
                'failure_notification_title' => 'Échec de la restauration du modèle',
            ],
            'force_delete' => [
                'success_notification_title' => 'Modèle supprimé définitivement',
                'failure_notification_title' => 'Échec de la suppression définitive du modèle',
            ],
        ],

        'bulk_actions' => [
            'restore' => [
                'success_notification_title' => '{1} Modèle restauré avec succès|[2,*] Tous les :count modèles restaurés avec succès',
                'success_notification_body' => '{1} Le modèle a été restauré.|[2,*] Tous les :count modèles ont été restaurés.',

                'warning_notification_title' => 'Restauration partiellement effectuée',
                'warning_notification_body' => ':success sur :total modèles restaurés. :failed modèles n’ont pas pu être restaurés.',

                'failure_notification_title' => 'Échec de la restauration',
                'failure_notification_body' => '{1} Le modèle n’a pas pu être restauré.|[2,*] Aucun des :count modèles n’a pu être restauré.',
            ],
            'force_delete' => [
                'success_notification_title' => '{1} Modèle supprimé définitivement|[2,*] Tous les :count modèles supprimés définitivement',
                'success_notification_body' => '{1} Le modèle a été supprimé définitivement.|[2,*] Tous les :count modèles ont été supprimés définitivement.',

                'warning_notification_title' => 'Suppression partiellement effectuée',
                'warning_notification_body' => ':success sur :total modèles supprimés définitivement. :failed modèles n’ont pas pu être supprimés.',

                'failure_notification_title' => 'Échec de la suppression',
                'failure_notification_body' => '{1} Le modèle n’a pas pu être supprimé définitivement.|[2,*] Aucun des :count modèles n’a pu être supprimé définitivement.',
            ],
        ],
    ],
];
