<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="{{asset('admin/img/logo/logo.png')}}" rel="icon">
  <title>RuangAdmin - Alerts</title>
  <link href="{{asset('admin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('admin/vendor/bootstrap/css/bootstrap.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('admin/css/ruang-admin.css')}}" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;600&display=swap" rel="stylesheet">
</head>
<body id="page-top">

  <style>
    .judul p {
      color: #FF9F1C;
      font-weight: 700;
      font-size: 15px;
      padding: 10px 0px 0px 10px;
      font-family: 'Rubik', sans-serif;
    }

    .jumlah h4 {
      color: #FF9F1C;
      font-size: 40px;
      font-weight: 600;
      font-family: 'Rubik', sans-serif;
      padding: none;
      margin-top: -10px;
    }

    .jumlah {
      text-align: center;
    }

    .titlee p {
      font-size: 25px;
      font-weight: bold;
      font-family: 'Rubik', sans-serif;
      margin-top: 35px;
      padding-top: 20px;
      color: black;
    }

    .titlee p span {
      color: #FF9F1C;
      font-family: 'Rubik', sans-serif;
      font-weight: bold;
    }

    .margin {
      margin-right: 140px;
    }


    @media only screen and (max-width: 780px) {
      .margin {
        margin-right: 5px;
      }

      .card {
        margin: 5px;
      }
    }

    @media only screen and (max-width: 1024px) {
      .margin {
        margin-right: 80px;
      }
    }
  </style>
  <div id="wrapper">
    <!-- Sidebar -->
    @include('layouts.sidebar')
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column" style="background:#1F2028;">
      <div id="content">
        <!-- TopBar -->
         @include('layouts.topbar')
        <!-- Topbar -->
        @yield('content')
        <!-- Footer -->
        <!-- Footer -->
        @include('layouts.footer')
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

</body>

</html>