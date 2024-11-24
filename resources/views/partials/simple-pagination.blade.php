@if ($paginator->hasPages())
    {{-- <nav>
        <ul class="pagination">
            {{-- Previous Page Link --}}
    {{-- @if ($paginator->onFirstPage())
                <li class="disabled" aria-disabled="true"><span>@lang('pagination.previous')</span></li>
            @else
                <li><a href="{{ $paginator->previousPageUrl() }}" rel="prev">@lang('pagination.previous')</a></li>
            @endif --}}

    {{-- Next Page Link --}}
    {{-- @if ($paginator->hasMorePages())
                <li><a href="{{ $paginator->nextPageUrl() }}" rel="next">@lang('pagination.next')</a></li>
            @else
                <li class="disabled" aria-disabled="true"><span>@lang('pagination.next')</span></li>
            @endif
        </ul>
    </nav> --}}

    <nav>
        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <a class="join-item btn btn-outline btn-disabled" aria-disabled="true"><span>@lang('pagination.previous')</span></a>
            @else
                <a class="join-item btn btn-outline" href="{{ $paginator->previousPageUrl() }}"
                    rel="prev">@lang('pagination.previous')</a>
            @endif

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <a class="join-item btn btn-outline" href="{{ $paginator->nextPageUrl() }}"
                    rel="next">@lang('pagination.next')</a>
            @else
                <a class="join-item btn btn-outline btn-disabled" aria-disabled="true"><span>@lang('pagination.next')</span></a>
            @endif
        </ul>
    </nav>
@endif
