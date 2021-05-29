@if($block->position % 2 === 0)
    <div class="flex-container ">
@else
    <div class="flex-container reversed">
@endif
        <div class="col-2-md">
            <h2>{!! $block->translatedInput('title') !!}</h2>
            <p>
                {!! $block->translatedInput('content') !!}
            </p>
        </div>
        <div class="col-1-md">
            <img  src="{!! $block->image('image','flexible') !!}" alt="" />
        </div>
</div>
