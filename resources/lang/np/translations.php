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
    ],
];
