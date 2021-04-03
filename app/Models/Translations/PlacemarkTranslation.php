<?php

namespace App\Models\Translations;

use A17\Twill\Models\Model;
use App\Models\Placemark;

class PlacemarkTranslation extends Model
{
    protected $baseModuleModel = Placemark::class;
}
