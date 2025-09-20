<?php

return [
    'pages' => [
        'title' => 'Atkritumu tvertne',
    ],
    'tables' => [
        'empty_state' => 'Nav neviena pārstrādājama modeļa.',

        'columns' => [
            'model_id' => 'Modeļa ID',
            'model_type' => 'Modeļa tips',
            'deleted_at' => 'Dzēsts',
        ],

        'actions' => [
            'view_details' => [
                'modal_heading' => 'Ieraksta detaļas',
            ],
            'restore' => [
                'success_notification_title' => 'Modelis atjaunots',
                'failure_notification_title' => 'Modeļa atjaunošana neizdevās',
            ],
            'force_delete' => [
                'success_notification_title' => 'Modelis neatgriezeniski izdzēsts',
                'failure_notification_title' => 'Modeļa neatgriezeniska dzēšana neizdevās',
            ],
        ],

        'bulk_actions' => [
            'restore' => [
                'success_notification_title' => '{1} Modelis veiksmīgi atjaunots|[2,*] Visi :count modeļi veiksmīgi atjaunoti',
                'success_notification_body' => '{1} Modelis ir atjaunots.|[2,*] Visi :count modeļi ir atjaunoti.',

                'warning_notification_title' => 'Atjaunošana daļēji pabeigta',
                'warning_notification_body' => 'Atjaunoti :success no :total modeļiem. :failed modeļus nevarēja atjaunot.',

                'failure_notification_title' => 'Atjaunošana neizdevās',
                'failure_notification_body' => '{1} Modeli nevarēja atjaunot.|[2,*] Neviens no :count modeļiem netika atjaunots.',
            ],
            'force_delete' => [
                'success_notification_title' => '{1} Modelis neatgriezeniski izdzēsts|[2,*] Visi :count modeļi neatgriezeniski izdzēsti',
                'success_notification_body' => '{1} Modelis ir neatgriezeniski izdzēsts.|[2,*] Visi :count modeļi ir neatgriezeniski izdzēsti.',

                'warning_notification_title' => 'Dzēšana daļēji pabeigta',
                'warning_notification_body' => 'Neatgriezeniski izdzēsti :success no :total modeļiem. :failed modeļus nevarēja izdzēst.',

                'failure_notification_title' => 'Dzēšana neizdevās',
                'failure_notification_body' => '{1} Modeli nevarēja neatgriezeniski izdzēst.|[2,*] Neviens no :count modeļiem netika neatgriezeniski izdzēsts.',
            ],
        ],
    ],
];
