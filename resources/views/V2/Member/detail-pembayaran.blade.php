@extends('V2.layouts.master')
@section('title','Detail Pembayaran')
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
                        <a href="#">
                            <p
                                style="color:white;font-family: 'Rubik', sans-serif; font-weight: 600; font-size: 30px;">
                                <span
                                    style="color: #FF9F1C; font-family: 'Rubik', sans-serif; font-weight: bold;">
                                    | </span>
                                    Detail Pembayaran <span style="font-weight: 100;"></span>
                            </p>
                        </a>
                    </div>
                    <!-- title KOMISI FISIK-->
                </div>
                <div class="col-3">
                    
                </div>
                <div class="col-2">
                    <div class="text-right">
                        <button class="btn button-custome text-white">kembali</button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <p>
                                <span style="color: #FF9F1C; font-family: 'Rubik', sans-serif; font-weight: bold;"> | </span>
                                <span class="dec-text">Lakukan Transfer Ke Rekening MOC</span>
                            </p>
                            <div class="row">
                                <div class="col">
                                    <img class="mt-5" src="{{asset(Storage::url('bank/'.$b->image))}}" width="200px" height="50px" alt="">
                                </div>
                                <div class="col">
                                    <ul class="list-unstyled">
                                        <li class="text-black font-weight-bold h3">Transfer Bank {{$b->name}}</li>
                                        <li>
                                            <span style="background-color: #F3F3F3;" class="badge badge-secondary p-2">
                                            <input class="border-0 text-blue" style="font-size:19px;" type="text" value="{{$b->no_rekening}}" id="myInput" disabled>
                                            <a class="ml-1" href="" onclick="myFunction()">
                                                <i class="fas fa-copy text-gray-500" ></i>
                                            </a>
                                            </span>
                                        </li>
                                        <li class="text-black mt-2">a.n {{$b->nama_pemilik}}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <p>
                                <span style="color: #FF9F1C; font-family: 'Rubik', sans-serif; font-weight: bold;"> | </span>
                                <span class="dec-text">Silahkan Transfer Dengan Nominal</span>
                            </p>
                            <div class="row">
                                <div class="col text-black">
                                    Total Bayar
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <span style="background-color: #F3F3F3;" class="badge badge-secondary p-2">
                                        <input class="border-0 text-blue" style="font-size:19px;" type="text" value="Rp. {{($t->kuantiti*$t->price)+$d->ongkir-$t->discount}}" id="myInput" data-toggle="tooltip" title="Some tooltip text!" disabled>
                                        <a class="ml-1" href="" onclick="myFunction()">
                                            <i class="fas fa-copy text-gray-500" ></i>
                                        </a>
                                        </span>
                                </div>
                                <div class="col">
                                    <button class="btn button-custome btn-block text-light" data-toggle="modal" data-target="#exampleModal">Lihat Detail</button>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-6">
                                    Pastikan nominal sesuai hingga 1 digit terakhir
                                </div>
                                <div class="col">
                                    <button type="button" class="btn button-outline-custome btn-block" data-toggle="modal" data-target="#exampleModal2">
                                        Lihat My Order
                                        </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 mt-2">
                    <!-- title KOMISI FISIK -->
                    <div class="d-sm-flex align-items-center justify-content-between">
                        <a href="#">
                            <p
                                style="color:white;font-family: 'Rubik', sans-serif; font-weight: 600; font-size: 30px;">
                                <span
                                    style="color: #FF9F1C; font-family: 'Rubik', sans-serif; font-weight: bold;">
                                    | </span>
                                    Cara Bayar <span style="font-weight: 100;"></span>
                            </p>
                        </a>
                    </div>
                    <!-- title KOMISI FISIK-->
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <ol style="margin-left: -20px;" class="text-white">
                        <li>Transfer
                            <strong>
                                Jumlah yang harus dibayar 
                            </strong> 
                            melalui ATM atau M-Banking Anda</li>
                        <li>Jika sudah di transfer klik tombol 
                            <a href="#" class="badge badge-warning text-white">Uploud Bukti Bayar</a>
                            , lalu unggah bukti transfer tagihan pembayaran anda dan klik tombol save
                        </li>
                        <li>Pastikan pembayaran Anda sudah BERHASIL dan UNGGAH BUKTI BAYAR untuk mempercepat proses verifikasi</li>
                        </ol>
                </div>
            </div>
        </div>

