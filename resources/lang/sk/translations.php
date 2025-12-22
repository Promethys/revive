<?php

return [
    'pages' => [
        'title' => 'Kôš',
    ],
    'tables' => [
        'empty_state' => [
            'title' => 'Žiadne recyklovateľné modely.',
            'description' => 'Keď odstránite položky, zobrazia sa tu na obnovenie alebo trvalé odstránenie.',
        ],
        'columns' => [
            'model_id' => 'ID modelu',
            'model_type' => 'Typ modelu',
            'deleted_by' => 'Odstránil',
            'deleted_at' => 'Vymazané',
        ],
        'actions' => [
            'view_details' => [
                'modal_heading' => 'Podrobnosti záznamu',
            ],
            'restore' => [
                'success_notification_title' => 'Model obnovený',
                'failure_notification_title' => 'Obnovenie modelu zlyhalo',
            ],
            'force_delete' => [
                'success_notification_title' => 'Model natrvalo zmazaný',
                'failure_notification_title' => 'Trvalé zmazanie modelu zlyhalo',
            ],
        ],
        'bulk_actions' => [
            'restore' => [
                'success_notification_title' => '{1} Model bol úspešne obnovený|[2,*] Všetky :count modely boli úspešne obnovené',
                'success_notification_body' => '{1} Model bol obnovený.|[2,*] Všetky :count modely boli obnovené.',
                'warning_notification_title' => 'Obnovenie bolo čiastočne dokončené',
                'warning_notification_body' => 'Obnovených :success z :total modelov. :failed modely sa nepodarilo obnoviť.',
                'failure_notification_title' => 'Obnovenie zlyhalo',
                'failure_notification_body' => '{1} Model sa nepodarilo obnoviť.|[2,*] Žiadny z :count modelov sa nepodarilo obnoviť.',
            ],
            'force_delete' => [
                'success_notification_title' => '{1} Model bol natrvalo odstránený|[2,*] Všetky :count modely boli natrvalo odstránené',
                'success_notification_body' => '{1} Model bol natrvalo odstránený.|[2,*] Všetky :count modely boli natrvalo odstránené.',
                'warning_notification_title' => 'Odstránenie bolo čiastočne dokončené',
                'warning_notification_body' => 'Natrvalo odstránených :success z :total modelov. :failed modely sa nepodarilo odstrániť.',
                'failure_notification_title' => 'Odstránenie zlyhalo',
                'failure_notification_body' => '{1} Model sa nepodarilo natrvalo odstrániť.|[2,*] Žiadny z :count modelov sa nepodarilo natrvalo odstrániť.',
            ],
        ],
    ],
];
