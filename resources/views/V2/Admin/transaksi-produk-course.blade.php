@extends('V2.layouts.master')
@section('title','Transaksi Produk Course')
<style>
<style>
  <style>
    .table-long{
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
      text-align: left;
      color: #FF9F1C;
      text-align: center;


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
      background:
        #FFBF69;
      color: rgb(0, 0, 0);
      padding: 2px 20px 2px 20px;
    }

    table tbody tr td .btn-5 {
      font-size: 17px;
      font-family: 'Rubik', sans-serif;
      font-weight: 500;
      background: #F86D6D;
      color: rgb(0, 0, 0);
      padding: 2px 20px 2px 20px;

    }

    table tbody tr td .btn-6 {
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

    .pagination .btn-14 {
      font-family: 'Roboto', sans-serif;
      color: #FF9F1C;
      background: #252633;
      box-shadow: 0px 3px 4px 0px #00000040;
      font-size: 25px;
      font-style: normal;
      font-weight: 700;
      line-height: 29px;
      letter-spacing: 0em;
      text-align: left;

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
      color:
        #FF9F1C;
      padding: 2px 20px 2px 20px;
    }

    .col-12 .tambah {
      float: right;
    }

    @media only screen and (max-width: 912px) {
      .col-12 .tambah {
        float: left;
      }
    }
  </style>
  <style>
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
               TRANSAKSI COURSE <span style="font-weight: 100;"></span>
              </p>
            </a>
          </div>

        
          <!-- Row -->
          <div class="row" style="margin: 0">
            <!-- Datatables -->


            <div class="col-12 col-md-8 col-lg-8">
              <div class="pagination">
                <a href="#" class="btn btn-14" data-toggle="modal" data-target="#filter-produk"> <i class="fas fa-filter"></i>Filter</a>
              </div>
            </div>
            <!-- Modal Filter -->
            <div class="modal fade" id="filter-produk" tabindex="-1" role="dialog" aria-labelledby="preview-course" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content p-l-10 p-r-10 ">
                  <div class="modal-header">
                    <h5 class="modal-title">Filter Status Transaksi</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                  </div>
                  <div class="modal-body">
                      <div class="mb-3">
                        <select class="form-control" name="product" id="filter-produk" onchange="location = this.value;">
                          <option value="" >Pilih Option</option>
                          <option value="{{route('transaksi.order-course-filter','selesai')}}">Selesai</option>
                          <option value="{{route('transaksi.order-course-filter','pembayaran')}}">Menunggu Pembayaran</option>
                          <option value="{{route('transaksi.order-course-filter','batal')}}">Batal</option>
                        </select>
                      </div>
                    </div>
                </div>
              </div>
            </div>
            <!-- End Modal Filter -->

            <div class="col-12 col-md-4 col-lg-4">
              <div class="search" style="position: relative;float: right;">
                <form action="{{route('transaksi.order-course-search')}}" method="GET" id="animated" >
                  <input name="search" type="text" placeholder="Search">
                  <button type="submit" class="btn btn-floating" style="position: absolute;margin: 10px 5px;padding: 5px 10px;left: 3px;"><i class="fa fa-search" for="search"></i></button>
                </form>
              </div>
            </div>

            <!-- <div class="col-lg-12"> -->
            <div class="col-12" style="margin-top: 5vh;">
              <!-- ---------tabel------------- -->
              <div class="cards">
                <table id=""  class="table  table-dark table-long " style="background: 
                  #252633; display: block;overflow-x: auto;white-space: nowrap;">
                  <thead>
                    <th class="th-1">No</th>
                    <th class="th-3">Pembeli</th>
                    <th class="th-3">Nama Barang</th>
                    <th class="th-3">Whatsapp</th>
                    <th class="th-3">Kategori Paket</th>
                    <th class="th-3">Kupon</th>
                    <th class="th-3">Kode Transaksi</th>
                    <th class="th-3">Harga</th>
                    <th class="th-3">Waktu</th>
                    <th class="th-3">Order By</th>
                    <th class="th-2">Action</th>
                    <th class="th-2"></th>
                  </thead>
                  <tbody>
                     @foreach ($transaksi as $i=>$t)
                    <tr>
                      <td>
                       {{$i+1}}<span>.</span></td>
                      <td>{{$t->user->name}}</td>
                      <td>{{$t->paket->name}}</td>
                      <td><a target="__blank"
                        href="https://wa.me/62{{substr($t->user->no_hp,0, 1) == 0 ? substr($t->user->no_hp,1) :(substr($t->user->no_hp,0, 1) == 6 ? substr($t->user->no_hp,2) : (substr($t->user->no_hp,0, 1) == 8 ? $t->user->no_hp :$t->user->no_hp))}}">Chat</a>
                      </td>
                      <td>E-course</td>
                      <td>{{$t->kupon != null ? $t->kupon->kode.'-'.$t->discount : null}}</td>
                      <td>{{$t->kode}}</td>
                      <td>Rp {{number_format($t->price-$t->discount,0,'.','.')}}</td>
                      <td>{{$t->created_at->format('Y-m-d')}}</td>
                       {{-- Detail modal --}}
                       @include('v2.admin.modal.detail-transaksi-course')
                       @include('v2.admin.modal.badge-transaksi-course')
                      <td>
                       @if ($t->status == 'selesai')
                       <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                       data-target="#DetailModal{{$t->id}}">Detail</button>
                       @endif
                       @if ($t->status == 'pembayaran')
                       <button type="button" class="btn btn-warning btn-sm" data-toggle="modal"
                       data-target="#preview-pembayaran{{$t->id}}">Bukti</button>
                       @include('v2.admin.modal.priv')
                       @endif
                       @if ($t->status == 'batal')
                       <button type="button" class="btn btn-warning btn-sm" data-toggle="modal"
                       data-target="#preview-pembayaran{{$t->id}}">Bukti</button>
                       @include('v2.admin.modal.priv')
                       @endif
                     </td>
                      <!-- <td>
                        <a href="" class="btn btn-5" role="button">Edit</a>
                      </td> -->
                    </tr>
                     @endforeach

                  </tbody>
                </table>
              </div>
              <div class="row">
                <div class="col-md-12">
                   @if($tf)
                  {{$transaksi->links()}}
                  @endif    
                </div>
              </div>
              <!-- ---------tabel------------- -->
            </div>
          </div>
        </div>
 <!-- Page level custom scripts -->
@endsection