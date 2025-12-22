<?php

return [
    'pages' => [
        'title' => 'Paperera de reciclatge',
    ],
    'tables' => [
        'empty_state' => [
            'title' => 'No tens cap model recuperable.',
            'description' => 'Quan suprimiu elements, apareixeran aquí per restaurar-los o eliminar-los definitivament.',
        ],
        'columns' => [
            'model_id' => 'ID del model',
            'model_type' => 'Tipus de model',
            'deleted_by' => 'Suprimit per',
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
        'bulk_actions' => [
            'restore' => [
                'success_notification_title' => '{1} Model restaurat correctament|[2,*] Tots :count models restaurats correctament',
                'success_notification_body' => '{1} El model ha estat restaurat.|[2,*] Tots :count models han estat restaurats.',
                'warning_notification_title' => 'Restauració parcialment completada',
                'warning_notification_body' => 'Restaurats :success de :total models. No s\'ha pogut restaurar :failed models.',
                'failure_notification_title' => 'La restauració ha fallat',
                'failure_notification_body' => '{1} No s\'ha pogut restaurar el model.|[2,*] Cap dels :count models ha pogut ser restaurat.',
            ],
            'force_delete' => [
                'success_notification_title' => '{1} Model esborrat permanentment|[2,*] Tots :count models esborrats permanentment',
                'success_notification_body' => '{1} El model ha estat esborrat permanentment.|[2,*] Tots :count models han estat esborrats permanentment.',
                'warning_notification_title' => 'L\'esborrat parcialment completat',
                'warning_notification_body' => 'S\'han esborrat permanentment :success de :total models. No s\'ha pogut esborrar :failed models.',
                'failure_notification_title' => 'L\'esborrat ha fallat',
                'failure_notification_body' => '{1} No s\'ha pogut esborrar permanentment el model.|[2,*] Cap dels :count models ha pogut ser esborrat permanentment.',
            ],
        ],
    ],
];
