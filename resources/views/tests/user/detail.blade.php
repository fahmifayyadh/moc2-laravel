@extends('layouts.master')
@section('content')
<div class="page-body">
  <div class="container-fluid">
    <div class="page-header">
      <div class="row">
        <div class="col-lg-6">
          <h3>Layout Light</h3>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="../ltr/index.html">Home</a></li>
            <li class="breadcrumb-item">Color Version</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <div class="row justify-content-center">
  <div class="col-md-6 col-lg-6 col-xl-4 box-col-6">
    <div class="card custom-card">
      <div class="card-header"><img class="img-fluid" src="{{asset('/assets/images/user-card/7.jpg')}}" alt="" data-original-title="" title=""></div>
      <div class="card-profile"><img class="rounded-circle" src="{{$user->foto ? asset(Storage::url('/user/'.$user->foto)) : asset('/assets/images/avtar/16.jpg')}}" alt="" data-original-title="" title=""></div>
      <ul class="card-social">
        <li><a href="#" data-original-title="" title=""><i class="fa fa-facebook"></i></a></li>
        <li><a href="#" data-original-title="" title=""><i class="fa fa-google-plus"></i></a></li>
        <li><a href="#" data-original-title="" title=""><i class="fa fa-twitter"></i></a></li>
        <li><a href="#" data-original-title="" title=""><i class="fa fa-instagram"></i></a></li>
        <li><a href="#" data-original-title="" title=""><i class="fa fa-rss"></i></a></li>
      </ul>
      <div class="text-center profile-details">
      <h4>{{$user->name}}</h4>
      <h6>{{Str::title($user->role)}}</h6>
        <div class="row">
          <div class="col-md-6 mb-2">Alamat <span class="pull-right">:</span></div>
        <div class="col-md-6">{{$user->alamat}}</div>
          <div class="col-md-6 mb-2">E-mail <span class="pull-right">:</span></div>
        <div class="col-md-6">{{$user->email}}</div>
        </div>
      </div>
      <div class="card-footer row">
        <div class="col-4 col-sm-4">
          <p>Status</p>
        <p class="counter">{{$user->status}}</p>
        </div>
        <div class="col-4 col-sm-4">
          <p>Tanggal Daftar</p>
        <p><span class="counter">{{$user->created_at->format('Y-m-d')}}</span></p>
        </div>
        <div class="col-4 col-sm-4">
          <p>Total Pembelian</p>
          <p><span class="counter">96</span></p>
        </div>
      </div>
    </div>
  </div>
</div>
  @endsection
