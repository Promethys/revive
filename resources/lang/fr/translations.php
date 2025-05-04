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
        ]
    ]
];
