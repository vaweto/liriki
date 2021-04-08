@php
    $categories = \App\Models\Category::CATEGORY_LIST;
@endphp

<li>
    <a href="#">
        {{ $block->translatedInput('text_link') }}
    </a>

    <ul>
        @foreach($categories as $category)
            <li>
                <a href="/category/{{$category}}/events">
                    {{ __('custom.' . $category) }}
                </a>
            </li>
        @endforeach
    </ul>
</li>
