<?php

return [
    'pages' => [
        'title' => 'Koš',
    ],
    'tables' => [
        'empty_state' => [
            'title' => 'Nemáte žádný model k obnovení.',
            'description' => 'Když položky odstraníte, zobrazí se zde pro obnovení nebo trvalé odstranění.',
        ],
        'columns' => [
            'model_id' => 'ID modelu',
            'model_type' => 'Typ modelu',
            'deleted_by' => 'Smazal',
            'deleted_at' => 'Smazáno dne',
        ],
        'actions' => [
            'view_details' => [
                'modal_heading' => 'Detaily záznamu',
            ],
            'restore' => [
                'success_notification_title' => 'Model obnoven',
                'failure_notification_title' => 'Obnovení modelu selhalo',
            ],
            'force_delete' => [
                'success_notification_title' => 'Model trvale smazán',
                'failure_notification_title' => 'Trvalé smazání modelu selhalo',
            ],
        ],
        'bulk_actions' => [
            'restore' => [
                'success_notification_title' => '{1} Model byl úspěšně obnoven|[2,*] Všechny :count modely byly úspěšně obnoveny',
                'success_notification_body' => '{1} Model byl obnoven.|[2,*] Všechny :count modely byly obnoveny.',
                'warning_notification_title' => 'Obnovení částečně dokončeno',
                'warning_notification_body' => 'Obnoveno :success z :total modelů. :failed modely nelze obnovit.',
                'failure_notification_title' => 'Obnovení selhalo',
                'failure_notification_body' => '{1} Model nelze obnovit.|[2,*] Žádný ze :count modelů nelze obnovit.',
            ],
            'force_delete' => [
                'success_notification_title' => '{1} Model byl trvale smazán|[2,*] Všechny :count modely byly trvale smazány',
                'success_notification_body' => '{1} Model byl trvale smazán.|[2,*] Všechny :count modely byly trvale smazány.',
                'warning_notification_title' => 'Mazání částečně dokončeno',
                'warning_notification_body' => 'Trvale smazáno :success z :total modelů. :failed modelů nelze smazat.',
                'failure_notification_title' => 'Mazání selhalo',
                'failure_notification_body' => '{1} Model nelze trvale smazat.|[2,*] Žádný ze :count modelů nelze trvale smazat.',
            ],
        ],
    ],
];
