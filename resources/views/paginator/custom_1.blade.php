@if ($paginator->hasPages())
    <nav>
        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if ($products->onFirstPage())
        <a href="#" class="pagi-btn disabled">Anterior</a>
    @else
        <a href="{{ $products->previousPageUrl() }}" class="pagi-btn">Anterior</a>
    @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="page-item disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                        <a href="#" class="pagi-btn active">{{ $page }}</a>
                        @else
                        <a href="{{ $url }}" class="pagi-btn">{{ $page }}</a>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($products->hasMorePages())
            <a href="{{ $products->nextPageUrl() }}" class="pagi-btn">Siguiente</a>
        @else
            <a href="#" class="pagi-btn disabled">Siguiente</a>
        @endif
        </ul>
    </nav>
@endif
