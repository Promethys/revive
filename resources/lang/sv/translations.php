<?php

return [
    'pages' => [
        'title' => 'Papperskorgen',
    ],
    'tables' => [
        'empty_state' => [
            'title' => 'Papperskorgen är tom',
            'description' => 'När du tar bort objekt visas de här för återställning eller permanent radering.',
        ],
        'columns' => [
            'model_id' => 'Modell-ID',
            'model_type' => 'Modelltyp',
            'deleted_by' => 'Raderad av',
            'deleted_at' => 'Raderad den',
        ],
        'actions' => [
            'view_details' => [
                'modal_heading' => 'Postdetaljer',
            ],
            'restore' => [
                'modal_heading' => 'Återställ post',
                'modal_description' => 'Är du säker på att du vill återställa denna post?',
                'success_notification_title' => 'Post återställd',
                'failure_notification_title' => 'Misslyckades att återställa post',
            ],
            'force_delete' => [
                'modal_heading' => 'Radera post permanent',
                'modal_description' => 'Denna åtgärd kan inte ångras.',
                'success_notification_title' => 'Post permanent raderad',
                'failure_notification_title' => 'Misslyckades att radera post permanent',
            ],
        ],
        'bulk_actions' => [
            'restore' => [
                'success_notification_title' => '{1} Post återställd framgångsrikt|[2,*] Alla :count poster återställda framgångsrikt',
                'success_notification_body' => '{1} Posten har återställts.|[2,*] Alla :count poster har återställts.',
                'warning_notification_title' => 'Återställning delvis slutförd',
                'warning_notification_body' => 'Återställde :success av :total poster. :failed poster kunde inte återställas.',
                'failure_notification_title' => 'Återställning misslyckades',
                'failure_notification_body' => '{1} Posten kunde inte återställas.|[2,*] Ingen av de :count posterna kunde återställas.',
            ],
            'force_delete' => [
                'success_notification_title' => '{1} Post permanent raderad|[2,*] Alla :count poster permanent raderade',
                'success_notification_body' => '{1} Posten har permanent raderats.|[2,*] Alla :count poster har permanent raderats.',
                'warning_notification_title' => 'Radering delvis slutförd',
                'warning_notification_body' => 'Raderade permanent :success av :total poster. :failed poster kunde inte raderas.',
                'failure_notification_title' => 'Radering misslyckades',
                'failure_notification_body' => '{1} Posten kunde inte raderas permanent.|[2,*] Ingen av de :count posterna kunde raderas permanent.',
            ],
        ],
    ],
];
