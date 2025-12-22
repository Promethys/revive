<?php

return [
    'pages' => [
        'title' => 'Kosz',
    ],
    'tables' => [
        'empty_state' => [
            'title' => 'Brak modeli do odzyskania.',
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
                'success_notification_title' => 'Model przywrócony',
                'failure_notification_title' => 'Przywracanie modelu nie powiodło się',
            ],
            'force_delete' => [
                'success_notification_title' => 'Model trwale usunięty',
                'failure_notification_title' => 'Trwałe usunięcie modelu nie powiodło się',
            ],
        ],
        'bulk_actions' => [
            'restore' => [
                'success_notification_title' => '{1} Model został pomyślnie przywrócony|[2,*] Wszystkie :count modele zostały pomyślnie przywrócone',
                'success_notification_body' => '{1} Model został przywrócony.|[2,*] Wszystkie :count modele zostały przywrócone.',
                'warning_notification_title' => 'Przywracanie częściowo zakończone',
                'warning_notification_body' => 'Przywrócono :success z :total modeli. :failed modeli nie udało się przywrócić.',
                'failure_notification_title' => 'Przywracanie nie powiodło się',
                'failure_notification_body' => '{1} Model nie mógł zostać przywrócony.|[2,*] Żaden z :count modeli nie mógł zostać przywrócony.',
            ],
            'force_delete' => [
                'success_notification_title' => '{1} Model został trwale usunięty|[2,*] Wszystkie :count modele zostały trwale usunięte',
                'success_notification_body' => '{1} Model został trwale usunięty.|[2,*] Wszystkie :count modele zostały trwale usunięte.',
                'warning_notification_title' => 'Usuwanie częściowo zakończone',
                'warning_notification_body' => 'Trwale usunięto :success z :total modeli. :failed modeli nie udało się usunąć.',
                'failure_notification_title' => 'Usuwanie nie powiodło się',
                'failure_notification_body' => '{1} Model nie mógł zostać trwale usunięty.|[2,*] Żaden z :count modeli nie mógł zostać trwale usunięty.',
            ],
        ],
    ],
];
