<?php

return [
    'pages' => [
        'title' => 'Bin Ailgylchu',
    ],
    'tables' => [
        'empty_state' => 'Nid oes gennych unrhyw fodel adferadwy.',

        'columns' => [
            'model_id' => 'ID Model',
            'model_type' => 'Math o Fodel',
            'deleted_at' => 'Wedi\'i Ddileu ar',
        ],

        'actions' => [
            'view_details' => [
                'modal_heading' => 'Manylion cofnod',
            ],
            'restore' => [
                'success_notification_title' => 'Model wedi\'i adfer',
                'failure_notification_title' => 'Methodd ag adfer model',
            ],
            'force_delete' => [
                'success_notification_title' => 'Model wedi\'i ddileu\'n barhaol',
                'failure_notification_title' => 'Methodd â dileu model yn barhaol',
            ],
        ],

        'bulk_actions' => [
            'restore' => [
                'success_notification_title' => '{1} Wedi adfer y model yn llwyddiannus|[2,*] Mae pob :count model wedi cael ei adfer yn llwyddiannus',
                'success_notification_body' => '{1} Mae’r model wedi cael ei adfer.|[2,*] Mae pob :count model wedi cael ei adfer.',

                'warning_notification_title' => 'Adferiad wedi’i gwblhau’n rhannol',
                'warning_notification_body' => 'Adferwyd :success o :total model. Ni ellir adfer :failed model.',

                'failure_notification_title' => 'Methodd adferiad',
                'failure_notification_body' => '{1} Methu adfer y model.|[2,*] Ni ellir adfer unrhyw un o’r :count model.',
            ],
            'force_delete' => [
                'success_notification_title' => '{1} Model wedi’i ddileu’n barhaol|[2,*] Mae pob :count model wedi’i ddileu’n barhaol',
                'success_notification_body' => '{1} Mae’r model wedi’i ddileu’n barhaol.|[2,*] Mae pob :count model wedi’i ddileu’n barhaol.',

                'warning_notification_title' => 'Dileu wedi’i gwblhau’n rhannol',
                'warning_notification_body' => 'Wedi’i ddileu’n barhaol :success o :total model. Ni all :failed model gael ei ddileu.',

                'failure_notification_title' => 'Methodd dileu',
                'failure_notification_body' => '{1} Ni all y model gael ei ddileu’n barhaol.|[2,*] Ni all unrhyw un o’r :count model gael ei ddileu’n barhaol.',
            ],
        ],
    ],
];
