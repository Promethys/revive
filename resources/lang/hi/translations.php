<?php

return [
    'pages' => [
        'title' => 'रीसायकल बिन',
    ],
    'tables' => [
        'empty_state' => [
            'title' => 'रीसायकल बिन खाली है',
            'description' => 'जब आप आइटम हटाते हैं, तो वे यहाँ पुनर्स्थापना या स्थायी रूप से हटाने के लिए दिखाई देंगे।',
        ],
        'columns' => [
            'model_id' => 'मॉडल आईडी',
            'model_type' => 'मॉडल प्रकार',
            'deleted_by' => 'द्वारा हटाया गया',
            'deleted_at' => 'हटाने की तिथि',
        ],
        'actions' => [
            'view_details' => [
                'modal_heading' => 'रिकॉर्ड विवरण',
            ],
            'restore' => [
                'modal_heading' => 'रिकॉर्ड पुनर्स्थापित करें',
                'modal_description' => 'क्या आप वाकई इस रिकॉर्ड को पुनर्स्थापित करना चाहते हैं?',
                'success_notification_title' => 'रिकॉर्ड पुनर्स्थापित हुआ',
                'failure_notification_title' => 'रिकॉर्ड पुनर्स्थापित नहीं हो सका',
            ],
            'force_delete' => [
                'modal_heading' => 'रिकॉर्ड स्थायी रूप से हटाएँ',
                'modal_description' => 'यह कार्रवाई पूर्ववत नहीं की जा सकती।',
                'success_notification_title' => 'रिकॉर्ड स्थायी रूप से हटाया गया',
                'failure_notification_title' => 'स्थायी हटाना विफल रहा',
            ],
        ],
        'bulk_actions' => [
            'restore' => [
                'success_notification_title' => '{1} रिकॉर्ड पुनर्स्थापित हुआ|[2,*] सभी :count रिकॉर्ड पुनर्स्थापित हुए',
                'success_notification_body' => '{1} रिकॉर्ड पुनर्स्थापित किया गया।|[2,*] सभी :count रिकॉर्ड पुनर्स्थापित किए गए।',
                'warning_notification_title' => 'आंशिक पुनर्स्थापना',
                'warning_notification_body' => ':total में से :success रिकॉर्ड पुनर्स्थापित हुए। :failed असफल रहे।',
                'failure_notification_title' => 'पुनर्स्थापना विफल',
                'failure_notification_body' => '{1} रिकॉर्ड पुनर्स्थापित नहीं हो सका।|[2,*] :count में से कोई भी रिकॉर्ड पुनर्स्थापित नहीं हुआ।',
            ],
            'force_delete' => [
                'success_notification_title' => '{1} रिकॉर्ड स्थायी रूप से हटाया गया|[2,*] सभी :count रिकॉर्ड स्थायी रूप से हटाए गए',
                'success_notification_body' => '{1} रिकॉर्ड स्थायी रूप से हटाया गया।|[2,*] सभी :count रिकॉर्ड स्थायी रूप से हटाए गए।',
                'warning_notification_title' => 'आंशिक हटाना',
                'warning_notification_body' => ':total में से :success रिकॉर्ड हटाए गए। :failed असफल रहे।',
                'failure_notification_title' => 'हटाना विफल',
                'failure_notification_body' => '{1} रिकॉर्ड स्थायी रूप से हटाया नहीं जा सका।|[2,*] :count में से कोई भी रिकॉर्ड हटाया नहीं जा सका।',
            ],
        ],
    ],
];
