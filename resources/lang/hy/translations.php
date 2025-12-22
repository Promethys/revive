<?php

return [
    'pages' => [
        'title' => 'Վերամշակման աղբարկղ',
    ],
    'tables' => [
        'empty_state' => [
            'title' => 'Դուք չունեք վերականգնվող մոդելներ։',
            'description' => 'Երբ ջնջում եք տարրերը, դրանք կհայտնվեն այստեղ՝ վերականգնելու կամ ընդմիշտ ջնջելու համար։',
        ],
        'columns' => [
            'model_id' => 'Մոդելի ID',
            'model_type' => 'Մոդելի տեսակ',
            'deleted_by' => 'Ջնջվել է',
            'deleted_at' => 'Ջնջվել է',
        ],
        'actions' => [
            'view_details' => [
                'modal_heading' => 'Գրանցման մանրամասներ',
            ],
            'restore' => [
                'success_notification_title' => 'Մոդելը վերականգնվեց',
                'failure_notification_title' => 'Մոդելի վերականգնումը չհաջողվեց',
            ],
            'force_delete' => [
                'success_notification_title' => 'Մոդելը մշտապես ջնջվեց',
                'failure_notification_title' => 'Մոդելի մշտական ջնջումը չհաջողվեց',
            ],
        ],
        'bulk_actions' => [
            'restore' => [
                'success_notification_title' => '{1} Մոդելը հաջողությամբ վերականգնվեց|[2,*] Բոլոր :count մոդելները հաջողությամբ վերականգնվեցին',
                'success_notification_body' => '{1} Մոդելը վերականգնվել է։|[2,*] Բոլոր :count մոդելները վերականգնվել են։',
                'warning_notification_title' => 'Վերականգնումը մասամբ ավարտված է',
                'warning_notification_body' => ':total մոդելներից :success վերականգնվեցին։ :failed մոդելները հնարավոր չէր վերականգնել։',
                'failure_notification_title' => 'Վերականգնումը ձախողվեց',
                'failure_notification_body' => '{1} Մոդելը հնարավոր չեղավ վերականգնել։|[2,*] Ոչ մի :count մոդել հնարավոր չեղավ վերականգնել։',
            ],
            'force_delete' => [
                'success_notification_title' => '{1} Մոդելը վերջնականապես ջնջվեց|[2,*] Բոլոր :count մոդելները վերջնականապես ջնջվեցին',
                'success_notification_body' => '{1} Մոդելը վերջնականապես ջնջվեց։|[2,*] Բոլոր :count մոդելները վերջնականապես ջնջվեցին։',
                'warning_notification_title' => 'Ջնջումը մասամբ ավարտված է',
                'warning_notification_body' => ':total մոդելներից :success վերջնականապես ջնջվեցին։ :failed մոդելները հնարավոր չեղավ ջնջել։',
                'failure_notification_title' => 'Ջնջումը ձախողվեց',
                'failure_notification_body' => '{1} Մոդելը հնարավոր չեղավ վերջնականապես ջնջել։|[2,*] Ոչ մի :count մոդել հնարավոր չեղավ վերջնականապես ջնջել։',
            ],
        ],
    ],
];
