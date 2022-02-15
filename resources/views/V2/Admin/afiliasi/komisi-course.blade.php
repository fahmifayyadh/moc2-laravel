@extends('V2.layouts.master')
@section('title', 'Komisi Course')
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

      color: #FF9F1C;
      text-align: center;
      align-items: center;
      justify-content: center;

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
      font-size: 14px;
      font-family: 'Rubik', sans-serif;
      font-weight: 500;
      background: #BD1616;
      height: 38px;
      width: 201px;
      /* float: none; */
      text-align: center;
      border-radius: 9px;
      /* padding: 2px 40px 2px 40px; */
      color: #ffffff;


    }

    table tbody tr td .btn-11 {
      font-size: 14px;
      font-family: 'Rubik', sans-serif;
      font-weight: 500;
      background: #4CBD16;
      border-radius: 9px;
      padding: 8px 20px 8px 20px;
      float:none;
      color: #ffffff;
    }
    table tbody tr td .btn-11:hover{
      color: black;
    }

    table tbody tr td .btn-5:hover {
      color: rgb(0, 0, 0);
    }

    table tbody tr td .btn-6 {
      font-size: 15px;
      font-family: 'Rubik', sans-serif;
      font-weight: 500;
      background: #fdfdfd;
      color: #252525;
      padding: 0vh 25px 0vh 25px;
      padding: 4px 20px 4px 20px;
 
      border-radius: 9px;
      float: none;

    }

    table tbody tr td .btn-7 {
      font-size: 15px;
      font-family: 'Rubik', sans-serif;
      font-weight: 500;
      background: #FF9F1C;
      margin-top: 1vh;
      color: #ffffff;
      padding: 0vh 25px 0vh 25px;
      border-radius: 5px;
      height: 26.434782028198242px;
      float: none;
      width: 90px;
      left: 1260px;
      top: 346px;
      border-radius: 9px;
      padding: 4px 20px 4px 20px;

    }

    table tbody tr td .btn-7:hover {
      color: rgb(0, 0, 0);
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
      background: #252633;
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
                KOMISI COURSE <span style="font-weight: 100;"></span>
              </p>
            </a>
          </div>

       
          <!-- Row -->
          <div class="row" style="margin: 0; padding: 0;">
            <!-- <div class="col-12" style="top: -3vh;">
              <div class="container-fluid container-3">
                <a href="" class="btn "> Filter <i class="fas fa-arrow-down"></i></a>
              </div>
            </div> -->

            <div class="col-12 col-md-12 col-lg-12">
              <div class="container-fluid container-3">


                <!-- ---------tabel------------- -->
                <div class="cards">
                  <table id="table_id" class="display table table-dark  " style="background: 
                #252633;">
                    <thead>
                      <th class="th-1"> No</th>
                      <th class="th-3">Nama Pembeli</th>
                      <th class="th-3">Nama Produk</th>
                      <th class="th-3">Kategori Afiliasi</th>
                      <th class="th-3">Sponsor</th>
                      <th class="th-3">Total Komisi</th>
                      <th class="th-3">Status</th>
                      <th class="th-2">Action</th>
                    </thead>
                    <tbody style="border: none;">
                       @foreach ($transactionCourse as $t=>$i) 
                      <tr>
                        <td>{{$t+1}}<span>.</span></td>
                        <td>{{$i->user->name}}</td>
                        <td>{{$i->paket->name}}</td>
                        <td>E-course</td>
                        <td>{{$i->user->sponsor ?? 'tidak ada'}}</td>
                        <td>Rp. {{$i->commission}}</td>
                        <td>
                         @if (is_null($i->komisi))
                         <span class="badge badge-pill badge-warning" style="color: white;font-size:12px">Belum Di Bayar</span>
                         @endif
                         @if (!is_null($i->komisi) && $i->komisi->status == 'menunggu')
                         <span class="badge badge-pill badge-success" style="color: white;font-size:12px">Suda Di Bayar</span>
                         @endif
                         @if (!is_null($i->komisi) && $i->komisi->status == 'batal')
                         <span class="badge badge-pill badge-danger" style="color: white;font-size:12px">Batal</span>
                         @endif
                         @if (!is_null($i->komisi) && $i->komisi->status == 'selesai')
                         <span class="badge badge-pill badge-primary" style="color: white;font-size:12px">Selesai</span>
                         @endif
                        </td>
                        <td>
                           <button type="button" class="btn btn-6" data-toggle="modal" data-target="#afiliasi-detail55{{$i->id}}">Detail</button>
                            @include('tests.afiliasi.komponenKomisi.detail')
                            @if (is_null($i->komisi))
                            <button class="btn btn-7" type="button" data-toggle="modal" data-target="#exampleModalCenter1{{$i->id}}">Bayar</button>
                            @include('tests.afiliasi.komponenKomisi.pembayaran')
                            <button class="btn btn-danger" type="button" data-toggle="modal" data-target="#exampleModalCenter3{{$i->id}}">Batal</button>
                            @include('tests.afiliasi.komponenKomisi.batal')
                            @endif
                        </td>
                      </tr>
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