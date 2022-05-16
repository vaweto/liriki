@if ($paginator->hasPages())
    <nav style="
        display: block;
        width: 100%;
    ">
        <ul class="pagination" style="
            text-align: center;
            display: inline-block;
            width: 100%;
        ">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li style="display: inline-block;"class="disabled" aria-disabled="true"><span>@lang('pagination.previous')</span></li>
            @else
                <li style="display: inline-block;"><a href="{{ $paginator->previousPageUrl() }}" rel="prev">@lang('pagination.previous')</a></li>
            @endif

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li style="display: inline-block;"><a href="{{ $paginator->nextPageUrl() }}" rel="next">@lang('pagination.next')</a></li>
            @else
                <li style="display: inline-block;" class="disabled" aria-disabled="true"><span>@lang('pagination.next')</span></li>
            @endif
        </ul>
    </nav>
@endif
