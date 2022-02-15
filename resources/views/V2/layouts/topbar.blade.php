@section('js')
<script type="text/javascript">
  function fullscreen(){
    var isInFullScreen = (document.fullscreenElement && document.fullscreenElement !== null) ||
      (document.webkitFullscreenElement && document.webkitFullscreenElement !== null) ||
      (document.mozFullScreenElement && document.mozFullScreenElement !== null) ||
      (document.msFullscreenElement && document.msFullscreenElement !== null);

    var docElm = document.documentElement;
    if (!isInFullScreen) {
        if (docElm.requestFullscreen) {
            docElm.requestFullscreen();
        } else if (docElm.mozRequestFullScreen) {
            docElm.mozRequestFullScreen();
        } else if (docElm.webkitRequestFullScreen) {
            docElm.webkitRequestFullScreen();
        } else if (docElm.msRequestFullscreen) {
            docElm.msRequestFullscreen();
        }
    } else {
        if (document.exitFullscreen) {
            document.exitFullscreen();
        } else if (document.webkitExitFullscreen) {
            document.webkitExitFullscreen();
        } else if (document.mozCancelFullScreen) {
            document.mozCancelFullScreen();
        } else if (document.msExitFullscreen) {
            document.msExitFullscreen();
        }
    }
  }
</script>
@endsection
<nav class="navbar navbar-expand  bg-navbar topbar mb-4 static-top" style="background: 
#353535; width: auto;" id="sidebarToggleTop">
  <button  class="btn btn-link rounded-circle mr-3" data-target="#accordionSidebar" onclick="openNav()">
    <i class="fa fa-bars" style="color: #FF9F1C;"></i>
  </button>
  @if (Auth::check() && Request::segment(1) != 'order-sponsor')
  <ul class="navbar-nav ml-auto">

    <li class="nav-item dropdown no-arrow mx-1">
      <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">
        <i class="far fa-bell" style="color: 
        #FF9F1C;"></i>
        <span class="badge badge-danger badge-counter">{{ $jumlah }}</span>
      </a>
      <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
        aria-labelledby="alertsDropdown">
        <h6 class="dropdown-header">
          Alerts Center
        </h6>
        @auth
        @foreach ($notif as $n)
        <a class="dropdown-item d-flex align-items-center">
          <div class="mr-3">
            <div class="icon-circle bg-primary">
              <i class="fas fa-file-alt text-white"></i>
            </div>
          </div>
          <div>
            <div class="small text-gray-500" id="font-1">{{$n->created_at->diffForHumans() }}</div>
            <span class="font-weight-bold" id="font-1">{{$n->isi}}</span>
          </div>
        </a>
        @endforeach
        @endauth
        <div class="buton">
          <a data-toggle="modal" data-target="#notif" href="#" class="btn btn-warning"> Cek semua notifikasi</a>
        </div>

      </div>
    </li>
    <li class="nav-item dropdown no-arrow mx-1">
      <a class="nav-link dropdown-toggle" href="#" onClick="fullscreen();" id="messagesDropdown" role="button" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-expand" style="color: #FF9F1C;"></i>
      </a>
    </li>


    <div class="topbar-divider d-none d-sm-block"></div>
    @if (Auth::check() && (auth()->user()->role == 'admin' || auth()->user()->role == 'member'))
    <li class="nav-item dropdown no-arrow">
      <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">
        <img class="img-profile rounded-circle" src="{{auth()->user()->foto ? asset(Storage::url('/user/'.auth()->user()->foto)): asset('assets/images/user/5.jpg')}}" style="max-width: 60px; border: none;">
        <span class="ml-2 d-none d-lg-inline small"
          style="color:#FF9F1C; font-family: 'Rubik', sans-serif;">{{auth()->user()->name}}</span>
      </a>
      <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
        <a class="dropdown-item" href="#" style="color: #FF9F1C;">
          <i class="fas fa-user fa-sm fa-fw mr-2"></i>
          Profile
        </a>
        <a class="dropdown-item" href="{{ route('logout') }}" style="color: #FF9F1C;" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
          <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2"></i>
          Logout
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
      </div>
    </li>
    @endif
  </ul>
  @endif
</nav>