@extends('layout')

@section('seo-metas')
    <title>{{$settings->byKey('site_title')}}</title>
@stop

@section('body-classes')
    single
@stop

@section('content')
    <div id="content" class="site-content">
        <h1 class="entry-title">{{__('custom.events')}} {{(isset($year) ? '- '. $year : '')}}</h1>
        <div class="center-relative clear">
            <div class="entry-content">
                <div class="content-970 center-relative ">
                    <div class="event-cards">
                        @forelse($events as $event)
                            <div  class="event-card {{ ($event->passDate) ? 'event-passed' : '' }}">
                                <widget type="ticket" class="--flex-column">
                                    <div class="top --flex-column">
                                        <div style="min-height: 80px" class="bandname -bold">
                                            <a
                                                @if(!is_null($event->event->main_color))
                                                    style="color: {{$event->event->main_color}}!important"
                                                @endif
                                                href="/events/{{$event->event->slug}}" >
                                                {{$event->event->title}}
                                            </a>
                                        </div>
                                        <div
                                            style="
                                                @if(!is_null($event->event->main_color))
                                                color: {{$event->event->main_color}}!important;
                                                @endif
                                                @if(!is_null($event->event->secondary_color))
                                                border-bottom: 10px solid {{$event->event->secondary_color}}!important
                                                @endif
                                            "
                                             class="tourname {{$event->event->category}}">
                                            {{__('custom.' . $event->event->category)}}
                                        </div>
                                        <img src="{{$event->event->image('cover','landscape')}}" alt="{{$event->event->title}}" />
                                        <div class="deetz --flex-row-j!sb">
                                            <div class="event --flex-column">
                                                <div class="date">{{ $event->eventDate->format('d-m-Y H:i') }}</div>
                                                <hr>
                                                <div style="min-height: 80px" class="location -bold">{{$event->event->subtitle}}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rip"></div>
                                    <div class="bottom --flex-row-j!sb">
                                        <div class="barcode"></div>
                                    </div>
                                </widget>
                            </div>
                        @empty
                            <div style="padding: 20%">
                                <h3>{{__('message.no_events_yet')}}</h3>
                            </div>

                        @endforelse
                    </div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
@stop
