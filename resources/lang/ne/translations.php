<?php

return [
    'pages' => [
        'title' => 'रिसाइकल बिन',
    ],
    'tables' => [
        'empty_state' => [
            'title' => 'रिसाइकल बिन खाली छ',
            'description' => 'तपाईंले वस्तुहरू मेटाउँदा, तिनीहरू पुनःस्थापना वा स्थायी रूपमा मेट्नका लागि यहाँ देखिनेछन्।',
        ],
        'columns' => [
            'model_id' => 'मोडेल ID',
            'model_type' => 'मोडेलको प्रकार',
            'deleted_by' => 'मेटाउने व्यक्ति',
            'deleted_at' => 'मेटाइएको मिति',
        ],
        'actions' => [
            'view_details' => [
                'modal_heading' => 'रेकर्ड विवरण',
            ],
            'restore' => [
                'modal_heading' => 'रेकर्ड पुनःस्थापना गर्नुहोस्',
                'modal_description' => 'के तपाईं यो रेकर्ड पुनःस्थापना गर्न निश्चित हुनुहुन्छ? रेकर्डलाई यसको मूल स्थानमा सारिनेछ।',
                'success_notification_title' => 'रेकर्ड पुनःस्थापित भयो',
                'failure_notification_title' => 'रेकर्ड पुनःस्थापना गर्न असफल',
            ],
            'force_delete' => [
                'modal_heading' => 'रेकर्ड स्थायी रूपमा मेटाउनुहोस्',
                'modal_description' => 'के तपाईं यो रेकर्ड स्थायी रूपमा मेटाउन निश्चित हुनुहुन्छ? यो कार्य फिर्ता गर्न सकिँदैन र रेकर्ड डेटाबेसबाट पूर्ण रूपमा हटाइनेछ।',
                'success_notification_title' => 'रेकर्ड स्थायी रूपमा मेटाइयो',
                'failure_notification_title' => 'रेकर्ड स्थायी रूपमा मेटाउन असफल',
            ],
        ],
        'bulk_actions' => [
            'restore' => [
                'success_notification_title' => '{1} रेकर्ड सफलतापूर्वक पुनःस्थापित भयो|[2,*] सबै :count रेकर्ड सफलतापूर्वक पुनःस्थापित भए',
                'success_notification_body' => '{1} रेकर्ड पुनःस्थापित गरियो|[2,*] सबै :count रेकर्ड पुनःस्थापित गरियो',
                'warning_notification_title' => 'पुनःस्थापना आंशिक रूपमा सम्पन्न भयो',
                'warning_notification_body' => ':total मध्ये :success रेकर्ड पुनःस्थापित भए। :failed रेकर्ड पुनःस्थापना हुन सकेन।',
                'failure_notification_title' => 'पुनःस्थापना असफल भयो',
                'failure_notification_body' => '{1} रेकर्ड पुनःस्थापना हुन सकेन|[2,*] :count मध्ये कुनै पनि रेकर्ड पुनःस्थापना हुन सकेन',
            ],
            'force_delete' => [
                'success_notification_title' => '{1} रेकर्ड स्थायी रूपमा मेटाइयो|[2,*] सबै :count रेकर्ड स्थायी रूपमा मेटाइयो',
                'success_notification_body' => '{1} रेकर्ड स्थायी रूपमा मेटाइयो|[2,*] सबै :count रेकर्ड स्थायी रूपमा मेटाइयो',
                'warning_notification_title' => 'मेटाइ आंशिक रूपमा सम्पन्न भयो',
                'warning_notification_body' => ':total मध्ये :success रेकर्ड स्थायी रूपमा मेटाइयो। :failed रेकर्ड मेटाउन सकिएन।',
                'failure_notification_title' => 'मेटाइ असफल भयो',
                'failure_notification_body' => '{1} रेकर्ड स्थायी रूपमा मेटाउन सकिएन|[2,*] :count मध्ये कुनै पनि रेकर्ड स्थायी रूपमा मेटाउन सकिएन',
            ],
        ],
    ],
];
