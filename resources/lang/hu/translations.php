<?php

return [
    'pages' => [
        'title' => 'Lomtár',
    ],
    'tables' => [
        'empty_state' => [
            'title' => 'A lomtár üres',
            'description' => 'Amikor elemeket töröl, itt jelennek meg visszaállításhoz vagy végleges törléshez.',
        ],
        'columns' => [
            'model_id' => 'Modell ID',
            'model_type' => 'Modell típusa',
            'deleted_by' => 'Törölte',
            'deleted_at' => 'Törlés dátuma',
        ],
        'actions' => [
            'view_details' => [
                'modal_heading' => 'Rekord részletei',
            ],
            'restore' => [
                'modal_heading' => 'Rekord visszaállítása',
                'modal_description' => 'Biztosan vissza szeretné állítani ezt a rekordot?',
                'success_notification_title' => 'Rekord visszaállítva',
                'failure_notification_title' => 'A visszaállítás nem sikerült',
            ],
            'force_delete' => [
                'modal_heading' => 'Rekord végleges törlése',
                'modal_description' => 'Ez a művelet nem vonható vissza.',
                'success_notification_title' => 'Rekord véglegesen törölve',
                'failure_notification_title' => 'A végleges törlés nem sikerült',
            ],
        ],
        'bulk_actions' => [
            'restore' => [
                'success_notification_title' => '{1} Rekord visszaállítva|[2,*] Az összes :count rekord visszaállítva',
                'success_notification_body' => '{1} A rekord visszaállításra került.|[2,*] Az összes :count rekord visszaállításra került.',
                'warning_notification_title' => 'Részleges visszaállítás',
                'warning_notification_body' => ':success rekord visszaállítva :total-ból. :failed sikertelen.',
                'failure_notification_title' => 'A visszaállítás sikertelen',
                'failure_notification_body' => '{1} A rekord nem állítható vissza.|[2,*] Egyetlen :count rekord sem állítható vissza.',
            ],
            'force_delete' => [
                'success_notification_title' => '{1} Rekord véglegesen törölve|[2,*] Az összes :count rekord véglegesen törölve',
                'success_notification_body' => '{1} A rekord véglegesen törölve.|[2,*] Az összes :count rekord véglegesen törölve.',
                'warning_notification_title' => 'Részleges törlés',
                'warning_notification_body' => ':success rekord törölve :total-ból. :failed sikertelen.',
                'failure_notification_title' => 'A törlés sikertelen',
                'failure_notification_body' => '{1} A rekord nem törölhető véglegesen.|[2,*] Egyetlen :count rekord sem törölhető.',
            ],
        ],
    ],
];
