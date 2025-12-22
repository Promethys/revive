<?php

return [
    'pages' => [
        'title' => 'Papperskorgen',
    ],
    'tables' => [
        'empty_state' => [
            'title' => 'Det finns inga återvinningsbara modeller.',
            'description' => 'När du tar bort objekt visas de här för återställning eller permanent radering.',
        ],
        'columns' => [
            'model_id' => 'Model-ID',
            'model_type' => 'Modeltyp',
            'deleted_by' => 'Raderad av',
            'deleted_at' => 'Raderad',
        ],
        'actions' => [
            'view_details' => [
                'modal_heading' => 'Postdetaljer',
            ],
            'restore' => [
                'success_notification_title' => 'Modell återställd',
                'failure_notification_title' => 'Misslyckades att återställa modell',
            ],
            'force_delete' => [
                'success_notification_title' => 'Modell permanent raderad',
                'failure_notification_title' => 'Misslyckades att permanent radera modell',
            ],
        ],
        'bulk_actions' => [
            'restore' => [
                'success_notification_title' => '{1} Modell återställdes framgångsrikt|[2,*] Alla :count modeller återställdes framgångsrikt',
                'success_notification_body' => '{1} Modellen har återställts.|[2,*] Alla :count modeller har återställts.',
                'warning_notification_title' => 'Återställning delvis slutförd',
                'warning_notification_body' => 'Återställde :success av :total modeller. :failed modeller kunde inte återställas.',
                'failure_notification_title' => 'Återställning misslyckades',
                'failure_notification_body' => '{1} Modellen kunde inte återställas.|[2,*] Ingen av de :count modellerna kunde återställas.',
            ],
            'force_delete' => [
                'success_notification_title' => '{1} Modell permanent borttagen|[2,*] Alla :count modeller permanent borttagna',
                'success_notification_body' => '{1} Modellen har tagits bort permanent.|[2,*] Alla :count modeller har tagits bort permanent.',
                'warning_notification_title' => 'Borttagning delvis slutförd',
                'warning_notification_body' => 'Tog bort permanent :success av :total modeller. :failed modeller kunde inte tas bort.',
                'failure_notification_title' => 'Borttagning misslyckades',
                'failure_notification_body' => '{1} Modellen kunde inte tas bort permanent.|[2,*] Ingen av de :count modellerna kunde tas bort permanent.',
            ],
        ],
    ],
];
