<?php

return [
    'pages' => [
        'title' => 'Kosz',
    ],
    'tables' => [
        'empty_state' => [
            'title' => 'Kosz jest pusty',
            'description' => 'Po usunięciu elementów pojawią się one tutaj w celu przywrócenia lub trwałego usunięcia.',
        ],
        'columns' => [
            'model_id' => 'ID modelu',
            'model_type' => 'Typ modelu',
            'deleted_by' => 'Usunięte przez',
            'deleted_at' => 'Usunięto',
        ],
        'actions' => [
            'view_details' => [
                'modal_heading' => 'Szczegóły rekordu',
            ],
            'restore' => [
                'modal_heading' => 'Przywróć rekord',
                'modal_description' => 'Czy na pewno chcesz przywrócić ten rekord?',
                'success_notification_title' => 'Rekord przywrócony',
                'failure_notification_title' => 'Nie udało się przywrócić rekordu',
            ],
            'force_delete' => [
                'modal_heading' => 'Usuń rekord na stałe',
                'modal_description' => 'Tej operacji nie można cofnąć.',
                'success_notification_title' => 'Rekord usunięty na stałe',
                'failure_notification_title' => 'Nie udało się usunąć rekordu na stałe',
            ],
        ],
        'bulk_actions' => [
            'restore' => [
                'success_notification_title' => '{1} Rekord został pomyślnie przywrócony|[2,*] Wszystkie :count rekordy zostały pomyślnie przywrócone',
                'success_notification_body' => '{1} Rekord został przywrócony.|[2,*] Wszystkie :count rekordy zostały przywrócone.',
                'warning_notification_title' => 'Przywracanie częściowo zakończone',
                'warning_notification_body' => 'Przywrócono :success z :total rekordów. :failed rekordów nie udało się przywrócić.',
                'failure_notification_title' => 'Przywracanie nie powiodło się',
                'failure_notification_body' => '{1} Rekord nie mógł zostać przywrócony.|[2,*] Żaden z :count rekordów nie mógł zostać przywrócony.',
            ],
            'force_delete' => [
                'success_notification_title' => '{1} Rekord został trwale usunięty|[2,*] Wszystkie :count rekordy zostały trwale usunięte',
                'success_notification_body' => '{1} Rekord został trwale usunięty.|[2,*] Wszystkie :count rekordy zostały trwale usunięte.',
                'warning_notification_title' => 'Usuwanie częściowo zakończone',
                'warning_notification_body' => 'Trwale usunięto :success z :total rekordów. :failed rekordów nie udało się usunąć.',
                'failure_notification_title' => 'Usuwanie nie powiodło się',
                'failure_notification_body' => '{1} Rekord nie mógł zostać trwale usunięty.|[2,*] Żaden z :count rekordów nie mógł zostać trwale usunięty.',
            ],
        ],
    ],
];
