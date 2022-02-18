@extends('V2.layouts.master')
@section('title','Kelola Ekspedisi')
<style>
    table {
      border-radius: 5px;
      background: black;
    }

    table thead .th-3 {
      border: none;
      background: #283246;
      font-family: 'Rubik', sans-serif;
      font-size: 25px;
      font-style: normal;
      font-weight: 400;
      text-align: center;

      color: rgb(182, 182, 182);
    }

    table thead .th-1 {
      background: #283246;
      border-radius: 5px 0px 0px 0px;
      border: none;
      font-family: 'Rubik', sans-serif;
      font-size: 25px;
      font-style: normal;
      font-weight: 400;
      color: rgb(182, 182, 182);
      text-align: center;

    }

    table thead .th-2 {
      text-align: center;
      border-radius: 0px 5px 0px 0px;
      border: none;
      color: rgb(182, 182, 182);
      background:
        #283246;
      font-family: 'Rubik', sans-serif;
      font-size: 25px;
      font-style: normal;
      font-weight: 400;
      text-align: center;
    }

    table tbody tr td {
      font-family: 'Roboto', sans-serif;
      font-size: 21px;
      font-style: normal;
      font-weight: 500;
      line-height: 21.61px;
      letter-spacing: 0em;
      text-align: left;
      color: #FF9F1C;
      text-align: center;

    }

    table tbody tr td .btn-5 {
      font-size: 17px;
      font-family: 'Rubik', sans-serif;
      font-weight: 500;
      background: #73BB17;
      color: #283246;
      padding: 2px 20px 2px 20px;

    }

    .container-3 .judul {
      padding-bottom: 5vh;
      margin-bottom: 5vh;
      text-align: center;
    }

    .container-3 .judul a {
      float: right;
      padding: 10px 20px 10px 20px;
      /* top: 302px; */
      color: #ffffff;
      background: #FF9F1C;
      border-radius: 4px;
      font-family: 'Roboto', sans-serif;
      font-size: 22px;
      font-style: normal;
      font-weight: 700;
      line-height: 11px;
      letter-spacing: 0em;
      text-align: center;
      box-shadow: 0px 3px 4px 0px #00000040;
    }

    .container-3 .cards {
      box-shadow: 0px 3px 4px 0px #00000040;
    }

    table tbody tr td .btn-8:hover {
      color: #F86D6D;
    }

    form .gambar-1 img {
      width: 226px;
      height: 226px;
      left: 577px;
      top: 456px;
      margin: 3vh;
    }

    table tbody tr td .btn-7 {
      font-size: 17px;
      font-family: 'Rubik', sans-serif;
      font-weight: 500;
      background: #FF9F1C;

      color: #283246;
      padding: 2px 20px 2px 20px;
    }

    table tbody tr td .btn-8 {
      font-size: 17px;
      font-family: 'Rubik', sans-serif;
      font-weight: 500;
      background: #283246;

      color: #FF9F1C;
      padding: 2px 20px 2px 20px;
    }


    table tbody tr td .btn-8:hover {
      color: #F86D6D;
    }

    table tbody tr td .btn-4 {
      font-size: 17px;
      font-family: 'Rubik', sans-serif;
      font-weight: 500;
      background: #F4F4F4;
      color: rgb(0, 0, 0);
      padding: 2px 20px 2px 20px;
    }

    table tbody tr td .btn-5 {
      font-size: 17px;
      font-family: 'Rubik', sans-serif;
      font-weight: 500;
      background: #283246;
      color: #FF9F1C;
      padding: 2px 20px 2px 20px;

    }

    .modal-header .modal-title {
      font-family: 'Rubik', sans-serif;
      font-size: 17px;
      font-style: normal;
      font-weight: 500;
      line-height: 20px;
      letter-spacing: 0em;
      text-align: center;
      color: #1F2028;
    }
  </style>
@section('content')

<style>
    .d-sm-flex a {
    text-decoration: none;
    }
