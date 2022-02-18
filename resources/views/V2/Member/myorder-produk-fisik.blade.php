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
                                            MY ORDER (PRODUK) <span style="font-weight: 100;"></span>
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
                                        <a class="dropdown-item" href="{{route('order.filter','')}}">Harga Terendahg</a>
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
                                        <th>Point pembeli</th>
                                        <th>Kuantiti</th>
                                        <th>Exspedisi</th>
                                        <th>Jenis Pengiriman</th>
                                        <th>Kupon</th>
                                        <th>Penerima</th>
                                        <th>No Resi</th>
                                        <th>Tanggal Beli</th>
                                        <th>Tanggal Tiba</th>
                                        <th>Total harga</th>
                                        <th>Status</th>
                                        <th>Action</th>

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
                                        <td>{{$tf->delivery->kurir}}</td>
                                        <td>{{$tf->delivery->jenis}}</td>
                                        <td>{{$tf->kupon != null ? $tf->kupon->kode.'-'.$tf->discount : null}}</td>
                                        <td>{{$tf->delivery->name}}</td>
                                        <td>{{$tf->delivery->no_resi}}</td>
                                        <td>{{$tf->created_at->format('d-m-Y')}}</td>
                                        <td>{{$tf->status == 'selesai' ? $tf->updated_at->format('d-m-Y') : 'Belum Selesai'}}</td>
                                        <td>Rp {{number_format(($tf->price*$tf->kuantiti)-$tf->discount+$tf->delivery->ongkir,0,'.','.')}}</td>

                                        @include('tests.order.komponen.badgefisik')
                                        <td>
                                  @if ($tf->status != 'refund' && $tf->status != 'batal' && $tf->status != 'selesai')
                                      
                                  <button type="button" class="btn btn-light btn-sm" data-toggle="modal" data-target="#orderDetail{{$tf->id}}">Invoice</button>
                                  @include('tests.order.komponen.invoicefisik')
                                  @endif
                                  @if ($tf->status != 'proses' && $tf->status != 'batal' && $tf->status != 'selesai' && $tf->status != 'refund')
                                      
                                  <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#bukti{{$tf->id}}">Bukti</button>
                                @include('tests.order.komponen.buktifisik')

                                @endif
                              </td>
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