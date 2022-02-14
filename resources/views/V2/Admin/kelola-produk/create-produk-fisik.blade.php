@extends('V2.layouts.master')
@section('title','Create Produk')
@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/summernote.css')}}">
<style>
    .container-2 {
      background: #ffbd60;
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
@endsection
@section('js')
<script src="{{asset('/assets/js/editor/summernote/summernote.js')}}"></script>
<script src="{{asset('/assets/js/editor/summernote/summernote.custom.js')}}"></script>
<script>
  $(document).ready(function() {
      $('#summernote').summernote();
  });
  $(document).ready(function(){
    var addButton = $('.add_button'); //Add button selector
    var wrapper = $('.field_wrapper'); //Input field wrapper

    var fieldHTML = `<div class="row">
            <div class="col-md-6">
              <input class="form-control" type="text" placeholder="Nama varian" name="nameVarian[]" >
            </div>
            <div class="col-md-6">
              <input class="form-control" type="nunber" placeholder="Harga Varian" name="priceVarian[]" >
            </div>
            <a href="javascript:void(0);" class="remove_button btn btn-danger mt-3">Delete Varian</a>
          </div>`;
    var x = 1; //Initial field counter is 1
    
    //Once add button is clicked
    $(addButton).click(function(){
        //Check maximum number of input fields
            x++; //Increment field counter
            $(wrapper).append(fieldHTML); //Add field html
        
    });
    
    //Once remove button is clicked
    $(wrapper).on('click', '.remove_button', function(e){
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });
});
</script>
@endsection
@section('content')
 <div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <a href="allproduct.html"  >
        <p style="color:white;font-family: 'Rubik', sans-serif; font-weight: 600; font-size: 30px;">
          <span style="color: #FF9F1C; font-family: 'Rubik', sans-serif; font-weight: bold;"> | </span>
          CREATE PRODUK <span style="font-weight: 100;"></span>
        </p>
      </a>
    </div>
    <div class="container container-2">
      <!-- ---------From Input------------- -->
      <div class="row">
        <div class="col-12 col-md-6 col-lg-6">
        <form action="{{route('produk.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-1">
                <label for="exampleFormControlInput1" class="form-label">Nama Produk</label>
                <input type="text" placeholder="Nama Produk" data-original-title="" title="" name="name" class="form-control" id="exampleFormControlInput1"
                    style=" font-family: 'Rubik', sans-serif;font-size: 14px;color:black;">
            </div>
            <div class="mb-1">
                <label for="exampleFormControlInput1" class="form-label">Berat Produk</label>
                <input type="number" name="berat" placeholder="Berat, Satuan Gram" data-original-title="" title="" class="form-control" id="exampleFormControlInput1"
                style=" font-family: 'Rubik', sans-serif;font-size: 14px;color:black;">
            </div>

            <div class="mb-1">
                <label for="exampleFormControlInput1" class="form-label">Panjang (cm)</label>
                <input type="number" name="length" placeholder="panjang, satuan cm, Opsional" data-original-title="" title="" class="form-control" id="exampleFormControlInput1"
                    style=" font-family: 'Rubik', sans-serif;font-size: 14px;color:black;">
            </div>
            <div class="mb-1">
                <label for="exampleFormControlInput1" class="form-label">Tinggi (cm)</label>
                <input type="number" name="height" placeholder="tinggi, satuan cm, Opsional" data-original-title="" title="" class="form-control" id="exampleFormControlInput1"
                    style=" font-family: 'Rubik', sans-serif;font-size: 14px;color:black;">
            </div>
            <div class="mb-1">
                <label for="exampleFormControlInput1" class="form-label">Point Pembeli</label>
                <input type="number" name="point_pembeli" placeholder="Poin pembeli" data-original-title="" title="" class="form-control" id="exampleFormControlInput1"
                style=" font-family: 'Rubik', sans-serif;font-size: 14px;color:black;" style="color: tomato;">
            </div>
            <div class="mb-1">
                <label for="exampleFormControlInput1" class="form-label">Point Sponsor</label>
                <input type="number" name="point_sponsor" placeholder="Poin sponsor" data-original-title="" title="" class="form-control" id="exampleFormControlInput1"
                    style=" font-family: 'Rubik', sans-serif;font-size: 14px;color:black;">
            </div>
            <div class="mb-1">
            <label for="exampleFormControlInput1" class="form-label">Komisi</label>
            <input type="number" name="commission" placeholder="komisi" data-original-title="" title="" class="form-control" id="exampleFormControlInput1"
                style=" font-family: 'Rubik', sans-serif;font-size: 14px;color:black;">
            </div>
            <div class="mb-1">
                <label for="exampleFormControlTextarea1" class="form-label">Deskripsi Singkat</label>
                <textarea id="summernote" class="form-control summernote" name="desc" rows="3" placeholder="Deskripsi"></textarea>
            </div>
            <div class="mb-1">
                <label for="formFile" class="form-label">Foto</label>
                <input class="form-control" type="file" name="image" id="formFile"
                    style=" font-family: 'Rubik', sans-serif;font-size: 14px;color:black;">
            </div>
            <div class="mt-3 field_wrapper">
                <a href="javascript:void(0);" class="add_button btn btn-warning mb-3" title="Add field">Tambah Varian</a>
                <div class="d-flex">
                    <input class="form-control" required type="text" placeholder="Nama varian" name="nameVarian[]" >
                    <input class="form-control ml-2" required type="nunber" placeholder="Harga Varian" name="priceVarian[]" >
                </div>    
            </div>
            <div class="buttonn justify-content-center mt-3">
                <div class="col">
                    <button type="submit" class="btn btn-5">Submit</button>
                </div>
            </div>
        </form>
        </div>
      </div>
    </div>
    <!-- ---------From Input------------- -->
  </div>
@endsection
