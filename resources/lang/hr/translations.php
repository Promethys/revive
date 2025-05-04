<?php

return [
    'pages' => [
        'title' => 'Koš za smeće',
    ],
    'tables' => [
        'empty_state' => 'Nemate nijedan model za oporavak.',

        'columns' => [
            'model_id' => 'ID modela',
            'model_type' => 'Tip modela',
            'deleted_at' => 'Izbrisano dana',
        ],

        'actions' => [
            'view_details' => [
                'modal_heading' => 'Detalji zapisa',
            ],
        ],
    ],
];
