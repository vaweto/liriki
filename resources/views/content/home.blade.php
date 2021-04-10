@extends('layout')
@section('seo-metas')
    <title>{{$settings->byKey('site_title')}}</title>
    <meta name="description" content="{{$settings->byKey('site_desc')}}"/>
    <meta property="og:url"                content="{{url('/')}}" />
    <meta property="og:title"              content="{{$settings->byKey('site_title')}}" />
    <meta property="og:description"        content="{{$settings->byKey('site_desc')}}" />
    <meta property="og:image"              content="{{ $absoluteUrl . $seoImage }}" />

@stop

@section('body-classes')
    page homePage
    @stop

@section('content')



    <div class="loader">
        <img src="{{asset('images/tenor.gif')}}" >
    </div>
    <div class="site-content content-hero">

        <div class="content header-hero">
            <div class="content__title content__title--center">
                <div class="hero-text">
                    <div id="rev-1" class="content__title__inner">
                        <h1 class="entry-title">
                            {!! $settings->byKey('home_text') !!}
                        </h1>
                        <p class="page-desc">{{$settings->byKey('sub_text')}}</p>
                    </div>
                </div>
                <div class="hero-video">
                    <div id="rev-2" style="text-align: center" class="content__title__inner content__title__inner--offset-1">
                        <video id="vid" autoplay muted loop controls>
                            <source src="{{asset('assets/public/Lirikos_notos_intro_video.mp4')}}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
            </div>
        </div>

    </div>


    @if(! empty($categories) )
        <div id="content" class="site-content">
            <ul class="grid" id="portfolio">
                @foreach($categories  as $key => $category)
                    @php
                        $categoryName = $category['category'];
                        $categoryImage = $category['image'];
                    @endphp

                    @if($key === 0 || $key === 3 || $key === 4)
                        <li class="grid-item element-item animate">
                            <div class="item-wrapper">
                                <a href="category/{{$categoryName}}/events">
                                    <img  src="{{$categoryImage->image($categoryName .'_image','portrait')}}" alt="" />
                                </a>
                                <div class="portfolio-text-holder">
                                    <div class="portfolio-info">
                                        <a class="portfolio-text" href="category/{{$categoryName}}/events">{{ __('custom.'.$categoryName)}}</a>
                                        <p class="portfolio-arrow">
                                            <a href="category/{{$categoryName}}/events">
                                                <img src="images/opta_arrow@2x.png" alt="">
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @else
                        <li class="grid-item element-item animate">
                            <div class="item-wrapper">
                                <a href="category/{{$categoryName}}/events">
                                    <img  src="{{$categoryImage->image($categoryName .'_image','landscape')}}" alt="" />
                                </a>
                                <div class="portfolio-text-holder">
                                    <div class="portfolio-info">
                                        <a class="portfolio-text" href="category/{{$categoryName}}/events">{{ __('custom.'.$categoryName)}}</a>
                                        <p class="portfolio-arrow">
                                            <a href="category/{{$categoryName}}/events">
                                                <img src="images/opta_arrow@2x.png" alt="">
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endif
                @endforeach
            </ul>
            <div class="clear"></div>
        </div>
    @endif
@stop

@section('scripts')
    <script src={{asset("js/anime.min.js")}}></script>
    <script src={{asset("js/header_anim.js")}}></script>

    <script>
        (function() {
            // Fake loading.
            setTimeout(init, 1999);

            function init() {

                //************************ Example 1 - reveal on load ********************************

                var rev1 = new RevealFx(document.querySelector('#rev-1'), {
                    revealSettings : {
                        bgcolor: '#fafbf8',
                        onCover: function(contentEl, revealerEl) {
                            contentEl.style.opacity = 1;
                        }
                    }
                });
                rev1.reveal();

                var rev2 = new RevealFx(document.querySelector('#rev-2'), {
                    revealSettings : {
                        bgcolor: '#302e36',
                        delay: 250,
                        onCover: function(contentEl, revealerEl) {
                            contentEl.style.opacity = 1;
                        }
                    }
                });
                rev2.reveal();

            }
        })();
    </script>
@stop
