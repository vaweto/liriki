<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController;

class EventController extends ModuleController
{
    protected $moduleName = 'events';

    /**
     * Options of the index view.
     *
     * @var array
     */
    protected $defaultIndexOptions = [
        'create' => true,
        'edit' => true,
        'publish' => true,
        'bulkPublish' => true,
        'feature' => false,
        'bulkFeature' => false,
        'restore' => true,
        'bulkRestore' => true,
        'forceDelete' => true,
        'bulkForceDelete' => true,
        'delete' => true,
        'duplicate' => false,
        'bulkDelete' => true,
        'reorder' => false,
        'permalink' => false,
        'bulkEdit' => true,
        'editInModal' => false,
        'skipCreateModal' => false,
    ];
}
