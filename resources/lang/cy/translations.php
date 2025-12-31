<?php

return [
    'pages' => [
        'title' => 'Bin ailgylchu',
    ],
    'tables' => [
        'empty_state' => [
            'title' => 'Mae’r bin ailgylchu yn wag',
            'description' => 'Pan fyddwch yn dileu eitemau, byddant yn ymddangos yma i’w hadfer neu’u dileu’n barhaol.',
        ],
        'columns' => [
            'model_id' => 'ID model',
            'model_type' => 'Math o fodel',
            'deleted_by' => 'Wedi’i ddileu gan',
            'deleted_at' => 'Dyddiad dileu',
        ],
        'actions' => [
            'view_details' => [
                'modal_heading' => 'Manylion y cofnod',
            ],
            'restore' => [
                'modal_heading' => 'Adfer cofnod',
                'modal_description' => 'Ydych chi’n siŵr eich bod am adfer y cofnod hwn?',
                'success_notification_title' => 'Cofnod wedi’i adfer',
                'failure_notification_title' => 'Methodd adfer y cofnod',
            ],
            'force_delete' => [
                'modal_heading' => 'Dileu cofnod yn barhaol',
                'modal_description' => 'Ni ellir dadwneud y weithred hon.',
                'success_notification_title' => 'Cofnod wedi’i ddileu’n barhaol',
                'failure_notification_title' => 'Methodd dileu’n barhaol',
            ],
        ],
        'bulk_actions' => [
            'restore' => [
                'success_notification_title' => '{1} Cofnod wedi’i adfer|[2,*] Pob un o’r :count cofnod wedi’u hadfer',
                'success_notification_body' => '{1} Mae’r cofnod wedi’i adfer.|[2,*] Mae pob un o’r :count cofnod wedi’u hadfer.',
                'warning_notification_title' => 'Adferiad rhannol',
                'warning_notification_body' => 'Wedi adfer :success allan o :total cofnod. Methodd :failed.',
                'failure_notification_title' => 'Adferiad wedi methu',
                'failure_notification_body' => '{1} Ni ellid adfer y cofnod.|[2,*] Ni ellid adfer unrhyw un o’r :count cofnod.',
            ],
            'force_delete' => [
                'success_notification_title' => '{1} Cofnod wedi’i ddileu’n barhaol|[2,*] Pob un o’r :count cofnod wedi’u dileu’n barhaol',
                'success_notification_body' => '{1} Mae’r cofnod wedi’i ddileu’n barhaol.|[2,*] Mae pob un o’r :count cofnod wedi’u dileu’n barhaol.',
                'warning_notification_title' => 'Dileu rhannol',
                'warning_notification_body' => 'Wedi dileu :success allan o :total cofnod. Methodd :failed.',
                'failure_notification_title' => 'Dileu wedi methu',
                'failure_notification_body' => '{1} Ni ellid dileu’r cofnod yn barhaol.|[2,*] Ni ellid dileu unrhyw un o’r :count cofnod.',
            ],
        ],
    ],
];
