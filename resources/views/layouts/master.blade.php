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
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/fontawesome.css')}}">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/icofont.css')}}">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/themify.css')}}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/flag-icon.css')}}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/feather-icon.css')}}">
    <!-- Plugins css start-->
     <!-- SweetAlert2 -->
  <link rel="stylesheet" href="{{asset('/assets/bootstrap-4.min.css')}}">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/date-picker.css') }}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/style.css')}}">
    <link id="color" rel="stylesheet" href="{{asset('/assets/css/color-2.css')}}" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/responsive.css')}}">
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
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
      <!-- Page Header Start-->
      @if (Auth::check() && Request::segment(1) != 'order-sponsor')
      <div class="page-main-header" style="background-image: linear-gradient(to right, #e43f09, #e66200, #e87f05, #e8981a, #e7b032);">
        <div class="main-header-right row m-0">
          <form class="form-inline search-full" action="#" method="get">
            <div class="form-group w-100">
              <div class="Typeahead Typeahead--twitterUsers">
                <div class="u-posRelative">
                  <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text" placeholder="Search Cuba .." name="q" title="" autofocus>
                  <div class="spinner-border Typeahead-spinner" role="status"><span class="sr-only">Loading...</span></div><i class="close-search" data-feather="x"></i>
                </div>
                <div class="Typeahead-menu"></div>
              </div>
            </div>
          </form>
          <div class="main-header-left">
            <div class="logo-wrapper"><a href="/"><img style="width:100%" class="img-fluid" src="{{asset('/assets/Logo.png')}}" alt=""></a></div>
            <div class="toggle-sidebar"><i class="status_toggle middle" data-feather="grid" id="sidebar-toggle"> </i></div>
          </div>
          <div class="left-menu-header col horizontal-wrapper pl-0">

          </div>
         
          <div class="nav-right col-8 pull-right right-menu">
            <ul class="nav-menus">
              @auth
                  
                <li class="onhover-dropdown">
                  <div class="notification-box"><i data-feather="bell"></i><span class="badge badge-pill badge-secondary">{{$jumlah}}</span></div>
                  <ul class="notification-dropdown onhover-show-div">
                    <li class="bg-primary">
                      <h6 class="f-18 mb-0">Notitication</h6>
                    </li>
                    @foreach ($notif as $n)
                    <li>
                      <p class="mb-0"><i class="fa fa-circle-o mr-3 font-primary"> </i>{{$n->isi}}<span class="pull-right">{{$n->created_at->diffForHumans() }}</span></p>
                    </li>
                    
                    @endforeach
                    
                    <li><a class="btn btn-primary"  data-toggle="modal" data-target="#notif" href="#">Check all notification</a>
                    <!--a.f-15.f-w-500.txt-dark(href="#") Check all notification-->
                  </li>
                </ul>
              </li>
              @endauth
              <li class="maximize"><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>
              @if (Auth::check() && (auth()->user()->role == 'admin' || auth()->user()->role == 'member'))
              <li class="profile-nav onhover-dropdown p-0">
                <div class="media profile-media"><img style="width: 3em;height:2.7em;border-radius:50%;" src="{{auth()->user()->foto ? asset(Storage::url('/user/'.auth()->user()->foto)): asset('assets/images/user/5.jpg')}}">
                <div class="media-body"><span>{{auth()->user()->name}}</span>
                <p class="mb-0 font-roboto">{{auth()->user()->role}}<i class="middle fa fa-angle-down"></i></p>
                  </div>
                </div>
                <ul class="profile-dropdown onhover-show-div">
                  <li onclick="document.getElementById('logout-form').submit();"><i data-feather="log-in"> </i><span>Log Out</span></li>
                  @if (auth()->user()->status != 'pembeli')
                  <li><a href="{{route('user.edit')}}"><i data-feather="user"></i><span>Account</span></a></li>
                      
                  @endif
                </ul>
              </li>
              @endif
            </ul>
          </div>
          <script id="result-template" type="text/x-handlebars-template">
            <div class="ProfileCard u-cf">
            <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
            <div class="ProfileCard-details">
            <div class="ProfileCard-realName">nama</div>
            </div>
            </div>
          </script>
          <script id="empty-template" type="text/x-handlebars-template"><div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div></script>
        </div>
      </div>
            
        @endif

      <!-- Page Header Ends                              -->
      <!-- Page Body Start-->
      <div class="page-body-wrapper horizontal-menu" style="background:#1F2028;">
        <!-- Page Sidebar Start-->
        @if (Auth::check() && Request::segment(1) != 'order-sponsor')
            
        @include('layouts.sidebar')
        @endif
        <!-- Page Sidebar Ends-->
        @yield('content')
      
        @include('layouts.footer')
