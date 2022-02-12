@extends('layouts.master',['title' => 'Konfirmasi komisiFisik Masuk'])
@section('content')

<div class="page-body">
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-12">

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
                                        KOMISI FISIK<span style="font-weight: 100;"></span>
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
                                        <th>Kuantiti</th>
                                        <th>Poin</th>
                                        <th>Tanggal Transaksi</th>
                                        <th>Total Komisi Fisik</th>
                                        <th>Status</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- loop data -->
                                    <tr class=" text-custome">
                                        <td>1</td>
                                        <td>Danuar Riyaldi</td>
                                        <td>7 Days Private
                                            Premium Access</td>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>19-05-2021</td>
                                        <td>Rp.0</td>
                                        <td><span class="badge badge-danger mr-2 p-2">menunggu pembayaran</span></td>


                                    </tr>
                                    <tr class=" text-custome">
                                        <td>2</td>
                                        <td>Danuar Riyaldi</td>
                                        <td>7 Days Private
                                            Premium Access</td>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>19-05-2021</td>
                                        <td>Rp.0</td>
                                        <td><span class="badge badge-success mr-2 p-2">sudah bayar</span></td>


                                    </tr>
                                    <!-- loop data -->
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer bg-primary-card"></div>
                    </div>
                </div>
                <!---Container Fluid-->

@endsection

</div>
</div>
</div>
</div>