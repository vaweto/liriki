@extends('layout')

@section('seo-metas')
    <title>{{$settings->byKey('site_title')}}</title>
@stop

@section('body-classes')
    single
@stop

@section('content')
    <div id="content" class="site-content">
        @if(!is_null($title))
            <div class="entry-content">
                <div class="top-content">
                    <h1 class="entry-title {{$categorySlug}}">{{$title}}</h1>
                </div>
            </div>
            <div class="clear"></div>
        @endif
        @if(! is_null($settings->byKey($categorySlug.'_text')))
                <div class="entry-content">
                    <div class="content-970 center-relative center-text">
                        {!! $settings->byKey($categorySlug.'_text') !!}
                    </div>
                </div>
                <div class="clear"></div>
        @endif
        <ul class="grid" id="portfolio">
            @forelse($events  as $key => $event)
                @if($key === 0 || $key === 3 || $key === 4)
                    <li class="grid-item element-item animate">
                        <div class="item-wrapper portrait-img-grid">
                            <a href="/events/{{$event->slug}}">
                                <img class="portrait" src="{{$event->image('cover','portrait')}}" alt="{{$event->title}}" />
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
                                <img src="{{$event->image('cover','landscape')}}" alt="{{$event->title}}" />
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
            @empty
                <div style="padding: 20%">
                    <h3>{{__('message.no_events_yet')}}</h3>
                </div>

            @endforelse
        </ul>
        <div class="clear"></div>
        <div style="text-align: center" class="content-945 center-relative">
            {{ $events->links() }}
        </div>
        <div class="clear"></div>
    </div>
@stop
