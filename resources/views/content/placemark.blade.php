@extends('layout')
@section('seo-metas')
    @include('includes.basic_seo',['model' => $placemark])

@stop

@section('body-classes')
    landmarks bg-yellow1
@stop


@section('content')
    <main>
        <div class="container">
            <div class="flex-container">
                <div class="col-2-md">
                    <h2>{{$placemark->title}}</h2>
                    <p>
                        {!! $placemark->content !!}
                    </p>
                </div>
                <div class="col-1-md">
                    <img src="{!! $placemark->image('cover','desktop') !!}" alt="{{$placemark->title}}" />
                </div>
            </div>
            {!! $placemark->renderBlocks(true, ['class' => 1]) !!}

        </div>
    </main>
@stop