<!-- Modal detail pembayaran-->
<div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header" style="border-bottom: 0px;">
            <h5 class="modal-title" id="exampleModalLabel">
                <p>
                    <span style="color: #FF9F1C; font-family: 'Rubik', sans-serif; font-weight: bold;"> | </span>
                    <span class="dec-text">Detail Pengiriman</span>
                </p>
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="row mb-1">
                <div class="col-6">Total Harga ({{$t->kuantiti}} barang)</div><div class="col-6 text-right text-black">{{$t->price}}</div>
            </div>
            <div class="row mb-1">
                <div class="col-6">Total Ongkos Kirim</div><div class="col-6 text-right text-black">Rp.{{$d->ongkir}}</div>
            </div>
            <div class="row mb-1">
                <div class="col-6">Kode Unik</div><div class="col-6 text-right text-red">+Rp2</div>
            </div>
            <div class="row mb-3">
                <div class="col-6">Status Pembayaran</div><div class="col-6 text-right text-black">Menunggu Pembayaran</div>
            </div>
            <hr>
            <div class="row mb-2">
                <div class="col-6 text-black font-weight-bold">Total Bayar</div><div class="col-6 text-right text-custome font-weight-bold">Rp {{($t->kuantiti*$t->price)+$d->ongkir-$t->discount}}</div>
            </div>
            <hr>
            <div class="row mb-2">
                <div class="col-6 text-black font-weight-bold">Barang yang dibeli</div>
            </div>
            <div class="row mb-2">
                <div class="col-6"><span class="text-custome font-weight-bold"> {{$t->product->name}}</span> x{{$t->kuantiti}}</div><div class="col-6 text-right text-black">Rp {{($t->kuantiti*$t->price)+$d->ongkir-$t->discount}}</div>
            </div>
            <div class="row mb-1">
                <div class="col-6">Ongkos Kirim</div>
            </div>
            <div class="row mb-1">
                <div class="col-6 text-black">AnterAja</div>
            </div>
            <div class="row mb-3">
                <div class="col-6 text-black">Reguler (2-4 hari)</div>
            </div>
            <div class="row mb-1">
                <div class="col-6 text-black font-weight-bold">Alamat Pengiriman</div>
            </div>
            <div class="row mb-1">
                <div class="col-12 text-black">Jl. Edelweis, Karangsatria, Kec. Tambun Utara, Bekasi, Jawa Barat 17510</div>
            </div>
        </div>

    </div>
</div>
</div>

<!-- Modal 2-->
<div class="modal fade bd-example-modal-lg" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header" style="border-bottom: 0px;">
            <h5 class="modal-title" id="exampleModalLabel">
                <p>
                    <span style="color: #FF9F1C; font-family: 'Rubik', sans-serif; font-weight: bold;"> | </span>
                    <span class="dec-text">Detail Penerima</span>
                </p>
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="row text-black mb-3">
                <div class="col-3">Nama Penerima</div><div class="col-4"> : {{$d->name}}</div>
            </div>
            <div class="row text-black mb-3">
                <div class="col-3">No. Hp Penerima</div><div class="col-4"> : {{$d->no_hp}}</div>
            </div>
            <div class="row text-black mb-3">
                <div class="col-3">Marketplace</div><div class="col-8"> : Tokopedia</div>
            </div>
            <div class="row text-black mb-3">
                <div class="col-3">Olshop</div><div class="col-4"> : mocmembershop</div>
            </div>
            <div class="row text-black mb-3">
                <div class="col-3">Resi</div><div class="col-4"> : {{$d->no_resi != null ? $d->no_resi : 'Belum ada resi' }}</div>
            </div>
            <div class="row text-black mb-3">
                <div class="col-3">Alamat</div><div class="col-4"> : {{$d->alamat}}</div>
            </div>
            <div class="row text-black mb-3">
                <div class="col-3">Kode Pos</div><div class="col-4"> : {{$d->kode_pos}}</div>
            </div>
            <div class="row mt-5">
                <div class="col-12">
                    <p class="h5">
                        <span style="color: #FF9F1C; font-family: 'Rubik', sans-serif; font-weight: bold;"> | </span>
                        <span class="dec-text">Detail Penerima</span>
                    </p>
                </div>
            </div>
            <div class="row text-black mt-2 mb-3">
                <div class="col-10">
                    <img src="img/item/image.png" class="mr-2" width="44px" height="40" alt="">
                    <span class="text-custome font-weight-bold">
                        {{$t->product->name}}
                        <span class="">x{{$t->kuantiti}}</span>
                    </span>
                </div>
                <div class="col-2 text-right">Rp {{($t->kuantiti*$t->price)+$d->ongkir-$t->discount}}</div>
            </div>
        </div>

    </div>
</div>
</div>
@endsection