@extends('layout')

@section('seo-metas')
    <title>{{$settings->byKey('site_title')}}</title>
@stop

@section('body-classes')
   page
@stop

@section('content')
    <div class="blog-holder block center-relative content-1140">
        @foreach($blogs as $blog)
            <article class="animate relative blog-item-holder center-relative has-post-thumbnail">
                <div class="post-thumbnail">
                    <a href="/blog/{{$blog->slug}}">
                        <img src="{{$blog->image('cover', 'desktop')}}" alt="" />
                    </a>
                </div>
                <div class="entry-holder">
                    <div class="post-num">
                        <span class="current-post">{{$blog->created_at->day}}</span>
                        <span class="separator">/</span>
                        <span class="total-posts">{{$blog->created_at->month}}</span>
                    </div>
                    <h2 class="entry-title">
                        <a href="/blog/{{$blog->slug}}">{{$blog->title}}</a>
                    </h2>
                    <p class="read-more-arrow">
                        <a href="/blog/{{$blog->slug}}">
                            <img src="images/blog_arrow@2x.png" alt="Read More">
                        </a>
                    </p>
                </div>
                <div class="clear"></div>
            </article>
        @endforeach
        <div style="text-align: center" class="content-945 center-relative">
            {{ $blogs->links() }}
        </div>
    </div>

@stop
