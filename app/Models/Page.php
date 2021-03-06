<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasBlocks;
use A17\Twill\Models\Behaviors\HasTranslation;
use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasFiles;
use A17\Twill\Models\Behaviors\HasRevisions;
use A17\Twill\Models\Behaviors\HasPosition;
use A17\Twill\Models\Behaviors\Sortable;
use A17\Twill\Models\Model;
use App\Traits\HasUrl;

class Page extends Model implements Sortable
{
    use HasBlocks, HasTranslation, HasSlug, HasMedias, HasFiles, HasRevisions, HasPosition, HasUrl;


    protected $fillable = [
        'published',
    ];

    public $translatedAttributes = [
        'title',
        'content',
        'active',
    ];

    public $slugAttributes = [
        'title',
    ];

    public $mediasParams = [
        'cover' => [
            'desktop' => [
                [
                    'name' => 'desktop',
                    'ratio' => 16 / 9,
                ],
            ],
            'landscape' => [
                [
                    'name' => 'landscape',
                    'ratio' => 560 / 360,
                ],
            ],
            'mobile' => [
                [
                    'name' => 'mobile',
                    'ratio' => 1,
                ],
            ],
            'flexible' => [
                [
                    'name' => 'free',
                    'ratio' => 0,
                ],
                [
                    'name' => 'landscape',
                    'ratio' => 16 / 9,
                ],
                [
                    'name' => 'portrait',
                    'ratio' => 3 / 5,
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
            'landscape' => [
                [
                    'name' => 'landscape',
                    'ratio' => 560 / 360,
                ],
            ],
            'free' => [
                [
                    'name' => 'free',
                    'ratio' => 0,
                ],
            ],
        ]
    ];
}
