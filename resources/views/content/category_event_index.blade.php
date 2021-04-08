@extends('layout')

@section('seo-metas')
    <title>{{$settings->byKey('site_title')}}</title>
@stop

@section('body-classes')
    page
@stop

@section('content')
    <div id="content" class="site-content">
        @if(!is_null($title))
            <h1 class="entry-title">{{$title}}</h1>
        @endif

        <ul class="grid" id="portfolio">
            @foreach($events  as $key => $event)
                @if($key === 0 || $key === 3 || $key === 4)
                    <li class="grid-item element-item animate">
                        <div class="item-wrapper">
                            <a href="/events/{{$event->slug}}">
                                <img style="max-width: 360px"  src="{{$event->image('cover','portrait')}}" alt="" />
                            </a>
                            <div class="portfolio-text-holder">
                                <div class="portfolio-info">
                                    <a class="portfolio-text" href="/events/{{$event->slug}}">{{$event->title}}</a>
                                    <p class="portfolio-category">
                                        <a href="#">{{__('custom.'.$event->category)}}</a>
                                    </p>
                                    <p class="portfolio-arrow">
                                        <a href="/events/{{$event->slug}}">
                                            <img src="/images/opta_arrow@2x.png" alt="">
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
                                        <a href="#">{{__('custom.'.$event->category)}}</a>
                                    </p>
                                    <p class="portfolio-arrow">
                                        <a href="/events/{{$event->slug}}">
                                            <img src="/images/opta_arrow@2x.png" alt="">
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
        <div style="text-align: center" class="content-945 center-relative">
            {{ $events->links() }}
        </div>
        <div class="clear"></div>
    </div>
@stop
