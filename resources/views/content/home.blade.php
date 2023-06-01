@extends('layout')
@section('seo-metas')
    <title>{{$settings->byKey('site_title')}}</title>
    <meta name="description" content="{{$settings->byKey('site_desc')}}"/>
    <meta property="og:url"                content="{{url('/')}}" />
    <meta property="og:title"              content="{{$settings->byKey('site_title')}}" />
    <meta property="og:description"        content="{{$settings->byKey('site_desc')}}" />
    <meta property="og:image"              content="{{ $absoluteUrl . $seoImage }}" />

@stop

@section('body-classes')
    home bg-grey2
    @stop

@section('content')

    <main>
        <div class="container">
            <div class="flex-container hero">
                <div class="col-2-md align-right">
                    <div style="margin-bottom: 20px">
{{--                        <video style="width: 100%; " id="vid" autoplay muted loop controls >--}}
{{--                            <source src="{{asset('assets/public/LYRIKOS_NOTOS_VIDEO_FINAL.mp4')}}" type="video/mp4">--}}
{{--                            Your browser does not support the video tag.--}}
{{--                        </video>--}}
                        <img width="100%" height="auto" src={{ $absoluteUrl . $seoImage }}>
                    </div>

                    <p>
                        {!! $settings->byKey('home_text') !!}
                    </p>
                </div>
            </div>
            @foreach($categories  as $key => $category)
                @php
                    $categoryName = $category['category'];
                    $categoryImage = $category['image'];
                @endphp
                @if($key === 0)
                    <div class="flex-container">
                        <div class="col-2-md">
                            <h2 class="big-font">{{ $strHelper->strtoupper_no_accent(__('custom.'.$categoryName))}}</h2>
                            <p>
                            @if(! is_null($settings->byKey($categoryName.'_text')))
                                    {!! $settings->byKey($categoryName.'_text') !!}
                            @endif
                            </p>
                        </div>
                        <div class="col-1-md events">
                            <h3 >{{__('custom.scheduled_events')}}</h3>
                            <ul>
                                @forelse($category['events'] as $event)
                                    <li>
                                        <h4 class="big-font"><a href="/events/{{$event->slug}}">{{$strHelper->strtoupper_no_accent($event->title)}}</a></h4>
                                        {!! $event->renderBlocks() !!}
                                    </li>
                                @empty
                                    <li>
                                        {{__('message.no_events_yet')}}
                                    </li>
                                @endforelse
                            </ul>
                        </div>
                    </div>
                @elseif($key === 1)
                    <div class="flex-container ">
                        <div class="col-2-md offset-left">
                            <h2 class="big-font">{{ $strHelper->strtoupper_no_accent(__('custom.'.$categoryName))}}</h2>
                            <p>
                                @if(! is_null($settings->byKey($categoryName.'_text')))
                                    {!! $settings->byKey($categoryName.'_text') !!}
                                @endif
                            </p>
                        </div>
                        <div class="col-1-md events">
                            <h3>{{__('custom.scheduled_events')}}</h3>
                            <ul>
                                @forelse($category['events'] as $event)
                                    <li>
                                        <h4 class="big-font"><a href="/events/{{$event->slug}}">{{$strHelper->strtoupper_no_accent($event->title)}}</a></h4>
                                        {!! $event->renderBlocks() !!}
                                    </li>
                                @empty
                                    <li>
                                        {{__('message.no_events_yet')}}
                                    </li>
                                @endforelse
                            </ul>
                        </div>
                    </div>
                @elseif($key === 2 || $key ===4)
                    <div class="flex-container equal-cols">
                        <div class="column">
                            <h2 class="big-font">{{ $strHelper->strtoupper_no_accent(__('custom.'.$categoryName))}}</h2>
                            <p>
                                @if(! is_null($settings->byKey($categoryName.'_text')))
                                    {!! $settings->byKey($categoryName.'_text') !!}
                                @endif
                            </p>
                        </div>
                        <div class="column events">
                            <h3>{{__('custom.scheduled_events')}}</h3>
                            <ul>
                                @forelse($category['events'] as $event)
                                    <li>
                                        <h4 class="big-font"><a href="/events/{{$event->slug}}">{{$strHelper->strtoupper_no_accent($event->title)}}</a></h4>
                                        {!! $event->renderBlocks() !!}
                                    </li>
                                @empty
                                    <li>
                                        {{__('message.no_events_yet')}}
                                    </li>
                                @endforelse
                            </ul>
                        </div>
                    </div>
                @elseif($key === 3)
                    <div class="flex-container reversed">
                        <div class="col-2-md offset-right">
                            <h2 class="big-font">{{ $strHelper->strtoupper_no_accent(__('custom.'.$categoryName))}}</h2>
                            <p>
                                @if(! is_null($settings->byKey($categoryName.'_text')))
                                    {!! $settings->byKey($categoryName.'_text') !!}
                                @endif
                            </p>
                        </div>
                        <div class="col-1-md events">
                            <h3>{{__('custom.scheduled_events')}}</h3>
                            <ul>
                                @forelse($category['events'] as $event)
                                    <li>
                                        <h4 class="big-font"><a href="/events/{{$event->slug}}">{{$strHelper->strtoupper_no_accent($event->title)}}</a></h4>
                                        {!! $event->renderBlocks() !!}
                                    </li>
                                @empty
                                    <li>
                                        {{__('message.no_events_yet')}}
                                    </li>
                                @endforelse
                            </ul>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </main>
@stop
