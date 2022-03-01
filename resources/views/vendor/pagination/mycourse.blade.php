@php
$sd = [];
@endphp

@if ($paginator->hasPages())
<div class="sidebar-data">
    @foreach ($elements as $element)
    @if (is_string($element))
    <div class="data">
        <a href="#" class="">
            <div class="card bg-secondary text-light">

                <span class="pl-2 m-2">Materi ke {{$element}}</span>
            </div>
        </a>
    </div>
    @endif
    @if (is_array($element))
    @foreach ($element as $page => $url)
    @if (!in_array($namaCourse[$page-1]->babcourse->id, $sd))
    <div class="data">
        <div class="card text-light" style="background-color:#DC4343">
            <span class="pl-2 m-2">BAB: {{$namaCourse[$page-1]->babcourse->name}}
            </span>
        </div>
    </div>
    @php
    $sd[] = $namaCourse[$page-1]->babcourse->id;
    @endphp
    @endif
    @if ($page == $paginator->currentPage())
    <div class="data ml-5">
        <div class="card bg-secondary text-light">
        <span class="pl-2 m-1">{{$namaCourse[$page-1]->name}} {!!in_array($page,$ar) ? '<i class="fas fa-eye"></i>'
            :null !!}</span>
    </div>
</div>
@else
<div class="data ml-5">
    <a href="{{$url}}" class="">
        <div class="card bg-warning text-light" style="background-color: #FF9F1C">
            <span class="pl-2 m-1">{{$namaCourse[$page-1]->name}} {!!in_array($page,$ar) ? '<i class="fas fa-eye"></i>'
                :null !!}</span>
        </div>
    </a>
</div>
@endif
@endforeach
@endif
@endforeach
<br>
                <br>
                <br>
                <br>
                <br>
</div>
@endif
