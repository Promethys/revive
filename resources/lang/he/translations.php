<?php

return [
    'pages' => [
        'title' => 'סל המיחזור',
    ],
    'tables' => [
        'empty_state' => [
            'title' => 'סל המיחזור ריק',
            'description' => 'כאשר מוחקים פריטים, הם יופיעו כאן לשחזור או למחיקה לצמיתות.',
        ],
        'columns' => [
            'model_id' => 'מזהה מודל',
            'model_type' => 'סוג מודל',
            'deleted_by' => 'נמחק על ידי',
            'deleted_at' => 'תאריך מחיקה',
        ],
        'actions' => [
            'view_details' => [
                'modal_heading' => 'פרטי הרשומה',
            ],
            'restore' => [
                'modal_heading' => 'שחזור רשומה',
                'modal_description' => 'האם אתה בטוח שברצונך לשחזר רשומה זו?',
                'success_notification_title' => 'הרשומה שוחזרה',
                'failure_notification_title' => 'השחזור נכשל',
            ],
            'force_delete' => [
                'modal_heading' => 'מחיקה לצמיתות של רשומה',
                'modal_description' => 'לא ניתן לבטל פעולה זו.',
                'success_notification_title' => 'הרשומה נמחקה לצמיתות',
                'failure_notification_title' => 'המחיקה לצמיתות נכשלה',
            ],
        ],
        'bulk_actions' => [
            'restore' => [
                'success_notification_title' => '{1} הרשומה שוחזרה|[2,*] כל :count הרשומות שוחזרו',
                'success_notification_body' => '{1} הרשומה שוחזרה.|[2,*] כל :count הרשומות שוחזרו.',
                'warning_notification_title' => 'שחזור חלקי',
                'warning_notification_body' => 'שוחזרו :success מתוך :total רשומות. :failed נכשלו.',
                'failure_notification_title' => 'השחזור נכשל',
                'failure_notification_body' => '{1} הרשומה לא שוחזרה.|[2,*] אף אחת מ־:count הרשומות לא שוחזרה.',
            ],
            'force_delete' => [
                'success_notification_title' => '{1} הרשומה נמחקה לצמיתות|[2,*] כל :count הרשומות נמחקו לצמיתות',
                'success_notification_body' => '{1} הרשומה נמחקה לצמיתות.|[2,*] כל :count הרשומות נמחקו לצמיתות.',
                'warning_notification_title' => 'מחיקה חלקית',
                'warning_notification_body' => 'נמחקו :success מתוך :total רשומות. :failed נכשלו.',
                'failure_notification_title' => 'המחיקה נכשלה',
                'failure_notification_body' => '{1} הרשומה לא נמחקה לצמיתות.|[2,*] אף אחת מ־:count הרשומות לא נמחקה.',
            ],
        ],
    ],
];
