<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleBlocks;
use A17\Twill\Repositories\Behaviors\HandleTranslations;
use A17\Twill\Repositories\Behaviors\HandleSlugs;
use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\Behaviors\HandleFiles;
use A17\Twill\Repositories\Behaviors\HandleRevisions;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\Placemark;

class PlacemarkRepository extends ModuleRepository
{
    use HandleBlocks, HandleTranslations, HandleSlugs, HandleMedias, HandleFiles, HandleRevisions;

    public function __construct(Placemark $model)
    {
        $this->model = $model;
    }

    /**
     * @param int $limit
     */
    public function all($limit = -1)
    {
        return $this->model
            ->published()
            ->WithActiveTranslations()
            ->orderBy('created_at')
            ->limit($limit)
            ->get();
    }
}
