<?php

return [
    'pages' => [
        'title' => 'Reciclagem',
    ],
    'tables' => [
        'empty_state' => [
            'title' => 'A reciclagem está vazia',
            'description' => 'Quando elimina itens, estes aparecerão aqui para restauro ou eliminação permanente.',
        ],
        'columns' => [
            'model_id' => 'ID do Modelo',
            'model_type' => 'Tipo de Modelo',
            'deleted_by' => 'Eliminado por',
            'deleted_at' => 'Eliminado em',
        ],
        'actions' => [
            'view_details' => [
                'modal_heading' => 'Detalhes do registo',
            ],
            'restore' => [
                'modal_heading' => 'Restaurar registo',
                'modal_description' => 'Tem a certeza de que pretende restaurar este registo?',
                'success_notification_title' => 'Registo restaurado',
                'failure_notification_title' => 'Falha ao restaurar o registo',
            ],
            'force_delete' => [
                'modal_heading' => 'Eliminar registo permanentemente',
                'modal_description' => 'Esta ação não pode ser revertida.',
                'success_notification_title' => 'Registo eliminado permanentemente',
                'failure_notification_title' => 'Falha ao eliminar permanentemente o registo',
            ],
        ],
        'bulk_actions' => [
            'restore' => [
                'success_notification_title' => '{1} Registo restaurado com sucesso|[2,*] Todos os :count registos foram restaurados com sucesso',
                'success_notification_body' => '{1} O registo foi restaurado.|[2,*] Todos os :count registos foram restaurados.',
                'warning_notification_title' => 'Restauração concluída parcialmente',
                'warning_notification_body' => 'Foram restaurados :success de :total registos. :failed registos não puderam ser restaurados.',
                'failure_notification_title' => 'Falha na restauração',
                'failure_notification_body' => '{1} O registo não pôde ser restaurado.|[2,*] Nenhum dos :count registos pôde ser restaurado.',
            ],
            'force_delete' => [
                'success_notification_title' => '{1} Registo eliminado permanentemente|[2,*] Todos os :count registos foram eliminados permanentemente',
                'success_notification_body' => '{1} O registo foi eliminado permanentemente.|[2,*] Todos os :count registos foram eliminados permanentemente.',
                'warning_notification_title' => 'Eliminação concluída parcialmente',
                'warning_notification_body' => 'Foram eliminados permanentemente :success de :total registos. :failed registos não puderam ser eliminados.',
                'failure_notification_title' => 'Falha na eliminação',
                'failure_notification_body' => '{1} O registo não pôde ser eliminado permanentemente.|[2,*] Nenhum dos :count registos pôde ser eliminado permanentemente.',
            ],
        ],
    ],
];
