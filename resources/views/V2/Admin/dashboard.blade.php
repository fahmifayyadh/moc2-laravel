@extends('layouts.master')

@section('content')
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
@endsection
<!-- Bookmark Ends-->

@section('footer')
<script>
    $(document).ready(function () {
        $('.carousel').carousel({
            interval: 4000
        });
        $('#berr *').css("width", "100%")
    });
</script>
@endsection