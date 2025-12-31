<?php

return [
    'pages' => [
        'title' => 'Κάδος ανακύκλωσης',
    ],
    'tables' => [
        'empty_state' => [
            'title' => 'Ο κάδος ανακύκλωσης είναι άδειος',
            'description' => 'Όταν διαγράφετε εγγραφές, θα εμφανίζονται εδώ για επαναφορά ή οριστική διαγραφή.',
        ],
        'columns' => [
            'model_id' => 'Αναγνωριστικό μοντέλου',
            'model_type' => 'Τύπος μοντέλου',
            'deleted_by' => 'Διαγράφηκε από',
            'deleted_at' => 'Ημερομηνία διαγραφής',
        ],
        'actions' => [
            'view_details' => [
                'modal_heading' => 'Λεπτομέρειες εγγραφής',
            ],
            'restore' => [
                'modal_heading' => 'Επαναφορά εγγραφής',
                'modal_description' => 'Είστε βέβαιοι ότι θέλετε να επαναφέρετε αυτή την εγγραφή;',
                'success_notification_title' => 'Η εγγραφή επαναφέρθηκε',
                'failure_notification_title' => 'Η επαναφορά απέτυχε',
            ],
            'force_delete' => [
                'modal_heading' => 'Οριστική διαγραφή εγγραφής',
                'modal_description' => 'Αυτή η ενέργεια δεν μπορεί να αναιρεθεί.',
                'success_notification_title' => 'Η εγγραφή διαγράφηκε οριστικά',
                'failure_notification_title' => 'Η οριστική διαγραφή απέτυχε',
            ],
        ],
        'bulk_actions' => [
            'restore' => [
                'success_notification_title' => '{1} Η εγγραφή επαναφέρθηκε|[2,*] Όλες οι :count εγγραφές επαναφέρθηκαν',
                'success_notification_body' => '{1} Η εγγραφή επαναφέρθηκε.|[2,*] Όλες οι :count εγγραφές επαναφέρθηκαν.',
                'warning_notification_title' => 'Μερική επαναφορά',
                'warning_notification_body' => 'Επαναφέρθηκαν :success από :total εγγραφές. :failed απέτυχαν.',
                'failure_notification_title' => 'Η επαναφορά απέτυχε',
                'failure_notification_body' => '{1} Η εγγραφή δεν μπόρεσε να επαναφερθεί.|[2,*] Καμία από τις :count εγγραφές δεν επαναφέρθηκε.',
            ],
            'force_delete' => [
                'success_notification_title' => '{1} Η εγγραφή διαγράφηκε οριστικά|[2,*] Όλες οι :count εγγραφές διαγράφηκαν οριστικά',
                'success_notification_body' => '{1} Η εγγραφή διαγράφηκε οριστικά.|[2,*] Όλες οι :count εγγραφές διαγράφηκαν οριστικά.',
                'warning_notification_title' => 'Μερική διαγραφή',
                'warning_notification_body' => 'Διαγράφηκαν :success από :total εγγραφές. :failed απέτυχαν.',
                'failure_notification_title' => 'Η διαγραφή απέτυχε',
                'failure_notification_body' => '{1} Η εγγραφή δεν μπόρεσε να διαγραφεί οριστικά.|[2,*] Καμία από τις :count εγγραφές δεν διαγράφηκε.',
            ],
        ],
    ],
];
