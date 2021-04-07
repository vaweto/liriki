<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\View;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        $cover = \A17\Twill\Models\Setting::where('key','cover')->first();
        $seoImage = $cover->image('cover','social');

        $logo = \A17\Twill\Models\Setting::where('key','logo')->first();
        $logo = $logo->image('logo','logo');

//        $video = \A17\Twill\Models\Setting::where('key','video')->first();
//
//        $video = $video->imageVideo('video','video');

        View::share ( 'settings', app(\A17\Twill\Repositories\SettingRepository::class) );
        View::share ( 'seoImage', $seoImage );
        View::share ( 'logo', $logo );
       // View::share ( 'video', $video );
        View::share ( 'absoluteUrl', url('/') );
    }
}
