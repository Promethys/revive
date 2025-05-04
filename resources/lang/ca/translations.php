<?php

return [
    'pages' => [
        'title' => 'Paperera de reciclatge',
    ],
    'tables' => [
        'empty_state' => 'No tens cap model recuperable.',

        'columns' => [
            'model_id' => 'ID del model',
            'model_type' => 'Tipus de model',
            'deleted_at' => 'Eliminat el',
        ],

        'actions' => [
            'view_details' => [
                'modal_heading' => 'Detalls del registre',
            ],
        ]
    ]
];
