@extends('layout')

@section('seo-metas')
    @include('includes.basic_seo',['model' => $page])

@stop

@section('body-classes')
    single
@stop


@section('content')
    <div id="content" class="site-content">
        <article class="post">
            <h1 class="entry-title">{{$page->title}}</h1>
            <div class="center-relative clear">
                <div class="entry-content">
                    <div class="content-750 center-relative image-100">
                        {!! $page->content !!}
                    </div>

                    {!! $page->renderBlocks() !!}

                </div>
                <div class="clear"></div>
            </div>
        </article>
    </div>
@stop
