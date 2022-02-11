<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="adalah salah satu bisnis online terbesar se-Indonesia">
    <meta name="keywords" content="Master Online Comunity">
    <meta name="author" content="Master Online Comunity">
    <link rel="icon" href="https://raw.githubusercontent.com/suainul1/dewisata/main/fav.png" type="image/x-icon">
    <link rel="shortcut icon" href="https://raw.githubusercontent.com/suainul1/dewisata/main/fav.png" type="image/x-icon">
    <title>Master Online Community</title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
    <!-- Font Awesome-->
    <!-- <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/fontawesome.css')}}"> -->
    <!-- ico-font-->
    <!-- <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/icofont.css')}}"> -->
    <!-- Themify icon-->
    <!-- <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/themify.css')}}"> -->
    <!-- Flag icon-->
    <!-- <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/flag-icon.css')}}"> -->
    <!-- Feather icon-->
    <!-- <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/feather-icon.css')}}"> -->
    <!-- Plugins css start-->
     <!-- SweetAlert2 -->
  <!-- <link rel="stylesheet" href="{{asset('/assets/bootstrap-4.min.css')}}"> -->
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <!-- <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/bootstrap.css')}}"> -->
    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/date-picker.css') }}"> -->
    <!-- App css-->
    <!-- <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/style.css')}}"> -->
    <!-- <link id="color" rel="stylesheet" href="{{asset('/assets/css/color-2.css')}}" media="screen"> -->
    <!-- Responsive css-->
    <!-- <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/responsive.css')}}"> -->
     <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('vendor/bootstrap/css/bootstrap.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/ruang-admin.css" rel="stylesheet')}}">
    <link href="{{asset('css/custom.css')}}" rel="stylesheet">

    <!-- font rubik -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@200;500;700&display=swap" rel="stylesheet">

    <!-- font roboto -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;600;700&display=swap" rel="stylesheet">
@yield('head')
@toastr_css
<script>
  function reFunc(){
    window.location.href = "{{route('course.create')}}"
  }

  function reFunc1(){
    window.location.href = "{{route('produk.create')}}"
  }
</script>
    <!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '2188742774746509');
fbq('track', 'PageView');
fbq('track', 'ViewContent');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=2188742774746509&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
</head>
  <body>
    @jquery
    @toastr_js
    @toastr_render
    @auth
    @php
    $notif = new \App\Http\Controllers\NotifController;
    $all = $notif->all();
    $jumlah = $notif->status();         
    $notif = $notif->view();   
    @endphp
    @include('layouts.komponen.notif')
    @endauth
    <!-- tap on top starts-->
 <body id="page-top">
    <div id="wrapper">
        <!-- Sidebar -->
 @if (Auth::check() && Request::segment(1) != 'order-sponsor')
            
        @include('layouts.sidebar')
        @endif
        <!-- Sidebar -->
        <div id="content-wrapper" class="d-flex flex-column" style="background:#1F2028;">
            <div id="content">
                <!-- TopBar -->
                <nav class="navbar navbar-expand  bg-navbar topbar mb-4 static-top" style="background: 
        #353535; width: auto;">
                    <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
                        <i class="fa fa-bars" style="color: #FF9F1C;"></i>
                    </button>
                    <ul class="navbar-nav ml-auto">

                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                <i class="fas fa-shopping-cart" style="color:#FF9F1C;"></i>
                                <span class="badge badge-danger badge-counter"
                                    style="background-color:  #FF9F1C;">3+</span>
                            </a>
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div class="text-black">
                                        Revolotion Bright 100 ml
                                        <div class="small">Rp 125.000</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div class="text-black">
                                        Glowing Packages
                                        <div class="small">Rp 125.000</div>
                                    </div>
                                </a>
                                <div class="text-right p-3">
                                    <a class="btn button-custome text-center small text-light" href="#">Lihat keranjang</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                        
                                <i class="far fa-bell" style="color:#FF9F1C;"></i>
                                <span class="badge badge-danger badge-counter" style="background-color:  #FF9F1C;">3+</span>
                            </a>
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div class="text-black">
                                        <div class="small">Admin MOC</div>
                                        Selamat Bergabung dengan keluarga
                                        MOC Member
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div class="text-black">
                                        <div class="small">December 7, 2019</div>
                                        pembelian mengalami expired
                                    </div>
                                </a>
                                <div class="text-center p-3">
                                    <a class="btn button-custome text-center small text-light" href="#">Cek semua notifikasi</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-expand" style="color: #FF9F1C;"></i>
                                <span class="badge badge-warning badge-counter">2</span>
                            </a>
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="../img/man.png" style="max-width: 60px" alt="">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been
                                            having.</div>
                                        <div class="small text-gray-500">Udin Cilok · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="../img/girl.png" style="max-width: 60px"
                                            alt="">
                                        <div class="status-indicator bg-default"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people
                                            say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Jaenab · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>


                        <div class="topbar-divider d-none d-sm-block"></div>
                         @if (Auth::check() && (auth()->user()->role == 'admin' || auth()->user()->role == 'member'))
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="img-profile rounded-circle" src="../../img/boy.png"
                                    style="max-width: 60px; border: none;">
                                <span class="ml-2 d-none d-lg-inline small"
                                    style="color:#FF9F1C; font-family: 'Rubik', sans-serif;">{{auth()->user()->name}}</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>

                                <a class="dropdown-item" href="login.html">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                        @endif
                    </ul>
                </nav>
                <!-- Topbar -->

                

        @yield('content')
      
        @include('layouts.footer')
 </body>

</html>