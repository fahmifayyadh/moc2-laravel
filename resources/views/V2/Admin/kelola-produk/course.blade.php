@extends('V2.layouts.master')
<style>
    #animated input[type=text] {
      width: 325.76px;
      height: 50px;
      box-sizing: border-box;
      border: 1px solid #c8c8c8;
      /* border-radius: 4px; */
      font-size: 16px;
      background-color: white;
      padding: 7px 5px 7px 40px;
      -webkit-transition: width 0.5s ease-out;
      transition: width 0.5s ease-out;
      border-radius: 100px;
    }

    #animated i {
      position: relative;
      left: 30px;
    }

    @media (max-width: 912px) {
      #animated i {
        position: relative;
        left: 15px;
        top: 38px;
      }
    }

    @media (min-width: 300px) {
      #animated i {
        position: relative;
        left: 30px;
        top: 1px;
      }
    }

    form i {
      color: #FF9F1C;
    }

    ::-webkit-input-placeholder {
      /* Edge */
      color: #FF9F1C;
      font-style: italic;
    }

    .pagination p {
      font-family: 'Rubik', sans-serif;
      font-size: 30px;
      font-style: normal;
      font-weight: 500;
      line-height: 36px;
      letter-spacing: 0em;
      text-align: left;
      color: #ffffff;

    }

    .pagination .jumlah {
      height: 30px;
      width: 56px;
      left: 172px;
      top: 250px;
      border-radius: 5px;
      background: #252633;
      margin: 0px 10px 0px 10px;
      box-shadow: 0px 3px 4px 0px #00000040;
    }

    .pagination .jumlah p {
      text-align: center;
      font-family: 'Rubik', sans-serif;
      color:
        #FF9F1C;
      font-size: 30px;
      font-style: normal;
      font-weight: 700;
      line-height: 36px;
      letter-spacing: 0em;
      margin-top: -1px;
    }

    .col-12 .tambah .btn-5 {
      font-size: 17px;
      font-family: 'Rubik', sans-serif;
      font-weight: 500;
      background: #283246;
      color: #ffffff;
      padding: 2px 20px 2px 20px;


    }
  </style>
  <style>
    @media (max-width: 1024px) {
      .sort {
        margin-left: 90vh;
      }
    }

    @media (max-width: 768px) {
      .sort {
        margin-left: 25vh;
      }
    }

    .sort i {
      color: #FF9F1C;
    }

    .sort p {

      font-family: 'Rubik', sans-serif;
      font-size: 16px;
      font-style: normal;
      font-weight: 500;
      line-height: 19px;
      letter-spacing: 0em;
      text-align: left;

      color: #FF9F1C;
    }
  </style>
  <style>
    .card-body {
      background: white;
      border-radius: 10px;
    }

    .row .col-7 img {
      width: 270px;
      height: 358px;
    }

    .col-5 p {
      font-size: 20px;
      font-weight: 400;
      font-family: 'Rubik', sans-serif;
      color: black;
    }

    .card-body .col-12 .btn-1 {
      font-size: 13px;
      color: white;
      font-family: 'Rubik', sans-serif;
      font-weight: 500;
      background: #FF9F1C;
      padding: 1vh 7vh 1vh 7vh;
    }

    .card-body .col-12 .btn-2 {
      font-size: 13px;
      color: white;
      font-family: 'Rubik', sans-serif;
      font-weight: 500;
      background: #283246;
      padding: 1vh 7vh 1vh 7vh;
    }

    .card-body .col-12 .btn-3 {
      font-size: 13px;
      color: white;
      font-family: 'Rubik', sans-serif;
      font-weight: 500;
      background: #A927F9;

      padding: 1vh 7vh 1vh 7vh;
    }

    .card-body .col p {
      font-size: 30px;
      font-size: 700;
      color: black;
      font-family: 'Rubik', sans-serif;

    }

    .card-body .col-12 {
      margin-bottom: 3vh;

    }

    .card-body .col-12 .icon i {
      color: black;
      margin-bottom: 3vh;
    }

    .card-body .col-12 .icon i span {
      margin-right: 2vh;
      color: black;
      font-size: 20px;
      font-weight: 400;
      font-family: 'Rubik', sans-serif;
      margin-left: 1vh;
    }

    @media only screen and (max-width: 1200px) {
      .row .col-7 img {
        width: 250px;
        height: 338px;

      }

      .card-body .col-12 .btn-1 {
        font-size: 13px;

        padding: 1vh 2vh 1vh 2vh;
      }

      .card-body .col-12 .btn-2 {
        font-size: 13px;

        padding: 1vh 2vh 1vh 2vh;
      }

      .card-body .col-12 .btn-3 {
        font-size: 13px;

        background: #A927F9;

        padding: 1vh 2vh 1vh 2vh;
      }
    }

    @media only screen and (max-width: 1200px) {

      .row .col-7 img {
        width: 220px;
        height: 308px;
      }

      .card-body .col-5 p {
        font-size: 12px;
      }
    }

    @media only screen and (max-width: 780px) {
      .row .col-7 img {
        width: 160px;
        height: 248px;

      }
    }

    @media only screen and (max-width: 420px) {
      .row .col-7 img {
        width: 140px;
        height: 228px;

      }

      .card-body .col-5 p {
        font-size: 11px;
      }

      .card-body .col p {
        font-size: 22px;
      }
    }
  </style>
