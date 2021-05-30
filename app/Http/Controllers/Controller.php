<?php

namespace App\Http\Controllers;

use App\Helpers\El_Str;
use App\Models\Event;
use App\Models\Menu;
use App\Repositories\MenuRepository;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\View;

use function PHPUnit\Framework\isNull;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        $seoImage = \A17\Twill\Models\Setting::where('key','cover')->first();
        if(!is_null($seoImage) ) {
            $seoImage = $seoImage->image('cover','social');
        }

        $logo = \A17\Twill\Models\Setting::where('key','logo')->first();
        if(!is_null($logo)) {
            $logo = $logo->image('logo','logo',['fm' => null]);
        }


        $mainFooterLogo = \A17\Twill\Models\Setting::where('key','main_footer_logo')->first();

        if($mainFooterLogo) {
            $mainFooterLogo = $mainFooterLogo->image('main_footer_logo', 'logo');
        }


        $footerImg1 = \A17\Twill\Models\Setting::where('key','footer_logo')->first();
        if($footerImg1) {
            $footerImg1 = $footerImg1->image('footer_logo','logo');
        }


        $footerImg2 = \A17\Twill\Models\Setting::where('key','footer_logo_2')->first();
        if($footerImg2) {
            $footerImg2 = $footerImg2->image('footer_logo_2', 'logo');
        }


        $footerImg3 = \A17\Twill\Models\Setting::where('key','footer_logo_3')->first();
        if($footerImg3) {
            $footerImg3 = $footerImg3->image('footer_logo_3', 'logo');
        }


        $footerImg4 = \A17\Twill\Models\Setting::where('key','footer_logo_4')->first();
        if($footerImg4) {
            $footerImg4 = $footerImg4->image('footer_logo_4', 'logo');
        }


        $menu = new Menu();
        $menuRepo = new MenuRepository($menu);

        $headerMenu = $menuRepo->forSlug('header');
        if(!is_null($headerMenu)) {
            $headerMenu = $headerMenu->first();
        }
        $strHelper = new El_Str();

        View::share ( 'strHelper', $strHelper );
        View::share ( 'settings', app(\A17\Twill\Repositories\SettingRepository::class) );
        View::share ( 'seoImage', $seoImage );
        View::share ( 'logo', $logo );
        View::share ( 'headerMenu', $headerMenu );
        View::share ( 'mainFooterLogo', $mainFooterLogo );
        View::share ( 'footerImg1', $footerImg1 );
        View::share ( 'footerImg2', $footerImg2 );
        View::share ( 'footerImg3', $footerImg3 );
        View::share ( 'footerImg4', $footerImg4 );

        View::share ( 'absoluteUrl', url('/') );
    }



}
