<?php

return [
    'pages' => [
        'title' => 'Papirkurv',
    ],
    'tables' => [
        'empty_state' => 'Ingen resirkulerbare modeller.',

        'columns' => [
            'model_id' => 'Modell-ID',
            'model_type' => 'Modelltype',
            'deleted_at' => 'Slettet',
        ],

        'actions' => [
            'view_details' => [
                'modal_heading' => 'Postdetaljer',
            ],
        ],
    ],
];
