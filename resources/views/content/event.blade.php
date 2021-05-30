@extends('layout')
@section('seo-metas')
    @include('includes.basic_seo',['model' => $event])

@stop

@section('style')

@stop

@section('body-classes')
    event
@stop


@section('content')
<main>
    <div class="container">
        <div class="slider js-slider" tabindex="0">
            <ul class="slides js-slides">
                <li class="slide active js-slide">
                    <img src="{{$event->image('cover','landscape')}}" alt="{{$event->title}}" />
                </li>
                @foreach($event->images('gallery','landscape') as $image)
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
            <div class="col-2-md">
                <h2>{{$event->title}}</h2>
                <p class="subtitle">
                    {{$event->subtitle}}
                </p>
                {!! $event->content !!}
                @if(! is_null($event->youtube))
                    <div class='embed-container'>
                        {!! $event->youtube !!}
                    </div>
                @endif
            </div>
            <div class="col-1-md event-info">
                <div class="block">
                    <h3>{{__('custom.category')}}</h3>
                    <p>{{__('custom.'.$event->category)}}</p>
                </div>
                <div class="block">
                    <h3>{{__('custom.infos')}}</h3>
                    {{$event->subtitle}}
                </div>
                <div class="block">
                    <h3>{{__('custom.event_dates')}}</h3>
                    {!! $event->renderBlocks() !!}
                </div>
                <div class="block">
                    {!! $event->factors !!}
                </div>
                @if(!is_null($event->file('audio_file')) || !is_null($event->file('pdf_file')))
                    <div class="block">
                        <h3>{{__('custom.files')}}</h3>
                        @if(!is_null($event->file('audio_file')))
                            <p>
                                <a href='{{$event->file('audio_file')}}' download>{{__('custom.audio')}}</a>
                            </p>
                        @endif
                        @if(!is_null($event->file('pdf_file')))
                            <p>
                                <a href='{{$event->file('pdf_file')}}' download>Pdf</a>
                            </p>
                        @endif
                    </div>
                @endif
            </div>
        </div>
    </div>
</main>
@stop
