@extends('layout')

@section('seo-metas')
    <title>{{$settings->byKey('site_title')}}</title>
@stop

@section('body-classes')
    landmarks
@stop

@section('content')
    <main>
        <div class="container">
            <div class="flex-container">
                <div class="col-2-md">
                    <h2>{{$title}}</h2>
                    <p>
                    @if(! is_null($settings->byKey($categorySlug.'_text')))
                            {!! $settings->byKey($categorySlug.'_text') !!}
                    @endif
                    </p>
                </div>
                <div class="col-1-md">

                </div>
            </div>
            @forelse($events  as $key => $event)
            @if($key % 2 === 0)
                <div class="flex-container">
            @else
                <div class="flex-container reversed">
            @endif
                    <div class="col-2-md">
                        <h2><a href="/events/{{$event->slug}}">{{$event->title}}</a></h2>
                        <p>{{ \Illuminate\Support\Str::limit(strip_tags($event->content), 250, $end='...') }}</p>
                    </div>
                    <div class="col-1-md">
                        <a href="/events/{{$event->slug}}">
                            <img class="portrait" src="{{$event->image('cover','landscape')}}" alt="{{$event->title}}" />
                        </a>
                    </div>
                </div>
            @empty
                <div style="padding: 20%">
                    <h3>{{__('message.no_events_yet')}}</h3>
                </div>
            @endforelse
        </div>
        <div class="container">
            <div class="flex-container">
                {{ $events->links() }}
            </div>
        </div>
    </main>
@stop
