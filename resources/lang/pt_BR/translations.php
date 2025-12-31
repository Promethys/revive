<?php

return [
    'pages' => [
        'title' => 'Lixeira',
    ],
    'tables' => [
        'empty_state' => [
            'title' => 'A lixeira está vazia',
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
                'modal_heading' => 'Detalhes do registro',
            ],
            'restore' => [
                'modal_heading' => 'Restaurar registro',
                'modal_description' => 'Tem certeza de que deseja restaurar este registro?',
                'success_notification_title' => 'Registro restaurado',
                'failure_notification_title' => 'Falha ao restaurar o registro',
            ],
            'force_delete' => [
                'modal_heading' => 'Excluir registro permanentemente',
                'modal_description' => 'Esta ação não pode ser desfeita.',
                'success_notification_title' => 'Registro excluído permanentemente',
                'failure_notification_title' => 'Falha ao excluir permanentemente o registro',
            ],
        ],
        'bulk_actions' => [
            'restore' => [
                'success_notification_title' => '{1} Registro restaurado com sucesso|[2,*] Todos os :count registros foram restaurados com sucesso',
                'success_notification_body' => '{1} O registro foi restaurado.|[2,*] Todos os :count registros foram restaurados.',
                'warning_notification_title' => 'Restauração concluída parcialmente',
                'warning_notification_body' => 'Foram restaurados :success de :total registros. :failed registros não puderam ser restaurados.',
                'failure_notification_title' => 'Falha na restauração',
                'failure_notification_body' => '{1} O registro não pôde ser restaurado.|[2,*] Nenhum dos :count registros pôde ser restaurado.',
            ],
            'force_delete' => [
                'success_notification_title' => '{1} Registro excluído permanentemente|[2,*] Todos os :count registros foram excluídos permanentemente',
                'success_notification_body' => '{1} O registro foi excluído permanentemente.|[2,*] Todos os :count registros foram excluídos permanentemente.',
                'warning_notification_title' => 'Exclusão concluída parcialmente',
                'warning_notification_body' => 'Foram excluídos permanentemente :success de :total registros. :failed registros não puderam ser excluídos.',
                'failure_notification_title' => 'Falha na exclusão',
                'failure_notification_body' => '{1} O registro não pôde ser excluído permanentemente.|[2,*] Nenhum dos :count registros pôde ser excluído permanentemente.',
            ],
        ],
    ],
];