@section('content')


<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <a href="allproduct.html">
      <h4 style="color:white;font-family: 'Rubik', sans-serif; font-weight: bold;"><span
          style="color: #FF9F1C; font-family: 'Rubik', sans-serif; font-weight: bold;"> | </span> COURSE</h4>
    </a>
    <div class="tambah sort">
        <a class="btn btn-2" data-toggle="modal" data-target="#filter-leaderboard"><i class="fa fa-filter"></i>
      <p> Sort By</p></a>
    </div>
    <!-- Modal Filter -->
    <div class="modal fade" id="filter-leaderboard" tabindex="-1" role="dialog" aria-labelledby="preview-course" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content p-l-10 p-r-10 ">
              <div class="modal-header">
                  <h5 class="modal-title">Filter Course</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              </div>
              <div class="modal-body">
              <form action="{{route('course.courseSearch')}}" method="GET">
                <div class="mb-3">
                    <input class="form-control" type="text" name="name" placeholder="nama e-course">
                </div>
                <div class="mb-3">
                  <input class="form-control" type="text" name="desc" placeholder="Dekripsi">
              </div>
              </div>
              <div class="modal-footer">
                <button class="btn btn-7" type="submit" style="background: #FF9F1C; border-radius: 7px; font-weight: bold; color: black;">Search</button>
                  <button class="btn btn-8" type="button" data-dismiss="modal" style="background: #283246; border-radius: 7px; font-weight: bold; color: #FF9F1C;">Close</button>
              </div>
            </form>
          </div>
      </div>
    </div>
    <!-- End Modal Filter -->
    <div class="search" style="float: right; display: flex;">
      <form id="animated" action="{{route('course.courseSearch')}}" method="get">
        <i class="fa fa-search" aria-hidden="true"></i>
        <input type="text" name="name" placeholder="Search">
      </form>
      <div class="add pl-4 pr-3">
        <a href="{{route('course.create')}}"><button class="btn btn-5" type="button" style="background: #283246; border-radius: 7px; font-weight: bold; color: #FF9F1C;">Tambah Course</button></a>
      </div>
	  </div>

  </div>

  <div class="container">

    <div class="row">
      @foreach ($c as $item)
      <div class="col-6 col-md-12 col-lg-6 mb-3">
        <div class="card-body">
          <div class="row">
            <div class="col-7 col-lg-7 -col-md-7">
              <img src="{{ asset(Storage::url('course/main/'.$item->image)) }}" alt="">
            </div>
            <div class="col-5">
              <p>{{ Str::limit($item->desc, 60)}}</p>
            </div>
          </div>
          <div class="col">
            <h2 style="font-weight: bold; color: black;">{{ $item->name }}</h2>
          </div>
          <div class="col-12">
            <a href="{{route('babCourse.index',$item->id)}}" type="button" class="btn btn-1" data-original-title="MOC active" title="">Add</a>
            <form style="display:inline" onclick="return confirm('apakah anda yakin?')" action="{{route('course.delete',$item->id)}}" method="post">
              @csrf
              @method('delete')
              <button class="btn btn-2" type="submit" data-original-title="MOC active" title="">Delete</button>
            </form>
            <a href="{{route('course.edit',['id'=>$item->id])}}" type="button" class="btn btn-3">Edit</a>
          </div>
          <div class="col-12">
            <div class="icon">
              <i class="far fa-eye" style="float: right;"><span>{{ $item->paket()->count() }}x</span> </i>
              <i class="fa fa-archive" aria-hidden="true" style="float: right;"><span>{{ $item->subCourse()->count() }}</span> </i>
            </div>
          </div>
          <div class="col-12" style=" visibility: hidden;">aaaaaa</div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
  
  <!-- Documentation Link -->
  <!---Container Fluid-->
</div>


@endsection