<?php

return [
    'pages' => [
        'title' => 'Κάδος Ανακύκλωσης',
    ],
    'tables' => [
        'empty_state' => [
            'title' => 'Δεν έχετε κανένα ανακτήσιμο μοντέλο.',
            'description' => 'Όταν διαγράφετε στοιχεία, θα εμφανίζονται εδώ για επαναφορά ή οριστική διαγραφή.',
        ],
        'columns' => [
            'model_id' => 'ID Μοντέλου',
            'model_type' => 'Τύπος Μοντέλου',
            'deleted_by' => 'Διαγράφηκε από',
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
        'bulk_actions' => [
            'restore' => [
                'success_notification_title' => '{1} Το μοντέλο αποκαταστάθηκε με επιτυχία|[2,*] Όλα τα :count μοντέλα αποκαταστάθηκαν με επιτυχία',
                'success_notification_body' => '{1} Το μοντέλο αποκαταστάθηκε.|[2,*] Όλα τα :count μοντέλα έχουν αποκατασταθεί.',
                'warning_notification_title' => 'Η αποκατάσταση ολοκληρώθηκε μόνο εν μέρει',
                'warning_notification_body' => 'Αποκαταστάθηκαν :success από :total μοντέλα. :failed μοντέλα δεν μπόρεσαν να αποκατασταθούν.',
                'failure_notification_title' => 'Η αποκατάσταση απέτυχε',
                'failure_notification_body' => '{1} Το μοντέλο δεν μπόρεσε να αποκατασταθεί.|[2,*] Κανένα από τα :count μοντέλα δεν μπόρεσε να αποκατασταθεί.',
            ],
            'force_delete' => [
                'success_notification_title' => '{1} Το μοντέλο διαγράφηκε οριστικά|[2,*] Όλα τα :count μοντέλα διαγράφηκαν οριστικά',
                'success_notification_body' => '{1} Το μοντέλο διαγράφηκε οριστικά.|[2,*] Όλα τα :count μοντέλα έχουν διαγραφεί οριστικά.',
                'warning_notification_title' => 'Η διαγραφή ολοκληρώθηκε μόνο εν μέρει',
                'warning_notification_body' => 'Οριστικά διαγράφηκαν :success από :total μοντέλα. :failed μοντέλα δεν μπόρεσαν να διαγραφούν.',
                'failure_notification_title' => 'Η διαγραφή απέτυχε',
                'failure_notification_body' => '{1} Το μοντέλο δεν μπόρεσε να διαγραφεί οριστικά.|[2,*] Κανένα από τα :count μοντέλα δεν μπόρεσε να διαγραφεί οριστικά.',
            ],
        ],
    ],
];
