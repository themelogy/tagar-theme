@if ($paginator->hasPages())
    <ul class="pagination post-pagination text-center mt-50">
        <!-- Previous Page Link -->
        @if ($paginator->onFirstPage())
            <li class="disabled hide">&laquo;</li>
        @else
            <li><a class="waves-effect waves-light" href="{{ $paginator->previousPageUrl() }}" rel="prev"><i class="fa fa-angle-left"></i></a></li>
        @endif

    <!-- Pagination Elements -->
        @foreach ($elements as $element)
        <!-- "Three Dots" Separator -->
            @if (is_string($element))
                <li class="waves-effect waves-light disabled">{{ $element }}</li>
            @endif

        <!-- Array Of Links -->
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="waves-effect waves-light current"><a href="#">{{ $page }}</a></li>
                    @else
                        <li><a class="waves-effect waves-light" href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

    <!-- Next Page Link -->
        @if ($paginator->hasMorePages())
            <li><a class="waves-effect waves-light pag-next" href="{{ $paginator->nextPageUrl() }}" rel="next"><i class="fa fa-angle-right"></i></a></li>
        @else
            <li class="waves-effect waves-light disabled hide">&raquo;</li>
        @endif
    </ul>
@endif
