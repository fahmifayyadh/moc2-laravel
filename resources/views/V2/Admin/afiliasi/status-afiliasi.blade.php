@extends('V2.layouts.master')
@section('title','List Status Afiliasi')
 <style>
    table {
      border-radius: 5px;
      background: black;
    }

    table thead .th-3 {
      border: none;
      background: #283246;
      font-family: 'Rubik', sans-serif;
      font-size: 23px;
      font-style: normal;
      font-weight: 400;
      text-align: center;
      color: rgb(182, 182, 182);
    }

    table thead .th-1 {
      background: #283246;
      border-radius: 5px 0px 0px 0px;
      border: none;
      font-family: 'Rubik', sans-serif;
      font-size: 23px;
      font-style: normal;
      font-weight: 400;
      color: rgb(182, 182, 182);
      text-align: center;

    }

    table thead .th-2 {
      text-align: center;
      border-radius: 0px 5px 0px 0px;
      border: none;
      color: rgb(182, 182, 182);
      background:
        #283246;
      font-family: 'Rubik', sans-serif;
      font-size: 23px;
      font-style: normal;
      font-weight: 400;
      text-align: center;
    }

    table tbody tr td {
      font-family: 'Roboto', sans-serif;
      font-size: 21px;
      font-style: normal;
      font-weight: 500;
      line-height: 23px;
      letter-spacing: 0em;
      text-align: left;
      color: #FF9F1C;
      text-align: center;

    }

    table tbody tr td .btn-5 {
      font-size: 15px;
      font-family: 'Rubik', sans-serif;
      font-weight: 500;
      background: #73BB17;
      color: #283246;
      padding: 2px 20px 2px 20px;

    }

    .container-3 .cards {
      box-shadow: 0px 3px 4px 0px #00000040;
    }

    table tbody tr td .btn-8:hover {
      color: #F86D6D;
    }

    form .gambar-1 img {
      width: 226px;
      height: 226px;
      left: 577px;
      top: 456px;
      margin: 3vh;
    }



    table tbody tr td .btn-8:hover {
      color: #F86D6D;
    }


    table tbody tr td .btn-5 {
      font-size: 15px;
      font-family: 'Rubik', sans-serif;
      font-weight: 500;
      background: #73BB17;
      color: #ffffff;
      padding: 0vh 30px 0vh 30px;
      border-radius: 9px;

    }
    table tbody tr td .btn-6 {
      font-size: 15px;
      font-family: 'Rubik', sans-serif;
      font-weight: 500;
      background: #fdfdfd;
      color: #252525;
      padding: 0vh 30px 0vh 30px;
      border-radius: 9px;

    }

    .modal-header .modal-title {
      font-family: 'Rubik', sans-serif;
      font-size: 17px;
      font-style: normal;
      font-weight: 500;
      line-height: 20px;
      letter-spacing: 0em;
      text-align: center;
      color: #1F2028;
    }

    .container-3 a {
      float: right;
      background:#252633;
      color: #FF9F1C;
      font-family: 'Roboto', sans-serif;
      font-size: 25px;
      font-style: normal;
      font-weight: 500;
      line-height: 29px;
      letter-spacing: 0em;
      text-align: left;
      box-shadow: 0px 3px 4px 0px #00000040;
      text-decoration: none;
    }

    .container-3 a:hover {
      color: #f8ac42;
      ;
    }
  </style>
@section('content')
<style>
  .d-sm-flex a {
    text-decoration: none;
  }
</style>
<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <a href="allproduct.html">
      <p
      style="color:white;font-family: 'Rubik', sans-serif; font-weight: 600; font-size: 30px;list-style: none;">
      <span style="color: #FF9F1C; font-family: 'Rubik', sans-serif; font-weight: bold;"> | </span>
      STATUS AFILIASI <span style="font-weight: 100;"></span>
    </p>
  </a>
</div>


<!-- Row -->
<div class="row" style="margin: 0; padding: 0;">
<!--   <div class="col-12" style="top: -3vh;">
    <div class="container-fluid container-3" >
      <a href="" class="btn "> Filter <i class="fas fa-arrow-down"></i></a>
    </div>
  </div> -->

  <div class="col-12 col-md-12 col-lg-12">
    <div class="container-fluid container-3">


      <!-- ---------tabel------------- -->
      <div class="cards">
        <table id="table_id" class="display table table-dark " style="background: 
        #252633;">
        <thead>
          <th class="th-1"> No</th>
          <th class="th-3">Nama</th>
          <th class="th-3">Produk</th>
          <th class="th-3">Total Poin</th>
          <th class="th-3">Tanggal</th>
          <th class="th-3">Status</th>
          <th class="th-3">Action</th>
        </thead>
        <tbody style="border: none;">
           @foreach ($agents as $i=>$a)
          <tr>
            <td>{{$i+1}}</td>
            <td>{{$a->user->name}}<span>.</span></td>
            <td>{{$a->paket->name}}</td>
            <td>{{$a->transaksi()->where('status','selesai')->sum('point_sponsor')}}</td>
            <td>{{$a->created_at->format('Y-m-d')}}</td>
            <td>
              <span class=" btn-5">Aktif</span></td>
            <td><button type="button" class="btn btn-6" data-toggle="modal" data-target="#afi0{{$a->id}}">Detail</button>
            </td>
          </tr>
          <div class="modal fade" id="afi0{{$a->id}}" tabindex="-1" role="dialog" aria-labelledby="afi0" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Detail Status</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                  <p>link yang digunakan : <a target="__blank" href="{{URL::to('/').'/order-sponsor/'.$a->user_id.'/'.$a->kode}}">{{URL::to('/').'/order-sponsor/'.$a->user_id.'/'.$a->kode}}</a></p> 
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </tbody>
      </table>
    </div>
    <!-- ---------tabel------------- -->
  </div>
</div>

</div>
<!--Row-->

</div>
@endsection