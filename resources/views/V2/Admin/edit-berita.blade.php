@extends('V2.layouts.master')
@section('title','Edit Berita')
@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/summernote.css')}}">
<style>
    .container-2 {
      background: #283246;
      width: 800px;
      align-items: center;
      border-radius: 10px 10px 0 0;
    }
     .container-3 {
      background: #252633;
      width: 800px;
      align-items: center;
      border-radius: 0 0 10px 10px;
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
      .container-2 .container-3{
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
          EDIT BERITA <span style="font-weight: 100;"></span>
        </p>
      </a>
    </div>
    <form action="{{route('berita.edit',$berita->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
    <div class="container container-2">
      <!-- ---------From Input------------- -->
      <div class="row">
          
        <div class="col-12">
            <div class="mb-3">
              <label for="">Judul</label>
              <input type="text" placeholder="Judul" name="judul" value="{{$berita->judul}}" class="form-control"
                style=" font-family: 'Roboto', sans-serif;font-size: 10px;color:black;">
                @error('judul')
                <small>{{$message}}</small>
                @enderror
            </div>
             <div class="mb-3">
              <label for="">Deskripsi Singkat</label>
              <input class="form-control" type="text" placeholder="deskripsi singkat" name="deskripsi" value="{{$berita->deskripsi}}"
                style=" font-family: 'Roboto', sans-serif;font-size: 10px;color:black;">
                @error('deskripsi')
                <small>{{$message}}</small>
                @enderror
            </div>
            <div class="mb-3">
              <label class="col-sm-4">Pilih Thumbnail</label>
              <div class="col-md-8">
                <input class="form-control" type="file" name="img" value="{{$berita->img}}">
              </div>
              @error('img')
              <small>{{$message}}</small>
              @enderror
            </div>
          </div>
      </div>
    </div>
    <div class="container container-3">
      <!-- ---------From Input------------- -->
      <div class="row">
            <div class="col-12">
               <div class="mb-3">
              <label for="">Isi Berita</label>
              <textarea class="form-control summernote" placeholder="Isi Berita" name="isi" id="" cols="30" rows="10">{{$berita->isi}}</textarea>
                @error('isi')
                <small>{{$message}}</small>
                @enderror
            </div>
            <div class="mb-3" style="margin: 0 165px;">
              <label for="">Type</label>
              <select name="type" class="form-control" style=" font-family: 'Roboto', sans-serif;font-size: 10px;color:black;">
                <option value="urgent" {!!$berita->type == 'urgent' ? 'selected' : null !!}>Urgent</option>
                <option value="warning" {!!$berita->type == 'warning' ? 'selected' : null !!}>Warning</option>
              </select>
              @error('type')
              <small>{{$message}}</small>
              @enderror
            </div>
            <div class="buttonn" style="text-align: center;">
              <div class="col">
                <button type="submit" class="btn btn">Save</button>
              </div>
            </div>
            </div>
      </div>
    </div>
    </form>
    <!-- ---------From Input------------- -->
  </div>
@endsection
