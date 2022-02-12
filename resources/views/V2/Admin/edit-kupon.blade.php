@extends('V2.layouts.master')
@section('title','Edit Kupon')
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
    @media only screen and (max-width: 1200px) {
      .container-2{
        width: auto;
      }
    }
  </style>
@section('content')
 <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <a href="allproduct.html"  >
              <p style="color:white;font-family: 'Rubik', sans-serif; font-weight: 600; font-size: 30px;">
                <span style="color: #FF9F1C; font-family: 'Rubik', sans-serif; font-weight: bold;"> | </span>
                EDIT KUPON <span style="font-weight: 100;"></span>
              </p>
            </a>
          </div>
          <div class="container container-2">
            <!-- ---------From Input------------- -->
            <div class="row">
              <div class="col-12 col-md-6 col-lg-6">
                <form action="{{route('kupon.edit',$kupon->id)}}" method="POST" enctype="multipart/form-data">
                	@csrf
                	@method('put')
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Kode Kupon</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1"
                      style=" font-family: 'Roboto', sans-serif;font-size: 10px;color:black;" placeholder="kode kupon" name="kode" value="{{$kupon->kode}}">
                      @error('kode')
                      <small>{{$message}}</small>
                      @enderror
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Batas Pengguna per User </label>
                    <input type="number" class="form-control" id="exampleFormControlInput1"
                      style=" font-family: 'Roboto', sans-serif;font-size: 10px;color:black;" placeholder="batas penggunaan kupon" name="penggunaan" value="{{$kupon->penggunaan}}">
                       @error('penggunaan')
                      <small>{{$message}}</small>
                      @enderror
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Untuk Produk Fisik</label>
                    <select class="form-control" name="product" id="" style=" font-family: 'Roboto', sans-serif;font-size: 10px;color:black;">
                    	<option value="1" >Iya</option>
                    	<option value="0" {!! $kupon->product ? null : 'selected' !!}>Tidak</option>
                    </select>
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Untuk E-Course</label>
                    <select class="form-control" name="course" id=""  style=" font-family: 'Roboto', sans-serif;font-size: 10px;color:black;" style="color: tomato;">
                    	<option value="1">Iya</option>
                    	<option value="0" {!! $kupon->course ? null : 'selected' !!}>Tidak</option>
                    </select>
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nominal Potongan</label>
                    <input class="form-control" type="number" placeholder="Nominal" name="nominal" value="{{$kupon->nominal}}" style=" font-family: 'Roboto', sans-serif;font-size: 10px;color:black;" >
                    @error('nominal')
                    <small>{{$message}}</small>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Batas Penggunaan</label>
                    <input class="form-control" type="date" name="batas" value="{{$kupon->batas}}" style=" font-family: 'Roboto', sans-serif;font-size: 10px;color:black;" >
                    @error('kode')
                    <small>{{$message}}</small>
                    @enderror
                  </div>
                  <div class="buttonn" style="text-align: center;">
                    <div class="col">
                      <button type="submit" class="btn btn">Save</button>
                    </div>
                  </div>

                </form>
              </div>
            </div>
          </div>
          <!-- ---------From Input------------- -->
        </div>
      </div>

@endsection