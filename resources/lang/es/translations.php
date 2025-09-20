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

        'bulk_actions' => [
            'restore' => [
                'success_notification_title' => '{1} Modelo restaurado correctamente|[2,*] Todos los :count modelos restaurados correctamente',
                'success_notification_body' => '{1} El modelo ha sido restaurado.|[2,*] Todos los :count modelos han sido restaurados.',

                'warning_notification_title' => 'Restauración completada parcialmente',
                'warning_notification_body' => 'Se restauraron :success de :total modelos. No se pudieron restaurar :failed modelos.',

                'failure_notification_title' => 'La restauración falló',
                'failure_notification_body' => '{1} El modelo no pudo ser restaurado.|[2,*] Ninguno de los :count modelos pudo ser restaurado.',
            ],
            'force_delete' => [
                'success_notification_title' => '{1} Modelo eliminado permanentemente|[2,*] Todos los :count modelos eliminados permanentemente',
                'success_notification_body' => '{1} El modelo ha sido eliminado permanentemente.|[2,*] Todos los :count modelos han sido eliminados permanentemente.',

                'warning_notification_title' => 'Eliminación completada parcialmente',
                'warning_notification_body' => 'Se eliminaron permanentemente :success de :total modelos. No se pudieron eliminar :failed modelos.',

                'failure_notification_title' => 'La eliminación falló',
                'failure_notification_body' => '{1} El modelo no pudo eliminarse permanentemente.|[2,*] Ninguno de los :count modelos pudo eliminarse permanentemente.',
            ],
        ],
    ],
];
