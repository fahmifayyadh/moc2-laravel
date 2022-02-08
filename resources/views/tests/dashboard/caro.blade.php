<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      @forelse ($banner as $ic => $t)
      
      <li data-target="#carouselExampleIndicators" data-slide-to="{{$ic}}" @if ($ic==0) class="active" @endif></li>
      @empty
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      @endforelse
    </ol>
    <div class="carousel-inner">
      @forelse ($banner as $i=>$it)
      <div class="carousel-item @if ($i==0) active @endif">
        <a @if ($it->link != '#') target="__blank" @endif href="{{$it->link}}">

          <img style="height:auto" class="d-block w-100" src="{{asset(Storage::url('banner/'.$it->img))}}" alt="Not image">
        </a>
       
      </div>

      @empty
      <div class="carousel-item active">
        <a href="#">
          <img style="height: 300px" class="d-block w-100" src="https://images.unsplash.com/photo-1510936111840-65e151ad71bb?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" alt="Not image">
        </a>
       
      </div>
      @endforelse
      
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>