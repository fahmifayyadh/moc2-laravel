@extends('layouts.master')
@section('content')
<div class="page-body">
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-12">
                    <!-- Container-fluid starts-->
                    <div class="container">

                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="invoice">
                                        <div style="padding-left: px;">
                                            <div>
                                                <div>

                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="media">
                                                                <div class="media-left"> </div>
                                                                <div class="media-body m-l-20">
                                                                    <h4 class="media-heading">My Order</h4>
                                                                </div>
                                                            </div>
                                                            <!-- End Info-->
                                                        </div>

                                                        <div class="col-sm-6">
                                                            <div class="text-md-right">

                                                                <br>
                                                                <br>

                                                                <div class="dropdown-basic">
                                                                    <div class="row justify-content-end">
                                                                        <div style="padding-left: 10px;">
                                                                            <!-- <button class="btn btn-info btn-lg" type="button">Tambah Course</button> -->
                                                                            <div class="dropdown">
                                                                                <div class="btn-group mb-0">
                                                                                    <button
                                                                                        class="dropbtn btn-warning btn-round"
                                                                                        type="button">Filter <span><i
                                                                                                class="icofont icofont-arrow-down"></i></span></button>
                                                                                    <div class="dropdown-content"><a
                                                                                            href="{{route('order.filterCourse','selesai')}}">Sudah
                                                                                            Di Bayar/Selesai</a><a
                                                                                            href="{{route('order.filterCourse','pembayaran')}}">Belum
                                                                                            di bayar</a><a
                                                                                            href="{{route('order.filterCourse','batal')}}">Batal</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!-- <button class="btn btn-pill btn-info btn-sm" type="button" data-original-title="btn btn-pill btn-info btn-sm" title="">Tambah Course</button> -->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- End Title-->
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                                <!-- End InvoiceTop-->
                                                <h3></h3>
                                                <!-- Start Invoice Top-->
                                                <br>
                                                <!-- End Invoice Mid-->
                                                <!-- <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">Data Tables</li>
                      </ol> -->
                                            </div>
                                            <div class="col-12">
                                                <!-- Bookmark Start-->
                                                <div class="card">
                                                    <div class="table-responsive invoice-table" id="table">
                                                        <table class="table table-bordered table-striped">
                                                            <tbody>
                                                                <tr>
                                                                    <td class="Number">
                                                                        <h5 class="p-2 mb-0">No</h5>
                                                                    </td>
                                                                    <td class="Pembeli">
                                                                        <h5 class="p-2 mb-0">Nama Produk</h5>
                                                                    </td>
                                                                    <td class="Afiliasi">
                                                                        <h5 class="p-2 mb-0">Kelompok Paket</h5>
                                                                    </td>
                                                                    <td class="Afiliasi">
                                                                        <h5 class="p-2 mb-0">Kupon</h5>
                                                                    </td>
                                                                    <td class="Afiliasi">
                                                                        <h5 class="p-2 mb-0">Point pembeli</h5>
                                                                    </td>
                                                                    <td class="Afiliasi">
                                                                        <h5 class="p-2 mb-0">Link Pembayaran</h5>
                                                                    </td>

                                                                    <td class="Penjual">
                                                                        <h5 class="p-2 mb-0"> Tanggal Beli</h5>
                                                                    </td>
                                                                    <td class="Komisi">
                                                                        <h5 class="p-2 mb-0">Batas hari penggunaan video</h5>
                                                                    </td>
                                                                    <td class="Komisi">
                                                                        <h5 class="p-2 mb-0">harga</h5>
                                                                    </td>
                                                                    <td class="Status">
                                                                        <h5 class="p-2 mb-0">Status</h5>
                                                                    </td>
                                                                    <td class="Action">
                                                                        <h5 class="p-2 mb-0">Action</h5>
                                                                    </td>
                                                                </tr>
                        
                                                                @foreach ($transCourse ?? [] as $i => $tc)
                                                               
                                                                    <tr>
                                                                        <td>
                                                                            <label>{{$i+1}}</label>
                                                                        </td>
                                                                        <td>
                                                                            <p class="itemtext">{{$tc->paket->name}}
                                                                            </p>
                                                                        </td>
                                                                        <td>
                                                                            <p class="itemtext date">
                                                                                E-course</p>
                                                                        </td>
                                                                        <td>
                                                                            <p class="itemtext date">
                                                                                {{$tc->kupon != null ? $tc->kupon->kode.'-'.$tc->discount : 'Not Use'}}
                                                                            </p>
                                                                        </td>
                                                                        <td>{{$tc->point_pembeli}}</td>
                                                                        <td>
                                                                            @if (is_null($tc->link_invoice))
                                                                            @include('tests.order.komponen.invoice')
                                                                            <label class="text-info" data-toggle="modal"
                                                                                data-target="#person{{$tc->id}}"
                                                                                style="cursor: pointer">Lihat</label>
                                                                            @elseif(!is_null($tc->link_invoice) )
                                                                            @include('tests.order.komponen.invoicegateway')
                                                                            <label class="text-info" data-toggle="modal"
                                                                                data-target="#gate{{$tc->id}}"
                                                                                style="cursor: pointer">Lihat</label>
                                                                            @else

                                                                            @endif
                                                                        </td>
                                                                        <td>
                                                                            <p class="itemtext digits">
                                                                                {{$tc->created_at->format('d-m-Y')}}</p>
                                                                        </td>
                                                                        <td>
                                                                            <p class="itemtext digits">
                                                                                {{$tc->status == 'selesai' ? \Carbon\Carbon::parse($tc->batas)->format('d-M-Y') ?? 'Life time' : 'Belum Dibayar'}}
                                                                            </p>
                                                                        </td>
                                                                        <td>
                                                                            <p class="itemtext digits">
                                                                                {{number_format($tc->price-$tc->discount,0,'.','.')}}
                                                                            </p>
                                                                        </td>
                                                                        @include('tests.order.komponen.badgecourse')
                                                                        <td>
                                                                            <button type="button"
                                                                                class="btn btn-primary btn-sm"
                                                                                data-toggle="modal"
                                                                                data-target="#orderDetail{{$tc->id}} ">
                                                                              Detail</button>
                                                                            @if ($tc->status != 'selesai' && $tc->link_invoice == null)
                                                                            <button type="button"
                                                                                class="btn btn-warning btn-sm"
                                                                                data-toggle="modal"
                                                                                data-target="#bukti{{$tc->id}}">Bukti</button>
                                                                            @endif

                                                                        </td>
                                                                        {{-- upload bukti --}}
                                                                        @include('tests.order.komponen.bukti')
                                                                        {{-- end upload bukti --}}
                                                                        @include('tests.order.komponen.detail')
                                                                    </tr>
                                                                    @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <!-- End Table-->

                                                </div>
                                                <!-- End Table-->
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        @if ($cx ?? false)
                                                        {{$transCourse->links()}}
                                                        @endif
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- End InvoiceBot-->
                                    </div>
                                </div>
                                <!-- End Invoice-->
                                <!-- End Invoice Holder-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
