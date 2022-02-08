
@if ($paginator->hasPages())
@if ($paginator->onFirstPage())
<li class="nav-item float-right">
    <div class="nav-link">
        <button class="btn btn-secondary"><< </button>
        </div>
</li>
@else
    <li class="nav-item float-right">
        <a href="{{ $paginator->previousPageUrl() }}" class="nav-link">
            <button class="btn btn-danger"><<</button>
        </a>
    </li>
@endif
@endif 