@extends('layout')
@section('seo-metas')
    @include('includes.basic_seo',['model' => $blog])

@stop

@section('body-classes')
    event
@stop

@section('content')
    <main>
        <div class="container">

            <div class="flex-container">
                <img width="100%" src="{!! $blog->image('cover','desktop') !!}" alt="{{$blog->title}}" />
            </div>
            <div class="flex-container">
                <div class="col-2-md">
                    <h2>{{$blog->title}}</h2>

                    {!! $blog->content !!}

                    @if(!is_null($blog->file('pdf_file')))
                        <p>
                            <a href='{{$blog->file('pdf_file')}}' download>{{$blog->fileObject('pdf_file')->filename}}</a>
                        </p>
                    @endif
                </div>
                <div class="col-1-md event-info">
                    <div class="block">
                        <h3>{{__('custom.date_created')}}</h3>
                            <span class="current-post">{{$blog->created_at->day}}</span>
                            <span class="separator">/</span>
                            <span class="total-posts">{{$blog->created_at->month}}</span>
                    </div>
                </div>
            </div>
        </div>
    </main>
@stop
