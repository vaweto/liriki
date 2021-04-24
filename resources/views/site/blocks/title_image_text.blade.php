<div class="entry-content top-20 animate image-100">
    <h3>{!! $block->translatedInput('title') !!}</h3>

    <img style="max-width: 100%" class="lozad animate" data-src="{!! $block->image('image','flexible') !!}" alt="" />

    {!! $block->translatedInput('content') !!}
</div>