</style>
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <a href="allproduct.html">
        <p
        style="color:white;font-family: 'Rubik', sans-serif; font-weight: 600; font-size: 30px;list-style: none;">
        <span style="color: #FF9F1C; font-family: 'Rubik', sans-serif; font-weight: bold;"> | </span>
        KELOLA EKSPEDISI <span style="font-weight: 100;"></span>
        </p>
    </a>
    </div>

    <!-- Row -->
    <div class="row" style="margin: 0; padding: 0;">

    <div class="col-12 col-md-12 col-lg-12">
        <div class="container container-3">
        @php
            $kur ='jne, pos, tiki, rpx, pandu, wahana, sicepat, jnt, pahala, sap, jet, indah, dse, slis, first, ncs, star, ninja, lion, idl, rex, ide, sentral';
                    $kur = explode(",", $kur);
        @endphp 
        <!-- ---------tabel------------- -->
        <div class="judul">
          <a href="" type="submit" class="btn btn-5" data-toggle="modal" data-target="#addEkspedisi" role="button">Add</a>
        </div>
        <!-- Modal Add -->
        <div class="modal fade" id="addEkspedisi" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Personal Exspedisi</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body">
                      <form action="{{route('exspedisi.store')}}" class="theme-form" method="POST">
                        @csrf    
                        
                        <div class="form-group">
                          <select name="name" class="form-control btn-square" id="select-1">
                            <option value="p" disabled selected>Pilih Exspedisi</option>
                            @foreach ($kur as $k)
                            <option value="{{trim($k)}}">{{Str::title($k)}}</option> 
                            @endforeach        
                          </select>
                        </div>
                        <div class="modal-footer ">
                          <button class="btn btn-primary">Add</button>
                          <button class="btn btn-secondary" data-dismiss="modal" aria-label="Close">Cancel</button>
                        </div>
                      </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Modal Add -->
        <div class="cards">
            <table class="table table-dark" style="background: #252633;">
              <thead>
                  <th class="th-1"> No</th>
                  <th class="th-3">Nama</th>
                  <th class="th-2">Action</th>
              </thead>
              <tbody style="border: none;">
              @foreach ($kurir as $in => $item)
                  <tr>
                    <td>{{$in+1}} <span>.</span></td>
                    <td>{{$item->name}}</td>
                    <td>
                      <ul class="list-inline m-0">
                          <li class="list-inline-item">
                          <button class="btn btn-4" data-toggle="modal" data-target="#editEkspedisi{{ $item->id }}" role="button">Edit</button>
                          </li>
                          <li class="list-inline-item">
                          <form action="{{route('exspedisi.delete',['id'=>$item->id])}}" method="POST">@csrf @method('delete') <button type=submit class="btn btn-5">Delete</button></form>
                          </li>      
                      <ul>
                    </td>
                  </tr>
                  <div class="modal fade" id="editEkspedisi{{ $item->id }}" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content" style="border-radius: 20px; background: #F2F2F2;">
                          <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalToggleLabel">Edit Ekspedisi</h5>
                          </div>
                          <div class="modal-body">
                              <!-- form -->
                              <form action="{{route('exspedisi.edit',['id' => $item->id])}}" method="POST">
                                @csrf    
                                @method('put')
                                <div class="mb-3">
                                  <select name="name" class="form-control btn-square" id="select-1">
                                    <option value="p" disabled selected>Pilih Exspedisi</option>
                                    @foreach ($kur as $k)
                                    <option value="{{trim($k)}}" {!! $item->name == trim($k) ? 'selected' : null !!}>{{Str::title($k)}}</option>
                                    @endforeach 
                                  </select>
                                </div>
                                <div class="buttonn" style="text-align: right;">
                                    <div class="col">
                                    <button type="submit" class="btn btn-7" style="background: #F86D6D; border-radius: 7px; color: white;">Save</button>
                                    <button type="button" class="btn btn-8" data-dismiss="modal" style="background: #283246; border-radius: 7px; color: white;">Cancel</button>
                                    </div>
                                </div>
                              </form>
                              <!-- Form Ahir -->
                          </div>
                        </div>
                    </div>
                  </div>
                  @endforeach

              </tbody>
            </table>
        </div>
        <!-- ---------tabel------------- -->
        </div>
    </div>

    </div>
    <!--Row-->
</div>
@endsection