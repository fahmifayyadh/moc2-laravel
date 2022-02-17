@extends('V2.layouts.master')
@section('title','Kelola Kupon')
  <style>
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
        /*position: relative;
        left: 30px;*/
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
      </style>
@section('content')
<div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <a href="#">
              <p
                style="color:white;font-family: 'Rubik', sans-serif; font-weight: 600; font-size: 30px;list-style: none;">
                <span style="color: #FF9F1C; font-family: 'Rubik', sans-serif; font-weight: bold;"> | </span>
                KELOLA KUPON <span style="font-weight: 100;"></span>
              </p>
            </a>
          </div>

          <!-- Row -->
          <div class="row">
            <!-- Datatables -->
            <div class="col-12" style="top: -3vh;">
               <div class="tambah" style="float: right;">
              <a href="{{route('kupon.create')}}" class="btn btn-5">Tambah Kupon</a>
            </div>
            </div>
<!--             <div class="col-12 col-md-8 col-lg-8">
              <div class="pagination">
                <p>Show</p>
                <div class="jumlah">
                  <p>5</p>
                </div>
                <p>Entries</p>
              </div>
            </div>
            <div class="col-12 col-md-4 col-lg-4">
              <div class="search" style="float: right;display: flex;">
                <form action="#" method="GET" id="animated" >
                  <button type="submit" class="btn btn-floating" style="position: absolute;margin: 10px 5px;"><i class="fa fa-search"></i></button>
                  <input name="search" type="text" placeholder="Search" style="flex: 1">
                </form>
              </div>
            </div> -->

            <!-- <div class="col-lg-12"> -->
            <div class="col-12 col-md-12 col-lg-12">
              <!-- ---------tabel------------- -->
              <div class="cards">
                <table id="table_id" class=" display table table-dark" style="background: 
                  #252633;">
                  <thead>
                    <th class="th-4">No</th>
                    <th class="th-4">Kode</th>
                    <th class="th-4">Penggunaan</th>
                    <th class="th-4">Penggunaan per User</th>
                    <th class="th-4">Nominal</th>
                    <th class="th-4">Nominal</th>
                    <th class="th-4">Action</th>
                  </thead>
                  <tbody>
                     @foreach ($kupon as $i => $k)
                    <tr>
                      <td>{{$i+1}}<span>.</span></td>
                      <td>{{$k->kode}}</td>
                      <td>{{$k->product ? 'Product ,' : null}}{{$k->course ? 'Course':null}}</td>
                      <td>{{$k->penggunaan}}</td>
                      <td>{{$k->nominal}}</td>
                      <td>{{Carbon\Carbon::parse($k->batas)->format('d-M-Y')}}</td>   
                      <td style="text-align: center;" >
                        <a href="{{route('kupon.edit',$k->id)}}" class="btn btn-4" role="button">Edit</a>
                      <form style="display: inline" onclick="return confirm('apakah anda yakin?')" action="{{route('kupon.delete',$k->id)}}" method="post">
                      @csrf
                      @method('delete')
                      <button type="submit" class="btn btn-5">
                      Delete
                      </button>
                      </form>
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
@endsection