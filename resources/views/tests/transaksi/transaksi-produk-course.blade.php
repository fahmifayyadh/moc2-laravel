@extends('layouts.master',['title' => 'Status Transaksi E-Course'])
@section('content')
<div class="page-body">
    <br>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row starter-main">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <!-- <div class="pull-right mr-4"><a href="#">Edit Profile Playlist</a></div> -->
                        <h5>Transaksi E-course</h5>

                    </div>
                    <div class="card-body">
                        <!-- Tool -->
                        <div class="dropdown-basic">
                            <div class="row justify-content-end">
                                <div style="padding-left: 10px;">
                                    <!-- <button class="btn btn-info btn-lg" type="button">Tambah Course</button> -->
                                    <div class="dropdown">
                                        <div class="btn-group mb-0">
                                            <button class="dropbtn btn-info btn-round" type="button">Filter <span><i
                                                        class="icofont icofont-arrow-down"></i></span></button>
                                            <div class="dropdown-content"><a
                                                    href="{{route('transaksi.order-course-filter','selesai')}}">Selesai</a><a
                                                    href="{{route('transaksi.order-course-filter','pembayaran')}}">Menunggu
                                                    Pembayaran</a><a
                                                    href="{{route('transaksi.order-course-filter','batal')}}">Batal</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <button class="btn btn-pill btn-info btn-sm" type="button" data-original-title="btn btn-pill btn-info btn-sm" title="">Tambah Course</button> -->
                                </div>
                                <div class="col-md-5">
                                    <form action="{{route('transaksi.order-course-search')}}" method="GET">
                                        <input name="search" type="text" placeholder="Search">
                                        <button class="btn btn-primary" type="submit">Cari</button>
                                    </form>
                                </div>
                            </div>

                        </div>
                        <!-- <div class="row justify-content-end">
                
              <div class="col-md-3">
                <button class="btn btn-pill btn-info btn-sm" type="button" data-original-title="btn btn-pill btn-info btn-sm" title="">Tambah Course</button>
              </div>
              </div> -->
                        <!-- End Tool -->
                        <hr>
                        <div class="table-responsive invoice-table" id="table">
                            <table class="table table-bordered table-striped">
                                <thead class="active">
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Pembeli</th>
                                        <th>Nama Barang</th>
                                        <th>Whatsapp</th>
                                        <th>Kategori Paket</th>
                                        <th>Kupon</th>
                                        <th>Kode Transaksi</th>
                                        <th>Harga</th>
                                        <th>Waktu</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($transaksi as $i=>$t)
                                    <tr>
                                        <td>{{$i+1}}</td>
                                        <td>{{$t->user->name}}</td>
                                        <td>{{$t->paket->name}}</td>
                                        <td><a target="__blank"
                                                href="https://wa.me/62{{substr($t->user->no_hp,0, 1) == 0 ? substr($t->user->no_hp,1) :(substr($t->user->no_hp,0, 1) == 6 ? substr($t->user->no_hp,2) : (substr($t->user->no_hp,0, 1) == 8 ? $t->user->no_hp :$t->user->no_hp))}}">Chat</a>
                                        </td>
                                        <td>E-course</td>
                                        <td>{{$t->kupon != null ? $t->kupon->kode.'-'.$t->discount : null}}</td>
                                        <td>{{$t->kode}}</td>
                                        <td>
                                            {{number_format($t->price-$t->discount,0,'.','.')}}
                                            
                                        </td>
                                        <td>{{$t->created_at->format('Y-m-d')}}</td>
                                        {{-- Detail modal --}}
                                      @include('tests.transaksi.komponen.detail')

                                       @include('tests.transaksi.komponen.badgeCourse')
                                        <td>
                                            @if ($t->status == 'selesai')
                                            <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                                                data-target="#DetailModal{{$t->id}}">Detail</button>
                                            @endif
                                            @if ($t->status == 'pembayaran')
                                            <button type="button" class="btn btn-warning btn-sm" data-toggle="modal"
                                                data-target="#preview-pembayaran{{$t->id}}">Bukti</button>
                                            @include('tests.transaksi.komponen.priv')
                                            @endif
                                           @if ($t->status == 'batal')
                                            <button type="button" class="btn btn-warning btn-sm" data-toggle="modal"
                                                data-target="#preview-pembayaran{{$t->id}}">Bukti</button>
                                            @include('tests.transaksi.komponen.priv')
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            @if($tf)
                            {{$transaksi->links()}}

                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    @endsection