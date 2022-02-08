@extends('layouts.master',['title' => 'Status Transaksi Produk'])
@section('content')
<div class="page-body">
    <br>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row starter-main">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Transaksi Produk Fisik</h5>
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
                                                    href="{{route('transaksi.order-fisik-filter','selesai')}}">Selesai</a><a
                                                    href="{{route('transaksi.order-fisik-filter','pembayaran')}}">Menunggu
                                                    Pembayaran</a><a
                                                    href="{{route('transaksi.order-fisik-filter','proses')}}">Proses</a><a
                                                    href="{{route('transaksi.order-fisik-filter','batal')}}">Batal</a><a
                                                    href="{{route('transaksi.order-fisik-filter','refund')}}">Refund</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <button class="btn btn-pill btn-info btn-sm" type="button" data-original-title="btn btn-pill btn-info btn-sm" title="">Tambah Course</button> -->
                                </div>
                                <div class="col-md-5">
                                    <form action="{{route('transaksi.order-fisik-search')}}" method="GET">
                                        <input name="search" type="text" placeholder="Search">
                                        <button class="btn btn-sm btn-primary" type="submit">Cari</button>
                                    </form>
                                </div>
                            </div>

                        </div>
                        <hr>
                        <div class="table-responsive invoice-table" id="table">
                            <table class="table table-bordered table-striped">
                                <thead class="active">
                                    <tr>
                                        <th>No</th>
                                        <th>Pembeli</th>
                                        <th>Nama Barang</th>
                                        <th>Kode Transaksi</th>
                                        <th>Whatsapp</th>
                                        <th>Kupon</th>
                                        <th>Ekspedisi</th>
                                        <th>Jenis Pengiriman</th>
                                        <th>No Resi</th>
                                        <th>Harga</th>
                                        <th>Kuantiti</th>
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
                                        @include('tests.transaksi.kompo.detail')
                                        @include('tests.transaksi.kompo.pembayaran')
                                        @include('tests.transaksi.kompo.badge')
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
    
@include('tests.transaksi.kompo.resi')
@endif

                                    @endforeach

                                </tbody>
                            </table>
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
            </div>
        </div>
    </div>
</div>

@endsection