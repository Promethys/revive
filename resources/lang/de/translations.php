<?php

return [
    'pages' => [
        'title' => 'Papierkorb',
    ],
    'tables' => [
        'empty_state' => 'Sie haben kein wiederherstellbares Modell.',

        'columns' => [
            'model_id' => 'Modell-ID',
            'model_type' => 'Modelltyp',
            'deleted_at' => 'Gelöscht am',
        ],

        'actions' => [
            'view_details' => [
                'modal_heading' => 'Datensatzdetails',
            ],
        ],
    ],
];
