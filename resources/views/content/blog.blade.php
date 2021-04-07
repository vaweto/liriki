@extends('layout')
@section('seo-metas')
    @include('includes.basic_seo',['model' => $blog])

@stop

@section('body-classes')
    single
@stop

@section('content')
    <div id="content" class="site-content">
        <article class="post">
            <h1 class="entry-title">{{$blog->title}}</h1>
            <div class="center-relative clear">
                <div class="post-num">
                    <span class="current-post">{{$blog->created_at->day}}</span>
                    <span class="separator">/</span>
                    <span class="total-posts">{{$blog->created_at->month}}</span>
                </div>
                <div class="entry-content">
                    <div class="content-1140 center-relative bottom-100">
                        <img src="{!! $blog->image('cover','desktop') !!}" alt="{{$blog->title}}" />
                    </div>
                    <div class="content-970 center-relative">
                        {!! $blog->content !!}
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </article>
    </div>
@stop
