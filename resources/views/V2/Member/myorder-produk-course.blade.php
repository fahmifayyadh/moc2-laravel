@extends('V2.layouts.master')
@section('title','My Order Course')
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
                            MY ORDER (COURSE) <span style="font-weight: 100;"></span>
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
                        <a class="dropdown-item" href="{{route('order.filterCourse','')}}">Terbaru</a>
                        <a class="dropdown-item" href="{{route('order.filterCourse','')}}">Harga Tertinggi</a>
                        <a class="dropdown-item" href="{{route('order.filterCourse','')}}">Harga Terendahg</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card bg-primary-card mb-5">
        <div
            class="card-header py-1 d-flex flex-row align-items-center justify-content-between bg-secondary-card">

        </div>
        <div class="table-responsive" style="padding: 10px;">
            <table id="table_id" class="display table table-borderless align-items-center table-flush">
                <thead class="thead bg-secondary-card">
                    <tr>
                        <th>No.</th>
                        <th>Nama Produk</th>
                        <th>Kelompok Paket</th>
                        <th>Kupon</th>
                        <th>Point Pembeli</th>
                        <th>Link Pembayaran</th>
                        <th>Tanggal Beli</th>
                        <th>Batas hari
                            penggunaan video</th>
                        <th>Harga</th>
                        <th>Status</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>
                    <!-- loop data -->
                    @foreach ($transCourse ?? [] as $i => $tc)
                    <tr class=" text-custome">
                        <td>{{$i+1}}</td>
                        <td>{{$tc->paket->name}}</td>
                        <td>E-course</td>
                        <td>{{$tc->kupon != null ? $tc->kupon->kode.'-'.$tc->discount : 'Not Use'}}</td>
                        <td>{{$tc->point_pembeli}}</td>
                        <td>@if (is_null($tc->link_invoice))
                            @include('tests.order.komponen.invoice')
                            <label class="badge badge-primary p-2 mb-2" data-toggle="modal"
                            data-target="#person{{$tc->id}}"
                            style="cursor: pointer">Lihat Pembayaran</label>
                            @elseif(!is_null($tc->link_invoice) )
                            @include('tests.order.komponen.invoicegateway')
                            <label class="badge badge-primary p-2 mb-2" data-toggle="modal"
                            data-target="#gate{{$tc->id}}"
                            style="cursor: pointer">Lihat</label>
                            @else

                            @endif
                                @if ($tc->status != 'selesai' && $tc->link_invoice == null)
                        <label class="badge badge-warning p-2" data-toggle="modal" data-target="#bukti{{$tc->id}}" style="cursor: pointer;">Upload Bukti</label></td>
                            @endif

                        </td>
                        <td> {{$tc->created_at->format('d-m-Y')}}</td>
                        <td>{{$tc->status == 'selesai' ? \Carbon\Carbon::parse($tc->batas)->format('d-M-Y') ?? 'Life time' : 'Belum Dibayar'}}</td>
                        <td>Rp  {{number_format($tc->price-$tc->discount,0,'.','.')}}</td>

                        @include('V2.Member.modal.myorder.badgecourse')
                        
                        <td><label class="btn btn-success btn-sm text-light" data-toggle="modal" data-target="#orderDetail{{$tc->id}}" style="cursor: pointer;">Detail Order</label>
                    </tr>
                        {{-- upload bukti --}}
                    @include('V2.Member.modal.myorder.bukti')
                    {{-- end upload bukti --}}
                    @include('V2.Member.modal.myorder.detail')
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