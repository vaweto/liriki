@extends('layout')

@section('seo-metas')
    <title>{{$settings->byKey('site_title')}}</title>
@stop

@section('body-classes')
    landmarks bg-yellow1
@stop

@section('content')
    <main>
        <div class="container">

            @forelse($blogs as $key => $blog)
                @if($key % 2 === 0)
                    <div class="flex-container">
                @else
                    <div class="flex-container reversed">
                @endif
                        <div class="col-2-md">
                            <h2> <a href="/blog/{{$blog->slug}}">{{$blog->title}}</a></h2>
                            <p>{!!  strip_tags(\Illuminate\Support\Str::limit($blog->content, 150, $end='...') ) !!}</p>
                        </div>
                        <div class="col-1-md">
                            <a href="/blog/{{$blog->slug}}">
                                <img src="{{$blog->image('cover', 'desktop')}}" alt="" />
                            </a>
                        </div>
                    </div>
            @empty
                <div class='flex-container' style="padding: 20%">
                    <h3 style="width: 100%; text-align: center">{{__('message.no_blogs_yet')}}</h3>
                </div>
            @endforelse
            <div class='flex-container' style="text-align: center">
                {{ $blogs->links() }}
            </div>
        </div>
    </main>
@stop
