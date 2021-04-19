@extends('layout')
@section('seo-metas')
    @include('includes.basic_seo',['model' => $placemark])

@stop

@section('body-classes')
    single single-portfolio
@stop


@section('content')
    <div id="content" class="site-content">
        <article class="post">
            <h1 class="entry-title">{{$placemark->title}}</h1>
            <div class="content-1140 center-relative bottom-100">
                <div class="center-relative clear">
                    <div class="entry-content">
                        <div class="top-content">
                            <img src="{!! $placemark->image('cover','desktop') !!}" alt="{{$placemark->title}}" />
                        </div>
                        <div class="entry-content center-relative">
                            <div class="portfolio-item-info">
                                <div class="item-info-content">
                                    <img style="max-width: 100%" src="{!! $placemark->image('logo','flexible') !!}" alt="{{$placemark->title}}" />
                                    <div class="clear"></div>
                                </div>
                            </div>
                            <div class="content-wrapper">
                                {!! $placemark->content !!}
                            </div>
                            <div class="clear"></div>
                        </div>
                        {!! $placemark->renderBlocks() !!}
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </article>
    </div>
@stop
