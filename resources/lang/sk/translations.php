<?php

return [
    'pages' => [
        'title' => 'Kôš',
    ],
    'tables' => [
        'empty_state' => [
            'title' => 'Kôš je prázdny',
            'description' => 'Po odstránení sa položky zobrazia tu na obnovenie alebo trvalé odstránenie.',
        ],
        'columns' => [
            'model_id' => 'ID modelu',
            'model_type' => 'Typ modelu',
            'deleted_by' => 'Odstránil',
            'deleted_at' => 'Odstránené dňa',
        ],
        'actions' => [
            'view_details' => [
                'modal_heading' => 'Podrobnosti záznamu',
            ],
            'restore' => [
                'modal_heading' => 'Obnoviť záznam',
                'modal_description' => 'Naozaj chcete obnoviť tento záznam? Záznam bude presunutý späť na pôvodné miesto.',
                'success_notification_title' => 'Záznam bol obnovený',
                'failure_notification_title' => 'Obnovenie záznamu zlyhalo',
            ],
            'force_delete' => [
                'modal_heading' => 'Trvalo odstrániť záznam',
                'modal_description' => 'Naozaj chcete tento záznam trvalo odstrániť? Túto akciu nie je možné vrátiť späť a záznam bude úplne odstránený z databázy.',
                'success_notification_title' => 'Záznam bol trvalo odstránený',
                'failure_notification_title' => 'Trvalé odstránenie záznamu zlyhalo',
            ],
        ],
        'bulk_actions' => [
            'restore' => [
                'success_notification_title' => '{1} Záznam bol úspešne obnovený|[2,*] Všetky :count záznamy boli úspešne obnovené',
                'success_notification_body' => '{1} Záznam bol obnovený.|[2,*] Všetky :count záznamy boli obnovené.',
                'warning_notification_title' => 'Obnovenie čiastočne dokončené',
                'warning_notification_body' => 'Obnovených :success z :total záznamov. :failed záznamov sa nepodarilo obnoviť.',
                'failure_notification_title' => 'Obnovenie zlyhalo',
                'failure_notification_body' => '{1} Záznam sa nepodarilo obnoviť.|[2,*] Nepodarilo sa obnoviť žiadny z :count záznamov.',
            ],
            'force_delete' => [
                'success_notification_title' => '{1} Záznam bol trvalo odstránený|[2,*] Všetky :count záznamy boli trvalo odstránené',
                'success_notification_body' => '{1} Záznam bol trvalo odstránený.|[2,*] Všetky :count záznamy boli trvalo odstránené.',
                'warning_notification_title' => 'Odstránenie čiastočne dokončené',
                'warning_notification_body' => 'Trvalo odstránených :success z :total záznamov. :failed záznamov sa nepodarilo odstrániť.',
                'failure_notification_title' => 'Odstránenie zlyhalo',
                'failure_notification_body' => '{1} Záznam sa nepodarilo trvalo odstrániť.|[2,*] Nepodarilo sa trvalo odstrániť žiadny z :count záznamov.',
            ],
        ],
    ],
];
