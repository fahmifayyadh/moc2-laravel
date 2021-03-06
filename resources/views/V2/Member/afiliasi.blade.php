@extends('V2.layouts.master')
@section('head')
<script>
    function myFunction(l = 0) {
        var copyText = document.getElementById(l == 0 ? "myInput" : "myInput1");
        copyText.select();
        copyText.setSelectionRange(0, 99999)
        document.execCommand("copy");
    }
</script>
@endsection
@section('content')
<div class="page-body">
  <div class="container-fluid">
    <div class="page-header">
      <div class="row">
        <div class="col-12">
 
 <!-- Container Fluid-->
 <div class="container-fluid" id="container-wrapper">
                    <div class="row">
                        <div class="col-6">
                            <!-- title Leaderboard -->
                            <div class="d-sm-flex align-items-center justify-content-between">
                                <a href="allproduct.html">
                                    <p
                                        style="color:white;font-family: 'Rubik', sans-serif; font-weight: 600; font-size: 30px;">
                                        <span
                                            style="color: #FF9F1C; font-family: 'Rubik', sans-serif; font-weight: bold;">
                                            | </span>
                                        LINK AFILIASI <span style="font-weight: 100;"></span>
                                    </p>
                                </a>
                            </div>
                            <!-- title Leaderboard-->
                        </div>
                        <div class="col-6"></div>
                    </div>
                    <div class="card bg-primary-card mb-5">
                        <div class="card-body">
                            <p class="text-title-link">Link Produk</p>
                            <form action="{{route('afiliasi.generate')}}" method="POST">
                            @csrf
                                <div class="form-row">
                                    <div class="col-10">
                                        <select class="form-control" id="exampleFormControlSelect1">
                                            @foreach ($products as $p)
                                            <option  value="{{$p->id}}">{{$p->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col">
                                        <button type="submit"  class="btn button-custome btn-sm text-light form-control">generate</button>
                                    </div>
                                </div>
                                <p class="text-title-link mt-3">Halaman Penjualan / Sales Page</p>
                                <div class="form-row">
                                    <div class="col-6">
                                        <input id="myInput" name="aff-link-0" type="text" class="form-control"  value="{{$link ?? 'Kosong'}}/salesPage" placeholder="mocmembership.com/order-sponsor/2/8P" readonly="">
                                    </div>
                                    <div class="col-2">
                                        <button class="btn btn-success btn-sm text-light form-control" onclick="myFunction()">copy</button>
                                    </div>
                                </div>
                                <p class="text-title-link mt-3">Halaman Checkout</p>
                                <div class="form-row">
                                    <div class="col-6">
                                        <input id="myInput1" name="aff-link-1"  value="{{$link ?? 'Kosong'}}" type="text" class="form-control" placeholder="mocmembership.com/order-sponsor/2/8P" readonly="">
                                    </div>
                                    <div class="col-2">
                                        <button onclick="myFunction(1)" class="btn btn-success btn-sm text-light form-control">copy</button>
                                    </div>
                                </div>
                            </form> 
                        </div>
                        <div class="card-footer bg-primary-card"></div>
                    </div>
                </div>
                </div>
</div>
</div>
</div>
</div>
@endsection