<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleTranslations;
use A17\Twill\Repositories\Behaviors\HandleSlugs;
use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\Behaviors\HandleFiles;
use A17\Twill\Repositories\Behaviors\HandleTags;
use A17\Twill\Repositories\Behaviors\HandleBlocks;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\Event;

class EventRepository extends ModuleRepository
{
    use HandleTranslations, HandleSlugs, HandleMedias, HandleFiles, HandleTags, HandleBlocks;

    public function __construct(Event $model)
    {
        $this->model = $model;
    }

    /**
     * @param int $limit
     */
    public function allEvents($limit = -1)
    {
        return $this->model
            ->published()
            ->orderBy('created_at')
            ->limit($limit)
            ->get();
    }
}
