<div class="menu-wraper center-relative">
    <div class="menu-holder">
        <div class="menu-left-part">
            @if(! is_null($settings))
                <div class="menu-left-text">
                    {!! $settings->byKey('menu_text') !!}
                </div>
            @endif
        </div>
        <div class="menu-right-part">
            <nav id="header-main-menu" class="big-menu">
                @if(! is_null($headerMenu))
                    <ul class="main-menu sm sm-clean">
                        {!! $headerMenu->renderBlocks() !!}
                    </ul>
                @endif
            </nav>
            <div class="menu-portfolio-category">
                <p class="portfolio-category">
                    <a class="dropdown-item" href="{{ route('lang.switch', 'el') }}">ελ</a>
                    <a class="dropdown-item" href="{{ route('lang.switch', 'en') }}">en</a>
                </p>
            </div>
        </div>
        <div class="clear"></div>
    </div>


</div>

<div class="header-holder center-relative relative content-1140">

    <div class="switch-language absolute">
        <a class="dropdown-item" href="{{ route('lang.switch', 'el') }}">ελ</a>
        <a class="dropdown-item" href="{{ route('lang.switch', 'en') }}">en</a>
    </div>
    <div class="header-logo center-text">
        @if(! is_null($logo))
            <a href="{{url('/')}}">
                <img src={{$logo}} alt="Opta">
            </a>
        @endif
    </div>

    <div class="toggle-holder absolute">
        <div id="toggle">
            <div class="first-menu-line"></div>
            <div class="second-menu-line"></div>
            <div class="third-menu-line"></div>
        </div>
    </div>
    <div class="clear"></div>
</div>
