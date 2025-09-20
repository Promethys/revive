<?php

return [
    'pages' => [
        'title' => 'रिसाइकल बिन',
    ],
    'tables' => [
        'empty_state' => 'कुनै पुन: प्रयोगयोग्य मोडेल छैन।',

        'columns' => [
            'model_id' => 'मोडेल ID',
            'model_type' => 'मोडेल प्रकार',
            'deleted_at' => 'मेटिएको मिति',
        ],

        'actions' => [
            'view_details' => [
                'modal_heading' => 'रेकर्ड विवरण',
            ],
            'restore' => [
                'success_notification_title' => 'मोडेल पुनर्स्थापना भयो',
                'failure_notification_title' => 'मोडेल पुनर्स्थापना असफल भयो',
            ],
            'force_delete' => [
                'success_notification_title' => 'मोडेल स्थायी रूपमा मेटियो',
                'failure_notification_title' => 'मोडेल स्थायी रूपमा मेट्न असफल भयो',
            ],
        ],

        'bulk_actions' => [
            'restore' => [
                'success_notification_title' => '{1} मोडेल सफलतापूर्वक पुनर्स्थापित गरियो|[2,*] सबै :count मोडेलहरू सफलतापूर्वक पुनर्स्थापित गरियो',
                'success_notification_body' => '{1} मोडेल पुनर्स्थापित गरियो।|[2,*] सबै :count मोडेलहरू पुनर्स्थापित गरियो।',

                'warning_notification_title' => 'पुनर्स्थापना आंशिक रूपमा सम्पन्न भयो',
                'warning_notification_body' => ':total मध्ये :success मोडेलहरू पुनर्स्थापित भए। :failed मोडेलहरू पुनर्स्थापित गर्न सकिएन।',

                'failure_notification_title' => 'पुनर्स्थापना असफल भयो',
                'failure_notification_body' => '{1} मोडेल पुनर्स्थापित गर्न सकिएन।|[2,*] :count मोडेलहरू मध्ये कुनै पनि पुनर्स्थापित गर्न सकिएन।',
            ],
            'force_delete' => [
                'success_notification_title' => '{1} मोडेल स्थायी रूपमा मेटियो|[2,*] सबै :count मोडेलहरू स्थायी रूपमा मेटियो',
                'success_notification_body' => '{1} मोडेल स्थायी रूपमा मेटियो।|[2,*] सबै :count मोडेलहरू स्थायी रूपमा मेटियो।',

                'warning_notification_title' => 'मेटाउने कार्य आंशिक रूपमा सम्पन्न भयो',
                'warning_notification_body' => ':total मध्ये :success मोडेलहरू स्थायी रूपमा मेटियो। :failed मोडेलहरू मेटाउन सकिएन।',

                'failure_notification_title' => 'मेटाउने कार्य असफल भयो',
                'failure_notification_body' => '{1} मोडेल स्थायी रूपमा मेटाउन सकिएन।|[2,*] :count मोडेलहरू मध्ये कुनै पनि स्थायी रूपमा मेटाउन सकिएन।',
            ],
        ],
    ],
];
