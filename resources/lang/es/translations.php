<?php

return [
    'pages' => [
        'title' => 'Papelera de reciclaje',
    ],
    'tables' => [
        'empty_state' => 'No tienes ningún modelo recuperable.',

        'columns' => [
            'model_id' => 'ID del Modelo',
            'model_type' => 'Tipo de Modelo',
            'deleted_at' => 'Eliminado el',
        ],

        'actions' => [
            'view_details' => [
                'modal_heading' => 'Detalles del registro',
            ],
            'restore' => [
                'success_notification_title' => 'Modelo restaurado',
                'failure_notification_title' => 'Error al restaurar el modelo',
            ],
            'force_delete' => [
                'success_notification_title' => 'Modelo eliminado permanentemente',
                'failure_notification_title' => 'Error al eliminar permanentemente el modelo',
            ],
        ],
    ],
];
