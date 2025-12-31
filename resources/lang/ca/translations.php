<?php

return [
    'pages' => [
        'title' => 'Paperera',
    ],
    'tables' => [
        'empty_state' => [
            'title' => 'La paperera està buida',
            'description' => 'Quan suprimeixis elements, apareixeran aquí per restaurar-los o eliminar-los definitivament.',
        ],
        'columns' => [
            'model_id' => 'ID del model',
            'model_type' => 'Tipus de model',
            'deleted_by' => 'Suprimit per',
            'deleted_at' => 'Data de supressió',
        ],
        'actions' => [
            'view_details' => [
                'modal_heading' => 'Detalls del registre',
            ],
            'restore' => [
                'modal_heading' => 'Restaurar registre',
                'modal_description' => 'Estàs segur que vols restaurar aquest registre?',
                'success_notification_title' => 'Registre restaurat',
                'failure_notification_title' => 'No s’ha pogut restaurar el registre',
            ],
            'force_delete' => [
                'modal_heading' => 'Eliminar registre definitivament',
                'modal_description' => 'Aquesta acció no es pot desfer.',
                'success_notification_title' => 'Registre eliminat definitivament',
                'failure_notification_title' => 'No s’ha pogut eliminar definitivament',
            ],
        ],
        'bulk_actions' => [
            'restore' => [
                'success_notification_title' => '{1} Registre restaurat|[2,*] Tots els :count registres restaurats',
                'success_notification_body' => '{1} El registre s’ha restaurat.|[2,*] Tots els :count registres s’han restaurat.',
                'warning_notification_title' => 'Restauració parcial',
                'warning_notification_body' => 'S’han restaurat :success de :total registres. :failed no s’han pogut restaurar.',
                'failure_notification_title' => 'La restauració ha fallat',
                'failure_notification_body' => '{1} El registre no s’ha pogut restaurar.|[2,*] Cap dels :count registres s’ha pogut restaurar.',
            ],
            'force_delete' => [
                'success_notification_title' => '{1} Registre eliminat definitivament|[2,*] Tots els :count registres eliminats definitivament',
                'success_notification_body' => '{1} El registre s’ha eliminat definitivament.|[2,*] Tots els :count registres s’han eliminat definitivament.',
                'warning_notification_title' => 'Eliminació parcial',
                'warning_notification_body' => 'S’han eliminat :success de :total registres. :failed no s’han pogut eliminar.',
                'failure_notification_title' => 'L’eliminació ha fallat',
                'failure_notification_body' => '{1} El registre no s’ha pogut eliminar definitivament.|[2,*] Cap dels :count registres s’ha pogut eliminar.',
            ],
        ],
    ],
];
