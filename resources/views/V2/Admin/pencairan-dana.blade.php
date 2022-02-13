@extends('V2.layouts.master')
<style>
    .nav-item a {
      color: white;
      font-family: 'Rubik', sans-serif;
    }
  </style>
@section('content')

<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <a href="allproduct.html">
      <p style="color:white;font-family: 'Rubik', sans-serif; font-weight: 600; font-size: 30px;">
        <span style="color: #FF9F1C; font-family: 'Rubik', sans-serif; font-weight: bold;"> | </span>
        PENCAIRAN DANA <span style="font-weight: 100;"></span>
      </p>
    </a>

    <style>
      .container-2 {
        background: #283246;
        width: 800px;
        align-items: center;
        border-radius: 20px;
        margin-bottom: 10vh;
      }

      .row {
        padding: 50px 0px 0px 0px;
        justify-content: center;
      }

      form .mb-3 label {
        font-size: 9px;
        font-weight: 700;
        font-family: 'Roboto', sans-serif;
        color: #ffbd60;
      }

      .buttonn .col .btn {
        background: black;
        color: white;
        font-size: 16px;
        font-weight: 700;
        font-family: 'Roboto', sans-serif;
        padding: 0.7vh 6vh 0.7vh 6vh;
        margin-bottom: 5vh;
      }
      form .info {
        background: #A927F9; border-radius: 5px;
      }
      form .info p {
        font-size: 8px;padding: 5px; color: white; font-weight: 700; font-family: 'Roboto', sans-serif; 
      }
      @media only screen and (max-width: 1200px) {
        .container-2{
          width: auto;
        }
      }
    </style>

  </div>
  <div class="container container-2">
    <!-- ---------From Input------------- -->
    <div class="row">
      <div class="col-12 col-md-6 col-lg-6">
        <form id="formpay" action="{{route('pencairan.index')}}" method="post">
          @csrf
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text bg-warning" id="basic-addon1">Rp</span>
            </div>
            <input name="amount" type="number"  class="form-control" placeholder="Masukan Nominal" required="" aria-label="Username" aria-describedby="basic-addon1">
          </div>
          <div class="info">
            <p>Info! Untuk pengisian rekening penerima, akan lebih baik jika anda mengisi lebih dari
              1 rekening yang anda miliki untuk mempermudah kami melakukan pencairan dana</p>
          </div>
          <div class="mb-3">
            <label for="rek">Nama Bank:</label>
            <select name="bank" class="form-control">
              @foreach ($bank as $b)
              <option value="{{$b->code}}">{{$b->name}}</option>
              @endforeach
            </select>
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nomor Rekening</label>
            <input type="text" name="no_rekening" class="form-control" id="exampleFormControlInput1"
              style=" font-family: 'Roboto', sans-serif;font-size: 10px;color:black;" placeholder="Masukan Nomer Rekening">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">A.N No Rekening</label>
            <input type="text" name="name" class="form-control" id="exampleFormControlInput1"
              style=" font-family: 'Roboto', sans-serif;font-size: 10px;color:black;" style="color: tomato;"
              placeholder="Masukan Nama Pemilik Nomer Rekening">
          </div>


          <div class="buttonn" style="text-align: center;">
            <div class="col">
              <button class="btn btn" data-toggle="modal" data-target="#refbutt01" data-original-title="" title="">Kirim</button>

              <div class="modal fade" id="refbutt01" tabindex="-1" role="dialog" aria-labelledby="refbutt01" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Apakah anda yakin?</h5>
                      <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body">
                      <p>untuk pengiriman dana.</p>
                    </div>
                    <div class="modal-footer">
                      <button onclick="document.getElementById('formpay').submit();" class="btn btn-primary" type="button">Ya</button>
                      <button class="btn btn-secondary" type="button" data-dismiss="modal">Tidak</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </form>
      </div>
    </div>
  </div>

  <!-- ---------From Input------------- -->

@endsection