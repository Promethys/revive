<?php

return [
    'pages' => [
        'title' => 'रीसायकल बिन',
    ],
    'tables' => [
        'empty_state' => [
            'title' => 'आपके पास कोई पुनः प्राप्त करने योग्य मॉडल नहीं है।',
            'description' => 'जब आप आइटम हटाते हैं, तो वे पुनर्स्थापन या स्थायी हटाने के लिए यहाँ दिखाई देंगे।',
        ],
        'columns' => [
            'model_id' => 'मॉडल आईडी',
            'model_type' => 'मॉडल प्रकार',
            'deleted_by' => 'द्वारा हटाया गया',
            'deleted_at' => 'हटाया गया',
        ],
        'actions' => [
            'view_details' => [
                'modal_heading' => 'रिकॉर्ड विवरण',
            ],
            'restore' => [
                'success_notification_title' => 'मॉडल पुनर्स्थापित किया गया',
                'failure_notification_title' => 'मॉडल पुनर्स्थापना में विफल',
            ],
            'force_delete' => [
                'success_notification_title' => 'मॉडल स्थायी रूप से हटा दिया गया',
                'failure_notification_title' => 'मॉडल स्थायी रूप से हटाने में विफल',
            ],
        ],
        'bulk_actions' => [
            'restore' => [
                'success_notification_title' => '{1} मॉडल सफलतापूर्वक पुनर्स्थापित किया गया|[2,*] सभी :count मॉडल सफलतापूर्वक पुनर्स्थापित किए गए',
                'success_notification_body' => '{1} मॉडल पुनर्स्थापित किया गया है।|[2,*] सभी :count मॉडल पुनर्स्थापित किए गए हैं।',
                'warning_notification_title' => 'पुनर्स्थापन आंशिक रूप से पूर्ण हुआ',
                'warning_notification_body' => ':total मॉडलों में से :success पुनर्स्थापित किए गए। :failed मॉडल पुनर्स्थापित नहीं किए जा सके।',
                'failure_notification_title' => 'पुनर्स्थापन विफल रहा',
                'failure_notification_body' => '{1} मॉडल को पुनर्स्थापित नहीं किया जा सका।|[2,*] :count में से कोई भी मॉडल पुनर्स्थापित नहीं किया जा सका।',
            ],
            'force_delete' => [
                'success_notification_title' => '{1} मॉडल स्थायी रूप से हटाया गया|[2,*] सभी :count मॉडल स्थायी रूप से हटाए गए',
                'success_notification_body' => '{1} मॉडल स्थायी रूप से हटाया गया है।|[2,*] सभी :count मॉडल स्थायी रूप से हटाए गए हैं।',
                'warning_notification_title' => 'हटाना आंशिक रूप से पूर्ण हुआ',
                'warning_notification_body' => ':total मॉडलों में से :success स्थायी रूप से हटाए गए। :failed मॉडल हटाए नहीं जा सके।',
                'failure_notification_title' => 'हटाना विफल रहा',
                'failure_notification_body' => '{1} मॉडल को स्थायी रूप से नहीं हटाया जा सका।|[2,*] :count में से कोई भी मॉडल स्थायी रूप से नहीं हटाया जा सका।',
            ],
        ],
    ],
];
