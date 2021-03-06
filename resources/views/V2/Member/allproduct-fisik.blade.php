@extends('V2.layouts.master')
@section('title','All Product Fisik')
@section('css')
<link href="{{asset('admin/css/custom.css')}}" rel="stylesheet">
<style>
    input:focus{
        border: none;
    }
</style>
@endsection
@section('content')
<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="row">
        <div class="col-6">
            <!-- title Leaderboard -->
            <div class="d-sm-flex align-items-center justify-content-between">
                <a href="#">
                    <p
                        style="color:white;font-family: 'Rubik', sans-serif; font-weight: 600; font-size: 30px;">
                        <span
                            style="color: #FF9F1C; font-family: 'Rubik', sans-serif; font-weight: bold;">
                            | </span>
                        All Product <span style="font-weight: 100;">(Produk Fisik)</span>
                    </p>
                </a>
            </div>
            <!-- title Leaderboard-->
        </div>
        <div class="col-4">
            <div class="box">
                    <i class="fa fa-search" aria-hidden="true"></i>
                    <form action="{{route('etalase.searchProduk')}}" method="get"><input type="text" name="name" placeholder="cari barang" id="search" style="background: transparent;border: none;color: white;margin-left: 5px;"></form>
            </div>
        </div>
        <div class="col-2">
            <div class="text-right">
                <div class="dropdown">
                    <button class="btn btn-primary text-custome bg-secondary-card border-0" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                        aria-expanded="false">
                        <i class="fas fa-filter"></i>
                        Filter</button>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="{{route('etalase.product')}}">Terbaru</a>
                        <a class="dropdown-item" href="{{route('etalase.filter-produk-termahal')}}">Harga Tertinggi</a>
                        <a class="dropdown-item" href="{{route('etalase.filter-produk-termurah')}}">Harga Terendah</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="row mb-4">
        <div class="col-12">
            <button class="btn button-custome text-roboto mr-2 px-4 text-light" data-toggle="modal" data-target="#exampleModal">Skincare</button>
            <button class="btn btn-outline-dark text-roboto mr-2 px-4 text-light" data-toggle="modal" data-target="#exampleModal">Supplement</button>
            <button class="btn btn-outline-dark text-roboto mr-2 px-4 text-light" data-toggle="modal" data-target="#exampleModal">F&B</button>
            <button class="btn btn-outline-dark text-roboto mr-2 px-4 text-light" data-toggle="modal" data-target="#exampleModal">Fashion</button>
        </div>
    </div> -->
    <!-- data product -->
    <div class="row mx-lg-n3 mx-md-n1 mx-lg-n1">
        <!-- loop product -->
        <?php
        $getName = null;
        if ($_GET) {
            $getName = $_GET['name'];
        }
        ?>
        @foreach ($produk as $c)
        @if (Request::path() == 'etalase/product' || 'etalase/product/search?name=$getName')
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card w-80" style="height: 100%">
                <a href="{{route(Request::path() == 'etalase/product' || 'etalase/product/search?name=$getName' ? 'etalase.detail-produk' : 'etalase.detail-course',$c->id) }}"><img class="card-img-top mx-auto d-block img-fluid" style="height: 20rem; object-fit: cover;height: 300px;width:300px"
                src="{{asset(Storage::url(Request::path() == 'etalase/product' || 'etalase/product/search?name=$getName' ? 'product/main/'.$c->image : 'paket/'.$c->image))}}" alt="Card image cap"></a>
                <div class="card-body">
                    <h5 class="card-title text-black">{{$c->name}}</h5>
                    @if (Request::path() == 'etalase/product' || 'etalase/product/search?name=$getName')
                    <p class="card-text mb-0 text-black">
                        produk fisik
                    </p>
                    <span class="badge badge-success mb-1">Harga Varian</span>
                </div>
                <div class="card-footer">
                    @forelse ($c->Varian()->get() as $v)
                    <p class="text-custome">
                        <span class="text-black">{{$v->name}} : </span>
                        Rp.{{number_format($v->price,0,'.','.')}}
                    </p>
                    @empty
                        Empty Price
                    @endforelse
                    @else
                    {!! $c->is_member ? '<span class="badge badge-info ml-2 text-white"> free Member </span>' : null !!}
                    <p class="text-custome">
                        <span class="text-black">E-course :</span>
                        Rp.{{number_format($c->price,0,'.','.')}}
                        <div class="float-right">
                            <p class="text-custome align-top"><i class="fas fa-star fa-sm"></i> 5.0</p>
                        </div>
                    </p>
                    @endif
                </div>
            </div>
        </div>
        @endif
        @endforeach
    </div>
</div>
@endsection