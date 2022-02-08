
@if ($paginator->hasPages())
    @if ($paginator->hasMorePages())
        <li class="nav-item float-right">
            <a href="{{ $paginator->nextPageUrl() }}" class="nav-link">
                <button class="btn btn-danger"> >> </button>
            </a>
        </li>
    @else
    <li class="nav-item float-right">
        <div class="nav-link">
            <button class="btn btn-danger"> >> </button>
        </div>
    </li>
    @endif
    
    

@endif 