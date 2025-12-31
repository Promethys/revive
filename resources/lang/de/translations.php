<?php

return [
    'pages' => [
        'title' => 'Papierkorb',
    ],
    'tables' => [
        'empty_state' => [
            'title' => 'Der Papierkorb ist leer',
            'description' => 'Wenn Sie Einträge löschen, erscheinen sie hier zur Wiederherstellung oder endgültigen Löschung.',
        ],
        'columns' => [
            'model_id' => 'Modell-ID',
            'model_type' => 'Modelltyp',
            'deleted_by' => 'Gelöscht von',
            'deleted_at' => 'Gelöscht am',
        ],
        'actions' => [
            'view_details' => [
                'modal_heading' => 'Eintragsdetails',
            ],
            'restore' => [
                'modal_heading' => 'Eintrag wiederherstellen',
                'modal_description' => 'Möchten Sie diesen Eintrag wirklich wiederherstellen?',
                'success_notification_title' => 'Eintrag wiederhergestellt',
                'failure_notification_title' => 'Wiederherstellung fehlgeschlagen',
            ],
            'force_delete' => [
                'modal_heading' => 'Eintrag endgültig löschen',
                'modal_description' => 'Diese Aktion kann nicht rückgängig gemacht werden.',
                'success_notification_title' => 'Eintrag endgültig gelöscht',
                'failure_notification_title' => 'Endgültiges Löschen fehlgeschlagen',
            ],
        ],
        'bulk_actions' => [
            'restore' => [
                'success_notification_title' => '{1} Eintrag wiederhergestellt|[2,*] Alle :count Einträge wiederhergestellt',
                'success_notification_body' => '{1} Der Eintrag wurde wiederhergestellt.|[2,*] Alle :count Einträge wurden wiederhergestellt.',
                'warning_notification_title' => 'Teilweise Wiederherstellung',
                'warning_notification_body' => ':success von :total Einträgen wiederhergestellt. :failed fehlgeschlagen.',
                'failure_notification_title' => 'Wiederherstellung fehlgeschlagen',
                'failure_notification_body' => '{1} Der Eintrag konnte nicht wiederhergestellt werden.|[2,*] Keiner der :count Einträge konnte wiederhergestellt werden.',
            ],
            'force_delete' => [
                'success_notification_title' => '{1} Eintrag endgültig gelöscht|[2,*] Alle :count Einträge endgültig gelöscht',
                'success_notification_body' => '{1} Der Eintrag wurde endgültig gelöscht.|[2,*] Alle :count Einträge wurden endgültig gelöscht.',
                'warning_notification_title' => 'Teilweise Löschung',
                'warning_notification_body' => ':success von :total Einträgen gelöscht. :failed fehlgeschlagen.',
                'failure_notification_title' => 'Löschen fehlgeschlagen',
                'failure_notification_body' => '{1} Der Eintrag konnte nicht endgültig gelöscht werden.|[2,*] Keiner der :count Einträge konnte gelöscht werden.',
            ],
        ],
    ],
];
