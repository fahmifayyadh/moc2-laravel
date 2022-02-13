@extends('V2.layouts.master')
@section('title','Create Paket')
@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/summernote.css')}}">
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
@endsection
@section('js')
<script src="{{asset('/assets/js/editor/summernote/summernote.js')}}"></script>
<script src="{{asset('/assets/js/editor/summernote/summernote.custom.js')}}"></script>
<script>
  $(document).ready(function() {
      $('#summernote').summernote();
  });
</script>
@endsection
@section('content')
 <div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <a href="allproduct.html"  >
        <p style="color:white;font-family: 'Rubik', sans-serif; font-weight: 600; font-size: 30px;">
          <span style="color: #FF9F1C; font-family: 'Rubik', sans-serif; font-weight: bold;"> | </span>
          CREATE PAKET <span style="font-weight: 100;"></span>
        </p>
      </a>
    </div>
    <div class="container container-2">
      <!-- ---------From Input------------- -->
      <div class="row">
        <div class="col-12 col-md-6 col-lg-6">
          <form action="{{route('course.paketCreate')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <input type="text" placeholder="Name" name="name" value="{{old('name')}}" class="form-control"
                style=" font-family: 'Roboto', sans-serif;font-size: 10px;color:black;">
                @error('name')
                <small>{{$message}}</small>
                @enderror
            </div>
            <div class="mb-3">
              <label for="">Free member</label>
              <select name="is_member" class="form-control" style=" font-family: 'Roboto', sans-serif;font-size: 10px;color:black;">
                <option value="1">iya</option>
                <option value="0">tidak</option>   
              </select>
              @error('is_member')
              <small>{{$message}}</small>
              @enderror
            </div>
            <div class="mb-3">
              <input type="number" placeholder="Harga" name="price" value="{{old('price')}}" required class="form-control"
                style=" font-family: 'Roboto', sans-serif;font-size: 10px;color:black;">
                @error('price')
                <small>{{$message}}</small>
                @enderror
            </div>
            <div class="mb-3">
              <input type="number" placeholder="Batas hari penggunaan video (life time tidak perlu diisi)" name="batas" value="{{old('batas')}}" class="form-control"
                style=" font-family: 'Roboto', sans-serif;font-size: 10px;color:black;">
                @error('batas')
                <small>{{$message}}</small>
                @enderror
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">point pembeli</label>
              <input class="form-control" type="number" placeholder="Point Pembeli" name="point_pembeli" required value="{{old('point') ?? 0}}" style=" font-family: 'Roboto', sans-serif;font-size: 10px;color:black;" >
                @error('point_pembeli')
                <small>{{$message}}</small>
                @enderror
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">point sponsor</label>
              <input class="form-control" type="number" placeholder="Point Sponsor" name="point_sponsor" value="{{old('point') ?? 0}}" required style=" font-family: 'Roboto', sans-serif;font-size: 10px;color:black;" >
                @error('point_sponsor')
                <small>{{$message}}</small>
                @enderror
            </div>
            <div class="mb-3">
              <label for="">komisi</label>
              <input class="form-control" type="number" placeholder="Komisi" name="commission" value="{{old('commission') ?? 0}}" required style=" font-family: 'Roboto', sans-serif;font-size: 10px;color:black;" >
                @error('commission')
                <small>{{$message}}</small>
                @enderror
            </div>
            <div class="mb-3">
              <label for="">Deskripsi Singkat</label>
              <div id="summernote" class="form-control summernote" name="desc" value="{{old('desc')}}" required>Paket Detail</div>
                @error('desc')
                <small>{{$message}}</small>
                @enderror
            </div>
            <div class="mb-3">
            <label class="col-sm-4">Choose Thumbnail</label>
              <div class="col-md-8">
                <input class="form-control" type="file" name="image" value="{{old('image')}}" required>
              </div>
              @error('image')
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
@endsection
