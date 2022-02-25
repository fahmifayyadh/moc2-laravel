@extends('V2.layouts.master',['title' => 'Konfirmasi Komisi Masuk'])
@section('title','Komisi Course')

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

<!-- Container Fluid-->
                <div class="container-fluid" id="container-wrapper">
                    <div class="row">
                        <div class="col-7">
                            <!-- title KOMISI COURSE -->
                            <div class="d-sm-flex align-items-center justify-content-between">
                                <a href="allproduct.html">
                                    <p
                                        style="color:white;font-family: 'Rubik', sans-serif; font-weight: 600; font-size: 30px;">
                                        <span
                                            style="color: #FF9F1C; font-family: 'Rubik', sans-serif; font-weight: bold;">
                                            | </span>
                                        KOMISI COURSE <span style="font-weight: 100;"></span>
                                    </p>
                                </a>
                            </div>
                            <!-- title KOMISI COURSE-->
                        </div>
                        <div class="col-3">
                                <!-- <a href="">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </a> -->
                                   
                                    <input class="form-control" type="text" name="" placeholder="cari komisi">
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
                                        <a class="dropdown-item" href="#">Harga Terendah</a>
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
                                        <th>Tanggal Transaksi</th>
                                        <th>Total Komisi</th>
                                        <th>Status</th>

                                    </tr>
                                </thead>
                                
                                <tbody>
                                @foreach ($transactionCourse as $i => $t)
                                    <!-- loop data -->
                                    <tr class=" text-custome">
                                        <td>{{$i+1}}</td>
                                        <td>{{$t->user->name}}</td>
                                        <td>{{$t->paket->name}}</td>
                                        <td>Rp.{{$t->commission}}</td>
                                        <td>{{$t->created_at->format('d-m-Y')}}</td>
                                        @if (!is_null($t->komisi) && $t->komisi->status ==
                                                                    'selesai')
                                        <td><span class="badge badge-success mr-2 p-2">sudah bayar</span></td>
                                        @endif
                                        @if (is_null($t->komisi))
                                        <td><span class="badge badge-danger mr-2 p-2">menunggu pembayaran</span></td>
                                        @endif

                                    </tr>
                                  @endforeach
                                    <!-- loop data -->
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer bg-primary-card"></div>
                    </div>
                </div>
                <!---Container Fluid-->


@endsection
