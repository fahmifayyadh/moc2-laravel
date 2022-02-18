@extends('layouts.master',['title' => 'Ledaerboard All User'])
@section('head')
        <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/date-picker.css')}}">
@endsection
@section('content')
<div class="page-body">
  <br>
  <div class="container-fluid">
    
  </div>
    <div class="file-content">
      <div class="card">
         <div class="card-body file-manager">
          <h4 class="mb-3">All Files</h4>
          <h6>Recently opened files</h6>
          <div class="dropdown-basic">
            <div class="row justify-content-end">
                <div style="padding-left: 10px;">
                    <!-- <button class="btn btn-info btn-lg" type="button">Tambah Course</button> -->
                    <div class="dropdown">
                        <div class="btn-group mb-0">
                            <button class="dropbtn btn-warning btn-round" type="button">Filter <span><i
                                        class="icofont icofont-arrow-down"></i></span></button>
                            <div class="dropdown-content"><a
                                    href="{{route('file.search','file')}}">File</a><a
                                    href="{{route('file.search','video')}}">Video</a><a
                                    href="{{route('file.search','image')}}">Image</a>
                            </div><br>
                        </div>
                    </div>
                    <!-- <button class="btn btn-pill btn-info btn-sm" type="button" data-original-title="btn btn-pill btn-info btn-sm" title="">Tambah Course</button> -->
                </div>
              </div>
            </div>
           <ul class="files" style="padding:10px; text-align:center;">
            @foreach ($file as $f)  
              <!--<li class="file-box" style="width:calc(50% - 190px)"> -->
             <li class="file-box col-sm" >
              <a target="__blank" href="{{$f->link}}">
                <div class="file-top">  <img style="width:50px;height:50px" src="{!! $f->type == 'file' ? 'https://raw.githubusercontent.com/suainul1/dewisata/e90592193ae48765fa76d3d82b287bc33a719e7f/document.svg' : ($f->type == 'video' ? 'https://raw.githubusercontent.com/suainul1/dewisata/e90592193ae48765fa76d3d82b287bc33a719e7f/video.svg' : 'https://raw.githubusercontent.com/suainul1/dewisata/e90592193ae48765fa76d3d82b287bc33a719e7f/picture.svg') !!}" alt=""></div>
                <div class="file-bottom">
                <h6>{{$f->nama}}</h6></a>
                <p class="mb-1">Nama Course: {{$f->course->name}}</p>
                <p> <b>dibuat : </b>{{$f->updated_at->format('d-M-Y')}}</p>
                </div>
              </li>
            @endforeach
           
          </ul>
          </div>
        </div>

          
        </div>
    
    </div>
    <!-- Container-fluid Ends-->
</div> 
@endsection
@section('footer') 
 <script src="{{asset('/assets/js/datepicker/date-picker/datepicker.js')}}"></script>
    <script src="{{asset('/assets/js/datepicker/date-picker/datepicker.en.js')}}"></script>
    <script src="{{asset('/assets/js/datepicker/date-picker/datepicker.custom.js')}}"></script>

@endsection