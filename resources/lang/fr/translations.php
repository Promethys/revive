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
    ],
];
