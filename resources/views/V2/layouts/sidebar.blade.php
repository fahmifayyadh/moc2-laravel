<ul class="navbar-nav sidebar  accordion" id="accordionSidebar">

      <!-- memmber bukan status pembeli sm admin bisa lihat -->
  @if (Auth::check() && (( auth()->user()->role == 'member' && auth()->user()->status != 'pembeli') || auth()->user()->role == 'admin'))
      <li class="nav-item mt-5">
        <a class="nav-link" href="{{route('dashboard.index')}}">
          <i class="fas fa-fw fa-home"></i>
          <span>Dashboard</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('chat.index')}}">
          <i class="fas fa-fw fa-comments"></i>
          <span>Pesan</span></a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="{{route('user.leaderboard')}}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>LeaderBoard</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#afiliasi" aria-expanded="true"
        aria-controls="collapseTable">
        <i class="fas fa-fw fa-link"></i>
        <span>Afiliasi</span>
      </a>
      <div id="afiliasi" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Afiliasi</h6>
          <a class="collapse-item" href="{{route('afiliasi.index')}}">Link</a>
          <a class="collapse-item" href="{{route('komisi.index')}}">Komisi-course</a>
          <a class="collapse-item" href="{{route('komisiFisik.index')}}">Komisi-fisik</a>
          <a class="collapse-item" href="{{route('afiliasi.list-stats')}}">Status</a>
          <a class="collapse-item" href="{{route('facebookPixel.index')}}">Facebook Pixel</a>
        </div>
      </div>
      </li>
      @endif
      <!-- end -->

      <!-- hanya admin bisa lihat -->
      @if (Auth::check() && auth()->user()->role == 'admin')
      <li class="nav-item">
        <a class="nav-link" href="{{route('user.index')}}">
          <i class="fas fa-fw fa-user-friends"></i>
          <span>List user</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('berita.index')}}">
          <i class="fas fa-fw fa-newspaper"></i>
          <span>Kelola Berita</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('banner.index')}}">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Kelola Banner</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('kupon.index')}}">
          <i class="fas fa-fw fa-journal-whills"></i>
          <span>Kelola Kupon</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Transaksi" aria-expanded="true"
        aria-controls="collapseTable">
        <i class="fas fa-fw fa-money-bill-wave"></i>
        <span>Transaksi</span>
      </a>
      <div id="Transaksi" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Transaksi</h6>
          <a class="collapse-item" href="{{route('transaksi.order-fisik')}}">Produk Fisik</a>
          <a class="collapse-item" href="{{route('transaksi.order-ecourse')}}">E-Course</a>
        </div>
      </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('bank.index')}}">
          <i class="fas fa-fw fa-money-check"></i>
          <span>Kelola Bank</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('reward.admin')}}">
          <i class="fas fa-fw fa-compass"></i>
          <span>Reward</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('reward.riwayatMember')}}">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>History Reward</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('pencairan.index')}}">
          <i class="fas fa-fw fa-exchange-alt"></i>
          <span>Pencairan Dana</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('pencairan.riwayat')}}">
          <i class="fas fa-fw fa-money-check"></i>
          <span>Riwayat Pencairan Dana</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('exspedisi.index')}}">
          <i class="fas fa-fw fa-truck"></i>
          <span>Kelola Ekspedisi</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#kelolaproduk" aria-expanded="true"
        aria-controls="collapseTable">
        <i class="fas fa-fw fa-object-group"></i>
        <span>Kelola Produk</span>
      </a>
      <div id="kelolaproduk" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Kelola Produk</h6>
          <a class="collapse-item" href="{{route('course.paket')}}">Kelola Paket</a>
          <a class="collapse-item" href="{{route('course.index')}}">Course</a>
          <a class="collapse-item" href="{{route('produk.index')}}">Produk Fisik</a>
        </div>
      </div>
    </li>
        <!-- end -->

        <!-- member dan bukan pembeli bisa lihat -->
       @elseif((Auth::check() && auth()->user()->role == 'member' && auth()->user()->status != 'pembeli'))
      <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#My Order" aria-expanded="true"
          aria-controls="collapseTable">
          <i class="fas fa-fw fa-table"></i>
          <span>My Order</span>
        </a>
        <div id="My Order" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">My Order</h6>
            <a class="collapse-item" href="{{route('order.order-status-fisik')}}">Produk</a>
            <a class="collapse-item" href="{{route('order.order-status-course')}}">Course</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('reward.admin')}}">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Reward</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('reward.riwayatMember')}}">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>History Reward</span>
        </a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="{{route('myCourse.index')}}">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>My Course</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('file.index')}}">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Media Promosi</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Orderproduk" aria-expanded="true"
        aria-controls="collapseTable">
        <i class="fas fa-fw fa-table"></i>
        <span>Order Produk</span>
      </a>
      <div id="Orderproduk" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Order Produk</h6>
          <a class="collapse-item" href="{{route('etalase.course')}}">Course</a>
          <a class="collapse-item" href="{{route('etalase.paketCourse')}}">Paket Course</a>
          <a class="collapse-item" href="{{route('etalase.product')}}">Produk Fisik</a> 
        </div>
      </div>
    </li>
    @endif
    <!-- end -->
    
    <!-- memmber dg status pembeli bisa lihat -->
    @if (Auth::check() && auth()->user()->role == 'member' && auth()->user()->status == 'pembeli')
    <li class="nav-item">
        <a class="nav-link" href="{{route('myCourse.index')}}"><i data-feather="youtube"></i><span>My Course</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('file.index')}}"><i data-feather="hard-drive"></i><span>Media Promosi</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href=" {{route('order.order-status-course')}}"><i data-feather="inbox"></i><span>My Order</span>
        </a>
      </li>
      @endif
    <!-- end -->
      <hr class="sidebar-divider">
      <div class="version" id="version-ruangadmin"></div>
    </ul>