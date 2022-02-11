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
      font-size: 14px;
      font-style: normal;
      font-weight: 100;
      line-height: 17px;
      letter-spacing: 0em;
      text-align: left;
      color: rgb(182, 182, 182);
    }

    table thead .th-1 {
      background: #283246;
      border-radius: 5px 0px 0px 0px;
      border: none;
      font-family: 'Rubik', sans-serif;
      font-size: 14px;
      font-style: normal;
      font-weight: 100;
      color: rgb(182, 182, 182);
    }

    table thead .th-2 {
      text-align: center;
      border-radius: 0px 5px 0px 0px;
      border: none;
      color: rgb(182, 182, 182);
      background:
        #283246;
      font-family: 'Rubik', sans-serif;
      font-size: 14px;
      font-style: normal;
      font-weight: 100;
    }

    table tbody tr td {
      font-family: 'Roboto', sans-serif;
      font-size: 21px;
      font-style: normal;
      font-weight: 500;
      line-height: 25px;
      letter-spacing: 0em;
      text-align: left;
      color: #FF9F1C;

    }

    table tbody tr td img {
      width: 52px;
      height: 29px;
      left: 258px;
      top: 421px;
    }

    table tbody tr td .btn-4 {
      font-size: 10px;
      font-family: 'Rubik', sans-serif;
      font-weight: 500;
      background: #F4F4F4;
      color: rgb(0, 0, 0);
      padding: 2px 20px 2px 20px;
    }

    table tbody tr td .btn-5 {
      font-size: 10px;
      font-family: 'Rubik', sans-serif;
      font-weight: 500;
      background: #283246;
      color: #FF9F1C;
      padding: 2px 20px 2px 20px;

    }

    .container-3 .judul {
      font-family: 'Rubik', sans-serif;
      font-size: 30px;
      font-style: normal;
      font-weight: 400;
      line-height: 36px;
      letter-spacing: 0em;
      text-align: left;
      text-align: center;
      color: white;

    }

    .container-3 .judul a {

      float: right;
      margin-top: 3vh;
      text-align: right;
      width: 59.29px;
      height: 23.79px;
      left: 1285px;
      top: 302px;
      color: #FF9F1C;
      background: #283246;
      border-radius: 4px;
      font-family: 'Rubik', sans-serif;
      font-size: 9px;
      font-style: normal;
      font-weight: 500;
      line-height: 11px;
      letter-spacing: 0em;
      text-align: center;
      box-shadow: 0px 3px 4px 0px #00000040;

    }

    .container-3 .cards {
      box-shadow: 0px 3px 4px 0px #00000040;
    }

    table tbody tr td .btn-7 {
      font-size: 10px;
      font-family: 'Roboto', sans-serif;
      font-weight: 300;
      background: #F86D6D;

      color: rgb(255, 255, 255);
      padding: 2px 20px 2px 20px;
    }

    table tbody tr td .btn-8 {
      font-size: 10px;
      font-family: 'Roboto', sans-serif;
      font-weight: 300;
      background: #283246;

      color: rgb(255, 255, 255);
      padding: 2px 20px 2px 20px;
    }

    table tbody tr td .btn-8:hover {
      color: #F86D6D;
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
                KELOLA BANK <span style="font-weight: 100;"></span>
              </p>
            </a>
          </div>

          <!-- Row -->
          <div class="row" style="margin: 0; padding: 0;">

            <div class="col-12 col-md-12 col-lg-7">
              <div class="container container-3">
                <div class="judul">
                  <p>PAYMENT GATEWAY</p>
                </div>
                <!-- ---------tabel------------- -->
                <div class="cards">
                  <table class="table  table-dark  " style="background: 
                #252633;">
                    <thead>
                      <th class="th-1">No</th>
                      <th class="th-3">Nama Bank</th>
                      <th class="th-3">Logo Bank</th>
                      <th class="th-3">Nomor Rekening</th>
                      <th class="th-3">Nama Pemilik</th>
                      <th class="th-2">Action</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>BCA</td>
                        <td><img src="../img/downloada.png" alt=""></td>
                        <td>6303988888</td>
                        <td>Yosua</td>
                        <td style="text-align: center;">

                          <div class="modal fade" id="exampleModalToggle" aria-hidden="true"
                            aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered">
                              <div class="modal-content" style="border-radius: 20px; background: #F2F2F2;">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalToggleLabel">Modal Title</h5>
                                </div>
                                <div class="modal-body">
                                  <!-- form -->
                                  <form action="">
                                    <div class="mb-3">
                                      <input type="text" class="form-control" id="exampleFormControlInput1"
                                        style=" font-family: 'Roboto', sans-serif;font-size: 9px;color:black; font-weight: 700;"
                                        placeholder="">
                                    </div>
                                    <div class="mb-3">
                                      <input class="form-control form-control-sm" id="formFileSm" type="file">
                                    </div>
                                    <div class="mb-3">
                                      <input type="text" class="form-control" id="exampleFormControlInput1"
                                        style=" font-family: 'Roboto', sans-serif;font-size: 9px;color:black; font-weight: 700;"
                                        placeholder="">
                                    </div>
                                    <div class="mb-3">
                                      <input type="text" class="form-control" id="exampleFormControlInput1"
                                        style=" font-family: 'Roboto', sans-serif;font-size: 9px;color:black; font-weight: 700;"
                                        placeholder="">
                                    </div>

                                    <div class="buttonn" style="text-align: right;">
                                      <div class="col">
                                        <button type="submit" class="btn btn-7">Add</button>
                                        <button type="submit" class="btn btn-8">Lancel</button>
                                      </div>
                                    </div>
                                  </form>
                                  <!-- Form Ahir -->
                                </div>
                              </div>
                            </div>
                          </div>

                          <a class="btn btn-4" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Edit</a>
                          <a href="" type="submit" class="btn btn-5">Delete</a>
                        </td>
                      </tr>

                    </tbody>
                  </table>
                </div>

              </div>
            </div>
            <div class="col-12 col-md-8 col-lg-5">
              <div class="container container-3">
                <!-- ---------tabel------------- -->
                <div class="judul">
                  <p>PAYMENT GATEWAY <span>
                      <a href="" type="submit" class="btn btn-5">Add</a>
                    </span></p>

                </div>
                <div class="cards">
                  <table class="table  table-dark  " style="background: 
                #252633;">
                    <thead>
                      <th class="th-1">No</th>
                      <th class="th-3">Nama Bank</th>
                      <th class="th-2">Action</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>6303988888</td>
                        <td style="text-align: center;">

                          <div class="modal fade" id="exampleModalTogglee" aria-hidden="true"
                            aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered">
                              <div class="modal-content" style="border-radius: 20px; background: #F2F2F2;">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalToggleLabel">Modal Title</h5>
                                </div>
                                <div class="modal-body">
                                  <!-- form -->
                                  <form action="">
                                    <div class="mb-3">
                                      <input type="text" class="form-control" id="exampleFormControlInput1"
                                        style=" font-family: 'Roboto', sans-serif;font-size: 9px;color:black; font-weight: 700;"
                                        placeholder="">
                                    </div>
                                    <div class="buttonn" style="text-align: right;">
                                      <div class="col">
                                        <button type="submit" class="btn btn-7">Add</button>
                                        <button type="submit" class="btn btn-8">Lancel</button>
                                      </div>
                                    </div>
                                  </form>
                                  <!-- Form Ahir -->
                                </div>
                              </div>
                            </div>
                          </div>

                          <a class="btn btn-4" data-bs-toggle="modal" href="#exampleModalTogglee" data-target="" role="button">Edit</a>
                          <a href="" type="submit" class="btn btn-5">Delete</a>
                        </td>
                      </tr>

                    </tbody>
                  </table>
                </div>
                <!-- ---------tabel------------- -->
              </div>
            </div>
          </div>
          <!--Row-->

        </div>
      </div>
@endsection