<header>
    <div class="container">
        <div class="column">
            <a href="{{url('/')}}">
                <img src="{{asset("images/logo.svg")}}" class="logo" alt="Lyrikos notos logo">
            </a>
        </div>
        <div class="column">

            <button class="burger-btn js-burger-btn">
                <img src="{{asset('images/burger.svg')}}" alt="" />
            </button>
        </div>

    </div>
    <div style="text-align: right">
        <a class="i18-btn i18-btn-el" href="{{ route('lang.switch', 'el') }}">ΕΛ /</a> <a class="i18-btn" href="{{ route('lang.switch', 'en') }}">ΕΝ</a>
        <a class="facebook_logo" href="https://www.facebook.com/lirikosnotos" ><img src="{{asset("images/facebook.png")}}" alt="facebook" /></a>
        <a class="header_liriki_logo" href="https://www.nationalopera.gr/nea-anakoinoseis/item/3765-to-festival-lyrikos-notos-erxetai-stis-18-19-20-iouniou-2021" target="_blank"><img  src={{$mainFooterLogo}} alt="Λυρικη-Σκηνη" ></a>
    </div>

</header>
{{--<div class="menu-wraper center-relative">--}}
{{--    <div class="menu-holder">--}}
{{--        <div class="menu-left-part">--}}
{{--            @if(! is_null($settings))--}}
{{--                <div class="menu-left-text">--}}
{{--                    {!! $settings->byKey('menu_text') !!}--}}
{{--                </div>--}}
{{--            @endif--}}
{{--        </div>--}}
{{--        <div class="menu-right-part">--}}
{{--            <nav id="header-main-menu" class="big-menu">--}}
{{--                @if(! is_null($headerMenu))--}}
{{--                    <ul class="main-menu sm sm-clean">--}}
{{--                        {!! $headerMenu->renderBlocks() !!}--}}
{{--                    </ul>--}}
{{--                @endif--}}
{{--            </nav>--}}
{{--            <div class="menu-portfolio-category">--}}
{{--                <p class="portfolio-category">--}}
{{--                    <a class="dropdown-item" href="{{ route('lang.switch', 'el') }}">ελ</a>--}}
{{--                    <a class="dropdown-item" href="{{ route('lang.switch', 'en') }}">en</a>--}}
{{--                </p>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="clear"></div>--}}
{{--    </div>--}}


{{--</div>--}}

{{--<div class="header-holder center-relative relative content-1140">--}}

{{--    <div class="switch-language absolute">--}}
{{--        <a class="dropdown-item" href="{{ route('lang.switch', 'el') }}">ελ</a>--}}
{{--        <a class="dropdown-item" href="{{ route('lang.switch', 'en') }}">en</a>--}}
{{--    </div>--}}
{{--    <div class="header-logo center-text">--}}
{{--        @if(! is_null($logo))--}}
{{--            <a href="{{url('/')}}">--}}
{{--                <img src={{$logo}} alt="Opta">--}}
{{--            </a>--}}
{{--        @endif--}}
{{--    </div>--}}

{{--    <div class="toggle-holder absolute">--}}
{{--        <div id="toggle">--}}
{{--            <div class="first-menu-line"></div>--}}
{{--            <div class="second-menu-line"></div>--}}
{{--            <div class="third-menu-line"></div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="clear"></div>--}}
{{--</div>--}}
