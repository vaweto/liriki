<?php

namespace App\Http\Controllers;

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
        $cover = \A17\Twill\Models\Setting::where('key','cover')->first();
        $seoImage = $cover->image('cover','social');

        $logo = \A17\Twill\Models\Setting::where('key','logo')->first();
        $logo = $logo->image('logo','logo');

        $mainFooterLogo = \A17\Twill\Models\Setting::where('key','main_footer_logo')->first();
        $mainFooterLogo = $mainFooterLogo->image('main_footer_logo', 'logo');

        $footerImg1 = \A17\Twill\Models\Setting::where('key','footer_logo')->first();
        $footerImg1 = $footerImg1->image('footer_logo','logo');

        $footerImg2 = \A17\Twill\Models\Setting::where('key','footer_logo_2')->first();
        $footerImg2 = $footerImg2->image('footer_logo_2', 'logo');

        $footerImg3 = \A17\Twill\Models\Setting::where('key','footer_logo_3')->first();
        $footerImg3 = $footerImg3->image('footer_logo_3', 'logo');

        $footerImg4 = \A17\Twill\Models\Setting::where('key','footer_logo_4')->first();
        $footerImg4 = $footerImg4->image('footer_logo_4', 'logo');

        $menu = new Menu();
        $menuRepo = new MenuRepository($menu);

        $headerMenu = $menuRepo->forSlug('header')->first();

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
