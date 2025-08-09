<?php

return [
    'pages' => [
        'title' => 'रीसायकल बिन',
    ],
    'tables' => [
        'empty_state' => 'आपके पास कोई पुनः प्राप्त करने योग्य मॉडल नहीं है।',

        'columns' => [
            'model_id' => 'मॉडल आईडी',
            'model_type' => 'मॉडल प्रकार',
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
            ]
        ],
    ],
];
