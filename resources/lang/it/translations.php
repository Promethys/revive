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
        ],
    ],
];
