<?php

return [
    'pages' => [
        'title' => 'Papierkorb',
    ],
    'tables' => [
        'empty_state' => [
            'title' => 'Sie haben kein wiederherstellbares Modell.',
            'description' => 'Wenn Sie Elemente löschen, werden sie hier zur Wiederherstellung oder dauerhaften Löschung angezeigt.',
        ],
        'columns' => [
            'model_id' => 'Modell-ID',
            'model_type' => 'Modelltyp',
            'deleted_by' => 'Gelöscht von',
            'deleted_at' => 'Gelöscht am',
        ],
        'actions' => [
            'view_details' => [
                'modal_heading' => 'Datensatzdetails',
            ],
            'restore' => [
                'success_notification_title' => 'Modell wiederhergestellt',
                'failure_notification_title' => 'Wiederherstellung des Modells fehlgeschlagen',
            ],
            'force_delete' => [
                'success_notification_title' => 'Modell dauerhaft gelöscht',
                'failure_notification_title' => 'Dauerhaftes Löschen des Modells fehlgeschlagen',
            ],
        ],
        'bulk_actions' => [
            'restore' => [
                'success_notification_title' => '{1} Modell wurde erfolgreich wiederhergestellt|[2,*] Alle :count Modelle wurden erfolgreich wiederhergestellt',
                'success_notification_body' => '{1} Das Modell wurde wiederhergestellt.|[2,*] Alle :count Modelle wurden wiederhergestellt.',
                'warning_notification_title' => 'Wiederherstellung teilweise abgeschlossen',
                'warning_notification_body' => ':success von :total Modellen wurden wiederhergestellt. :failed Modelle konnten nicht wiederhergestellt werden.',
                'failure_notification_title' => 'Wiederherstellung fehlgeschlagen',
                'failure_notification_body' => '{1} Das Modell konnte nicht wiederhergestellt werden.|[2,*] Keines der :count Modelle konnte wiederhergestellt werden.',
            ],
            'force_delete' => [
                'success_notification_title' => '{1} Modell wurde dauerhaft gelöscht|[2,*] Alle :count Modelle wurden dauerhaft gelöscht',
                'success_notification_body' => '{1} Das Modell wurde dauerhaft gelöscht.|[2,*] Alle :count Modelle wurden dauerhaft gelöscht.',
                'warning_notification_title' => 'Löschung teilweise abgeschlossen',
                'warning_notification_body' => ':success von :total Modellen wurden dauerhaft gelöscht. :failed Modelle konnten nicht gelöscht werden.',
                'failure_notification_title' => 'Löschung fehlgeschlagen',
                'failure_notification_body' => '{1} Das Modell konnte nicht dauerhaft gelöscht werden.|[2,*] Keines der :count Modelle konnte dauerhaft gelöscht werden.',
            ],
        ],
    ],
];
