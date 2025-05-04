<?php

return [
    'pages' => [
        'title' => 'Papperskorgen',
    ],
    'tables' => [
        'empty_state' => 'Det finns inga återvinningsbara modeller.',

        'columns' => [
            'model_id' => 'Model-ID',
            'model_type' => 'Modeltyp',
            'deleted_at' => 'Raderad',
        ],

        'actions' => [
            'view_details' => [
                'modal_heading' => 'Postdetaljer',
            ],
        ],
    ],
];
