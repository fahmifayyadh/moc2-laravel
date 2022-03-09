@extends('V2.layouts.master')
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
                        OMZET MEMBER  <span style="font-weight: 100;"></span>
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
                        <th>Omzet Bulan Ini</th>
                        <th>Total Omzet</th>
                        <th>Poin Bulan ini</th>
                        <th>Total Poin</th>

                    </tr>
                </thead>
                <tbody>
                    <!-- loop data -->
                    @foreach($data as $i=>$dt)
                    <tr class=" text-custome">
                        <td>{{$i+1}}</td>
                        <td>{{$dt->name}}</td>
                        <td>{{count($dt->transactionsMonthNow) > 0 ? (count($dt->transactionsCourseMonthNow) > 0 ?  
                            $dt->transactionsMonthNow[0]['sum_commission']+$dt->transactionsCourseMonthNow[0]['sum_commission'] 
                            : $dt->transactionsMonthNow[0]['sum_commission'] ):
                            (count($dt->transactionsCourseMonthNow) > 0 ? $dt->transactionsCourseMonthNow[0]['sum_commission'] : 
                            0) }}</td>
                        <td>{{count($dt->transactionsTotal) > 0 ? (count($dt->transactionsCourseTotal) > 0 ?  
                            $dt->transactionsTotal[0]['sum_commission']+$dt->transactionsCourseTotal[0]['sum_commission'] 
                            : $dt->transactionsTotal[0]['sum_commission'] ):
                            (count($dt->transactionsCourseTotal) > 0 ? $dt->transactionsCourseTotal[0]['sum_commission'] : 
                            0) }}</td>
                            <td>{{count($dt->transactionsMonthNow) > 0 ? (count($dt->transactionsCourseMonthNow) > 0 ?  
                            $dt->transactionsMonthNow[0]['point_sponsor']+$dt->transactionsCourseMonthNow[0]['point_sponsor'] 
                            : $dt->transactionsMonthNow[0]['point_sponsor'] ):
                            (count($dt->transactionsCourseMonthNow) > 0 ? $dt->transactionsCourseMonthNow[0]['point_sponsor'] : 
                            0) }}</td>
                        <td>{{count($dt->transactionsTotal) > 0 ? (count($dt->transactionsCourseTotal) > 0 ?  
                            $dt->transactionsTotal[0]['point_sponsor']+$dt->transactionsCourseTotal[0]['point_sponsor'] 
                            : $dt->transactionsTotal[0]['point_sponsor'] ):
                            (count($dt->transactionsCourseTotal) > 0 ? $dt->transactionsCourseTotal[0]['point_sponsor'] : 
                            0) }}</td>
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