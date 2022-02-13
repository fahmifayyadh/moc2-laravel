@extends('V2.layouts.master')
@section('title','Buat Berita')
<style>
  .container-1{
    box-shadow: 0px 7px 11px rgba(0, 0, 0, 0.5);
    border-radius: 10px;
    width: 1046px;
  }
  .container-2 {
    background: #283246;
    height: 312.47px;

  }
  .container-3{
    background-color: #252633;
    height:  897.61px;
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
        BUAT BERITA <span style="font-weight: 100;"></span>
      </p>
    </a>
  </div>
  <!-- https://source.unsplash.com/random -->
  <div class="container">
    <div class="card-columns d-flex justify-content-center">
      <form action="">
        <div class="card" style="width: 18rem;">
          <div class="card-header" style="background-color: #283246">
           <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Batas Pengguna per User </label>
            <input type="number" class="form-control" id="exampleFormControlInput1"
            style=" font-family: 'Roboto', sans-serif;font-size: 10px;color:black;" placeholder="">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Batas Pengguna per User </label>
            <input type="number" class="form-control" id="exampleFormControlInput1"
            style=" font-family: 'Roboto', sans-serif;font-size: 10px;color:black;" placeholder="">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Batas Pengguna per User </label>
            <input type="number" class="form-control" id="exampleFormControlInput1"
            style=" font-family: 'Roboto', sans-serif;font-size: 10px;color:black;" placeholder="">
          </div>
        </div>
        <div class="card-body" style="background-color: #252633">
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Batas Pengguna per User </label>
            <input type="number" class="form-control" id="exampleFormControlInput1"
            style=" font-family: 'Roboto', sans-serif;font-size: 10px;color:black;" placeholder="">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Batas Pengguna per User </label>
            <input type="number" class="form-control" id="exampleFormControlInput1"
            style=" font-family: 'Roboto', sans-serif;font-size: 10px;color:black;" placeholder="">
          </div>
        <div class="buttonn" style="text-align: center;">
          <div class="col">
            <button type="submit" class="btn btn">Save</button>
          </div>
        </div>
        </div>
        </div>
      </form>
    </div>
  </div>
  <!-- ---------From Input------------- -->

</div>

@endsection