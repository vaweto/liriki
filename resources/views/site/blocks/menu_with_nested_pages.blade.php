@php
    $pagesIds = $block->browserIds('pages');
    $pages = app(\App\Models\Page::class)->find($pagesIds);
@endphp

<li>
    <a href="#">
        {{ $block->translatedInput('text_link') }}
    </a>

    <ul>
        @foreach( $pages as $page)
            <li>
                <a href="{{$page->absoluteUrl()}}">
                    {{ $page->title }}
                </a>
            </li>
        @endforeach
    </ul>
</li>
