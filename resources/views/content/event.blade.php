@extends('layout')
@section('seo-metas')
    @include('includes.basic_seo',['model' => $event]);

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
                                <p class="info-code-title">{{trans('category')}}</p>
                                <p class="info-code-content">{{__('custom.'.$event->category)}}</p>
                            </div>
                            <div class="info-code ">
                                <p class="info-code-title">{{trans('infos')}}</p>
                                <p class="info-code-content">{{$event->subtitle}}</p>
                            </div>
                            <div class="info-code ">
                                <p class="info-code-title">{{trans('dates')}}</p>
                                {!! $event->renderBlocks() !!}
                            </div>
                        </div>
                    </div>
                    <div class="content-wrapper">
                        {!! $event->content !!}
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
@stop
