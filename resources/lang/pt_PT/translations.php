<?php

return [
    'pages' => [
        'title' => 'Reciclagem',
    ],
    'tables' => [
        'empty_state' => 'Não existem modelos recicláveis.',

        'columns' => [
            'model_id' => 'ID do Modelo',
            'model_type' => 'Tipo de Modelo',
            'deleted_at' => 'Eliminado em',
        ],

        'actions' => [
            'view_details' => [
                'modal_heading' => 'Detalhes do Registo',
            ],
        ],
    ],
];
