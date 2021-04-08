@php
    $placemarks = new \App\Models\Placemark();
    $placemarks = (new \App\Repositories\PlacemarkRepository($placemarks) )->all();
@endphp

<li>
    <a href="#">
        {{ $block->translatedInput('text_link') }}
    </a>

    <ul>
        @foreach( $placemarks as $placemark)
            <li>
                <a href="{{$placemark->absoluteUrl()}}">
                    {{ $placemark->title }}
                </a>
            </li>
        @endforeach
    </ul>
</li>
