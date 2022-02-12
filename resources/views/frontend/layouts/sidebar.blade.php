<div id="renderAll"></div>
<header class="main-nav">
  <div class="logo-wrapper closed"><a style="margin-left: 25%;" href="#"><img class="img-fluid" src="{{asset('/assets/images/logo/logo.png')}}" alt=""></a></div>
  <div class="toggle-sidebar" style=" margin-top:-10px"><i class="status_toggle middle" data-feather="grid" id="sidebar-toggle"> </i></div>
    <nav>
      <div class="main-navbar">
        <div id="mainnav">
          <ul class="nav-menu custom-scrollbar">
            <li class="back-btn">
              <div class="mobile-back text-right"><span>Back</span><i class="fa fa-angle-right pl-2" aria-hidden="true"></i></div>
            </li>
            <li class="dropdown"><a class="nav-link menu-title" href="{{ route('rekap') }}"><i data-feather="home"></i><span>Dashboard</span></a></li>
            <li class="dropdown" id="bank"><a class="nav-link menu-title" href="{{ route('leaderboard-member') }}"><i data-feather="home"></i><span>Leaderboard</span></a></li>

            <li class="dropdown"><a class="nav-link menu-title" href="#"><i data-feather="dollar-sign"></i><span class="">Saldo Anda</span></a>
              <ul class="nav-submenu menu-content">
                <li><a href="{{route('histori-transaksi-member')}}">Histori Transaksi</a></li>
                <li><a href="layout-rtl.html">Pencairan Dana</a></li>

              </ul>
            </li>
            <li class="dropdown"><a class="nav-link menu-title" href="#"><i data-feather="circle"></i><span>Point</span></a>
              <ul class="nav-submenu menu-content">
                <li><a  href="{{route('transaksi-point-member')}}">Transaksi Point</a></span>
                </li>
                <li><a  href="{{route('myreward-member')}}">My Reward</a></span>
                <li><a  href="{{route('reward-member')}}">Reward</a></span>
                </li>
              </ul>
            </li>
            <li class="dropdown"><a class="nav-link menu-title" href="{{ route('product-member') }}"><i data-feather="tag"></i><span>Produk</span></a>
            </li>
            <li class="dropdown"><a class="nav-link menu-title" href="#"><i data-feather="shopping-bag"></i><span>Transaksi</span></a>
              <ul class="nav-submenu menu-content">
                <li><a  href="{{route('transaksi-produk-member')}}">Produk Fisik</a></span>
                </li>
                <li><a  href="#">E-Course</a></span>
                </li>

              </ul>
            </li>

            <li class="dropdown" id="expedisi"><a class="nav-link menu-title" href="{{ route('komisi-member') }}"><i data-feather="home"></i><span>Komisi</span></a></li>
            <li class="dropdown"><a class="nav-link menu-title" href="#"><i data-feather="credit-card"></i><span>Saldo</span></a>
              <ul class="nav-submenu menu-content">
                <li><a class="submenu-title" style="display: inline" href="{{route('pencairan-member')}}">Pencairan</a></span>
                </li>
                <li><a class="submenu-title" style="display: inline" href="{{route('kategori-bayar')}}">Pembayaran</a></span>
                </li>
            </li>
          </ul>
            <li class="dropdown"><a class="nav-link menu-title" href="#"><i data-feather="box"></i><span>Afiliasi</span></a>
              <ul class="nav-submenu menu-content">
                <li><a  href="{{route('link')}}">Link</a></span>
                </li>
                <li><a  href="{{route('list-stats')}}">Status</a></span>
                </li>

                <li><a class="submenu-title" style="display: inline" href="{{route('pembelian-course')}}">Kirim</a></span>
                </li>

                </ul>
                  <li class="dropdown"><a class="nav-link menu-title" href="#"><i data-feather="circle"></i><span>E-Course</span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a class="submenu-title" style="display: inline" href="{{route('Materi')}}">Akses</a></span>
                      </li>
                      <li><a class="submenu-title" style="display: inline" href="{{route('pembelian-course')}}">Beli</a></span>
                      </li>
                  </li>
                </ul>
            <li class="dropdown"><a class="nav-link menu-title" href="{{ route('order-status-member') }}"><i data-feather="tag"></i><span>Order Status</span></a>
            </li>
              <li class="dropdown"><a class="nav-link menu-title" href="{{ route('chat-member') }}"><i data-feather="message-circle"></i><span>Chat</span></a></li>
            <li class="dropdown"><a class="nav-link menu-title" href="{{ route('edit-profile') }}"><i data-feather="user"></i><span>Profile</span></a>
            </li>
            <li class="dropdown"><a class="nav-link menu-title" href="http://support.pixelstrap.com/help-center" target="_blank"><i data-feather="headphones"></i><span>Raise Support</span></a></li>
            <li class="dropdown"><a class="nav-link menu-title" href="../document/index.html" target="_blank"><i data-feather="file-text"></i><span>Documentation    </li>                                </span></a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
