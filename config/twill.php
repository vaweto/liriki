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
            'custom_menu_link' => [
                'title' => 'custom menu link',
                'icon' => 'text',
                'component' => 'a17-block-custom_menu_link',
            ],
            'menu_with_nested_pages' => [
                'title' => 'menu with nested pages',
                'icon' => 'text',
                'component' => 'a17-block-menu_with_nested_pages',
            ],
            'single_page_link' => [
                'title' => 'single page link',
                'icon' => 'text',
                'component' => 'a17-block-single_page_link',
            ],
            'placemarks_menu' => [
                'title' => 'placemarks menu',
                'icon' => 'text',
                'component' => 'a17-block-placemarks_menu',
            ],
            'events_menu' => [
                'title' => 'events menu',
                'icon' => 'text',
                'component' => 'a17-block-events_menu',
            ],
        ],
    ],
    'settings' => [
        'crops' => [
            'cover' => [
                'social' => [
                    [
                        'name' => 'social',
                        'ratio' => 2 / 1,
                    ],
                ]
            ],
            'logo' => [
                'logo' => [
                    [
                        'name' => 'logo',
                        'ratio' => 0,
                    ],
                ]
            ],
        ],
    ],
    'files' => ['video_file'],

];
