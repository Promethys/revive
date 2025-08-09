<?php

return [
    'pages' => [
        'title' => 'Κάδος Ανακύκλωσης',
    ],
    'tables' => [
        'empty_state' => 'Δεν έχετε κανένα ανακτήσιμο μοντέλο.',

        'columns' => [
            'model_id' => 'ID Μοντέλου',
            'model_type' => 'Τύπος Μοντέλου',
            'deleted_at' => 'Διαγράφηκε στις',
        ],

        'actions' => [
            'view_details' => [
                'modal_heading' => 'Λεπτομέρειες Εγγραφής',
            ],
            'restore' => [
                'success_notification_title' => 'Το μοντέλο επαναφέρθηκε',
                'failure_notification_title' => 'Αποτυχία επαναφοράς μοντέλου',
            ],
            'force_delete' => [
                'success_notification_title' => 'Το μοντέλο διαγράφηκε οριστικά',
                'failure_notification_title' => 'Αποτυχία οριστικής διαγραφής μοντέλου',
            ],
        ],
    ],
];
