<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController;

class PageController extends ModuleController
{
    protected $moduleName = 'pages';

    /**
     * @var string
     */
    protected $permalinkBase = '';

    /**
     * @var string
     */
    protected $previewView = '';

}
