@if ($paginator->hasPages())
    <ul style="direction: rtl" class="pager">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <a style="padding:5px;border-radius: 3px;" class="disabled"><span>قبلی</span></a>
        @else
            <a style="padding:5px;border-radius: 3px;" href="{{ $paginator->previousPageUrl() }}" rel="prev">قبلی</a>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="disabled"><span>{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="active my-active"><span>{{ $page }}</span></li>
                    @else
                        <li><a href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li><a href="{{ $paginator->nextPageUrl() }}" rel="next">بعدی</a></li>
        @else
            <li class="disabled"><span>بعدی</span></li>
        @endif
    </ul>
@endif
