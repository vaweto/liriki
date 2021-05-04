<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasTranslation;
use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasFiles;
use A17\Twill\Models\Behaviors\HasBlocks;
use A17\Twill\Models\Model;
use App\Traits\HasUrl;

class Event extends Model
{
    use HasTranslation, HasSlug, HasMedias, HasFiles, HasBlocks, HasUrl;

    const CATEGORIES = [
        'music_tales',
        'music_events',
        'big_productions',
        'booklovers_point',
        'cultural_bus'
    ];

    protected $path = 'events';

    protected $fillable = [
        'published',
        'category',
        'youtube',
        'main_color',
        'secondary_color'
    ];

    public $translatedAttributes = [
        'title',
        'active',
        'content',
        'subtitle',
    ];

    public $slugAttributes = [
        'title',
    ];

    public $mediasParams = [
        'cover' => [
            'landscape' => [
                [
                    'name' => 'landscape',
                    'ratio' => 560 / 360,
                ],
            ],
            'portrait' => [
                [
                    'name' => 'portrait',
                    'ratio' => 360 / 560,
                ],
            ],
            'social' => [
                [
                    'name' => 'social',
                    'ratio' => 2 / 1,
                ],
            ]
        ],
        'gallery' => [
            'free' => [
                [
                    'name' => 'free',
                    'ratio' => 0,
                ],
            ],
        ]
    ];
}
