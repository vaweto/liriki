<?php

return [
    'pages' => [
        'title' => 'Pages',
        'module' => true
    ],
    'events' => [
        'title' => 'Events',
        'module' => true
    ],
    'blogs' => [
        'title' => 'Blogs',
        'module' => true
    ],
    'placemarks' => [
        'title' => 'Placemarks',
        'module' => true
    ],
    'menus' => [
        'title' => 'Menus',
        'module' => true
    ],
    'settings' => [
        'title' => 'Settings',
        'route' => 'admin.settings',
        'params' => ['section' => 'site_settings'],
        'primary_navigation' => [
            'site_settings' => [
                'title' => 'Site Settings',
                'route' => 'admin.settings',
                'params' => ['section' => 'site_settings']
            ],
        ]
    ]





];
