<?php

return [
    'pages' => [
        'title' => 'Papelera',
    ],
    'tables' => [
        'empty_state' => [
            'title' => 'La papelera está vacía',
            'description' => 'Cuando elimines elementos, aparecerán aquí para restaurarlos o eliminarlos permanentemente.',
        ],
        'columns' => [
            'model_id' => 'ID del modelo',
            'model_type' => 'Tipo de modelo',
            'deleted_by' => 'Eliminado por',
            'deleted_at' => 'Fecha de eliminación',
        ],
        'actions' => [
            'view_details' => [
                'modal_heading' => 'Detalles del registro',
            ],
            'restore' => [
                'modal_heading' => 'Restaurar registro',
                'modal_description' => '¿Estás seguro de que deseas restaurar este registro?',
                'success_notification_title' => 'Registro restaurado',
                'failure_notification_title' => 'No se pudo restaurar el registro',
            ],
            'force_delete' => [
                'modal_heading' => 'Eliminar registro permanentemente',
                'modal_description' => 'Esta acción no se puede deshacer.',
                'success_notification_title' => 'Registro eliminado permanentemente',
                'failure_notification_title' => 'No se pudo eliminar permanentemente',
            ],
        ],
        'bulk_actions' => [
            'restore' => [
                'success_notification_title' => '{1} Registro restaurado|[2,*] Todos los :count registros restaurados',
                'success_notification_body' => '{1} El registro fue restaurado.|[2,*] Todos los :count registros fueron restaurados.',
                'warning_notification_title' => 'Restauración parcial',
                'warning_notification_body' => 'Restaurados :success de :total registros. :failed no se pudieron restaurar.',
                'failure_notification_title' => 'Restauración fallida',
                'failure_notification_body' => '{1} El registro no pudo ser restaurado.|[2,*] Ninguno de los :count registros pudo ser restaurado.',
            ],
            'force_delete' => [
                'success_notification_title' => '{1} Registro eliminado permanentemente|[2,*] Todos los :count registros eliminados permanentemente',
                'success_notification_body' => '{1} El registro fue eliminado permanentemente.|[2,*] Todos los :count registros fueron eliminados permanentemente.',
                'warning_notification_title' => 'Eliminación parcial',
                'warning_notification_body' => 'Eliminados :success de :total registros. :failed no se pudieron eliminar.',
                'failure_notification_title' => 'Eliminación fallida',
                'failure_notification_body' => '{1} El registro no pudo ser eliminado permanentemente.|[2,*] Ninguno de los :count registros pudo ser eliminado.',
            ],
        ],
    ],
];
