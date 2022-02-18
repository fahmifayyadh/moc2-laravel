<header class="main-nav" style="background:#262A33;" >
  {{-- <div style="text-align: center;" class="logo-wrapper closed"><a href="#"><img style="height: 40px;width:4em" class="img-fluid" src="{{asset('/assets/images/logo/Logo-moc.png')}}" alt=""></a></div> --}}
  <div style="text-align: center;" class="logo-wrapper"><a href="#"><img class="img-fluid for-light" style="height: 3.5em;width:7.5em" src="{{asset('/assets/images/logo/Logo-moc.png')}}" alt=""><img style="height: 40px;width:4em" class="img-fluid for-dark" src="{{asset('/assets/images/logo/Logo-moc.png')}}" alt=""></a>
    <div style="color:white" class="back-btn"><i class="fa fa-angle-left"></i></div>
        <div class="toggle-sidebar"><i class="status_toggle middle" data-feather="grid" id="sidebar-toggle"> </i></div>
  </div>
  {{-- <div class="toggle-sidebar" style=""><i class="status_toggle middle" data-feather="grid" id="sidebar-toggle"> </i></div> --}}
  <nav>
    <div class="main-navbar">
      <div id="mainnav">
        <ul class="nav-menu custom-scrollbar">
          <li class="back-btn">
            <div class="mobile-back text-right"><span>Back</span><i class="fa fa-angle-right pl-2" aria-hidden="true"></i></div>
          </li>
        @if (Auth::check() && (( auth()->user()->role == 'member' && auth()->user()->status != 'pembeli') || auth()->user()->role == 'admin'))
            
        <li class="dropdown"><a class="nav-link menu-title" href="{{route('dashboard.index')}}" target=""><i data-feather="home"></i><span>Dashboard</span></a></li>

        <li class="dropdown" id="bank"><a class="nav-link menu-title" href="{{route('chat.index')}}"><i data-feather="message-circle"></i><span>Kirim Pesan</span></a></li>
          
        <li class="dropdown" id="bank"><a class="nav-link menu-title" href="{{route('user.leaderboard')}}"><i data-feather="trending-up"></i><span>LeaderBoard</span></a></li>
        <li class="dropdown"><a class="nav-link menu-title" href="#"><i data-feather="link"></i><span>Afiliasi</span></a>
          <ul class="nav-submenu menu-content">
            <li><a class="submenu-title" style="display: inline" href="{{route('afiliasi.index')}}">Link</a></span>
            </li>
            <li><a class="submenu-title" style="display: inline" href="{{route('komisi.index')}}">Komisi-course</a></span>
            </li>
            <li><a class="submenu-title" style="display: inline" href="{{route('komisiFisik.index')}}">Komisi-fisik</a></span>
            </li>
            <li><a class="submenu-title" style="display: inline" href="{{route('afiliasi.list-stats')}}">Status</a></span>
            </li>
            <li><a class="submenu-title" style="display: inline" href="{{route('facebookPixel.index')}}">Facebook Pixel</a></span>
            </li>
            </ul>
        </li>
        @endif

         @if (Auth::check() && auth()->user()->role == 'admin')

          <li class="dropdown" id="bank"><a class="nav-link menu-title" href="{{route('user.index')}}"><i data-feather="users"></i><span style="color:#fff;">List User</span></a></li>
          <li class="dropdown" id="bank"><a class="nav-link menu-title" href="{{route('berita.index')}}"><i data-feather="rss"></i><span style="color:#fff;">Kelola Berita</span></a></li>
          <li class="dropdown" id="bank"><a class="nav-link menu-title" href="{{route('banner.index')}}"><i data-feather="cast"></i><span style="color:#fff;">Kelola Banner</span></a></li>   
          <li class="dropdown" id="bank"><a class="nav-link menu-title" href="{{route('kupon.index')}}"><i data-feather="clipboard"></i><span style="color:#fff;">Kelola Kupon</span></a></li>
          <li class="dropdown"><a class="nav-link menu-title" href="#"><i data-feather="edit"></i><span style="color:#fff;">Transaksi</span></a>
            <ul class="nav-submenu menu-content">
              <li><a style="display: inline; color:#fff;" class="submenu-title" href="{{route('transaksi.order-fisik')}}">Produk Fisik </a></span>
              </li>
              <li><a class="submenu-title" style="display: inline; color:#fff;" href="{{route('transaksi.order-ecourse')}}">E-Course</a></span>
              </li>
            </ul>
          </li>
          <li class="dropdown" id="bank"><a class="nav-link menu-title" href="{{route('bank.index')}}"><i data-feather="pocket"></i><span>Kelola Bank</span></a></li>
          <li class="dropdown" id="bank"><a class="nav-link menu-title" href="{{route('reward.admin')}}"><i data-feather="star"></i><span>Reward</span></a></li>
          <li class="dropdown" id="bank"><a class="nav-link menu-title" href="{{route('reward.riwayatMember')}}"><i data-feather="watch"></i><span>History Reward</span></a></li>
          <li class="dropdown" id="bank"><a class="nav-link menu-title" href="{{route('pencairan.index')}}"><i data-feather="droplet"></i><span>Pencairan dana</span></a></li>
          <li class="dropdown" id="bank"><a class="nav-link menu-title" href="{{route('pencairan.riwayat')}}"><i data-feather="file-text"></i><span>Riwayat Pencairan dana</span></a></li>
          
          <li class="dropdown" id="expedisi"><a class="nav-link menu-title" href="{{route('exspedisi.index')}}"><i data-feather="truck"></i><span>Kelola Ekspedisi</span></a></li>
          <li class="dropdown"><a class="nav-link menu-title" href="#"><i data-feather="sliders"></i><span>Kelola Produk</span></a>
            <ul class="nav-submenu menu-content">
              <li><a style="display: inline" class="submenu-title" href="{{route('course.paket')}}">kelola Paket </a>
              </li>
              
              <li><a style="display: inline" class="submenu-title" href="{{route('course.index')}}">Course </a><span onclick="reFunc()" class="ml-5 pl-5 text-primary" style="cursor:pointer"><i class="icofont icofont-plus-square"></i></span>
              </li>
              <li><a class="submenu-title" style="display: inline" href="{{route('produk.index')}}">Produk Fisik</a><span onclick="reFunc1()" class="text-primary" style="cursor:pointer"><i class="icofont icofont-plus-square"></i></span>
              </li>
            </ul>
          </li>
          @elseif((Auth::check() && auth()->user()->role == 'member' && auth()->user()->status != 'pembeli'))
          <li class="dropdown"><a class="nav-link menu-title" href="#"><i data-feather="inbox"></i><span>My Order</span></a>
            <ul class="nav-submenu menu-content">
              <li><a style="display: inline" class="submenu-title" href="{{route('order.order-status-course')}}">Course</a>
              </li>
              <li><a style="display: inline" class="submenu-title" href="{{route('order.order-status-fisik')}}">Produk</a>
              </li>
            </ul>
          </li>
          <li class="dropdown" id="bank"><a class="nav-link menu-title" href="{{route('reward.member')}}"><i data-feather="star"></i><span>My Reward</span></a></li>
          <li class="dropdown" id="bank"><a class="nav-link menu-title" href="{{route('reward.riwayatMember')}}"><i data-feather="watch"></i><span>History Reward</span></a></li>
          
          <li class="dropdown" id="bank"><a class="nav-link menu-title" href="{{route('myCourse.index')}}"><i data-feather="youtube"></i><span>My Course</span></a></li>
          <li class="dropdown" id="bank"><a class="nav-link menu-title" href="{{route('file.index')}}"><i data-feather="hard-drive"></i><span>Media Promosi</span></a></li>
          <li class="dropdown"><a class="nav-link menu-title" href="#"><i data-feather="briefcase"></i><span>Order Produk</span></a>
            <ul class="nav-submenu menu-content">
              <li><a style="display: inline" class="submenu-title" href="{{route('etalase.course')}}">Course </a>
              </li>
              {{-- <li><a style="display: inline" class="submenu-title" href="{{route('etalase.paketCourse')}}">Paket Course </a>
              </li> --}}
              <li><a style="display: inline" class="submenu-title" href="{{route('etalase.product')}}">Produk Fisik</a>
              </li>
            </ul>
          </li> 
          @endif
          @if (Auth::check() && auth()->user()->role == 'member' && auth()->user()->status == 'pembeli')
          <li class="dropdown" id="bank"><a class="nav-link menu-title" href="{{route('myCourse.index')}}"><i data-feather="youtube"></i><span>My Course</span></a></li>
          <li class="dropdown" id="bank"><a class="nav-link menu-title" href="{{route('file.index')}}"><i data-feather="hard-drive"></i><span>Media Promosi</span></a></li>
          <li class="dropdown" id="bank"><a class="nav-link menu-title" href=" {{route('order.order-status-course')}}"><i data-feather="inbox"></i><span>My Order</span></a></li>
         
          @endif
         </ul>
      </div>
    </div>
  </nav>
  <style type="text/css">
      .page-wrapper.compact-wrapper .page-body-wrapper.sidebar-icon header.main-nav .main-navbar .nav-menu>li a svg{
    width: 18px;
    margin-right: 10px;
    vertical-align: bottom;
    float: none;
    stroke-width: 2.3px;
    color: #f7f8fb;
    -webkit-transition: all 0.3s ease;
    transition: all 0.3s ease;}
    .page-wrapper.compact-wrapper .page-body-wrapper.sidebar-icon header.main-nav .main-navbar .nav-menu li a span {
    letter-spacing: 0.7px;
    font-family: Roboto;
    text-transform: capitalize;
    color: #ffffff;}
    .page-wrapper.compact-wrapper .page-body-wrapper.sidebar-icon header.main-nav .main-navbar .nav-menu>li .nav-submenu li a {
    padding: 7px 25px;
    font-size: 14px;
    color: rgb(255 255 255);
    display: block;
    position: relative;
    letter-spacing: 0.06em;
    font-weight: 500;
    font-family: Roboto;}
    .page-wrapper.compact-wrapper .page-body-wrapper.sidebar-icon .according-menu i {
    vertical-align: middle;
    color: rgb(188 185 204 / 80%);
    font-weight: 600;}
    
  </style>
</header>