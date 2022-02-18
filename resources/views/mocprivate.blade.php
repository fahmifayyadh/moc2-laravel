@extends('layouts.homepage')
@section('content')
<style>
  html{scroll-behavior:smooth;}
</style>

<body class="landing-page">
  <!-- page-wrapper Start-->
  <div class="page-wrapper landing-page">
  </div>
  <!-- page-wrapper Start-->
  <div class="page-wrapper landing-page">
    <!-- Page Body Start -->
    <div class="landing-home">
      <div class="container-fluid">
        <div class="sticky-header">
          <header>
            <nav class="navbar navbar-b navbar-trans navbar-expand-xl fixed-top nav-padding" id="mainNav"><a class="navbar-brand p-0" href="#">
              <img class="img-fluid" src="{{asset('/assets/images/logo/Logo-moc.png')}}" alt=""></a>
              <button class="navbar-toggler navabr_btn-set custom_nav" type="button" data-toggle="collapse" data-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation"><span>
              </button>
              <div class="navbar-collapse justify-content-end collapse hidenav" id="navbarDefault">
                <ul class="navbar-nav navbar_nav_modify" id="scroll-spy">
                  @auth
                  <li class="nav-item buy-btn"><a class="nav-link js-scroll" href="{{route('dashboard.index')}}">Dashboard</a></li>    
                  @else
                      <li class="nav-item buy-btn"><a class="nav-link js-scroll" href="{{route('login')}}">Login</a></li>
                  @endauth
                </ul>
              </div>
            </nav>
          </header>
        </div>
        <div class="row" style="background-image:url(https://masteronlinecommunity.com/wp-content/uploads/2021/03/banner-orange.jpeg); background-position: center; background-repeat: no-repeat; background-size: cover;">
          <div class="col-xl">
            <div class="content">
              <div>
                <div class="logo-moc-2" style="text-align:center">
                  <img src="https://masteronlinecommunity.com/wp-content/uploads/2020/08/Logo-MOC-1-1.png" class="img-fluid" alt="Responsive image">
                </div>
                <h1 class="wow fadeIn" style="text-align: center;">Master Online Community</h1>
                <h1 class="wow fadeIn"></h1>
                
                <h3 class="txt-secondary wow fadeIn"style="text-align: center;">#1 Platform Bisnis Online Anti Perang Harga di Indonesia</h3>
                
                <h5 class="mt-3 wow fadeIn" style="text-align: center;">Jualan Online pasti untung, bebas perang harga dan dibimbing oleh master berpengalaman sampai bisa Hanya di Master Online Community</h5>
                <div class="btn-grp mt-4"style="text-align: center;">
                  <a class="btn btn-pill btn-secondary btn-air-secondary btn-lg mr-3 wow pulse" href="#order">
                    <img src="" alt="">DAFTAR SEKARANG</a>
                   <a class="btn btn-pill btn-danger btn-air-secondary btn-lg mr-3 wow pulse" href="{{route('login')}}">
                    <img src="" alt="">LOGIN</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <section class="sect-2" style="padding:30px;">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="h3-tx-1">
                            <h4 style="text-align: center; padding:30px">Kamu pasti sudah tau kan Potensi Bisnis Online di Indonesia Sangat Besar dan Menjanjikan?
Jika YA! Pastikan kamu Nonton Video ini sampai Selesai</h4>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/RtCBmxDP7X8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                  </div>
                </div>
            </div>
        </section>
        <section class="sect-3" style="background:#FDCC2B; padding:30px;">
            <div class="container cont-3" style="padding-top:20px;">
                <div class=" col-sm-12">
                    <div class="row">
                        <div class="col-lg-8">
                            <h2>Riset Membuktikan</h2><br>
                            <h5>Volume transaksi Penjualan Online tahun 2015 di Indonesia mencapai Rp. 288 Triliun.
