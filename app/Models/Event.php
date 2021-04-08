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

    protected $path = 'events';

    protected $fillable = [
        'published',
        'category',
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
    ];
}
