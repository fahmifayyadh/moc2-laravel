@extends('v2.layouts.master')
@section('content')
<div class="container-fluid" id="container-wrapper">
    <div class="row">
        <div class="col-7">
            <!-- title Leaderboard -->
            <div class="d-sm-flex align-items-center justify-content-between">
                <a href="allproduct.html">
                    <p
                        style="color:white;font-family: 'Rubik', sans-serif; font-weight: 600; font-size: 30px;">
                        <span
                            style="color: #FF9F1C; font-family: 'Rubik', sans-serif; font-weight: bold;">
                            | </span>
                        LEADERBOARD <span style="font-weight: 100;"></span>
                    </p>
                </a>
            </div>
            <!-- title Leaderboard-->
        </div>
        <div class="col-3">
            <div class="box">
                <a href="">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </a>
                <input type="text" name="" placeholder="cari barang">
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
                        <th>Nama</th>
                        <th>Rank</th>
                        <th>Jumlah Transaksi</th>

                    </tr>
                </thead>
                <tbody>
                    <tr class=" text-custome">
                        <td>1</td>
                        <td><img class="img-profile rounded-circle mr-3" src="../../img/boy.png"
                                style="max-width: 30px">Udin Wayang</td>
                        <td><span class="badge badge-danger mr-2">Master seller</span><span
                                class="badge badge-success">Bronze</span></td>
                        <td>940 transaksi</td>

                    </tr>
                    <tr class=" text-custome">
                        <td>2</td>
                        <td><img class="img-profile rounded-circle mr-3" src="../../img/boy.png"
                                style="max-width: 30px">Udin Wayang</td>
                        <td><span class="badge badge-danger mr-2">Master seller</span><span
                                class="badge badge-success">Bronze</span></td>
                        <td>940 transaksi</td>

                    </tr>
                    <tr class=" text-custome">
                        <td>3</td>
                        <td><img class="img-profile rounded-circle mr-3" src="../../img/boy.png"
                                style="max-width: 30px">Udin Wayang</td>
                        <td><span class="badge badge-danger mr-2">Master seller</span><span
                                class="badge badge-success">Bronze</span></td>
                        <td>940 transaksi</td>

                    </tr>
                    <tr class=" text-custome">
                        <td>4</td>
                        <td><img class="img-profile rounded-circle mr-3" src="../../img/boy.png"
                                style="max-width: 30px">Udin Wayang</td>
                        <td><span class="badge badge-danger mr-2">Master seller</span><span
                                class="badge badge-success">Bronze</span></td>
                        <td>940 transaksi</td>

                    </tr>
                    <tr class=" text-custome">
                        <td>5</td>
                        <td><img class="img-profile rounded-circle mr-3" src="../../img/boy.png"
                                style="max-width: 30px">Udin Wayang</td>
                        <td><span class="badge badge-danger mr-2">Master seller</span><span
                                class="badge badge-success">Bronze</span></td>
                        <td>940 transaksi</td>

                    </tr>
                </tbody>
            </table>
        </div>
        <div class="card-footer bg-primary-card"></div>
    </div>
</div>
@endsection
