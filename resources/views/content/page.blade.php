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
