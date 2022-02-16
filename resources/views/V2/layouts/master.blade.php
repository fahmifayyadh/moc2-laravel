<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="https://raw.githubusercontent.com/suainul1/dewisata/main/fav.png" type="image/x-icon">
  <link rel="shortcut icon" href="https://raw.githubusercontent.com/suainul1/dewisata/main/fav.png" type="image/x-icon">
  <title>@yield('title', 'MOC Membership')</title>
  <link href="{{asset('admin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('admin/vendor/bootstrap/css/bootstrap.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('admin/css/ruang-admin.css')}}" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('/assets/datatable/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('/assets/datatable/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/summernote.css')}}">
  @yield('css')
</head>
@yield('head')
@toastr_css
<body id="page-top">
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
    @include('V2.layouts.notif')
    @endauth
  <div id="wrapper" style="height: auto">
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
      </div>
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
    @yield('js')
    <script src="{{asset('admin/js/ruang-admin.min.js')}}"></script>
     <!-- Page level plugins -->
    <script src="{{asset('admin/vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('admin/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script>
      $(document).ready(function () {
        $('#dataTable').DataTable(); // ID From dataTable 
        $('#dataTableHover').DataTable(); // ID From dataTable with Hover
      });
    </script>

    <!-- Summernote -->
    <script src="{{asset('/assets/js/editor/summernote/summernote.js')}}"></script>
    <script src="{{asset('/assets/js/editor/summernote/summernote.custom.js')}}"></script>

    <script>
      // Open Close Sidebar 
      function openNav() {
        if (document.getElementById("accordionSidebar").style.display === "none") {
          document.getElementById("accordionSidebar").style.display = "block";
        } else {
          document.getElementById("accordionSidebar").style.display = "none";
        }
      }

      function closeNav() {
        document.getElementById("accordionSidebar").style.display = "none";
        document.getElementById("content").style.marginLeft= "0";
      }
      // End Open Close Sidebar

      // Fullscreen
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
      // End Fullscreen

      // Datatable
        $(document).ready( function () {
          $('#table_id').DataTable();
        });
      // End Datatable
   
      // Summernote
      $(document).ready(function() {
          $('#summernote').summernote();
      });
      // End Summernote
    </script>
   
</body>

</html>
