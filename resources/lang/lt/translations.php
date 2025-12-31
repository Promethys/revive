<?php

return [
    'pages' => [
        'title' => 'Šiukšlinė',
    ],
    'tables' => [
        'empty_state' => [
            'title' => 'Šiukšlinė tuščia',
            'description' => 'Kai ištrinate elementus, jie čia bus rodomi atkūrimui arba negrįžtamam ištrynimui.',
        ],
        'columns' => [
            'model_id' => 'Modelio ID',
            'model_type' => 'Modelio tipas',
            'deleted_by' => 'Ištrynė',
            'deleted_at' => 'Ištrynimo data',
        ],
        'actions' => [
            'view_details' => [
                'modal_heading' => 'Įrašo informacija',
            ],
            'restore' => [
                'modal_heading' => 'Atkurti įrašą',
                'modal_description' => 'Ar tikrai norite atkurti šį įrašą? Įrašas bus grąžintas į pradinę vietą.',
                'success_notification_title' => 'Įrašas atkurtas',
                'failure_notification_title' => 'Nepavyko atkurti įrašo',
            ],
            'force_delete' => [
                'modal_heading' => 'Negrįžtamai ištrinti įrašą',
                'modal_description' => 'Ar tikrai norite negrįžtamai ištrinti šį įrašą? Šio veiksmo atšaukti negalima, o įrašas bus visiškai pašalintas iš duomenų bazės.',
                'success_notification_title' => 'Įrašas negrįžtamai ištrintas',
                'failure_notification_title' => 'Nepavyko negrįžtamai ištrinti įrašo',
            ],
        ],
        'bulk_actions' => [
            'restore' => [
                'success_notification_title' => '{1} Įrašas sėkmingai atkurtas|[2,*] Visi :count įrašai sėkmingai atkurti',
                'success_notification_body' => '{1} Įrašas buvo atkurtas|[2,*] Visi :count įrašai buvo atkurti',
                'warning_notification_title' => 'Atkūrimas atliktas iš dalies',
                'warning_notification_body' => 'Atkurta :success iš :total įrašų. :failed įrašų atkurti nepavyko.',
                'failure_notification_title' => 'Atkūrimas nepavyko',
                'failure_notification_body' => '{1} Įrašo atkurti nepavyko|[2,*] Nė vieno iš :count įrašų nepavyko atkurti',
            ],
            'force_delete' => [
                'success_notification_title' => '{1} Įrašas negrįžtamai ištrintas|[2,*] Visi :count įrašai negrįžtamai ištrinti',
                'success_notification_body' => '{1} Įrašas buvo negrįžtamai ištrintas|[2,*] Visi :count įrašai buvo negrįžtamai ištrinti',
                'warning_notification_title' => 'Ištrynimas atliktas iš dalies',
                'warning_notification_body' => 'Negrįžtamai ištrinta :success iš :total įrašų. :failed įrašų ištrinti nepavyko.',
                'failure_notification_title' => 'Ištrynimas nepavyko',
                'failure_notification_body' => '{1} Įrašo negrįžtamai ištrinti nepavyko|[2,*] Nė vieno iš :count įrašų nepavyko negrįžtamai ištrinti',
            ],
        ],
    ],
];
