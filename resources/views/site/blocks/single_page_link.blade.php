@php
    $pagesIds = $block->browserIds('pages');
    $pages = app(\App\Models\Page::class)->find($pagesIds);
@endphp


@foreach( $pages as $page)
    <li>
        <a href="{{$page->absoluteUrl()}}">
            {{ $page->title }}
        </a>
    </li>
@endforeach
