@extends('layouts.homepage')
@section('content')

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
              <img class="img-fluid" src="{{asset('/assets/images/logo/logo.png')}}" alt=""></a>
              <button class="navbar-toggler navabr_btn-set custom_nav" type="button" data-toggle="collapse" data-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation"><span>
              </button>
              <div class="navbar-collapse justify-content-end collapse hidenav" id="navbarDefault">
                <ul class="navbar-nav navbar_nav_modify" id="scroll-spy">
                  <li class="nav-item buy-btn"><a class="nav-link js-scroll" href="#" target="_blank">Daftar</a></li>
                  <li class="nav-item buy-btn"><a class="nav-link js-scroll" href="#" target="_blank">Masuk</a></li>
                </ul>
              </div>
            </nav>
          </header>
        </div>
        <div class="row">
          <div class="col-xl-5 col-md-8">
            <div class="content">
              <div>
                <h1 class="wow fadeIn">Master Online Community</h1>
                <h1 class="wow fadeIn"></h1>
                <hr>
                <h3 class="txt-secondary wow fadeIn">#1 Komunitas Bisnis Online di Indonesia</h3>
                <hr>
                <p class="mt-3 wow fadeIn">Jualan Online pasti untung, bebas perang harga dan dibimbing oleh master berpengalaman sampai bisa Hanya di Master Online Community</p>
                <div class="btn-grp mt-4"><a class="btn btn-pill btn-primary btn-air-primary btn-lg mr-3 wow pulse" href="index.html" target="_blank">
                  <img src="" alt="">Produk</a>
                  <a class="btn btn-pill btn-secondary btn-air-secondary btn-lg mr-3 wow pulse" href="index.html" target="_blank">
                    <img src="" alt="">E-Course</a>
                    <a class="btn btn-pill btn-success btn-air-success btn-lg wow pulse mr-3" href="http://laravel.pixelstrap.com/cuba/pages/landing" target="_blank">
                      <img src="" alt="">Membership</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <section class="section-space cuba-demo-section frameworks-section" id="frameworks">
          <div class="container">
            <div class="row">
              <div class="col-sm-12 wow pulse">
                <div class="cuba-demo-content mt50">
                  <div class="couting">
                    <h2>7</h2>
                  </div>
                  <p class="mb-0">Keuntungan Menjadi Agen Produk MOC</p>
                </div>
              </div>
              <div class="col-sm-12 framworks">
                <div class="tab-content mt-5" id="pills-tabContent">
                  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

                  {{-- <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab"> --}}
                  <div class="col-xl-12 col-md-12 box-col-12">
                    <div class="email-right-aside bookmark-tabcontent">
                      {{-- <div class="card email-body radius-left"> --}}
                        <div class="pl-0">
                          <div class="tab-content">
                            <div class="tab-pane fade active show" id="pills-created" role="tabpanel" aria-labelledby="pills-created-tab">
                              {{-- <div class="card mb-0"> --}}
                                {{-- <div class="card-body pb-0"> --}}
                                  <div class="details-bookmark text-center">
                                    <div class="row" id="bookmarkData">
                                      <div class="col-xl-3 col-md-4 xl-50">
                                        <div class="card card-with-border bookmark-card o-hidden">
                                          <div class="details-website"><img class="img-fluid" src="../assets/images/lightgallry/01.jpg" alt="">
                                            {{-- <div class="favourite-icon favourite_0" onclick="setFavourite(0)"><a href="#"><i class="fa fa-star"></i></a></div> --}}
                                            <div class="desciption-data">
                                              <div class="title-bookmark">
                                                <h6 class="title_0">1. Keuntungan yang Besar</h6>
                                                <div class="hover-block">
                                                  <ul>
                                                    <li>Anda akan mendapatkan harga produk jauh lebih murah dibandingkan Harga Konsumen dan Resellers</li>
                                                  </ul>
                                                </div>
                                                <div class="content-general">
                                                  <p class="desc_0"> is beautifully crafted, clean and modern designed admin theme with 6 different demos and light - dark versions.</p><span class="collection_0">General</span>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-xl-3 col-md-4 xl-50">
                                        <div class="card card-with-border bookmark-card o-hidden">
                                          <div class="details-website"><img class="img-fluid" src="../assets/images/lightgallry/02.jpg" alt="">
                                            {{-- <div class="favourite-icon favourite_1" onclick="setFavourite(1)"><a href="#"><i class="fa fa-star"></i></a></div> --}}
                                            <div class="desciption-data">
                                              <div class="title-bookmark">
                                                <h6 class="title_1">2. Passive Income Penjualan dari Member MOC</h6>
                                                <div class="hover-block">
                                                  <ul>
                                                    <li>Setiap member MOC di daerah/kota Anda bisa berbelanja dan membeli produk MOC lewat Anda</li>
                                                  </ul>
                                                </div>
                                                <div class="content-general">
                                                  <p class="desc_1">Universal is beautifully crafted, clean and modern designed admin theme</p><span class="collection_1">General</span>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-xl-3 col-md-4 xl-50">
                                        <div class="card card-with-border bookmark-card o-hidden">
                                          <div class="details-website"><img class="img-fluid" src="../assets/images/lightgallry/02.jpg" alt="">
                                            {{-- <div class="favourite-icon favourite_1" onclick="setFavourite(1)"><a href="#"><i class="fa fa-star"></i></a></div> --}}
                                            <div class="desciption-data">
                                              <div class="title-bookmark">
                                                <h6 class="title_1">2. Passive Income Penjualan dari Member MOC</h6>
                                                <div class="hover-block">
                                                  <ul>
                                                    <li>Setiap member MOC di daerah/kota Anda bisa berbelanja dan membeli produk MOC lewat Anda</li>
                                                  </ul>
                                                </div>
                                                <div class="content-general">
                                                  <p class="desc_1">Universal is beautifully crafted, clean and modern designed admin theme</p><span class="collection_1">General</span>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-xl-3 col-md-4 xl-50">
                                        <div class="card card-with-border bookmark-card o-hidden">
                                          <div class="details-website"><img class="img-fluid" src="../assets/images/lightgallry/02.jpg" alt="">
                                            {{-- <div class="favourite-icon favourite_1" onclick="setFavourite(1)"><a href="#"><i class="fa fa-star"></i></a></div> --}}
                                            <div class="desciption-data">
                                              <div class="title-bookmark">
                                                <h6 class="title_1">2. Passive Income Penjualan dari Member MOC</h6>
                                                <div class="hover-block">
                                                  <ul>
                                                    <li>Setiap member MOC di daerah/kota Anda bisa berbelanja dan membeli produk MOC lewat Anda</li>
                                                  </ul>
                                                </div>
                                                <div class="content-general">
                                                  <p class="desc_1">Universal is beautifully crafted, clean and modern designed admin theme</p><span class="collection_1">General</span>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-xl-3 col-md-4 xl-50">
                                        <div class="card card-with-border bookmark-card o-hidden">
                                          <div class="details-website"><img class="img-fluid" src="../assets/images/lightgallry/02.jpg" alt="">
                                            {{-- <div class="favourite-icon favourite_1" onclick="setFavourite(1)"><a href="#"><i class="fa fa-star"></i></a></div> --}}
                                            <div class="desciption-data">
                                              <div class="title-bookmark">
                                                <h6 class="title_1">2. Passive Income Penjualan dari Member MOC</h6>
                                                <div class="hover-block">
                                                  <ul>
                                                    <li>Setiap member MOC di daerah/kota Anda bisa berbelanja dan membeli produk MOC lewat Anda</li>
                                                  </ul>
                                                </div>
                                                <div class="content-general">
                                                  <p class="desc_1">Universal is beautifully crafted, clean and modern designed admin theme</p><span class="collection_1">General</span>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-xl-3 col-md-4 xl-50">
                                        <div class="card card-with-border bookmark-card o-hidden">
                                          <div class="details-website"><img class="img-fluid" src="../assets/images/lightgallry/02.jpg" alt="">
                                            {{-- <div class="favourite-icon favourite_1" onclick="setFavourite(1)"><a href="#"><i class="fa fa-star"></i></a></div> --}}
                                            <div class="desciption-data">
                                              <div class="title-bookmark">
                                                <h6 class="title_1">2. Passive Income Penjualan dari Member MOC</h6>
                                                <div class="hover-block">
                                                  <ul>
                                                    <li>Setiap member MOC di daerah/kota Anda bisa berbelanja dan membeli produk MOC lewat Anda</li>
                                                  </ul>
                                                </div>
                                                <div class="content-general">
                                                  <p class="desc_1">Universal is beautifully crafted, clean and modern designed admin theme</p><span class="collection_1">General</span>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-xl-3 col-md-4 xl-50">
                                        <div class="card card-with-border bookmark-card o-hidden">
                                          <div class="details-website"><img class="img-fluid" src="../assets/images/lightgallry/02.jpg" alt="">
                                            {{-- <div class="favourite-icon favourite_1" onclick="setFavourite(1)"><a href="#"><i class="fa fa-star"></i></a></div> --}}
                                            <div class="desciption-data">
                                              <div class="title-bookmark">
                                                <h6 class="title_1">2. Passive Income Penjualan dari Member MOC</h6>
                                                <div class="hover-block">
                                                  <ul>
                                                    <li>Setiap member MOC di daerah/kota Anda bisa berbelanja dan membeli produk MOC lewat Anda</li>
                                                  </ul>
                                                </div>
                                                <div class="content-general">
                                                  <p class="desc_1">Universal is beautifully crafted, clean and modern designed admin theme</p><span class="collection_1">General</span>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      {{-- </div> --}}
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
                    <section class="section-space cuba-demo-section" id="dashboards">
                      <div class="container">
                        <div class="row">
                          <div class="col-sm-12 wow pulse">
                            <div class="cuba-demo-content mt50">
                              <div class="card">
                                <div class="couting">
                                  <h1 class="mb-0">DAFTAR PRODUK MASTER ONLINE COMMUNITY</h1>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="container container-modify">
                        <div class="row dashboard">
                          <div class="col-lg-6 col-sm-6 wow fadeIn">
                            <div class="img-effect"><a href="index.html" target="_blank">
                              <img class="img-fluid cuba-img" src="https://masteronlinecommunity.com/wp-content/uploads/2020/09/ALL-1-min.png" alt="">
                              <div class="cuba_img_content">
                                <h4></h4>
                              </div>
                            </a>
                          </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 wow fadeIn">
                          <div class="img-effect"><a href="../theme/dashboard-02.html" target="_blank">
                            <img class="img-fluid cuba-img" src="https://masteronlinecommunity.com/wp-content/uploads/2020/09/ALL-4-min.png" alt="">
                            <div class="cuba_img_content">
                              <h4></h4>
                            </div></a></div>
                          </div>
                        </div>
                      </div>
                      <div class="container container-modify">
                        <div class="row dashboard">
                          <div class="col-lg-6 col-sm-6 wow fadeIn">
                            <div class="img-effect"><a href="../theme/dashboard-02.html" target="_blank">
                              <img class="img-fluid cuba-img" src="https://masteronlinecommunity.com/wp-content/uploads/2020/09/ALL-5-min-1.png" alt="">
                              <div class="cuba_img_content">
                                <h4></h4>
                              </div></a></div>
                            </div>
                          </div>
                        </div>
                      </section>

                      <section class="section-space cuba-demo-section" id="dashboards">
                        <div class="container">
                          <div class="row">
                            <div class="col-sm-12 wow pulse">
                              <div class="cuba-demo-content mt50">
                                {{-- <div class="card"> --}}
                                  <div class="couting">
                                    <h1 class="mb-0">Review Produk dari Dokter Spesialis dan Public Figure Indonesia</h1>
                                  </div>
                                {{-- </div> --}}
                                <br>
                                <div class="embed-responsive embed-responsive-16by9">
                                  <iframe class="embed-responsive-item" src="https:/www.youtube.com\/embed\/RtCBmxDP7X8\"></iframe>
                                </div>
                                <br>
                                <div class="embed-responsive embed-responsive-16by9">
                                  <iframe class="embed-responsive-item" src="https:/www.youtube.com\/embed\/RtCBmxDP7X8\"></iframe>
                                </div><br>
                                <div class="embed-responsive embed-responsive-16by9">
                                  <iframe class="embed-responsive-item" src="https:/www.youtube.com\/embed\/RtCBmxDP7X8\"></iframe>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </section>

                      <section class="section-space cuba-demo-section" id="dashboards">
                        <div class="container">
                          <div class="row">
                            <div class="col-sm-12 wow pulse">
                              <div class="cuba-demo-content mt50">
                                <div class="couting">
                                  <h2>Kisah Agen Master Online Community yang Sukses Kebanjiran Orderan</h2>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="container container-modify">
                          <div class="row dashboard">
                            <div class="col-lg-6 col-sm-6 wow fadeIn">
                              <div class="img-effect"><a href="index.html" target="_blank">
                                <img class="img-fluid cuba-img" src="https://masteronlinecommunity.com/wp-content/uploads/2020/09/ALL-1-min.png" alt="">
                                <div class="cuba_img_content">
                                  <h4></h4>
                                </div>
                              </a>
                            </div>
                          </div>
                          <div class="col-lg-6 col-sm-6 wow fadeIn">
                            <div class="img-effect"><a href="../theme/dashboard-02.html" target="_blank">
                              <img class="img-fluid cuba-img" src="https://masteronlinecommunity.com/wp-content/uploads/2020/09/ALL-4-min.png" alt="">
                              <div class="cuba_img_content">
                                <h4></h4>
                              </div></a></div>
                            </div>
                          </div>
                        </div>
                        <div class="container container-modify">
                          <div class="row dashboard">
                            <div class="col-lg-6 col-sm-6 wow fadeIn">
                              <div class="img-effect"><a href="../theme/dashboard-02.html" target="_blank">
                                <img class="img-fluid cuba-img" src="https://masteronlinecommunity.com/wp-content/uploads/2020/09/ALL-5-min-1.png" alt="">
                                <div class="cuba_img_content">
                                  <h4></h4>
                                </div></a></div>
                              </div>
                              <div class="col-lg-6 col-sm-6 wow fadeIn">
                                <div class="img-effect"><a href="../theme/dashboard-02.html" target="_blank">
                                  <img class="img-fluid cuba-img" src="https://masteronlinecommunity.com/wp-content/uploads/2020/09/ALL-4-min.png" alt="">
                                  <div class="cuba_img_content">
                                    <h4></h4>
                                  </div></a></div>
                                </div>  
                            </div>
                          </div>
                        </section>


                                          </div>

                                          @endsection
