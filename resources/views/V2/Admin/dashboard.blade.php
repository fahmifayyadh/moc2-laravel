@extends('V2.layouts.master')
  <style>
    .judul p {
      color: #FF9F1C;
      font-weight: 700;
      font-size: 15px;
      padding: 10px 0px 0px 10px;
      font-family: 'Rubik', sans-serif;
    }

    .jumlah h4 {
      color: #FF9F1C;
      font-size: 40px;
      font-weight: 600;
      font-family: 'Rubik', sans-serif;
      padding: none;
      margin-top: -10px;
    }

    .jumlah {
      text-align: center;
    }

    .titlee p {
      font-size: 25px;
      font-weight: bold;
      font-family: 'Rubik', sans-serif;
      margin-top: 35px;
      padding-top: 20px;
      color: black;
    }

    .titlee p span {
      color: #FF9F1C;
      font-family: 'Rubik', sans-serif;
      font-weight: bold;
    }

    .margin {
      margin-right: 140px;
    }


    @media only screen and (max-width: 780px) {
      .margin {
        margin-right: 5px;
      }

      .card {
        margin: 5px;
      }
    }

    @media only screen and (max-width: 1024px) {
      .margin {
        margin-right: 80px;
      }
    }
  </style>
@section('content')
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <a href="allproduct.html">
              <h4 style="color:white;font-family: 'Rubik', sans-serif; font-weight: bold;"><span
                  style="color: #FF9F1C; font-family: 'Rubik', sans-serif; font-weight: bold;"> | </span> DHASBOARD</h4>
            </a>

          </div>
          <hr style="background: #707070">


          <!-- ==================================================================================================================================== -->

          <!-- ===================================================================================== -->
          <div class="card mb-4  " style="border-radius: 20px;">
            <div class="card-body">
              <div class="section-body" style="background: white;">
                <!-- <h2 style="color: aliceblue;"> <span style="color: #FF9F1C;">|</span> Cards</h2> -->

                <div class="row">
                  <div class="col-12 col-md-12 col-lg-12">
                    <div class="card" style="background-color: #FF9F1C; border-radius: 20px;">
                      <div class="card-heade">
                        <h4
                          style="text-transform: uppercase;color: white; border: none; padding: 50px 15px 0px 20px; font-family: 'Rubik', sans-serif; font-weight: bold; ">
                          saldo</h4>
                      </div>
                      <div class="card-heade">
                        <h1
                          style="text-transform: uppercase; border:none; padding: 0px 50px 50px 20px;  color: white;  font-family: 'Rubik', sans-serif; font-weight: bold;">
                          {{number_format($saldo,0,'.','.')}}</h1>
                      </div>

                    </div>
                  </div>
                </div>
                
         
                <div class="titlee">
                  <p> <span>|</span> Data Hari ini</p>
                </div>
                <div class="row">
                  <div class="col-12 col-md-2 col-lg-2 margin">
                    <div class="card">
                      <div class="judul">
                        <p>Transaksi</p>
                      </div>
                      <div class="jumlah" style="text-align: center;">
                        <h4>{{number_format($leadnow,0,'.','.')}}</h4>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-2 col-lg-2 margin">
                    <div class="card">
                      <div class="judul">
                        <p>Pengguna</p>
                      </div>
                      <div class="jumlah">
                        <h4> {{number_format($salesnow,0,'.','.')}}</h4>
                      </div>
                    </div>
                  </div>

                  <div class="col-12 col-md-5 col-lg-5">
                    <div class="card">
                      <div class="judul">
                        <p>Omset</p>
                      </div>
                      <div class="jumlah">
                        <h4>{{number_format($omsetnow,0,'.','.')}}</h4>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="titlee">
                  <p> <span>|</span> Data Bulan ini</p>
                </div>
                <div class="row">
                  <div class="col-12 col-md-2 col-lg-2 margin">
                    <div class="card">
                      <div class="judul">
                        <p>Transaksi</p>
                      </div>
                      <div class="jumlah" style="text-align: center;">
                        <h4>{{number_format($leadbulan,0,'.','.')}}</h4>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-2 col-lg-2 margin">
                    <div class="card">
                      <div class="judul">
                        <p>Pengguna</p>
                      </div>
                      <div class="jumlah">
                        <h4>{{number_format($salesbulan,0,'.','.')}}</h4>
                      </div>
                    </div>
                  </div>

                  <div class="col-12 col-md-5 col-lg-5">
                    <div class="card">
                      <div class="judul">
                        <p>Omset</p>
                      </div>
                      <div class="jumlah">
                        <h4>{{number_format($omsetbulan,0,'.','.')}}</h4>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="titlee">
                  <p> <span>|</span> Data Semua </p>
                </div>
                <div class="row">
                  <div class="col-12 col-md-2 col-lg-2 margin">
                    <div class="card">
                      <div class="judul">
                        <p>Transaksi</p>
                      </div>
                      <div class="jumlah" style="text-align: center;">
                        <h4>{{number_format($lead,0,'.','.')}}</h4>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-2 col-lg-2 margin">
                    <div class="card">
                      <div class="judul">
                        <p>Pengguna</p>
                      </div>
                      <div class="jumlah">
                        <h4>{{number_format($sales,0,'.','.')}}</h4>
                      </div>
                    </div>
                  </div>

                  <div class="col-12 col-md-5 col-lg-5">
                    <div class="card">
                      <div class="judul">
                        <p>Omset</p>
                      </div>
                      <div class="jumlah">
                        <h4>{{number_format($omset,0,'.','.')}}</h4>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
@endsection
