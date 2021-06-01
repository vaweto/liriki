@extends('layout')

@section('seo-metas')
    <title>{{$settings->byKey('site_title')}}</title>
@stop

@section('body-classes')
    program bg-grey1
@stop

@section('content')
    <main>
        <div class="container">
            @forelse($yearEvents as $key => $events)
                <h2 style="text-transform: uppercase">{{__('custom.program')}} {{$key}}</h2>
                @php
                    $count = 0
                @endphp
                <div class="flex-container">
                    @forelse($events as $event)
                        @php
                            $count++
                        @endphp
                            <div class="col-1-md">
                                <div class="event-card">
                                    <img src="{{$event->event->image('cover','landscape')}}" alt="{{$event->event->title}}" />
                                    <div class="description">
                                        <h3><a href="/events/{{$event->event->slug}}" >
                                                {{$event->event->title}}
                                            </a></h3>
                                        <span>{{__('custom.' . $event->event->category)}}</span>
                                        <span>{{ $event->eventDate->format('d-m-Y H:i') }}</span>
                                        <span>{{$event->translatedInput('place')}}</span>
                                    </div>
                                </div>
                            </div>
                        @if($count % 3 === 0)
                            </div><div class="flex-container">
                        @endif

                    @empty
                        <div style="padding: 20%">
                            <h3>{{__('message.no_events_yet')}}</h3>
                        </div>
                    @endforelse
                </div>
            @empty
                <h2 style="text-transform: uppercase">{{__('custom.program')}} {{$key}}</h2>
                <div style="padding: 20%">
                    <h3>{{__('message.no_events_yet')}}</h3>
                </div>
             @endforelse
        </div>
    </main>
@stop
