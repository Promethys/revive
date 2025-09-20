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
            ],
        ],

        'bulk_actions' => [
            'restore' => [
                'success_notification_title' => '{1} המודל שוחזר בהצלחה|[2,*] כל :count המודלים שוחזרו בהצלחה',
                'success_notification_body' => '{1} המודל שוחזר.|[2,*] כל :count המודלים שוחזרו.',

                'warning_notification_title' => 'השחזור הושלם חלקית',
                'warning_notification_body' => 'שוחזרו :success מתוך :total מודלים. לא ניתן היה לשחזר :failed מודלים.',

                'failure_notification_title' => 'השחזור נכשל',
                'failure_notification_body' => '{1} לא ניתן היה לשחזר את המודל.|[2,*] אף אחד מ־:count המודלים לא שוחזר.',
            ],
            'force_delete' => [
                'success_notification_title' => '{1} המודל נמחק לצמיתות|[2,*] כל :count המודלים נמחקו לצמיתות',
                'success_notification_body' => '{1} המודל נמחק לצמיתות.|[2,*] כל :count המודלים נמחקו לצמיתות.',

                'warning_notification_title' => 'המחיקה הושלמה חלקית',
                'warning_notification_body' => 'נמחקו לצמיתות :success מתוך :total מודלים. לא ניתן היה למחוק :failed מודלים.',

                'failure_notification_title' => 'המחיקה נכשלה',
                'failure_notification_body' => '{1} לא ניתן היה למחוק לצמיתות את המודל.|[2,*] אף אחד מ־:count המודלים לא נמחק לצמיתות.',
            ],
        ],
    ],
];
