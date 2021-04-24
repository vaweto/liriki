@php
    $images = $block->images('image','desktop');
@endphp

<div class="box-post-width content-1140 center-relative top-20">
    <script>
        var slider_speed = "2000";
        var slider_auto = "true";
        var slider_hover = "true";
        var slider_dots = "true";
    </script>
    <div class="image-slider-wrapper relative">
        <div id="slider" class="image-slider slider">
            @foreach($images as $image)
                <div>
                    <a href="{!! $image !!}" data-lightbox="gallery" data-title="">
                        <img class="lozad" src="{!! $image !!}" alt="" />
                    </a>
                </div>
            @endforeach


        </div>
    </div>
</div>
