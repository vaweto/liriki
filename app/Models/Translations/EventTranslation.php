<?php

namespace App\Models\Translations;

use A17\Twill\Models\Model;
use App\Models\Event;

class EventTranslation extends Model
{
    protected $baseModuleModel = Event::class;

    protected $fillable = [
        'title',
        'active',
        'content',
        'subtitle',
    ];
}
