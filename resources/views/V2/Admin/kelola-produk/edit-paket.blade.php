@extends('V2.layouts.master')
@section('title','Edit Paket')
@section('css')
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
<script>
  $('input.numberformat').keyup(function(event) {
    if(event.which >= 37 && event.which <= 40) return;
    $(this).val(function(index, value) {
      return value
      .replace(/\D/g, "")
      .replace(/\B(?=(\d{3})+(?!\d))/g, ".")
      ;
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
          EDIT PAKET <span style="font-weight: 100;"></span>
        </p>
      </a>
    </div>
    <div class="container container-2">
      <!-- ---------From Input------------- -->
      <div class="row">
        <div class="col-12 col-md-6 col-lg-12">
          <form action="{{route('course.paketUpdate',$course->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="mb-3">
                <label for="">Nama</label>
              <input type="text" placeholder="Name" name="name" value="{{$course->name}}" class="form-control"
                style=" font-family: 'Roboto', sans-serif;font-size: 10px;color:black;">
                @error('name')
                <small>{{$message}}</small>
                @enderror
            </div>
            <div class="mb-3">
              <label for="">Free member</label>
              <select name="is_member" class="form-control" style=" font-family: 'Roboto', sans-serif;font-size: 10px;color:black;">
                <option value="1" {!! $course->is_member == 1 ? 'selected' : null !!}>iya</option>
                <option value="0" {!! $course->is_member == 0 ? 'selected' : null !!}>tidak</option>   
              </select>
              @error('is_member')
              <small>{{$message}}</small>
              @enderror
            </div>
            <div class="mb-3">
              <label for="">Harga</label>
              <input placeholder="Harga" name="price" value="{{$course->price}}" class="form-control numberformat"
                style=" font-family: 'Roboto', sans-serif;font-size: 10px;color:black;">
                @error('price')
                <small>{{$message}}</small>
                @enderror
            </div>
            <div class="mb-3">
              <label for="">Batas Pengguna</label>
              <input type="number" placeholder="Batas hari penggunaan video (life time tidak perlu diisi)" name="batas" value="{{$course->batas}}" class="form-control"
                style=" font-family: 'Roboto', sans-serif;font-size: 10px;color:black;">
                @error('batas')
                <small>{{$message}}</small>
                @enderror
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">point pembeli</label>
              <input class="form-control numberformat" placeholder="Point Pembeli" name="point_pembeli" value="{{$course->point_pembeli}}" style=" font-family: 'Roboto', sans-serif;font-size: 10px;color:black;" >
                @error('point_pembeli')
                <small>{{$message}}</small>
                @enderror
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">point sponsor</label>
              <input class="form-control numberformat" placeholder="Point Sponsor" name="point_sponsor" value="{{$course->point_sponsor}}" style=" font-family: 'Roboto', sans-serif;font-size: 10px;color:black;" >
                @error('point_sponsor')
                <small>{{$message}}</small>
                @enderror
            </div>
            <div class="mb-3">
              <label for="">komisi</label>
              <input class="form-control numberformat" placeholder="Komisi" name="commission" value="{{$course->commission}}" style=" font-family: 'Roboto', sans-serif;font-size: 10px;color:black;" >
                @error('commission')
                <small>{{$message}}</small>
                @enderror
            </div>
            <div class="mb-3">
              <label for="">Deskripsi Singkat</label>
              <div id="summernote" class="form-control summernote" name="desc" value="{{old('desc')}}" {{$course->desc}}</div>
                @error('desc')
                <small>{{$message}}</small>
                @enderror
            </div>
            <div class="mb-3">
                <center><img style="width: 30%;height:30%" src="{{asset(Storage::url('/paket/'.$course->image))}}" alt=""></center>
            </div>
            <div class="mb-3">
            <label class="col-sm-4">Choose Thumbnail</label>
              <div class="col-md-8">
                <input class="form-control" type="file" name="image" value="{{old('image')}}">
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