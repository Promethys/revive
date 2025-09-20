<?php

return [
    'pages' => [
        'title' => 'Šiukšliadėžė',
    ],
    'tables' => [
        'empty_state' => 'Nėra perdirbamų modelių.',

        'columns' => [
            'model_id' => 'Modelio ID',
            'model_type' => 'Modelio tipas',
            'deleted_at' => 'Ištrinta',
        ],

        'actions' => [
            'view_details' => [
                'modal_heading' => 'Įrašo detalės',
            ],
            'restore' => [
                'success_notification_title' => 'Modelis atkurtas',
                'failure_notification_title' => 'Modelio atkūrimas nepavyko',
            ],
            'force_delete' => [
                'success_notification_title' => 'Modelis visam laikui ištrintas',
                'failure_notification_title' => 'Modelio ištrynimas visam laikui nepavyko',
            ],
        ],

        'bulk_actions' => [
            'restore' => [
                'success_notification_title' => '{1} Modelis sėkmingai atkurtas|[2,*] Visi :count modeliai sėkmingai atkurti',
                'success_notification_body' => '{1} Modelis atkurtas.|[2,*] Visi :count modeliai atkurti.',

                'warning_notification_title' => 'Atkūrimas baigtas iš dalies',
                'warning_notification_body' => 'Atkurta :success iš :total modelių. :failed modelių nepavyko atkurti.',

                'failure_notification_title' => 'Atkūrimas nepavyko',
                'failure_notification_body' => '{1} Modelio nepavyko atkurti.|[2,*] Nei vieno iš :count modelių nepavyko atkurti.',
            ],
            'force_delete' => [
                'success_notification_title' => '{1} Modelis visam laikui ištrintas|[2,*] Visi :count modeliai visam laikui ištrinti',
                'success_notification_body' => '{1} Modelis visam laikui ištrintas.|[2,*] Visi :count modeliai visam laikui ištrinti.',

                'warning_notification_title' => 'Ištrynimas baigtas iš dalies',
                'warning_notification_body' => 'Visam laikui ištrinta :success iš :total modelių. :failed modelių nepavyko ištrinti.',

                'failure_notification_title' => 'Ištrynimas nepavyko',
                'failure_notification_body' => '{1} Modelio nepavyko visam laikui ištrinti.|[2,*] Nei vieno iš :count modelių nepavyko visam laikui ištrinti.',
            ],
        ],
    ],
];
