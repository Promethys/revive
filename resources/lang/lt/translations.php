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
    ],
];
