<?php

return [
    'pages' => [
        'title' => 'Kosz',
    ],
    'tables' => [
        'empty_state' => 'Brak modeli do odzyskania.',

        'columns' => [
            'model_id' => 'ID modelu',
            'model_type' => 'Typ modelu',
            'deleted_at' => 'Usunięto',
        ],

        'actions' => [
            'view_details' => [
                'modal_heading' => 'Szczegóły rekordu',
            ],
        ]
    ]
];
