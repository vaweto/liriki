@extends('layout')

@section('seo-metas')
    @include('includes.basic_seo',['model' => $page])

@stop

@section('body-classes')
    organization bg-grey3
@stop


@section('content')
    <main>
        <h2>{{$page->title}}</h2>
        <div class="container">
            <div class="slider js-slider" tabindex="0">
                <ul class="slides js-slides">
                    <li class="slide active js-slide">
                        <img src="{{$page->image('cover','landscape')}}" alt="{{$page->title}}" />
                    </li>
                    @foreach($page->images('gallery','landscape') as $image)
                        <li class="slide js-slide">
                            <img src="{!! $image !!}" alt="" />
                        </li>

                    @endforeach
                </ul>
                <div class="slider-controls js-slider-controls">
                    <button class="previous js-previous">
                        <img src="{{asset("images/arrow-left.svg")}}" alt="" />
                    </button>
                    <button class="next js-next">
                        <img src="{{asset("images/arrow-right.svg")}}" alt="" />
                    </button>
                </div>
            </div>
            <div class="flex-container">
                <div class="col-2-md align-right">
                        {!! $page->content !!}
                </div>
            </div>

            <div class="flex-container">
                <div class="col-2-md">
                    {!! $page->renderBlocks() !!}
                </div>
            </div>
        </div>
    </main>
@stop
