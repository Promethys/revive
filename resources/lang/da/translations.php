<?php

return [
    'pages' => [
        'title' => 'Papirkurv',
    ],
    'tables' => [
        'empty_state' => 'Du har ingen genoprettelige modeller.',

        'columns' => [
            'model_id' => 'Model ID',
            'model_type' => 'Modeltype',
            'deleted_at' => 'Slettet den',
        ],

        'actions' => [
            'view_details' => [
                'modal_heading' => 'Postdetaljer',
            ],
            'restore' => [
                'success_notification_title' => 'Model gendannet',
                'failure_notification_title' => 'Kunne ikke gendanne model',
            ],
            'force_delete' => [
                'success_notification_title' => 'Model permanent slettet',
                'failure_notification_title' => 'Kunne ikke slette model permanent',
            ],
        ],

        'bulk_actions' => [
            'restore' => [
                'success_notification_title' => '{1} Modelen blev gendannet med succes|[2,*] Alle :count modeller blev gendannet med succes',
                'success_notification_body' => '{1} Modellen er gendannet.|[2,*] Alle :count modeller er gendannet.',

                'warning_notification_title' => 'Gendannelse delvist fuldført',
                'warning_notification_body' => 'Gendannet :success ud af :total modeller. :failed modeller kunne ikke gendannes.',

                'failure_notification_title' => 'Gendannelse mislykkedes',
                'failure_notification_body' => '{1} Modellen kunne ikke gendannes.|[2,*] Ingen af :count modellerne kunne gendannes.',
            ],
            'force_delete' => [
                'success_notification_title' => '{1} Modelen blev permanent slettet|[2,*] Alle :count modeller blev permanent slettet',
                'success_notification_body' => '{1} Modellen er permanent slettet.|[2,*] Alle :count modeller er permanent slettet.',

                'warning_notification_title' => 'Sletning delvist fuldført',
                'warning_notification_body' => 'Permanent slettet :success ud af :total modeller. :failed modeller kunne ikke slettes.',

                'failure_notification_title' => 'Sletning mislykkedes',
                'failure_notification_body' => '{1} Modellen kunne ikke slettes permanent.|[2,*] Ingen af :count modellerne kunne slettes permanent.',
            ],
        ],
    ],
];
