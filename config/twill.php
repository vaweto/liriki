<?php

return [
    'enabled' => [
        'users-management' => true,
        'media-library' => true,
        'file-library' => true,
        'block-editor' => true,
        'buckets' => true,
        'users-image' => false,
        'settings' => true,
        'dashboard' => true,
        'search' => true,
        'users-description' => false,
        'activitylog' => true,
        'users-2fa' => false,
        'users-oauth' => false,
    ],
    'block_editor' => [
        'blocks' => [
            'event_info' => [
                'title' => 'Event Info',
                'icon' => 'text',
                'component' => 'a17-block-event_info',
            ],
            'gallery' => [
                'title' => 'Image Gallery',
                'icon' => 'image',
                'component' => 'a17-block-gallery',
            ],
            'text_quote' => [
                'title' => 'Text Quote',
                'icon' => 'text',
                'component' => 'a17-block-text_quote',
            ],
            'text_translated' => [
                'title' => 'Text ',
                'icon' => 'text',
                'component' => 'a17-block-text_translated',
            ],
            'youtube_link' => [
                'title' => 'Youtube',
                'icon' => 'video',
                'component' => 'a17-block-youtube_link',
            ],
        ],

    ]

];
