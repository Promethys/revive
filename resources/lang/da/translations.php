<?php

return [
    'pages' => [
        'title' => 'Papirkurv',
    ],
    'tables' => [
        'empty_state' => [
            'title' => 'Papirkurven er tom',
            'description' => 'Når du sletter elementer, vises de her til gendannelse eller permanent sletning.',
        ],
        'columns' => [
            'model_id' => 'Model-ID',
            'model_type' => 'Modeltype',
            'deleted_by' => 'Slettet af',
            'deleted_at' => 'Slettet den',
        ],
        'actions' => [
            'view_details' => [
                'modal_heading' => 'Postdetaljer',
            ],
            'restore' => [
                'modal_heading' => 'Gendan post',
                'modal_description' => 'Er du sikker på, at du vil gendanne denne post?',
                'success_notification_title' => 'Post gendannet',
                'failure_notification_title' => 'Gendannelse mislykkedes',
            ],
            'force_delete' => [
                'modal_heading' => 'Slet post permanent',
                'modal_description' => 'Denne handling kan ikke fortrydes.',
                'success_notification_title' => 'Post slettet permanent',
                'failure_notification_title' => 'Permanent sletning mislykkedes',
            ],
        ],
        'bulk_actions' => [
            'restore' => [
                'success_notification_title' => '{1} Post gendannet|[2,*] Alle :count poster gendannet',
                'success_notification_body' => '{1} Posten blev gendannet.|[2,*] Alle :count poster blev gendannet.',
                'warning_notification_title' => 'Delvis gendannelse',
                'warning_notification_body' => 'Gendannet :success ud af :total poster. :failed kunne ikke gendannes.',
                'failure_notification_title' => 'Gendannelse mislykkedes',
                'failure_notification_body' => '{1} Posten kunne ikke gendannes.|[2,*] Ingen af :count posterne kunne gendannes.',
            ],
            'force_delete' => [
                'success_notification_title' => '{1} Post slettet permanent|[2,*] Alle :count poster slettet permanent',
                'success_notification_body' => '{1} Posten blev slettet permanent.|[2,*] Alle :count poster blev slettet permanent.',
                'warning_notification_title' => 'Delvis sletning',
                'warning_notification_body' => 'Slettet :success ud af :total poster. :failed kunne ikke slettes.',
                'failure_notification_title' => 'Sletning mislykkedes',
                'failure_notification_body' => '{1} Posten kunne ikke slettes permanent.|[2,*] Ingen af :count posterne kunne slettes.',
            ],
        ],
    ],
];
