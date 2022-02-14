@extends('V2.layouts.master')
@section('title','Transaksi Produk Fisik')
@section('head')
<link rel="stylesheet" href="{{asset('/assets/datatable/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet"
href="{{asset('/assets/datatable/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
@endsection
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
               TRANSAKSI PRODUK FISIK <span style="font-weight: 100;"></span>
              </p>
            </a>
          </div>

        
          <!-- Row -->
          <div class="row" style="margin: 0">
            <!-- Datatables -->


            <div class="col-12 col-md-8 col-lg-8">
              <div class="pagination">
                <a href="" class="btn btn-14"> <i class="fas fa-filter"></i>Filter</a>
              </div>
            </div>
            <div class="col-12 col-md-4 col-lg-4">
              <div class="search" style="position: relative;float: right;">
                <form action="{{route('transaksi.order-fisik-search')}}" method="GET" id="animated" >
                  <input name="search" type="text" placeholder="Search" id="search">        
                  <button type="submit" class="btn btn-floating" style="position: absolute;margin: 10px 5px;padding: 5px 10px;left: 3px;"><i class="fa fa-search" for="search"></i></button>
                </form>
              </div>
            </div>

            <!-- <div class="col-lg-12"> -->
            <div class="col-12" style="margin-top: 5vh;">
              <!-- ---------tabel------------- -->
              <div class="cards">
                <table id=""  class="display table-long display table table-dark " style="background: 
                  #252633; display: block;overflow-x: auto;white-space: nowrap;">
                  <thead>
                    <th  class="th-4">No</th>
                    <th class="th-4">Pembeli</th>
                    <th class="th-4">Nama Barang</th>
                    <th class="th-4">Kode Transaksi</th>
                    <th class="th-4">Whatsapp</th>
                    <th class="th-4">Kupon</th>
                    <th class="th-4">Ekspedisi</th>
                    <th class="th-4">Jenis Pengiriman</th>
                    <th class="th-4">No Resi</th>
                    <th class="th-4">Harga</th>
                    <th class="th-4">Kuantiti</th>
                    <th class="th-4">Waktu</th>
                    <th class="th-4">Status</th>
                    <th class="th-4">Action</th>
                  </thead>
                  <tbody>
                    @foreach ($transaksi as $i=>$t)
                    <tr>
                      <td>{{$i+1}}</td>
                      <td>{{$t->user->name}}</td>
                      <td>{{$t->product->name}}</td>
                      <td>{{$t->kode}}</td>
                      <td><a target="__blank"
                        href="https://wa.me/62{{substr($t->user->no_hp,0, 1) == 0 ? substr($t->user->no_hp,1) :(substr($t->user->no_hp,0, 1) == 6 ? substr($t->user->no_hp,2) : (substr($t->user->no_hp,0, 1) == 8 ? $t->user->no_hp :$t->user->no_hp))}}">Chat</a>
                      </td>
                      <td>{{$t->kupon != null ? $t->kupon->kode.'-'.$t->discount : null}}</td>
                      <td>{{$t->delivery->kurir}}</td>
                      <td>{{$t->delivery->jenis}}</td>
                      <td>{{$t->delivery->no_resi}}</td>
                      <td>
                        {{number_format(($t->price*$t->kuantiti) - $t->discount + $t->delivery->ongkir,0,'.','.')}}

                      </td>
                      <td>
                        {{$t->kuantiti}}
                      </td>
                      <td>{{$t->created_at->format('Y-m-d')}}</td>
                      {{-- Detail modal --}}
                      @include('v2.admin.modal.detail-transaksi-produk')
                      @include('v2.admin.modal.pembayaran-transaksi')
                      @include('v2.admin.modal.badge-transaksi-produk')
                      <td>
                        @if ($t->status != 'batal')
                        <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                        data-target="{{$t->status == 'pembayaran' ? '#preview-pembayaran'.$i :null}}{{$t->status == 'proses' || $t->status == 'selesai' || $t->status == 'refund' ? '#DetailModal'.$i : null}}">Detail</button>
                        @endif
                        @if ($t->status == 'proses')
                        <form onsubmit="return confirm('apakah anda yakin?')"
                        action="{{route('transaksi.selesai',$t->id)}}" method="POST" style="display: inline">
                        @csrf
                        <button type="submit" class="btn btn-warning btn-sm">Selesai</button>
                      </form>
                      <button type="button" class="btn btn-success btn-sm" data-toggle="modal"
                      data-target="#InputResiModal{{$i}}">Resi</button>
                      @endif
                      @if ($t->status == 'pembayaran' && $t->bukti == null)
                      <form style="display: inline"
                      onsubmit="return confirm('apakah anda yakin?')"
                      action="{{route('transaksi.cancle',$t->id)}}" method="post">
                      @csrf
                      @method('put')
                      <button type="submit" class="btn btn-danger btn-sm">Cancel</button>
                    </form>
                    @elseif($t->status == 'pembayaran' && $t->bukti != null)
                    <form style="display: inline"
                    onsubmit="return confirm('apakah anda yakin?')"
                    action="{{route('transaksi.refund',$t->id)}}" method="post">
                    @csrf
                    @method('put')
                    <button type="submit" class="btn btn-danger btn-sm">Refund</button>
                  </form>
                  @endif
                </td>
              </tr>
              @if ($t->status == "proses")
              @include('v2.admin.modal.resi-transaksi')
              @endif
              @endforeach

            </tbody>
                </table>
              </div>
              <!--  -->
              <!-- ---------tabel------------- -->
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              @if ($tr ?? true)
              {{$transaksi->links()}}

              @endif
            </div>
        </div>


        </div>
 <!-- Page level custom scripts -->
<script>
    $(document).ready( function () {
        $('#table_id').DataTable();
    });
</script>
@endsection