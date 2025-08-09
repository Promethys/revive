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
            'restore' => [
                'success_notification_title' => 'Model restaurat',
                'failure_notification_title' => 'Error en restaurar el model',
            ],
            'force_delete' => [
                'success_notification_title' => 'Model eliminat permanentment',
                'failure_notification_title' => 'Error en eliminar permanentment el model',
            ],
        ],
    ],
];
