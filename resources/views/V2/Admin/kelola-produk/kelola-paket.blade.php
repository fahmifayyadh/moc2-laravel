@extends('V2.layouts.master')
@section('title','Paket')
@section('css')
  <style>
    div.dataTables_length select {
        color: #FF9F1C !important;
        background-color: #252633 !important; 
    }
    .table-long {
      display: block;
      overflow-x: auto;
      white-space: nowrap;
    }
    table {
      border-radius: 5px;
      background:
        #252633;
    }

    table thead .th-3 {
      border: none;
      background: #283246;
      font-family: 'Rubik', sans-serif;
      font-size: 25px;
      font-style: normal;
      font-weight: 400;
      padding-left: 5vh;
      

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

    }
    table thead .th-4 {
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
    }

    table tbody tr td {
      font-family: 'Roboto', sans-serif;
      font-size: 21px;
      font-style: normal;
      font-weight: 500;
      line-height: 21.61px;
      letter-spacing: 0em;
      text-align: center;
      color: #FF9F1C;


    }

    table tbody tr td img {
      width: 79px;
      height: 79px;
      left: 424px;
      top: 433px;
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

    .modal-header .modal-title {
      font-family: 'Rubik', sans-serif;
      font-size: 17px;
      font-style: normal;
      font-weight: 500;
      line-height: 20px;
      letter-spacing: 0em;
      text-align: center;
    }

    tbody tr #italic {
      font-style: italic;
      color: #F86D6D;
      font-weight: 300;
      font-family: 'Roboto', sans-serif;
      text-align: center;
    }
  </style>
  <!-- Row -->  
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

      /* @media (min-width: 300px) {
        #animated i {
        position: relative;
        left: 30px;
        top: 1px;
      }
      } */

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
     .d-sm-flex a {
        text-decoration: none;
      }

      ::-webkit-file-upload-button {
        color: white;
        background: #FF9F1C;
        border: none;
        border-radius: 50px;
        box-shadow: 1px 0 1px 1px #6b4559;
        outline: none;
      }
      </style>
@endsection
@section('js')
<script>
    $(document).ready( function () {
        $('#table_id').DataTable();
    });
</script>
@endsection
@section('content')
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <a href="allproduct.html">
        <p
        style="color:white;font-family: 'Rubik', sans-serif; font-weight: 600; font-size: 30px;list-style: none;">
        <span style="color: #FF9F1C; font-family: 'Rubik', sans-serif; font-weight: bold;"> | </span>
        PAKET <span style="font-weight: 100;"></span>
        </p>
    </a>
    </div>

    <!-- Row -->
    <div class="row">
    <!-- Datatables -->
    <div class="col-12" style="top: -3vh;">
        <div class="tambah" style="float: right;">
        <a href="{{route('course.paketCreate')}}" class="btn btn-5">Tambah Paket</a>
        </div>
    </div> 
    
    <!-- <div class="col-lg-12"> -->
    <div class="col-12 col-md-12 col-lg-12" style="margin-top: 5vh;">
        <!-- ---------tabel------------- -->
        <div class="cards">
        <table id="table_id" class="display table table-dark table-long" style="background: #252633;">
            <thead class="text-center">
            <th>No</th>
            <th>Nama</th>
            <th>Deskripsi</th>
            <th>Batas Penggunaan</th>
            <th>Harga</th>
            <th>image</th>
            <th>Free Member</th>
            <th>Point pembeli</th>
            <th>Point sponsor</th>
            <th>Komisi</th>
            <th>Action</th>
            </thead>
            <tbody>
            @foreach ($paket as $key => $ce)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$ce->name}}</td>
                <td>{{$ce->desc}}</td>
                <td>{{$ce->batas}} Hari</td>
                <td>{{ number_format($ce->price,0,'.','.') }}</td>
                <td><img class="img-fluid rounded-circle" style="width: 50px;height:50px" src="{{asset(Storage::url('/paket/'.$ce->image))}}" style="width: 50px" alt=""></td>
                <td>{{$ce->is_member == 1 ? 'benar' : 'Tidak'}}</td>
                <td>{{ number_format($ce->point_pembeli,0,'.','.') }}</td>
                <td>{{ number_format($ce->point_sponsor,0,'.','.') }}</td>
                <td>{{ number_format($ce->commission,0,'.','.') }}</td>
                <td>
                    <div class="d-flex">
                        <button type="button" class="btn btn-info btn-sm ml-2"
                        data-toggle="modal" data-target="#adc{{$ce->id}}" role="button">
                            Add Course
                        </button>
                        <button type="button" class="btn btn-primary btn-sm ml-2"
                        data-toggle="modal" data-target="#sales{{$ce->id}}">
                            Sales Page
                        </button>
                        <a href="{{route('course.paketEdit',$ce->id)}}" style="color:white">
                            <button type="button" class="btn btn-warning btn-sm ml-2">
                                Edit
                            </button>
                        </a>
                        <form style="display: inline" onsubmit="return confirm('apakah anda yakin?')" action="{{route('course.paketDelete',$ce->id)}}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger btn-sm ml-2">
                            Delete
                        </button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
        </div>
        <!-- ---------tabel------------- -->
    </div>
    </div>
</div>
@foreach ($paket as $ce)
@include('V2.Admin.modal.add-course')
@include('V2.Admin.modal.sales-page')
@endforeach
@endsection