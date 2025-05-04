<?php

return [
    'pages' => [
        'title' => 'Lixeira',
    ],
    'tables' => [
        'empty_state' => 'Nenhum modelo reciclável encontrado.',

        'columns' => [
            'model_id' => 'ID do Modelo',
            'model_type' => 'Tipo de Modelo',
            'deleted_at' => 'Excluído em',
        ],

        'actions' => [
            'view_details' => [
                'modal_heading' => 'Detalhes do Registro',
            ],
        ],
    ],
];
