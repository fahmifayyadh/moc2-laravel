@extends('V2.layouts.master',['title' => 'Status Transaksi E-Course'])
@section('css')
  <style>
    .card-header{
      background: #252633;
    }
    thead {
      background: #283246;
    }
  table tbody tr {
      background: #252633;
  }
  table tbody tr td {
      color: #FF9F1C;
  }
  .card-footer{
    background: #252633;
  }
  
  </style>
@endsection
@section('content')
<div class="page-body">
    <br>

    <!-- Container Fluid-->
                <div class="container-fluid" id="container-wrapper">
                    <div class="row">
                        <div class="col-7">
                            <!-- title KOMISI FISIK -->
                            <div class="d-sm-flex align-items-center justify-content-between">
                                <a href="allproduct.html">
                                    <p
                                        style="color:white;font-family: 'Rubik', sans-serif; font-weight: 600; font-size: 30px;">
                                        <span
                                            style="color: #FF9F1C; font-family: 'Rubik', sans-serif; font-weight: bold;">
                                            | </span>
                                        STATUS AFILIASI <span style="font-weight: 100;"></span>
                                    </p>
                                </a>
                            </div>
                            <!-- title KOMISI FISIK-->
                        </div>
                        <div class="col-3">
                            <div class="box">
                                <a href="">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </a>
                                <input type="text" name="" placeholder="cari komisi">
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="text-right">
                                <div class="dropdown">
                                    <button class="btn btn-primary text-custome bg-secondary-card border-0"
                                        type="button" id="dropdownMenuButton" data-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="fas fa-filter"></i>
                                        Filter</button>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">Terbaru</a>
                                        <a class="dropdown-item" href="#">Harga Tertinggi</a>
                                        <a class="dropdown-item" href="#">Harga Terendahg</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card bg-primary-card mb-5">
                        <div
                            class="card-header py-1 d-flex flex-row align-items-center justify-content-between bg-secondary-card">

                        </div>
                        <div class="table-responsive">
                            <table class="table table-borderless align-items-center table-flush">
                                <thead class="thead bg-secondary-card">
                                    <tr>
                                        <th>No.</th>
                                        <th>User</th>
                                        <th>Nama Produk</th>
                                        <th>Whatsapp</th>
                                        <th>Harga</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- loop data -->
                                    @foreach ($transaksi as $i=>$t)
                                    <tr class=" text-custome">
                                        <td>{{$i+1}}</td>
                                        <td>{{$t->user->name}}</td>
                                        <td>{{$t->paket->name}}</td>
                                        @if ($t->status != 'selesai')
                                        <td><img src="img/logo/whatsapp.png" alt=""></td>
                                        @endif
                                        <td>{{number_format($t->price-$t->discount,0,'.','.')}}</td>
                                        <td>{{$t->user->email}}</td>
                                        {{-- Detail modal --}}
                                      @include('tests.afiliasi.kompo.detail')
                                      @include('tests.transaksi.komponen.badgeCourse')
                                        <td><button class="btn btn-primary">Detail</button></td>
                                    </tr>
                                
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer bg-primary-card"></div>
                    </div>
                </div>
                <!---Container Fluid-->

</div>
@endsection