Pada tahun 2020 transaksi penjualan Online di Indonesia Diprediksi akan mencapai 130 Milyar USD (Rp. 1,690Triliun) Kabar Baiknya. Bisnis Online bisa dikerjakan oleh siapapun dengan latar belakang apapun dan dimanapun (FLEKSIBEL)</h5>
                        </div>
                        <div class="col-lg-4">
                            <img src="https://masteronlinecommunity.com/wp-content/uploads/2020/10/MOC-2.png" style="text-align:center;">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container" style="padding:50px; text-align:center; ">
                <div class="row">
                    <div class="col-sm-12">
                        <h2>7 SKILL yang WAJIB dibutuhkan menjalani Bisnis Online</h2><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <img src="https://masteronlinecommunity.com/wp-content/uploads/2020/10/MOC-8.png" class="img-thumbnail" style="margin:10px;">
                        <h5>Digital Marketing/Online Marketing</h5>
                    </div>
                    <div class="col-sm">
                        <img src="https://masteronlinecommunity.com/wp-content/uploads/2020/10/MOC-7-1.png" class="img-thumbnail" style="margin:10px;">
                        <h5>Copywriting / Hypnowriting</h5>
                    </div>
                    <div class="col-sm">
                        <img src="https://masteronlinecommunity.com/wp-content/uploads/2020/10/MOC-10.png" class="img-thumbnail" style="margin:10px;">
                        <h5>SOP / Simulasi Penjualan</h5>
                    </div>
                    <div class="col-sm">
                        <img src="https://masteronlinecommunity.com/wp-content/uploads/2020/10/MOC-12.png" class="img-thumbnail" style="margin:10px;">
                        <h5>Membuat Konten Design/Merekrut Graphic Designer</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <img src="https://masteronlinecommunity.com/wp-content/uploads/2020/05/MOC-11.png" class="img-thumbnail" style="margin:10px;">
                        <h5>Step by Step menjalankan Bisnis Online (Funneling)</h5>
                    </div>
                    <div class="col-lg-4">
                        <img src="https://masteronlinecommunity.com/wp-content/uploads/2020/05/MOC-9.png" class="img-thumbnail" style="margin:10px;">
                        <h5>Membayar Mentor Bisnis Online untuk membantu kamu</h5>
                    </div>
                    <div class="col-lg-4">
                        <img src="https://masteronlinecommunity.com/wp-content/uploads/2020/05/MOC-6.png" class="img-thumbnail" style="margin:10px;">
                        <h5>Praktek Gagal berkali-kali dan tentunya lebih banyak menghabiskan waktu dan uang kamu terlebih dahulu</h5>
                    </div>
                </div>
            </div>
        </section>
        <section style="background-image:url(https://masteronlinecommunity.com/wp-content/uploads/2021/03/banner-orange.jpeg); background-position: center; background-repeat: no-repeat; background-size: cover; padding:30px;">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h2 style="text-align:center;">Apakah ini 7 kendala Anda saat ini dalam memulai Bisnis Online?</h2>
                    </div>
                    <div class="col-sm-12" style="padding:3%">
                      <div class="row">
                         <div class="col-md-6">
                          <img src="https://masteronlinecommunity.com/wp-content/uploads/2021/03/moc-13-1.png" style="text-align:center;" class="img-fluid" alt="Responsive image">
                          </div>
                          <div class="col-md-6">
                          <ul style="font-size:1.2em;padding:2%">
                            <li><i class="fa fa-check-square" aria-hidden="true"></i> Bingung memasarkan Produk apa di Online</li>
                            <li><i class="fa fa-check-square" aria-hidden="true"></i> Terkena Dampak Perang Harga di Online</li>
                            <li><i class="fa fa-check-square" aria-hidden="true"></i> Jualan Produk Keuntungan Sangat Kecil atau bahakan Zonk</li>
                            <li><i class="fa fa-check-square" aria-hidden="true"></i> Tidak memiliki keahlian atau tidak punya waktu untuk mendesain konten</li>
                            <li><i class="fa fa-check-square" aria-hidden="true"></i> Tidak mengerti Ilmu Copywriting / Hypnowriting untuk Mempengaruhi calon pelanggan</li>
                            <li><i class="fa fa-check-square" aria-hidden="true"></i> Tidak mengerti apa itu Funneling Bisnis Online</li>
                            <li><i class="fa fa-check-square" aria-hidden="true"></i> Iklan selalu RUGI dan tidak punya MENTOR BISNIS ONLINE</li>
                          </ul>
                        </div>
                      </div>
                  </div>
                  <div class="col-sm-12" style="text-align:center">
                    <h4>
                      Jika kamu tidak punya salah satu SKILL di atas, Tenang saja!
