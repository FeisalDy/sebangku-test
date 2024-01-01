@if ($paginator->hasPages())
<div class="flex flex-col items-end">
    <nav role="navigation" aria-label="{!! __('Pagination Navigation') !!}" class="mb-4 sm:mb-0 sm:order-1">
        <ul class="flex justify-center">
            {{-- Previous Page Link --}}
            <li class="ml-3 first:ml-0">
                @if ($paginator->onFirstPage())
                <span class="bg-white cursor-not-allowed btn border-slate-200 text-slate-300">
                    {!! __('pagination.previous') !!}
                </span>
                @else
                <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="text-indigo-500 bg-white btn border-slate-200 hover:border-slate-300">
                    {!! __('pagination.previous') !!}
                </a>
                @endif
            </li>

            {{-- Next Page Link --}}
            <li class="ml-3 first:ml-0">
                @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="text-indigo-500 bg-white btn border-slate-200 hover:border-slate-300">
                    {!! __('pagination.next') !!}
                </a>
                @else
                <span class="bg-white cursor-not-allowed btn border-slate-200 text-slate-300">
                    {!! __('pagination.next') !!}
                </span>
                @endif
            </li>
        </ul>
    </nav>
</div>
@endif