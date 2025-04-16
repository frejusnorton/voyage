@if ($paginator->hasPages())
    <nav role="navigation" aria-label="Pagination Navigation" class="flex items-center space-x-1">
        @if ($paginator->onFirstPage())
            <span class="px-3 py-1 text-gray-400 bg-gray-100 rounded">«</span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" class="px-3 py-1 text-blue-600 bg-gray-100 hover:bg-gray-200 rounded">«</a>
        @endif
        @foreach ($elements as $element)
            @if (is_string($element))
                <span class="px-3 py-1 text-gray-500">...</span>
            @endif
          
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <span class="px-3 py-1 bg-blue-600 text-white rounded">{{ $page }}</span>
                    @else
                        <a href="{{ $url }}" class="px-3 py-1 text-blue-600 bg-gray-100 hover:bg-gray-200 rounded">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach
    
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class="px-3 py-1 text-blue-600 bg-gray-100 hover:bg-gray-200 rounded">»</a>
        @else
            <span class="px-3 py-1 text-gray-400 bg-gray-100 rounded">»</span>
        @endif
    </nav>
@endif
