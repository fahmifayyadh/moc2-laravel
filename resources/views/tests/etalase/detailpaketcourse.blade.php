@extends('layouts.master')
@section('head')
<style>
  .checked {
  color: orange;
}
.c{
  margin-left: -10px
}
</style>
<link rel="stylesheet" type="text/css" href="{{asset('/assets/css/owlcarousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/assets/css/rating.css')}}">
@endsection
@section('content')
<div class="page-body">
  <div class="container-fluid">
    <div class="page-header">
      <div class="row">
        <div class="col-6">
          <h3>Product Detail</h3>
        </div>
      </div>
    </div>
  </div>
  <!-- Container-fluid starts-->
  <div class="container-fluid">
    <div class="card">
      <div class="row product-page-main">
        <div class="col-xl-4">
          <div class="product-slider owl-carousel owl-theme" id="sync1">
            <div class="item"><img src="{{asset(Storage::url('course/main/'.$course->image))}}" alt=""></div>
          </div>
          <div class="owl-carousel owl-theme" id="sync2">
            <div class="item"><img src="{{asset(Storage::url('course/main/'.$course->image))}}" alt=""></div>
          </div>
        </div>
        <div class="col-xl-8">
          <div class="product-page-details">
            <h5>{{$course->name}}</h5>
            
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star c checked"></span>
              <span class="fa fa-star c checked"></span>
              <span class="fa fa-star c checked"></span>
              <span class="fa fa-star c"></span>
          <hr>
        <p>{!!$course->desc!!}</p>
        <hr>
          <hr>
          <div>
            <table class="product-page-width">
              <tbody>
                <tr>
                <td>Tanggal Publish :</td>
                  <td>{{$course->created_at->format('d-M-Y')}}</td>
                </tr>
                <tr>
                  <td>Availability :</td>
                  <td class="in-stock">In stock</td>
                  <td class="out-of-stock" style="display: none;">Out Of stock</td>
                </tr>
              </tbody>
            </table>
          </div>
          <hr>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Container-fluid Ends-->
</div>
@endsection
@section('footer')
<script src="{{ asset('/assets/js/rating/jquery.barrating.js') }}"></script>
  <script src="{{asset('/assets/js/rating/rating-script.js')}}"></script>
  <script src="{{asset('/assets/js/owlcarousel/owl.carousel.js') }}"></script>
  <script src="{{asset('/assets/js/ecommerce.js') }}"></script>
@endsection