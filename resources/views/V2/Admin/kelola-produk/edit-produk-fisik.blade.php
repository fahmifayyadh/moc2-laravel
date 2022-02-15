@extends('V2.layouts.master')
@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/summernote.css')}}">
@endsection
@section('js')
<script src="{{asset('/assets/js/editor/summernote/summernote.js')}}"></script>
<script src="{{asset('/assets/js/editor/summernote/summernote.custom.js')}}"></script>
<script>
  $(document).ready(function() {
      $('#summernote').summernote();
  });

function readURL(input) {
    if (input.files && input.files[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e) {
        $('#preview').attr('src', e.target.result); 
    }   
    reader.readAsDataURL(input.files[0]); // convert to base64 string
    }
}

$(document).ready(function(){
    $(".tmsa").on('click', function(){
    $("#modalVarian").modal('show');
    });
    $(document).on('click', "#bl", function () {
    var fq = $(this).attr("bd");
    $(".tdname"+fq).hide();
    $(".tdprice"+fq).hide();
    $(".bl"+fq).hide();
    $(".boq"+fq).show();
    $(".boX"+fq).show();
    $(".tdInputName"+fq).show();
    $(".tdInputPrice"+fq).show();
    });
    $(document).on('click', "#fl", function () {
    var faq = $(this).attr("bd");
    $(".tdname"+faq).show();
    $(".tdprice"+faq).show();
    $(".bl"+faq).show();
    $(".boq"+faq).hide();
    $(".boX"+faq).hide();
    $(".tdInputName"+faq).hide();
    $(".tdInputPrice"+faq).hide();
    });
});
$("#thumbnail").change(function() {
    readURL(this);
});
</script>
@endsection
@section('content')
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <a href="allproduct.html">
        <p style="color:white;font-family: 'Rubik', sans-serif; font-weight: 600; font-size: 30px;">
        <span style="color: #FF9F1C; font-family: 'Rubik', sans-serif; font-weight: bold;"> | </span>
        EDIT PRODUK <span style="font-weight: 100;"></span>
        </p>
    </a>
    </div>
    <style>
    .container-3 {
        background: #ffbd60;
        border-radius: 20px;
        margin-bottom: 10vh;
        width: 80%;
    }

    .container-2 {
        background: #ffbd60;
        border-radius: 20px;
        margin-bottom: 10vh;

    }

    .row {

        justify-content: center;
    }


    @media only screen and (max-width: 1200px) {
        .row {
        padding: 20px 0px 0px 0px;
        justify-content: center;
        }

        .container-3 {
        background: #ffbd60;
        border-radius: 20px;
        margin-bottom: 10vh;
        width: auto;
        }
    }
    </style>


    <style>
    form {
        margin-top: 5vh;
    }

    form .btn-1 {
        background: #1F2028;
        font-size: 9px;
        font-size: 500;
        color: white;
        font-family: 'Rubik', sans-serif;
        /* margin-top: -5vh; */
        /* padding: 0.5vh 1vh 0.5vh 1vh; */
    }

    form .buttonn .col .btn-3 {
        background: white;
        color: #353535;
        font-size: 11px;
        font-family: 'Roboto', sans-serif;
        font-weight: 700;
        margin-right: 8vh;

    }

    .buttonn .col {
        text-align: center;
        margin-bottom: 5vh;
    }

    form .buttonn .col .btn-4 {
        font-size: 16px;
        font-family: 'Roboto', sans-serif;
        font-weight: 700;
        background: #1F2028;
        color: white;
        padding: 2px 20px 3px 20px;
        margin-top: 3vh;
    }

    form .buttonn .col .btn-5 {
        font-size: 16px;
        font-family: 'Roboto', sans-serif;
        font-weight: 700;
        background: #CCD2E3;
        color: rgb(0, 0, 0);
        padding: 2px 20px 3px 20px;
        margin-top: 3vh;
    }

    form .mb-1 label {
        font-size: 9px;
        font-weight: 700;
        font-family: 'Roboto', sans-serif;
        color: #1F2028;
    }

    form .mb-1 input {
        border-radius: 10px;
    }

    form .mb-1 textarea {
        border-radius: 10px;
    }

    form .col-8 .mb-1 label {
        font-size: 9px;
        font-weight: 700;
        font-family: 'Roboto', sans-serif;
        color: #1F2028;
    }

    form .col-8 .mb-1 input {
        border-radius: 10px;

    }

    form .form-group label {
        font-size: 9px;
        font-weight: 700;
        font-family: 'Roboto', sans-serif;
        color: #1F2028;

    }

    form .form-group select {
        border-radius: 10px;
    }

    form .align-self-center {
        width: 150px;
        height: 150px;
        padding-left: 27vh;
        padding-top: 1vh;
    }

    form .align-self-center img {
        width: 100%;
        width: 150px;
        height: 150px;
        object-fit: cover;
    }

    @media only screen and (max-width: 1200px) {
        form {
        margin-top: 3vh;
        }
    }

    @media only screen and (max-width: 1200px) {
        form .align-self-center {
        width: 150px;
        height: 150px;
        padding-left: 8vh;
        padding-top: 1vh;
        margin-bottom: 2vh;
        }

    }

    @media only screen and (max-width: 780px) {
        form .align-self-center {
        width: 150px;
        height: 150px;
        padding-left: 8vh;
        padding-top: 1vh;
        margin-bottom: 2vh;
        }

    }

    @media only screen and (max-width: 750px) {
        form .align-self-center {
        width: 150px;
        height: 150px;
        padding-left: 0vh;
        padding-top: 1vh;
        margin-bottom: 2vh;
        }

    }
    </style>

    <div class="row">
    <div class="col-12 col-md-8 col-lg-6">
        <div class="container container-2">
        <!-- ---------From Input------------- -->
        <div class="row">
            <div class="col-12 col-md-9 col-lg-9">
            <form action="{{route('produk.update',['id' => $product->id])}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="mb-1">
                    <label for="exampleFormControlInput1" class="form-label">Nama Produk</label>
                    <input type="text" placeholder="Nama Produk" data-original-title="" title="" value="{{$product->name}}" name="name" class="form-control" id="exampleFormControlInput1"
                        style=" font-family: 'Rubik', sans-serif;font-size: 14px;color:black;">
                </div>
                <div class="mb-1">
                    <label for="exampleFormControlInput1" class="form-label">Berat Produk</label>
                    <input type="number" name="berat" placeholder="Berat, Satuan Gram" value="{{$product->berat}}" data-original-title="" title="" class="form-control" id="exampleFormControlInput1"
                    style=" font-family: 'Rubik', sans-serif;font-size: 14px;color:black;">
                </div>

                <div class="mb-1">
                    <label for="exampleFormControlInput1" class="form-label">Panjang (cm)</label>
                    <input value="{{$product->length}}" type="number" name="length" placeholder="panjang, satuan cm, Opsional" data-original-title="" title="" class="form-control" id="exampleFormControlInput1"
                        style=" font-family: 'Rubik', sans-serif;font-size: 14px;color:black;">
                </div>
                <div class="mb-1">
                    <label for="exampleFormControlInput1" class="form-label">Tinggi (cm)</label>
                    <input value="{{$product->height}}" type="number" name="height" placeholder="tinggi, satuan cm, Opsional" data-original-title="" title="" class="form-control" id="exampleFormControlInput1"
                        style=" font-family: 'Rubik', sans-serif;font-size: 14px;color:black;">
                </div>
                <div class="mb-1">
                    <label for="exampleFormControlInput1" class="form-label">Point Pembeli</label>
                    <input type="number" name="point_pembeli" placeholder="Poin pembeli" data-original-title="" title="" value="{{$product->point_pembeli}}" class="form-control" id="exampleFormControlInput1"
                    style=" font-family: 'Rubik', sans-serif;font-size: 14px;color:black;" style="color: tomato;">
                </div>
                <div class="mb-1">
                    <label for="exampleFormControlInput1" class="form-label">Point Sponsor</label>
                    <input type="number" name="point_sponsor" placeholder="Poin sponsor" data-original-title="" title="" value="{{$product->point_sponsor}}" class="form-control" id="exampleFormControlInput1"
                        style=" font-family: 'Rubik', sans-serif;font-size: 14px;color:black;">
                </div>
                <div class="mb-1">
                <label for="exampleFormControlInput1" class="form-label">Komisi</label>
                <input type="number" name="commission" placeholder="komisi" data-original-title="" title="" value="{{$product->commission}}" class="form-control" id="exampleFormControlInput1"
                    style=" font-family: 'Rubik', sans-serif;font-size: 14px;color:black;">
                </div>
                <div class="mb-1">
                    <label for="exampleFormControlTextarea1" class="form-label">Deskripsi Singkat</label>
                    <textarea id="summernote" class="form-control summernote" name="desc" rows="3" placeholder="Deskripsi">{!! $product->desc !!}</textarea>
                </div>

                <div class="col align-self-center">
                    <div class="img">
                        <img src="{{asset(Storage::url('/product/main/'.$product->image))}}" alt="">
                    </div>
                </div>

                <div class="mb-1">
                    <label for="formFile" class="form-label">Ganti Foto</label>
                    <input class="form-control" type="file" name="image" id="formFile"
                        style=" font-family: 'Rubik', sans-serif;font-size: 14px;color:black;">
                </div>
                <div class="buttonn justify-content-center">
                <div class="col">
                    <button type="submit" class="btn btn-5">Submit</button>
                    <a href="{{route('produk.index')}}"><button type="button" class="btn btn-5" style="background: #283246; border-radius: 7px; color: white;">Back</button></a>
                </div>
                </div>
            </form>
            </div>
        </div>

        <!-- ---------From Input------------- -->
        </div>
    </div>
    <style>
        table thead th{
        font-size: 9px ;
        font-weight: 700;
        font-family: 'Roboto', sans-serif;
        color: black;
        }
        table tbody tr td {
        font-size: 9px;
        font-weight: 100;
        font-family: 'Roboto', sans-serif;
        color: black;
        }
        table tbody tr td .btn-4{
        font-size: 9px;
        font-family: 'Roboto', sans-serif;
        font-weight: 700;
        background: #1F2028;
        color: white;
        padding: 2px 20px 2px 20px;
        }
        table tbody tr td .btn-5{
        font-size: 9px;
        font-family: 'Roboto', sans-serif;
        font-weight: 700;
        background: #CCD2E3;
        color: rgb(0, 0, 0);
        padding: 2px 20px 2px 20px;
        
        }
        @media only screen and (max-width: 750px) {
        table tbody tr td .btn-4{
        font-size: 9px;
        font-family: 'Roboto', sans-serif;
        font-weight: 700;
        background: #1F2028;
        color: white;
        padding: 2px 10px 2px 10px;
        }
        table tbody tr td .btn-5{
        font-size: 9px;
        font-family: 'Roboto', sans-serif;
        font-weight: 700;
        background: #CCD2E3;
        color: rgb(0, 0, 0);
        padding: 2px 10px 2px 10px;
        
        } 
        }
    
    </style>
    <div class="col-12 col-md-8 col-lg-6">
        <div class="container container-3">
        <button type="button" class="tmsa btn btn-danger btn-sm mt-3">
          Tambah Varian Lain
        </button>
        <!-- MODAL ADD VARIAN -->
        <div class="modal fade" id="modalVarian" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content" style="border-radius: 20px; background: #F2F2F2;">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="{{route('v.store', ['id' => $product->id])}}" method="POST">
                @csrf
                @method('put')
                <div class="mb-3">
                  <input class="form-control" type="text" name="nameVarian" placeholder="Nama Varian" value="">
                </div>
                <div class="mb-3">
                  <input class="form-control" type="number" name="priceVarian" placeholder="Harga" value="">
                </div>
              </div>
              <div class="modal-footer">
                  <button type="submit" class="btn btn-8" style="background: #F86D6D; border-radius: 7px; color: white;">Buat Varian</button>
                <button type="button" class="btn btn-7" style="background: #283246; border-radius: 7px; color: white;" data-dismiss="modal">Batal</button>
              </div>
            </div>
            </form>
          </div>
        </div>
        <!-- END MODAL -->
        <!-- ---------tabel------------- -->

        <table class="table table-borderless">
            <thead>
            <th>No</th>
            <th class="th-3">Nama Varian</th>
            <th class="th-3">Harga</th>
            <th>Action</th>
            </thead>
            <tbody>
            @foreach($product->Varian as $index => $varian)
            <tr>
                <form action="{{route('v.update',['id' => $varian->id])}}" method="POST">
                @csrf
                @method('put')
                <td>
                    {{($index + 1)}}
                </td>
                <td class="tdname{{$varian->id}}">
                    {{$varian->name}}
                </td>
                <td class="tdprice{{$varian->id}}">
                    {{$varian->price}}
                </td>
                <td class="tdInputName{{$varian->id}}" style="display: none">
                    <input class="form-control" type="text" name="nameVarian" value="{{$varian->name}}" required>
                </td>
                <td class="tdInputPrice{{$varian->id}}" style="display: none">
                    <input class="form-control" type="number" name="priceVarian" value="{{$varian->price}}" required>
                </td>
                <td class="text-center">
                  <div class="row m-0">
                    <div class="d-flex">
                        <button type="button" id="bl" class="bl{{$varian->id}} btn btn-sm" bd="{{$varian->id}}" style="background: #283246; border-radius: 7px; color: white;">Ubah</button>
                        <button type="submit" style="display: none" class="boq{{$varian->id}} btn btn-sm btn-primary">Simpan</button>
                        <button type="button" style="display: none" id="fl" class="boX{{$varian->id}} btn btn-sm btn-success ml-2" bd="{{$varian->id}}">Batal</button>
                        </form>
                        <form action="{{route('v.delete', ['id' => $varian->id])}}" method="POST" style="margin-top: 0;">
                            @csrf
                            @method('delete')
                            <button type="submit" class="bl{{$varian->id}} btn btn-sm ml-2" bd="{{$varian->id}}" style="background: #CCD2E3; border-radius: 7px; color: black;">Hapus</button>
                        </form>
                    </div>
                  </div>
                </td>
            </tr>
            @endforeach        
            </tbody>
        </table>
        </div>
    </div>

    <!-- ---------ahir tabel------------- -->
    </div>
</div>
@endsection