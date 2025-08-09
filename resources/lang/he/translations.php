<?php

return [
    'pages' => [
        'title' => 'פח מחזור',
    ],
    'tables' => [
        'empty_state' => 'אין לך אף מודל לשחזור.',

        'columns' => [
            'model_id' => 'מזהה מודל',
            'model_type' => 'סוג מודל',
            'deleted_at' => 'נמחק בתאריך',
        ],

        'actions' => [
            'view_details' => [
                'modal_heading' => 'פרטי רשומה',
            ],
            'restore' => [
                'success_notification_title' => 'המודל שוחזר',
                'failure_notification_title' => 'שחזור המודל נכשל',
            ],
            'force_delete' => [
                'success_notification_title' => 'המודל נמחק לצמיתות',
                'failure_notification_title' => 'מחיקה לצמיתות של המודל נכשלה',
            ]
        ],
    ],
];
