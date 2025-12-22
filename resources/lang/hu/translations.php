<?php

return [
    'pages' => [
        'title' => 'Lomtár',
    ],
    'tables' => [
        'empty_state' => [
            'title' => 'Nincs visszaállítható modellje.',
            'description' => 'Amikor elemeket töröl, azok itt jelennek meg visszaállításhoz vagy végleges törléshez.',
        ],
        'columns' => [
            'model_id' => 'Modell azonosító',
            'model_type' => 'Modell típusa',
            'deleted_by' => 'Törölte',
            'deleted_at' => 'Törlés dátuma',
        ],
        'actions' => [
            'view_details' => [
                'modal_heading' => 'Rekord részletei',
            ],
            'restore' => [
                'success_notification_title' => 'Modell visszaállítva',
                'failure_notification_title' => 'A modell visszaállítása sikertelen',
            ],
            'force_delete' => [
                'success_notification_title' => 'Modell véglegesen törölve',
                'failure_notification_title' => 'A modell végleges törlése sikertelen',
            ],
        ],
        'bulk_actions' => [
            'restore' => [
                'success_notification_title' => '{1} Modell sikeresen visszaállítva|[2,*] Az összes :count modell sikeresen visszaállítva',
                'success_notification_body' => '{1} A modell vissza lett állítva.|[2,*] Az összes :count modell vissza lett állítva.',
                'warning_notification_title' => 'A visszaállítás részben befejeződött',
                'warning_notification_body' => ':total modellből :success vissza lett állítva. :failed modell nem lett visszaállítva.',
                'failure_notification_title' => 'A visszaállítás sikertelen',
                'failure_notification_body' => '{1} A modellt nem lehetett visszaállítani.|[2,*] Egyik :count modellt sem lehetett visszaállítani.',
            ],
            'force_delete' => [
                'success_notification_title' => '{1} Modell véglegesen törölve|[2,*] Az összes :count modell véglegesen törölve',
                'success_notification_body' => '{1} A modell véglegesen törölve lett.|[2,*] Az összes :count modell véglegesen törölve lett.',
                'warning_notification_title' => 'A törlés részben befejeződött',
                'warning_notification_body' => ':total modellből :success véglegesen törölve. :failed modell nem lett törölve.',
                'failure_notification_title' => 'A törlés sikertelen',
                'failure_notification_body' => '{1} A modellt nem lehetett véglegesen törölni.|[2,*] Egyik :count modellt sem lehetett véglegesen törölni.',
            ],
        ],
    ],
];
