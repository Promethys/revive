<?php

return [
    'pages' => [
        'title' => 'Coș de reciclare',
    ],
    'tables' => [
        'empty_state' => 'Nu există modele reciclabile.',

        'columns' => [
            'model_id' => 'ID Model',
            'model_type' => 'Tip Model',
            'deleted_at' => 'Șters la',
        ],

        'actions' => [
            'view_details' => [
                'modal_heading' => 'Detalii înregistrare',
            ],
        ],
    ],
];
