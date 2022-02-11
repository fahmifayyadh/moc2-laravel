<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="{{asset('img/logo/logo.png')}}" rel="icon">
    <title>RuangAdmin - Alerts</title>

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
</head>

<body id="page-top">
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav sidebar  accordion" id="accordionSidebar">

            <!-- <hr class="sidebar-divider my-0"> -->

            <li class="nav-item">
                <a class="nav-link" href="addproduct.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fab fa-fw fa-wpforms"></i>
                    <span>Forms</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable"
                    aria-expanded="true" aria-controls="collapseTable">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span>
                </a>
                <div id="collapseTable" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Tables</h6>
                        <a class="collapse-item" href="#">Simple Tables</a>
                        <a class="collapse-item" href="#">DataTables</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-fw fa-palette"></i>
                    <span>UI Colors</span>
                </a>
            </li>
            <hr class="sidebar-divider">
            <div class="sidebar-heading">
                Examples
            </div>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePage"
                    aria-expanded="true" aria-controls="collapsePage">
                    <i class="fas fa-fw fa-columns"></i>
                    <span>Pages</span>
                </a>
                <div id="collapsePage" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Example Pages</h6>
                        <a class="collapse-item" href="login.html">Login</a>
                        <a class="collapse-item" href="register.html">Register</a>
                        <a class="collapse-item" href="404.html">404 Page</a>
                        <a class="collapse-item" href="blank.html">Blank Page</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Charts</span>
                </a>
            </li>
            <hr class="sidebar-divider">
            <div class="version" id="version-ruangadmin"></div>
        </ul>
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
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="img-profile rounded-circle" src="../../img/boy.png"
                                    style="max-width: 60px; border: none;">
                                <span class="ml-2 d-none d-lg-inline small"
                                    style="color:#FF9F1C; font-family: 'Rubik', sans-serif;">Maman Ketoprak</span>
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
                    </ul>
                </nav>
                <!-- Topbar -->

                <div class="container-fluid" id="container-wrapper">
                    <!-- caraousel slide -->
                    <div id="carouselExampleIndicators" class="carousel slide mr-3" data-ride="carousel">
                        <ol class="carousel-indicators d-flex justify-content-end mr-5">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100 rounded" src="{{asset('assets\images\slider-auto-width\11.jpg')}}" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100 rounded" src="{{asset('assets\images\slider-auto-width\11.jpg')}}" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100 rounded" src="{{asset('assets\images\slider-auto-width\11.jpg')}}" alt="Third slide">
                            </div>
                        </div>
                        
                    </div>
                    <!-- caraousel slide -->
                    <!-- title berita -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-2 mt-4">
                        <a href="allproduct.html">
                            <p style="color:white;font-family: 'Rubik', sans-serif; font-weight: 600; font-size: 30px;">
                                <span style="color: #FF9F1C; font-family: 'Rubik', sans-serif; font-weight: bold;"> | </span>
                                BERITA PENTING <span style="font-weight: 100;"></span>
                            </p>
                        </a>
                    </div>
                    <!-- title berita-->
                    <!-- berita -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <!-- list berita -->
                                    <div class="row">
                                        <div class="col-3">
                                            <img src="img/item/index.svg" class="img-fluid" alt="Responsive image">
                                        </div>
                                        <div class="col-9 my-auto text-black">
                                            <p class="h4">Berita 1</p>
                                            <h3>
                                                <strong>
                                                    JUALAN ONLINE DAPAT EMAS GRATIS SEBANYAK BANYAKNYA!!
                                                </strong>
                                            </h3>
                                        </div>
                                    </div>
                                    <hr style="border-top: 1px dashed" class="">
                                    <div class="row">
                                        <div class="col-3">
                                            <img src="img/item/index.svg" class="img-fluid" alt="Responsive image">
                                        </div>
                                        <div class="col-9 my-auto text-black">
                                            <p class="h4">Berita 1</p>
                                            <h3>
                                                <strong>
                                                    JUALAN ONLINE DAPAT EMAS GRATIS SEBANYAK BANYAKNYA!!
                                                </strong>
                                            </h3>
                                        </div>
                                    </div>
                                    <hr style="border-top: 1px dashed" class="">
                                    <div class="row">
                                        <div class="col-3">
                                            <img src="img/item/index.svg" class="img-fluid" alt="Responsive image">
                                        </div>
                                        <div class="col-9 my-auto text-black">
                                            <p class="h4">Berita 1</p>
                                            <h3>
                                                <strong>
                                                    JUALAN ONLINE DAPAT EMAS GRATIS SEBANYAK BANYAKNYA!!
                                                </strong>
                                            </h3>
                                        </div>
                                    </div>
                                    <hr style="border-top: 1px dashed" class="">
                                    <!-- list berita -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- dashboard -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-2 mt-4">
                        <a href="allproduct.html">
                            <p>
                                <span style="color: #FF9F1C; font-family: 'Rubik', sans-serif; font-weight: bold;font-weight: 600; font-size: 30px;"> | </span>
                                <span style="color:white;font-family: 'Rubik', sans-serif; font-weight: 600; font-size: 30px;">DASHBOARD</span>  
                                <span class="badge bg-danger text-light">Reseller</span>
                                <span class="badge bg-success text-light">Danger</span>
                                <span style="font-weight: 100;"></span>
                            </p>
                            <p style="text-indent: 15px;" class="text-light">
                                Tanggal daftar : 31-Jan-2021, Masa Aktif User: Life Time
                            </p>
                        </a>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card bg-primary-card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="card bg-secondary-card">
                                                        <div class="card-body">
                                                            <p style="color:#FF9F1C;font-family: 'Rubik', sans-serif; font-weight: 600; font-size: 20px;">
                                                                <span style="color: #FF9F1C; font-family: 'Rubik', sans-serif; font-weight: bold;"> | </span>
                                                                KOMISI <span style="font-weight: 100;"></span>
                                                            </p>
                                                            <p class="text-center text-light h1">
                                                                0
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-9">
                                            <!-- data hari ini -->
                                            <div class="row">
                                                <div class="col-12">
                                                    <p style="color:white;font-family: 'Rubik', sans-serif; font-weight: 600; font-size: 20px;">
                                                        <span style="color: #FF9F1C; font-family: 'Rubik', sans-serif; font-weight: bold;"> | </span>
                                                        Data Hari Ini <span style="font-weight: 100;"></span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="card bg-secondary-card">
                                                        <div class="card-body ">
                                                            <p class="text-custome">
                                                                Point
                                                            </p>
                                                            <p class="text-center text-light h3">
                                                                70
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="card bg-secondary-card">
                                                        <div class="card-body ">
                                                            <p class="text-custome">
                                                                Invitation
                                                            </p>
                                                            <p class="text-center text-light h3">
                                                                0
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="card bg-secondary-card">
                                                        <div class="card-body ">
                                                            <p class="text-custome">
                                                                Omzet
                                                            </p>
                                                            <p class="text-center text-light h3">
                                                                0
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- data bulan ini -->
                                            <div class="row mt-2">
                                                <div class="col-12">
                                                    <p style="color:white;font-family: 'Rubik', sans-serif; font-weight: 600; font-size: 20px;">
                                                        <span style="color: #FF9F1C; font-family: 'Rubik', sans-serif; font-weight: bold;"> | </span>
                                                        Data Bulan Ini <span style="font-weight: 100;"></span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="card bg-secondary-card">
                                                        <div class="card-body ">
                                                            <p class="text-custome">
                                                                Point
                                                            </p>
                                                            <p class="text-center text-light h3">
                                                                70
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="card bg-secondary-card">
                                                        <div class="card-body ">
                                                            <p class="text-custome">
                                                                Invitation
                                                            </p>
                                                            <p class="text-center text-light h3">
                                                                0
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="card bg-secondary-card">
                                                        <div class="card-body ">
                                                            <p class="text-custome">
                                                                Omzet
                                                            </p>
                                                            <p class="text-center text-light h3">
                                                                0
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-5">
                                        <div class="col-3">
                                            <!-- total omzet -->
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="card bg-secondary-card">
                                                        <div class="card-body ">
                                                            <p style="color:#FF9F1C;font-family: 'Rubik', sans-serif; font-weight: 600; font-size: 20px;">
                                                                <span style="color: #FF9F1C; font-family: 'Rubik', sans-serif; font-weight: bold;"> | </span>
                                                                Total Omzet <span style="font-weight: 100;"></span>
                                                            </p>
                                                            <p class="text-center text-light h1">
                                                                0
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-9">
                                            <!-- data semua -->
                                            <div class="row">
                                                <div class="col-12">
                                                    <p style="color:white;font-family: 'Rubik', sans-serif; font-weight: 600; font-size: 20px;">
                                                        <span style="color: #FF9F1C; font-family: 'Rubik', sans-serif; font-weight: bold;"> | </span>
                                                        Data Semua <span style="font-weight: 100;"></span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="card bg-secondary-card">
                                                        <div class="card-body ">
                                                            <p class="text-custome">
                                                                Point
                                                            </p>
                                                            <p class="text-center text-light h3">
                                                                70
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="card bg-secondary-card">
                                                        <div class="card-body ">
                                                            <p class="text-custome">
                                                                Invitation
                                                            </p>
                                                            <p class="text-center text-light h3">
                                                                0
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="card bg-secondary-card">
                                                        <div class="card-body ">
                                                            <p class="text-custome">
                                                                Omzet
                                                            </p>
                                                            <p class="text-center text-light h3">
                                                                0
                                                            </p>
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


                <!-- modal -->
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary mt-5 ml-4 mb-4" data-toggle="modal" data-target="#exampleModal">
                    sample modal
                </button>
                
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Silahkan pilih</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body text-center">
                                <button type="button" class="btn button-custome text-light" data-dismiss="modal">Lihat Komisi Course</button>
                                <button type="button" class="btn button-custome text-light">Lihat Komisi Fisik</button>
                            </div>
                            
                        </div>
                    </div>
                </div>

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span> &copy;
                                <script> document.write(new Date().getFullYear()); </script>
                                <b><a href="#" target="_blank">Master Online Community</a></b>
                            </span>
                        </div>
                    </div>
                </footer>
                <!-- Footer -->

            </div>

        </div>
        <!---Container Fluid-->



        <!-- Scroll to top -->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>
        <script src="{{asset('js/ruang-admin.min.js')}}"></script>


</body>

</html>