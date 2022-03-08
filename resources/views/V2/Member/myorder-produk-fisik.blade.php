@extends('V2.layouts.master')
@section('title','My Order Produk')
@section('css')
 <link href="{{asset('admin/css/custom.css')}}" rel="stylesheet">
@endsection
@section('content')
               <!-- Container Fluid-->
                <div class="container-fluid" id="container-wrapper">
                    <div class="row">
                        <div class="col-7">
                            <!-- title KOMISI FISIK -->
                            <div class="d-sm-flex align-items-center justify-content-between">
                                <a href="allproduct.html">
                                    <p
                                        style="color:white;font-family: 'Rubik', sans-serif; font-weight: 600; font-size: 30px;">
                                        <span
                                            style="color: #FF9F1C; font-family: 'Rubik', sans-serif; font-weight: bold;">
                                            | </span>
                                            MY ORDER (PRODUK FISIK) <span style="font-weight: 100;"></span>
                                    </p>
                                </a>
                            </div>
                            <!-- title KOMISI FISIK-->
                        </div>
                        <div class="col-3">
                            <!-- <div class="box">
                                <a href="">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </a>
                                <input type="text" name="" placeholder="cari komisi">
                            </div> -->
                        </div>
                        <div class="col-2">
                            <div class="text-right">
                                <div class="dropdown">
                                    <button class="btn btn-primary text-custome bg-secondary-card border-0"
                                        type="button" id="dropdownMenuButton" data-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="fas fa-filter"></i>
                                        Filter</button>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="{{route('order.filter','')}}">Terbaru</a>
                                        <a class="dropdown-item" href="{{route('order.filter','')}}">Harga Tertinggi</a>
                                        <a class="dropdown-item" href="{{route('order.filter','')}}">Harga Terendah</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card bg-primary-card mb-5">
                        <div
                            class="card-header py-1 d-flex flex-row align-items-center justify-content-between bg-secondary-card">

                        </div>
                        <div class="table-responsive">
                            <table id="table_id" class="display table table-borderless align-items-center table-flush">
                                <thead class="thead bg-secondary-card">
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama Produk</th>
                                        <th>Jenis Produk</th>
                                        <th>Point Pembeli</th>
                                        <th>Kuantiti</th>
                                        <th>Detail Pengiriman</th>
                                        <th>Link Pembayaran</th>
                                        <th>Kupon</th>
                                        <th>Tanggal Beli</th>
                                        <th>Tanggal Tiba</th>
                                        <th>Total Harga</th>
                                        <th>Status</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- loop data -->
                                   @foreach ($transFisik ?? [] as $i => $tf)
                                    <tr class=" text-custome">
                                        <td><label>{{$i+1}}</label>.</td>
                                        <td>{{$tf->product->name}}</td>
                                        <td>Produk</td>
                                        <td>{{$tf->point_pembeli}}</td>
                                        <td>{{$tf->kuantiti}}</td>
                                        <td>
                                           @include('V2.Member.modal.myorder.detailpengirimanproduk')
                                          
                                            <label  class="badge badge-primary p-2 mb-2" data-toggle="modal" data-target="#kirimproduk{{$tf->id}}" style="cursor: pointer;">Detail Pengiriman</label>
                                             @include('V2.Member.modal.myorder.detailpenerimaanproduk')
                                            <label class="badge badge-warning p-2" data-toggle="modal" data-target="#terimaproduk{{$tf->id}}" style="cursor: pointer;">Detail Penerima</label>
                                        </td>
                                        <td>@if ($tf->status != 'refund' && $tf->status != 'batal' && $tf->status != 'selesai')
                                      
                                            <span style="cursor: pointer;" class="badge badge-success p-2 mb-2" data-toggle="modal" data-target="#orderDetail{{$tf->id}}">Detail Pembayaran</span>
                                            @include('V2.Member.modal.myorder.invoicefisik')
                                          <!--  <a href="{{route('order.invoice',$tf->id)}}" class="badge badge-success p-2 mb-2">Detail Pembayaran</a> -->
                                            @endif

                                           @if ($tf->status != 'proses' && $tf->status != 'batal' && $tf->status != 'selesai' && $tf->status != 'refund')
                                      
                                         <span style="cursor: pointer;" class="badge badge-warning p-2 mb-2" data-toggle="modal" data-target="#bukti{{$tf->id}}">Upload Bukti Bayar</span>
                                         @include('V2.Member.modal.myorder.buktifisik')

                                             @endif
                                        </td>
                                        <td>{{$tf->kupon != null ? $tf->kupon->kode.'-'.$tf->discount : 'Not Use'}}</td>
                                        <td>{{$tf->created_at->format('d-m-Y')}}</td>
                                        <td>{{$tf->status == 'selesai' ? $tf->updated_at->format('d-m-Y') : 'Belum Selesai'}}</td>
                                        <td>Rp {{number_format(($tf->price*$tf->kuantiti)-$tf->discount+$tf->delivery->ongkir,0,'.','.')}}</td>
                                            @include('V2.Member.modal.myorder.badgefisik')
                                    </tr>
                                    @endforeach
                                    <!-- loop data -->
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer bg-primary-card"></div>
                    </div>
                </div>
                <!---Container Fluid-->
@endsection
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
</script>
 <script>
$(document).ready(function(){

 $('.content-data img').addClass("img-fluid")
$('.content-data video').attr("controlsList", "nodownload");

});
</script>