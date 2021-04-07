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
    <div class="content-1140 header-content center-relative block">
        <h1 class="entry-title">
            {{$settings->byKey('home_text')}}
        </h1>
        <p class="page-desc">{{$settings->byKey('site_title')}}</p>
    </div>

    <div style="text-align: center" class="grid center-relative block">
        <video id="vid" autoplay muted loop>
            <source src="{{asset('assets/public/Lirikos_notos_intro_video.mp4')}}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>

    <div id="content" class="site-content">
        <ul class="grid" id="portfolio">
            @foreach($events  as $key => $event)
                @if($key % 2 === 0)
                    <li class="grid-item element-item animate">
                <div class="item-wrapper">
                    <a href="/events/{{$event->slug}}">
                        <img src="{{$event->image('cover','portrait')}}" alt="" />
                    </a>
                    <div class="portfolio-text-holder">
                        <div class="portfolio-info">
                            <a class="portfolio-text" href="/events/{{$event->slug}}">{{$event->title}}</a>
                            <p class="portfolio-category">
                                <a href="#">{{__($event->category)}}</a>
                            </p>
                            <p class="portfolio-arrow">
                                <a href="/events/{{$event->slug}}">
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
                    <a href="/events/{{$event->slug}}">
                        <img src="{{$event->image('cover','landscape')}}" alt="" />
                    </a>
                    <div class="portfolio-text-holder">
                        <div class="portfolio-info">
                            <a class="portfolio-text" href="/events/{{$event->slug}}">{{$event->title}}</a>
                            <p class="portfolio-category">
                                <a href="#">{{__($event->category)}}</a>
                            </p>
                            <p class="portfolio-arrow">
                                <a href="/events/{{$event->slug}}">
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
        <div class="block center-text load-more-portfolio">
            <a target="_self" class="more-posts-portfolio">Load More</a>
        </div>
        <div class="clear"></div>
    </div>
@stop
