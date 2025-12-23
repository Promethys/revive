<?php

return [
    'pages' => [
        'title' => 'Reciclagem',
    ],
    'tables' => [
        'empty_state' => [
            'title' => 'Não existem modelos recicláveis.',
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
                'modal_heading' => 'Detalhes do Registo',
            ],
            'restore' => [
                'success_notification_title' => 'Modelo restaurado',
                'failure_notification_title' => 'Falha ao restaurar o modelo',
            ],
            'force_delete' => [
                'success_notification_title' => 'Modelo eliminado permanentemente',
                'failure_notification_title' => 'Falha ao eliminar permanentemente o modelo',
            ],
        ],
        'bulk_actions' => [
            'restore' => [
                'success_notification_title' => '{1} Modelo restaurado com sucesso|[2,*] Todos os :count modelos foram restaurados com sucesso',
                'success_notification_body' => '{1} O modelo foi restaurado.|[2,*] Todos os :count modelos foram restaurados.',
                'warning_notification_title' => 'Restauração concluída parcialmente',
                'warning_notification_body' => 'Foram restaurados :success de :total modelos. :failed modelos não puderam ser restaurados.',
                'failure_notification_title' => 'Falha na restauração',
                'failure_notification_body' => '{1} O modelo não pôde ser restaurado.|[2,*] Nenhum dos :count modelos pôde ser restaurado.',
            ],
            'force_delete' => [
                'success_notification_title' => '{1} Modelo eliminado permanentemente|[2,*] Todos os :count modelos foram eliminados permanentemente',
                'success_notification_body' => '{1} O modelo foi eliminado permanentemente.|[2,*] Todos os :count modelos foram eliminados permanentemente.',
                'warning_notification_title' => 'Eliminação concluída parcialmente',
                'warning_notification_body' => 'Foram eliminados permanentemente :success de :total modelos. :failed modelos não puderam ser eliminados.',
                'failure_notification_title' => 'Falha na eliminação',
                'failure_notification_body' => '{1} O modelo não pôde ser eliminado permanentemente.|[2,*] Nenhum dos :count modelos pôde ser eliminado permanentemente.',
            ],
        ],
    ],
];
