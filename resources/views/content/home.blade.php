@extends('layout')
@section('body-classes')
    page
    @stop

@section('content')
    <div class="content-1140 header-content center-relative block">
        <h1 class="entry-title">
            Art studio from <a href="about.html">New York</a> passionate about creativity and crafting things since 1963.
        </h1>
        <p class="page-desc">PETER WALL + COCO BASIC</p>
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
                                <a href="#">{{trans($event->category)}}</a>
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
                                <a href="#">{{trans($event->category)}}</a>
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
