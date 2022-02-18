@extends('V2.layouts.master')
@section('title','Create Sub Course')
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
          CREATE SUB COURSE <span style="font-weight: 100;"></span>
        </p>
      </a>
    </div>
    <div class="container container-2">
      <!-- ---------From Input------------- -->
      <div class="row">
        <div class="col-12 col-md-6 col-lg-6">
          <form action="{{route('subCourse.store',$course->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="mb-3">
              <label for="">Title</label>
              <input type="text" placeholder="Title" name="name" required data-original-title="" title="" class="form-control"
                style=" font-family: 'Roboto', sans-serif;font-size: 10px;color:black;">
            </div>
            <div class="mb-3">
              <label for="">Sequence</label>
              <input type="number" placeholder="sequence" name="sequence" required data-original-title="" title="" class="form-control"
                style=" font-family: 'Roboto', sans-serif;font-size: 10px;color:black;">
            </div>
            <div class="mb-3">
            <textarea class="form-control summernote" required id="summernote" rows="3" placeholder="Enter Some Detail" name="value"></textarea>
            </div>
            <div class="buttonn" style="text-align: center;">
              <div class="col">
                <button type="submit" class="btn btn">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- ---------From Input------------- -->
  </div>
@endsection