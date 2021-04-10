@extends('layout')
@section('seo-metas')
    @include('includes.basic_seo',['model' => $event])

@stop

@section('body-classes')
    single single-portfolio
@stop


@section('content')
    <div id="content" class="site-content">
    <div class="content-1140 center-relative bottom-100">
        <div class="center-relative clear">
            <div class="entry-content">
                <div class="top-content">
                    <h1 class="entry-title">{{$event->title}}</h1>
                    <img src="{{$event->image('cover','landscape')}}" alt="{{$event->title}}" />
                </div>
                <div class="content-970 center-relative">
                    <div class="portfolio-item-info">
                        <div class="item-info-content">
                            <div class="info-code ">
                                <p class="info-code-title">{{__('custom.category')}}</p>
                                <p class="info-code-content">{{__('custom.'.$event->category)}}</p>
                            </div>
                            <div class="info-code ">
                                <p class="info-code-title">{{__('custom.infos')}}</p>
                                <p class="info-code-content">{{$event->subtitle}}</p>
                            </div>
                            <div class="info-code ">
                                <p class="info-code-title">{{__('custom.event_dates')}}</p>
                                {!! $event->renderBlocks() !!}
                            </div>
                        </div>
                    </div>
                    <div class="content-wrapper">
                        {!! $event->content !!}

                        @if(! is_null($event->youtube))
                            <div class='embed-container'>
                                {!! $event->youtube !!}
                            </div>
                        @endif

                    </div>
                    <div class="clear"></div>
                </div>
                @if(! empty($event->images('gallery','free')))
                    <div class="box-post-width content-1140 center-relative top-20">
                        <script>
                            var slider_speed = "2000";
                            var slider_auto = "true";
                            var slider_hover = "true";
                            var slider_dots = "true";
                        </script>
                        <div class="image-slider-wrapper relative">
                            <div id="slider" class="image-slider slider">
                                @foreach($event->images('gallery','free') as $image)
                                    <div>
                                        <img src="{!! $image !!}" alt="" />
                                    </div>
                                @endforeach


                            </div>
                        </div>
                    </div>
                @endif
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
@stop
