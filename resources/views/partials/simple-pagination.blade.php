@if ($paginator->hasPages())
    <nav>
        <div class="join">
            @if ($paginator->onFirstPage())
                <button class="join-item btn btn-disabled" aria-disabled="true">
                    «
                </button>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="join-item btn">
                    «
                </a>
            @endif

            <button class="join-item btn">
                Page {{ $paginator->currentPage() }}
            </button>

            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="join-item btn">
                    »
                </a>
            @else
                <button class="join-item btn btn-disabled" aria-disabled="true">
                    »
                </button>
            @endif
        </div>
    </nav>
@endif
