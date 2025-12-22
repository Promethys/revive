<?php

return [
    'pages' => [
        'title' => 'Lixeira',
    ],
    'tables' => [
        'empty_state' => [
            'title' => 'Nenhum modelo reciclável encontrado.',
            'description' => 'Quando você exclui itens, eles aparecerão aqui para restauração ou exclusão permanente.',
        ],
        'columns' => [
            'model_id' => 'ID do Modelo',
            'model_type' => 'Tipo de Modelo',
            'deleted_by' => 'Excluído por',
            'deleted_at' => 'Excluído em',
        ],
        'actions' => [
            'view_details' => [
                'modal_heading' => 'Detalhes do Registro',
            ],
            'restore' => [
                'success_notification_title' => 'Modelo restaurado',
                'failure_notification_title' => 'Falha ao restaurar o modelo',
            ],
            'force_delete' => [
                'success_notification_title' => 'Modelo excluído permanentemente',
                'failure_notification_title' => 'Falha ao excluir permanentemente o modelo',
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
                'success_notification_title' => '{1} Modelo excluído permanentemente|[2,*] Todos os :count modelos foram excluídos permanentemente',
                'success_notification_body' => '{1} O modelo foi excluído permanentemente.|[2,*] Todos os :count modelos foram excluídos permanentemente.',
                'warning_notification_title' => 'Exclusão concluída parcialmente',
                'warning_notification_body' => 'Foram excluídos permanentemente :success de :total modelos. :failed modelos não puderam ser excluídos.',
                'failure_notification_title' => 'Falha na exclusão',
                'failure_notification_body' => '{1} O modelo não pôde ser excluído permanentemente.|[2,*] Nenhum dos :count modelos pôde ser excluído permanentemente.',
            ],
        ],
    ],
];
