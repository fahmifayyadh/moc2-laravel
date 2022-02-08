@extends('layouts.master')
@section('head')
    <style>
    #berr p img{
        width: 100%;
      }
      .card .card-body {
          background-color:#c3c3c3;
          padding:20px;
      }
    </style>
@endsection
@section('content')
<div class="page-body">
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                @if (auth()->user()->role == 'member')
                <div class="col-md-12">
                    <div class="container">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    @include('tests.dashboard.caro')

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @if (auth()->user()->role == 'member')
                <div class="col-md-12">
                  <div class="container">
                      <div class="col-sm-12">
                          <div class="card">
                              <div class="card-body">
                                @include('tests.dashboard.berita')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
                <div class="col-12">
                    <!-- Container-fluid starts-->
                    <div class="container">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="invoice">
                                        <div style="padding-left: px;">
                                            <div>
                                                <div>
                                                    @if (auth()->user()->role == 'member')


                                                    @php
                                                    $paket = 0;
                                                    $sp='';
                                                    $paket = $us->transactions_count+$us->transactions_course_count+$us->dummy_count; 
                                         
                                                    if($paket >= 100000){
                                                    $sp = 'Master Entrepreneur';
                                                    }elseif($paket >= 10000){
                                                    $sp = 'Entrepreneur';
                                                    }elseif($paket >= 1000){
                                                    $sp = 'Expert';
                                                    }elseif($paket >= 500){
                                                    $sp = 'Master Seller';
                                                    }elseif($paket >= 100){
                                                    $sp = 'Star Seller';
                                                    }elseif($paket >= 10){
                                                    $sp = 'Top Seller';
                                                    }else{
                                                    $sp = 'Reseller';
                                                    }
                                                    $ts = App\User::where('sponsor',auth()->user()->email)->count();
                                                    $rm = '';
                                                    if($ts >= 100000){
                                                    $rm = 'Director';
                                                    }elseif($ts >= 10000){
                                                    $rm = 'Mentor';
                                                    }elseif($ts >= 1000){
                                                    $rm = 'Diamond';
                                                    }elseif($ts >= 500){
                                                    $rm = 'Gold';
                                                    }elseif($ts >= 100){
                                                    $rm = 'Silver';
                                                    }elseif($ts >= 10){
                                                    $rm = 'Bronze';
                                                    }else{
                                                    $rm = 'Affiliate';
                                                    }
                                                    @endphp
                                                    @endif
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="media">
                                                                <div class="media-left"> </div>
                                                                <div class="media-body m-l-20">
                                                                    <h4 style="display: inline" class="media-heading">
                                                                        Dashboard</h4>
                                                                    @if (auth()->user()->role == 'member')
                                                                    <span
                                                                        class="badge badge-primary ml-2">{{$sp}}</span><span
                                                                        class="badge badge-success">{{$rm}}</span>
                                                                    <p><i>Tanggal daftar:
                                                                            {{auth()->user()->created_at->format('d-M-Y')}},
                                                                            Masa Aktif User:
                                                                            {{auth()->user()->batas == null ? 'Life Time' : Carbon\Carbon::parse(auth()->user()->batas)->format('d-M-Y')}}</i>
                                                                    </p>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <!-- End Info-->
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="text-md-right">
                                                                <br>
                                                                <br>
                                                                <div class="dropdown-basic">
                                                                    <div class="row justify-content-end">
                                                                        <div style="padding-left: 10px;">
                                                                            <!-- <button class="btn btn-info btn-lg" type="button">Tambah Course</button> -->
                                                                        </div>
                                                                        <!-- <button class="btn btn-pill btn-info btn-sm" type="button" data-original-title="btn btn-pill btn-info btn-sm" title="">Tambah Course</button> -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Title-->
                                                    </div>


                                                </div>
                                            </div>
                                            <hr>
                                            <div class="container-fluid">
                                                

                                                <div class="row">
                                                    <div class="col-sm-12 col-xl-12 col-lg-12">
                                                        <div class="card o-hidden">
                                                            <div class="bg-dark b-r-4 card-body">
                                                                <div class="media static-top-widget">
                                                                    <div class="align-self-center text-center"><i
                                                                            data-feather="user-plus"></i></div>
                                                                    <div class="media-body"><span
                                                                            class="m-0">{{auth()->user()->role == 'admin' ? 'Saldo' : 'Komisi'}}</span>
                                                                        <h4 class="mb-0 counter">
                                                                            {{number_format($saldo,0,'.','.')}}</h4><i
                                                                            class="icon-bg"
                                                                            data-feather="user-plus"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <br>
                                            <div class="header">
                                                <h5> Data Hari Ini</h5>
                                            </div>
                                        </div>
                                        <br>
                                        <!-- Container-fluid starts-->
                                    </div>
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-sm-6 col-xl-4 col-lg-6">
                                                <div class="card o-hidden">
                                                    <div class="bg-dark b-r-4 card-body">
                                                        <div class="media static-top-widget">
                                                            <div class="align-self-center text-center"><i
                                                                    data-feather="database"></i></div>
                                                            <div class="media-body"><span
                                                                    class="m-0">{{auth()->user()->role == 'admin' ? 'Transaksi' : 'point'}}</span>
                                                                <h4 class="mb-0 counter">
                                                                    {{number_format($leadnow,0,'.','.')}}</h4><i
                                                                    class="icon-bg" data-feather="database"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-xl-3 col-lg-6">
                                                <div class="card o-hidden">
                                                    <div class="bg-warning b-r-4 card-body">
                                                        <div class="media static-top-widget">
                                                            <div class="align-self-center text-center"><i
                                                                    data-feather="shopping-bag"></i></div>
                                                            <div class="media-body"><span
                                                                    class="m-0">{{auth()->user()->role == 'admin' ? 'Pengguna' : ' Invitation'}}</span>
                                                                <h4 class="mb-0 counter">
                                                                    {{number_format($salesnow,0,'.','.')}}</h4><i
                                                                    class="icon-bg" data-feather="shopping-bag"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-xl-5 col-lg-6">
                                                <div class="card o-hidden">
                                                    <div class="bg-dark b-r-4 card-body">
                                                        <div class="media static-top-widget">
                                                            <div class="align-self-center text-center"><i
                                                                    data-feather="message-circle"></i></div>
                                                            <div class="media-body"><span
                                                                    class="m-0">{{auth()->user()->role == 'admin' ? 'omset' : 'Product Sale'}}</span>
                                                                <h4 class="mb-0 counter">
                                                                    {{number_format($omsetnow,0,'.','.')}}</h4><i
                                                                    class="icon-bg" data-feather="message-circle"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <brr>
                                        <div class="header">
                                            <h5> Data Bulan Ini</h5>
                                        </div>
                                        <br>
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-sm-6 col-xl-4 col-lg-6">
                                                    <div class="card o-hidden">
                                                        <div class="bg-dark b-r-4 card-body">
                                                            <div class="media static-top-widget">
                                                                <div class="align-self-center text-center"><i
                                                                        data-feather="database"></i></div>
                                                                <div class="media-body"><span
                                                                        class="m-0">{{auth()->user()->role == 'admin' ? 'Transaksi' : 'point'}}</span>
                                                                    <h4 class="mb-0 counter">
                                                                        {{number_format($leadbulan,0,'.','.')}}</h4><i
                                                                        class="icon-bg" data-feather="database"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-xl-3 col-lg-6">
                                                    <div class="card o-hidden">
                                                        <div class="bg-warning b-r-4 card-body">
                                                            <div class="media static-top-widget">
                                                                <div class="align-self-center text-center"><i
                                                                        data-feather="shopping-bag"></i></div>
                                                                <div class="media-body"><span
                                                                        class="m-0">{{auth()->user()->role == 'admin' ? 'Pengguna' : ' Invitation'}}</span>
                                                                    <h4 class="mb-0 counter">
                                                                        {{number_format($salesbulan,0,'.','.')}}</h4><i
                                                                        class="icon-bg" data-feather="shopping-bag"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-xl-5 col-lg-6">
                                                    <div class="card o-hidden">
                                                        <div class="bg-dark b-r-4 card-body">
                                                            <div class="media static-top-widget">
                                                                <div class="align-self-center text-center"><i
                                                                        data-feather="message-circle"></i></div>
                                                                <div class="media-body"><span
                                                                        class="m-0">{{auth()->user()->role == 'admin' ? 'omset' : 'Product Sale'}}</span>
                                                                    <h4 class="mb-0 counter">
                                                                        {{number_format($omsetbulan,0,'.','.')}}</h4><i
                                                                        class="icon-bg"
                                                                        data-feather="message-circle"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <brr>
                                            <div class="header">
                                                <h5> Data Semua</h5>
                                                <br>
                                            </div>
                                            <br>
                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div class="col-sm-6 col-xl-4 col-lg-6">
                                                        <div class="card o-hidden">
                                                            <div class="bg-dark b-r-4 card-body">
                                                                <div class="media static-top-widget">
                                                                    <div class="align-self-center text-center"><i
                                                                            data-feather="database"></i></div>
                                                                    <div class="media-body"><span
                                                                            class="m-0">{{auth()->user()->role == 'admin' ? 'Transaksi' : 'point'}}</span>
                                                                        <h4 class="mb-0 counter">
                                                                            {{number_format($lead,0,'.','.')}}</h4><i
                                                                            class="icon-bg" data-feather="database"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-xl-3 col-lg-6">
                                                        <div class="card o-hidden">
                                                            <div class="bg-warning b-r-4 card-body">
                                                                <div class="media static-top-widget">
                                                                    <div class="align-self-center text-center"><i
                                                                            data-feather="shopping-bag"></i></div>
                                                                    <div class="media-body"><span
                                                                            class="m-0">{{auth()->user()->role == 'admin' ? 'Pengguna' : ' Invitation'}}</span>
                                                                        <h4 class="mb-0 counter">
                                                                            {{number_format($sales,0,'.','.')}}</h4><i
                                                                            class="icon-bg"
                                                                            data-feather="shopping-bag"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-xl-5 col-lg-6">
                                                        <div class="card o-hidden">
                                                            <div class="bg-dark b-r-4 card-body">
                                                                <div class="media static-top-widget">
                                                                    <div class="align-self-center text-center"><i
                                                                            data-feather="message-circle"></i></div>
                                                                    <div class="media-body"><span
                                                                            class="m-0">{{auth()->user()->role == 'admin' ? 'omset' : 'Product Sale'}}</span>
                                                                        <h4 class="mb-0 counter">
                                                                            {{number_format($omset,0,'.','.')}}</h4><i
                                                                            class="icon-bg"
                                                                            data-feather="message-circle"></i>
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