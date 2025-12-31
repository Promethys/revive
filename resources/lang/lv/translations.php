<?php

return [
    'pages' => [
        'title' => 'Atkritne',
    ],
    'tables' => [
        'empty_state' => [
            'title' => 'Atkritne ir tukša',
            'description' => 'Kad izdzēsīsiet vienumus, tie šeit parādīsies atjaunošanai vai neatgriezeniskai dzēšanai.',
        ],
        'columns' => [
            'model_id' => 'Modeļa ID',
            'model_type' => 'Modeļa tips',
            'deleted_by' => 'Dzēsa',
            'deleted_at' => 'Dzēšanas datums',
        ],
        'actions' => [
            'view_details' => [
                'modal_heading' => 'Ieraksta informācija',
            ],
            'restore' => [
                'modal_heading' => 'Atjaunot ierakstu',
                'modal_description' => 'Vai tiešām vēlaties atjaunot šo ierakstu? Ieraksts tiks pārvietots atpakaļ uz sākotnējo vietu.',
                'success_notification_title' => 'Ieraksts atjaunots',
                'failure_notification_title' => 'Neizdevās atjaunot ierakstu',
            ],
            'force_delete' => [
                'modal_heading' => 'Neatgriezeniski dzēst ierakstu',
                'modal_description' => 'Vai tiešām vēlaties neatgriezeniski dzēst šo ierakstu? Šo darbību nevar atsaukt, un ieraksts tiks pilnībā dzēsts no datubāzes.',
                'success_notification_title' => 'Ieraksts neatgriezeniski dzēsts',
                'failure_notification_title' => 'Neizdevās neatgriezeniski dzēst ierakstu',
            ],
        ],
        'bulk_actions' => [
            'restore' => [
                'success_notification_title' => '{1} Ieraksts veiksmīgi atjaunots|[2,*] Visi :count ieraksti veiksmīgi atjaunoti',
                'success_notification_body' => '{1} Ieraksts tika atjaunots.|[2,*] Visi :count ieraksti tika atjaunoti.',
                'warning_notification_title' => 'Atjaunošana daļēji pabeigta',
                'warning_notification_body' => 'Atjaunoti :success no :total ierakstiem. :failed ierakstus neizdevās atjaunot.',
                'failure_notification_title' => 'Atjaunošana neizdevās',
                'failure_notification_body' => '{1} Ierakstu neizdevās atjaunot.|[2,*] Nevienu no :count ierakstiem neizdevās atjaunot.',
            ],
            'force_delete' => [
                'success_notification_title' => '{1} Ieraksts neatgriezeniski dzēsts|[2,*] Visi :count ieraksti neatgriezeniski dzēsti',
                'success_notification_body' => '{1} Ieraksts tika neatgriezeniski dzēsts.|[2,*] Visi :count ieraksti tika neatgriezeniski dzēsti.',
                'warning_notification_title' => 'Dzēšana daļēji pabeigta',
                'warning_notification_body' => 'Neatgriezeniski dzēsti :success no :total ierakstiem. :failed ierakstus neizdevās dzēst.',
                'failure_notification_title' => 'Dzēšana neizdevās',
                'failure_notification_body' => '{1} Ierakstu neizdevās neatgriezeniski dzēst.|[2,*] Nevienu no :count ierakstiem neizdevās neatgriezeniski dzēst.',
            ],
        ],
    ],
];
