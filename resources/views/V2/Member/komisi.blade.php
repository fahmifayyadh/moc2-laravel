@extends('V2.layouts.master')
@section('content')
<div class="page-body">
    <br>
                <div class="container-fluid" id="container-wrapper">
                    <div class="row">
                        <div class="col-7">
                            <!-- title KOMISI COURSE -->
                            <div class="d-sm-flex align-items-center justify-content-between">
                                <a href="#">
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
                                        <th>Tanggal Transaksi</th>
                                        <th>Total Komisi</th>
                                        <th>Status</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- loop data -->
                                    @foreach ($transactionCourse as $i => $t)
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
                                    <!-- <tr class=" text-custome">
                                        <td>2</td>
                                        <td>Danuar Riyaldi</td>
                                        <td>7 Days Private
                                            Premium Access</td>
                                        <td>Rp.0</td>
                                        <td>19-05-2021</td>
                                        <td><span class="badge badge-success mr-2 p-2">sudah bayar</span></td>
                                        

                                    </tr> -->
                                    <!-- loop data -->
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer bg-primary-card"></div>
                    </div>
                </div>

</div>
@endsection
