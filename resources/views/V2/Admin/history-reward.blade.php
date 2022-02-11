@extends('V2.layouts.master')
<style>
    table {
      border-radius: 5px;
      background: black;
    }

    table thead .th-3 {
      border: none;
      background: #283246;
      font-family: 'Rubik', sans-serif;
      font-size: 25px;
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
      font-size: 25px;
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
      font-size: 25px;
      font-style: normal;
      font-weight: 400;
      text-align: center;
    }

    table tbody tr td {
      font-family: 'Roboto', sans-serif;
      font-size: 21px;
      font-style: normal;
      font-weight: 500;
      line-height: 21.61px;
      letter-spacing: 0em;
      text-align: left;
      color: #FF9F1C;
      text-align: center;

    }

    table tbody tr td .btn-5 {
      font-size: 17px;
      font-family: 'Rubik', sans-serif;
      font-weight: 500;
      background:  #73BB17;
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

    table tbody tr td .btn-7 {
      font-size: 17px;
      font-family: 'Rubik', sans-serif;
      font-weight: 500;
      background: #FF9F1C;

      color: #283246;
      padding: 2px 20px 2px 20px;
    }

    table tbody tr td .btn-8 {
      font-size: 17px;
      font-family: 'Rubik', sans-serif;
      font-weight: 500;
      background: #283246;

      color: #FF9F1C;
      padding: 2px 20px 2px 20px;
    }

    table tbody tr td .btn-8:hover {
      color: #F86D6D;
    }

    .modal-header .modal-title {
      font-family: 'Rubik', sans-serif;
      font-size: 17px;
      font-style: normal;
      font-weight: 500;
      line-height: 20px;
      letter-spacing: 0em;
      text-align: center;
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
                INFORMASI REWARD <span style="font-weight: 100;"></span>
              </p>
            </a>
          </div>

          <!-- Row -->
          <div class="row" style="margin: 0; padding: 0;">

            <div class="col-12 col-md-12 col-lg-12">
              <div class="container container-3">
          
                <!-- ---------tabel------------- -->
                <div class="cards">
                  <table class="table  table-dark  " style="background: 
                #252633;">
                    <thead>
                      <th class="th-1"> No</th>
                      <th class="th-3">Nama Pemilik</th>
                      <th class="th-3">Produk</th>
                      <th class="th-3">Harga Poin </th>
                      <th class="th-3">Kode Transaksi</th>
                      <th class="th-3">Tanggal</th>
                      <th class="th-2">Status</th>
                  
                    </thead>
                    <tbody style="border: none;">
                    @foreach ($tw as $i=>$t)
                      <tr>
                        <td>{{$i+1}} <span>.</span></td>
                        <td>{{$t->user->name}}</td>
                        <td>{{$t->judul}}</td>
                        <td>{{number_format($t->harga_point,0,'.','.')}}</td>
                        <td>{{Str::random(6)}}</td>
                        <td>{{$t->created_at->format('d-M-Y')}}</td>
                        <td><a href="" class="btn btn-5">Aktif</a></td>
                          
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