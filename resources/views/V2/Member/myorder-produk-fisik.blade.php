@extends('V2.layouts.master')
@section('title','My Order Fisik')
@section('css')
 <link href="{{asset('admin/css/custom.css')}}" rel="stylesheet">
@endsection
@section('content')
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
                                            MY ORDER (COURSE) <span style="font-weight: 100;"></span>
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
                                        <th>Nama Produk</th>
                                        <th>Kelompok Paket</th>
                                        <th>Kupon</th>
                                        <th>Point Pembeli</th>
                                        <th>Link Pembayaran</th>
                                        <th>Tanggal Beli</th>
                                        <th>Batas hari
                                            penggunaan video</th>
                                        <th>Harga</th>
                                        <th>Status</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- loop data -->
                                    <tr class=" text-custome">
                                        <td>1</td>
                                        <td>7 Days Private
                                            Premium Access </td>
                                        <td>E-course</td>
                                        <td>Not Use</td>
                                        <td>0</td>
                                        <td><a href="#" class="badge badge-primary p-2 mb-2">Pembayaran</a>
                                            <a href="#" class="badge badge-warning p-2">Uploud Bukti Bayar</a>
                                        </td>
                                        <td>29-07-2021</td>
                                        <td>Belum Bayar</td>
                                        <td>Rp 1.534.999</td>
                                        <td><span class="badge badge-pill badge-danger p-2">Expired</span></td>
                                        <td><button class="btn btn-success btn-sm text-light" data-toggle="modal" data-target="#exampleModal">Detail Order</button></td>
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