Karena semuanya akan diajarkan dan dibimbing oleh master berpengalaman di Master Online Community
                    </h4>
                  </div>
              </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="sec-line" style="background-color:#000; padding:17px">
          <div class="container">
            <div class="row">
              <div class="col-sm-12">
                <div class="headliner">
                <h1 style="text-align:center; color:#fff;">
                  APA ITU MASTER ONLINE COMMUNITY
                </h1>
              </div>
              </div>
            </div>
          </div>
        </section>
        <section class="sec-man-7" style="background-color:#EAF4FF">
          <div class="container">
            <div class="row" style="padding:20px">
              <div class="col-sm-12">
                <div class="logo-moc-2" style="text-align:center">
                  <img src="https://masteronlinecommunity.com/wp-content/uploads/2020/08/Logo-MOC-1-1.png" class="img-fluid" alt="Responsive image">
                </div>
              </div>
               <div class="col-sm-12">
                <div class="txt-ln2">
                  <h2 class="text-center">
                    7 Manfaat Anda Begabung di Master Online Community
                  </h2>
                </div>
              </div>
            </div>
          </div>
          <div class="container">
            <div class="row justify-content-center" style="text-align:center;" >
              <div class="card-body col-sm-6 col-md-5 col-lg-3">
                <div class="card-body">
                  <img src="https://masteronlinecommunity.com/wp-content/uploads/2020/05/shipping-and-delivery.png" class="card-img-top"/>
                  <h6 class="text-center">Siap mengakses dan Memasarkan Produk UNIK dan Berprofit Tinggi yang berada di member area Master Online Community</h6>
                </div>
              </div>
              <div class="card-body col-sm-6 col-md-5 col-lg-3">
                <div class="card-body">
                  <img src="https://masteronlinecommunity.com/wp-content/uploads/2020/05/coins.png" class="card-img-top"/>
                  <h6 class="text-center">Keuntungan Besar, Produk yang dipasarkan tidak ada Perang Harga karna sudah Tersistem dengan sangat ketat dan tanpa harus STOK Produk</h6>
                </div>
              </div>
              <div class="card-body col-sm-6 col-md-5 col-lg-3">
                <div class="card-body">
                  <img src="https://masteronlinecommunity.com/wp-content/uploads/2020/05/edit-tools.png" class="card-img-top"/>
                  <h6 class="text-center">Ribuan Konten Design, Interaksi, Edukasi yang sudah disiapkan. Sehinggan Anda tinggal men-share/menyebarkannya</h6>
                </div>
              </div>
              <div class="card-body col-sm-6 col-md-5 col-lg-3">
                <div class="card-body">
                  <img src="https://masteronlinecommunity.com/wp-content/uploads/2020/05/files.png" class="card-img-top"/>
                  <h6 class="text-center">SOP Mastery yang TERBUKTI Meningkatkan Penjualan 10x lipat</h6>
                </div>
              </div>
              <div class="card-body col-sm-6 col-md-5 col-lg-3">
                <div class="card-body">
                  <img src="https://masteronlinecommunity.com/wp-content/uploads/2020/05/education.png" class="card-img-top"/>
                  <h6 class="text-center">LIVE Mentoring via Online Meeting dan Offline Meeting </h6>
                </div>
              </div>
              <div class="card-body col-sm-6 col-md-5 col-lg-3">
                <div class="card-body">
                  <img src="https://masteronlinecommunity.com/wp-content/uploads/2020/05/video-1.png" class="card-img-top"/>
                  <h6 class="text-center">Puluhan Video Course Premium, Mentoring khusus setiap Minggu</h6>
                </div>
              </div>
              <div class="card-body col-sm-6 col-md-5 col-lg-3">
                <div class="card-body">
                  <img src="https://masteronlinecommunity.com/wp-content/uploads/2020/05/special.png" class="card-img-top"/>
                  <h6 class="text-center">LIFE TIME ACCESS Membership (Membership Berlaku Seumur Hidup), tidak ada biaya tambahan sama sekali</h6>
                </div>
              </div>
             </div>
          </div>
        </section>
        <section style="background-image:url(https://masteronlinecommunity.com/wp-content/uploads/2021/03/banner-orange.jpeg); background-position: center; background-repeat: no-repeat; background-size: cover; padding:30px;">
          <div class="container">
            <div class="row">
              <div class="col-sm-12">
                <div>
                  <h2 class="text-center">
                    Perbedaan Reseller, Dropship dan Master Online Community
                  </h2>
                </div>
              </div>
              <div class="card-shadow">
                <div>
                  <img src="https://masteronlinecommunity.com/wp-content/uploads/2020/10/moc-1-min-1.png" class="img-fluid" alt="Responsive image">
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="sec-line" style="background-color:#000; padding:17px">
          <div class="container">
            <div class="row">
              <div class="col-sm-12">
                <div class="headliner">
                <h1 style="text-align:center; color:#fff;">
                  DAFTAR PRODUK MASTER ONLINE COMMUNITY
                </h1>
              </div>
              </div>
            </div>
          </div>
        </section>
        <section>
          <div class="container" style="padding:20px">
            <div class="row">
              <div class="col-sm-12">
                <div>
                  <h2 class="text-center">
                    New Product yang laris di Master Online Community dan bebas Perang Harga!
                  </h2>
                </div>
              </div>
            </div>
            <div class="row" style="margin:20px">
              <div class="col-sm-12">
                  <div>
                    <h3>
                      “Jawabannya adalah Produk yang masuk di 2 kategori Yaitu Suplemen dan Skin Care“
                    </h3>
                  </div>
                   <div class="text-center">
                    <img src="https://masteronlinecommunity.com/wp-content/uploads/2020/10/ALL-BANNER-7-min-1.png" class="justify-content-center img-fluid" alt="Responsive image">
                  </div>
                  <div>
                    <h4 class="text-center">
                      Omzet Industri Personal care, Beauty & Anti Aging Menurut Global Wellness Economy
                    </h4>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="card shadow">
                  <img src="https://masteronlinecommunity.com/wp-content/uploads/2020/09/ALL-1-min-1280x517.png">
                </div>
              </div>
              <div class="col-sm-12">
                <div class="card shadow">
                  <img src="https://masteronlinecommunity.com/wp-content/uploads/2020/09/ALL-4-min-1280x517.png">
                </div>
              </div>
               <div class="col-sm-12">
                <div class="card shadow">
                  <img src="https://masteronlinecommunity.com/wp-content/uploads/2020/09/ALL-5-min-1-1280x517.png">
                </div>
              </div>
            </div>
            <div class="row" style="margin:30px">
              <div class="col-sm-12">
                <h1 class="text-center">Video Demo Produk</h1>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="embed-responsive embed-responsive-16by9" style="margin:10px">
                  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/ZsyUNzw5c-0" allowfullscreen></iframe>
                </div>
                <div class="embed-responsive embed-responsive-16by9" style="margin:10px">
                  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/R5XjAUNcofo" allowfullscreen></iframe>
                </div>
                <div class="embed-responsive embed-responsive-16by9" style="margin:10px">
                  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/e1W0ymRJz3A" allowfullscreen></iframe>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="vid-motivator" style="background-image:url(https://masteronlinecommunity.com/wp-content/uploads/2020/08/MW-7-min-scaled.jpg); padding:25px">
          <div class="container">
            <div class="row" style="padding:20px">
              <div class="col-sm-12">
                <div class="logo-moc-2" style="text-align:center">
                  <img src="https://masteronlinecommunity.com/wp-content/uploads/2020/08/Logo-MOC-1-1.png" class="img-fluid" alt="Responsive image">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div>
                  <h2 class="text-center" style="color:#fff;">
                    Apa kata Motivator No 1 di Asia, Praktisi Internet Marketing dan Selebgram Indonesia mengenai Master Online Community?
                  </h2>
                </div>
              </div>
            </div>
          </div>
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-sm-6 col-md-5 col-lg-6">
                 <div class="embed-responsive embed-responsive-16by9" style="margin:10px">
                  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/fXuKjGxkUqg" allowfullscreen></iframe>
                </div>
              </div>
              <div class="col-sm-6 col-md-5 col-lg-6">
                 <div class="embed-responsive embed-responsive-16by9" style="margin:10px">
                  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/FEdiPpLd-Ac" allowfullscreen></iframe>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section>
          <div class="container" style="padding:10px">
            <div class="row">
              <div class="col-sm-12" >
                <div style="padding:8%">
                  <h3 class="text-center">
                    SIMAK Team Bisnis MOC yang sudah Membuktikan Hasil mereka lewat Bisnis Online Instagram, Cek Profile Instagram mereka langsung dan Anda akan mengetahui Hasil dan Bukti NYATA dari Praktisi Bisnis Online sebenarnya.
                  </h3>
                  <div class="vid-testi">
                    <div class="embed-responsive embed-responsive-16by9" style="margin:10px">
                  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/G-z6_Ik0Vl0" allowfullscreen></iframe>
                </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="text-center">
                  <h2>
                    Bukti Transaksi Produk
                  </h2>
                </div>
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="card-body col-sm-6 col-md-5 col-lg-6">
                <div class="card-body">
                  <img src="https://masteronlinecommunity.com/wp-content/uploads/2020/10/20160222_220146-min-1.jpg" class="img-fluid" alt="Responsive image"/>
                </div>
              </div>
              <div class="card-body col-sm-6 col-md-5 col-lg-6">
                <div class="card-body">
                  <img src="https://masteronlinecommunity.com/wp-content/uploads/2020/10/20180607_225049-min-1.jpg" class="img-fluid" alt="Responsive image"/>
                </div>
              </div>
              <div class="card-body col-sm-6 col-md-5 col-lg-6">
                <div class="card-body">
                  <img src="https://masteronlinecommunity.com/wp-content/uploads/2020/10/WhatsApp-Image-2019-06-17-at-14.15.26-min-1.jpg" class="img-fluid" alt="Responsive image"/>
                </div>
              </div>
              <div class="card-body col-sm-6 col-md-5 col-lg-6">
                <div class="card-body">
                  <img src="https://masteronlinecommunity.com/wp-content/uploads/2020/10/ALL-BANNER-min-1.jpg" class="img-fluid" alt="Responsive image"/>
                </div>
              </div>
               <div class="card-body col-sm-6 col-md-5 col-lg-4">
                <div class="card-body">
                  <img src="https://masteronlinecommunity.com/wp-content/uploads/2020/10/WhatsApp-Image-2019-06-17-at-14.15.27-min-1.jpg" class="img-fluid" alt="Responsive image"/>
                </div>
              </div>
              <div class="card-body col-sm-6 col-md-5 col-lg-4">
                <div class="card-body">
                  <img src="https://masteronlinecommunity.com/wp-content/uploads/2020/10/20180517_205607-min-1.jpg" class="img-fluid" alt="Responsive image"/>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section>
          <div class="container" style="padding:7%">
            <div class="row">
              <div class="col-sm-12">
                <div class="text-center">
                  <h1>
                    Apa Kata Member Kami?
                  </h1>
                  <h4>
                    Tonton video dibawah ini hasil nyata member kami
                  </h4>
                </div>
              </div>
            </div>
          </div>
           <div class="container">
            <div class="row justify-content-center">
              <div class="col-sm-6 col-md-5 col-lg-6">
                 <div class="embed-responsive embed-responsive-16by9" style="margin:10px">
                  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/A3Ec9KKP0Sk" allowfullscreen></iframe>
                </div>
              </div>
              <div class="col-sm-6 col-md-5 col-lg-6">
                 <div class="embed-responsive embed-responsive-16by9" style="margin:10px">
                  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/ya227XLvTVU" allowfullscreen></iframe>
                </div>
              </div>
              <div class="col-sm-6 col-md-5 col-lg-6">
                 <div class="embed-responsive embed-responsive-16by9" style="margin:10px">
                  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/xFCbaz60vW0" allowfullscreen></iframe>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section style="background-image:url(https://masteronlinecommunity.com/wp-content/uploads/2020/08/MW-7-min-scaled.jpg); padding:25px">
          <div class="container">
            <div class="row">
              <div class="text-center">
                <h2 style="color:white; padding:3%;">
                  Bonus Extra Yang Akan Anda dapatkan saat bergabung Sekarang di Master Online Community
                </h2>
              </div>
            </div>
            <div class="row justify-content-center text-center">
              <div class="card-body col-sm-12 col-md-5 col-lg-3">
                <div class="card-body">
                  <img src="https://masteronlinecommunity.com/wp-content/uploads/2020/04/13.png" style="width:200px"/>
                </div>
              </div>
              <div class="card-body col-sm-12 col-md-5 col-lg-3">
                <div class="card-body">
                  <img src="https://masteronlinecommunity.com/wp-content/uploads/2020/04/14.png" style="width:200px"/>
                </div>
              </div>
              <div class="card-body col-sm-12 col-md-5 col-lg-3">
                <div class="card-body">
                  <img src="https://masteronlinecommunity.com/wp-content/uploads/2020/04/15.png" style="width:200px"/>
                </div>
              </div>
              <div class="card-body col-sm-6 col-md-5 col-lg-3">
                <div class="card-body">
                  <img src="https://masteronlinecommunity.com/wp-content/uploads/2020/04/16.png" style="width:200px"/>
                </div>
              </div>
              <div class="card-body col-sm-6 col-md-5 col-lg-3">
                <div class="card-body">
                  <img src="https://masteronlinecommunity.com/wp-content/uploads/2020/04/17.png" style="width:200px"/>
                </div>
              </div>
              <div class="card-body col-sm-6 col-md-5 col-lg-3">
                <div class="card-body">
                  <img src="https://masteronlinecommunity.com/wp-content/uploads/2020/04/18.png" style="width:200px"/>
                </div>
              </div>
              <div class="card-body col-sm-6 col-md-5 col-lg-3">
                <div class="card-body">
                  <img src="https://masteronlinecommunity.com/wp-content/uploads/2020/04/12.png" style="width:200px"/>
                </div>
              </div>
              <div class="card-body col-sm-6 col-md-5 col-lg-3">
                <div class="card-body">
                  <img src="https://masteronlinecommunity.com/wp-content/uploads/2020/04/11.png" style="width:200px"/>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section style="background-color:#EAF4FF">
          <div class="container" style="padding:3%">
            <div class="row" >
              <div class="col-sm-12">
                <div>
                  <h1 class="text-center">
                    YA SAYA MAU BERGABUNG SEKARANG DI MASTER ONLINE COMMUNITY BERAPA INVESTASINYA?
                  </h1>
                </div>
              </div>
            </div>
          </div>
          <div class="container" style="padding:3%">
            <div class="row justify-content-center" >
              <div class="col-sm-12">
                <div> 
                  <h2 class="text-center">
                    Harga Normal
                  </h2>
                  <h1 class="text-center">
                    <span style="text-decoration: line-through; color:red;">Rp 5.000.000</span>
                  </h1>
                   <h2 class="text-center">
                    Khusus Hari Ini Promo Menjadi
                  </h2>
                  <h1 class="text-center">
                    Rp 2.000.000
                  </h1>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section>
          <div class="col-sm-12 col-xl-12">
              <div class="card">
                 <div class="card-header">
                   <h1 class="text-center">FAQ</h1>
                 </div>
                 <div class="card-body">
                            <div class="default-according" id="accordion2">
                              <div class="card">
                                <div class="card-header bg-secondary" id="headingseven">
                                  <h5 class="mb-0">
                                    <button class="btn btn-link txt-white" data-toggle="collapse" data-target="#collapseseven" aria-expanded="true">Apakah Master Online Community Itu Multi Level Marketing?<span class="digits"></span></button>
                                  </h5>
                                </div>
                                <div class="collapse show" id="collapseseven" aria-labelledby="headingOne" data-parent="#accordion2">
                                  <div class="card-body">Bukan. Master Online Community adalah Platform Jualan Online Anti Perang Harga. Dimana kami adalah Supplier sekaligus Distributor Tunggal berbagai Brand Skincare dan Suplemen di Indonesia. Semua produk yang ada di Master Online Community sudah memiliki izin BPOM, Halal dan ISO jadi kamu ga perlu ragu untuk memasarkannya
                                    Produk Skincare kami juga sudah direview dan diawasi oleh Dokter Spesialis Kulit Aesthetic agar Customer juga mendapatkan produk berkualitas dan penggunaan yang tepat untuk hasil maksimal</div>
                                </div>
                                    <div class="card">
                                      <div class="card-header bg-secondary" id="headingeight">
                                        <h5 class="mb-0">
                                          <button class="btn btn-link collapsed txt-white" data-toggle="collapse" data-target="#collapseeight" aria-expanded="false" aria-controls="collapseeight">Siapa saja yang bisa bergabung di Master Online Community?<span class="digits"></span></button>
                                        </h5>
                                      </div>
                                      <div class="collapse" id="collapseeight" aria-labelledby="headingeight" data-parent="#accordion2">
                                        <div class="card-body">Semua Kalangan yang siap belajar dan membangun Bisnis Online nya bersama kami.</div>
                                      </div>
                                      <div class="card">
                                        <div class="card-header bg-secondary" id="headingnine">
                                          <h5 class="mb-0">
                                            <button class="btn btn-link collapsed txt-white" data-toggle="collapse" data-target="#collapsenine" aria-expanded="false" aria-controls="collapsenine"> Bagaimana Proses Pembelajaran di Master Online Community ?<span class="digits"></span></button>
                                          </h5>
                                        </div>
                                        <div class="collapse" id="collapsenine" aria-labelledby="headingnine" data-parent="#accordion2">
                                          <div class="card-body">Setelah Anda bergabung, Anda akan mendapatkan Akses Website dan Video Pembelajaran yang bisa Anda langsung Praktekkan.
                                           Anda juga akan mendapatkan grup diskusi khusus melalui Facebook, Telegram dan Grup Whatsapp serta akses Bimbingan kepada Mentor Praktisi kami yang sudah terbukti menghasilkan dan banjir orderan dari jualan online.</div>
                                            </div>
                                            <div class="card">
                                              <div class="card-header bg-secondary" id="heading1">
                                                <h5 class="mb-0">
                                                  <button class="btn btn-link collapsed txt-white" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1">Apakah ada jaminan saya bisa sukses menerapkan ilmu nya?<span class="digits"></span></button>
                                                </h5>
                                              </div>
                                              <div class="collapse" id="collapse1" aria-labelledby="heading1" data-parent="#accordion2">
                                                <div class="card-body">Tentu.. Jika Anda konsisten menerapkan sudah PASTI hasil akan mengikuti. Betul?</div>
                                              </div>
                                              <div class="card">
                                                <div class="card-header bg-secondary" id="heading3">
                                                  <h5 class="mb-0">
                                                    <button class="btn btn-link collapsed txt-white" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">Apa Kelebihan Master Online Community dibandingkan Platform Bisnis Online lain nya?<span class="digits"></span></button>
                                                  </h5>
                                                </div>
                                                <div class="collapse" id="collapse3" aria-labelledby="heading3" data-parent="#accordion2">
                                                  <div class="card-body">Kami percaya jika Bisnis Online yang benar itu harus memiliki 3 Fondasi yaitu :
                                                    Produk Unik Bebas Perang Harga, Simulasi dan Strategi Digital Marketing kekinian dan Dibimbing oleh Mentor Praktisi jika ingin lebih cepat berhasil.
                                                    Terbukti banyak sekali member Master Online Community yang dari awalnya Gaptek, ga ngerti cara jualan bisa berhasil karna memiliki ketiga fondasi ini.
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
        </section>
        <section style="background-color:#222; padding:3%;">
          <div class="container">
            <div class="row">
              <div class="col-sm-12">
                <div class="text-center" id="order">
                  <button type="button" class="btn btn-danger btn-lg" ><a onclick="salespage()" class="text-white">DAFTARKAN PROMO SAYA SEKARANG</a></button>
                </div>
              </div>
              <div style="padding:2%">
                <h5 class="text-center" style="color:#fff" >
                  Master Online Community adalah Komunitas Bisnis Online di Indonesia yang membantu Calon Online Marketer memaksimalkan Bisnis Online mereka di Master Online Community
                </h5>
              </div>
            </div>
          </div>
          <div class="container container-fluid" style="background-color:red; padding:3%;">
            <div class="row justify-content-center">
              <h4 style="color:#fff;">
                DISCLAIMER
              </h4>
              <h6 style="color:white; text-align:center; margin:10px">
                Semua keberhasilan, testimonial, bonus dan contoh lain yang digunakan adalah murni hasil yang dijalani member Master Online Community, dan bukan jaminan bahwa Anda atau orang lain akan mencapai hasil yang sama, tidak ada kaitannya dengan kerja sama atau hal tentang keuntungan lain yang berhubungan dengan Instagram® dan Facebook®. Hasil yang didapatkan tergantung kepada individu masing masing dalam, pengalaman, tingkat motivasi, ketekunan dalam menerapkan bisnis di Master Online Community dan faktor lainnya.  
              </h6>
            </div>
          </div>
        </section>
        <script>
    function salespage() {
        var url_string = window.location.href;
    var url = new URL(url_string);
    var id = url.searchParams.get("id");
    var code = url.searchParams.get("kode");

    window.location.replace("https://mocmembership.com/order-sponsor/"+id+"/"+code)
    }
</script>
                               
    @endsection
