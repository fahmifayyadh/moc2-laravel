<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="{{asset('admin/img/logo/logo.png')}}" rel="icon">
  <title>@yield('title', 'MOC Membership')</title>
  <link href="{{asset('admin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('admin/vendor/bootstrap/css/bootstrap.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('admin/css/ruang-admin.css')}}" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;600&display=swap" rel="stylesheet">
  @yield('css')
</head>
<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    @include('V2.layouts.sidebar')
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column" style="background:#1F2028;">
      <div id="content">
        <!-- TopBar -->
         @include('V2.layouts.topbar')
        <!-- Topbar -->
        @yield('content')
        <!-- Footer -->
        <!-- Footer -->
        @include('V2.layouts.footer')
        <!-- Footer -->

      </div>

    </div>
    <!---Container Fluid-->



    <!-- Scroll to top -->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <script src="{{asset('admin/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('admin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
    <script src=".{{asset('admin/js/ruang-admin.min.js')}}"></script>
    @yield('js')

</body>

</html>
