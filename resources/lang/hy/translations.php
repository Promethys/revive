<?php

return [
    'pages' => [
        'title' => 'Վերամշակման զամբյուղ',
    ],
    'tables' => [
        'empty_state' => [
            'title' => 'Վերամշակման զամբյուղը դատարկ է',
            'description' => 'Երբ ջնջում եք տարրերը, դրանք կհայտնվեն այստեղ՝ վերականգնելու կամ մշտապես ջնջելու համար։',
        ],
        'columns' => [
            'model_id' => 'Մոդելի ID',
            'model_type' => 'Մոդելի տեսակ',
            'deleted_by' => 'Ջնջել է',
            'deleted_at' => 'Ջնջման ամսաթիվ',
        ],
        'actions' => [
            'view_details' => [
                'modal_heading' => 'Գրառման մանրամասներ',
            ],
            'restore' => [
                'modal_heading' => 'Վերականգնել գրառումը',
                'modal_description' => 'Վստա՞հ եք, որ ցանկանում եք վերականգնել այս գրառումը։',
                'success_notification_title' => 'Գրառումը վերականգնվեց',
                'failure_notification_title' => 'Վերականգնումը ձախողվեց',
            ],
            'force_delete' => [
                'modal_heading' => 'Մշտապես ջնջել գրառումը',
                'modal_description' => 'Այս գործողությունը հնարավոր չէ հետարկել։',
                'success_notification_title' => 'Գրառումը մշտապես ջնջվեց',
                'failure_notification_title' => 'Մշտական ջնջումը ձախողվեց',
            ],
        ],
        'bulk_actions' => [
            'restore' => [
                'success_notification_title' => '{1} Գրառումը վերականգնվեց|[2,*] Բոլոր :count գրառումները վերականգնվեցին',
                'success_notification_body' => '{1} Գրառումը վերականգնվեց։|[2,*] Բոլոր :count գրառումները վերականգնվեցին։',
                'warning_notification_title' => 'Մասնակի վերականգնում',
                'warning_notification_body' => ':total գրառումից :success-ը վերականգնվեց։ :failed-ը ձախողվեց։',
                'failure_notification_title' => 'Վերականգնումը ձախողվեց',
                'failure_notification_body' => '{1} Գրառումը չվերականգնվեց։|[2,*] :count գրառումներից ոչ մեկը չվերականգնվեց։',
            ],
            'force_delete' => [
                'success_notification_title' => '{1} Գրառումը մշտապես ջնջվեց|[2,*] Բոլոր :count գրառումները մշտապես ջնջվեցին',
                'success_notification_body' => '{1} Գրառումը մշտապես ջնջվեց։|[2,*] Բոլոր :count գրառումները մշտապես ջնջվեցին։',
                'warning_notification_title' => 'Մասնակի ջնջում',
                'warning_notification_body' => ':total գրառումից :success-ը ջնջվեց։ :failed-ը ձախողվեց։',
                'failure_notification_title' => 'Ջնջումը ձախողվեց',
                'failure_notification_body' => '{1} Գրառումը չջնջվեց։|[2,*] :count գրառումներից ոչ մեկը չջնջվեց։',
            ],
        ],
    ],
];
