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
            @foreach ($paket->course as $p)
                
            <div class="item"><img src="{{substr($p->image,0,4) == 'http' ? $p->image : asset(Storage::url('course/main/'.$p->image))}}" alt=""></div>
            @endforeach
          </div>
          <div class="owl-carousel owl-theme" id="sync2">
            @foreach ($paket->course as $p)
            <div class="item"><img src="{{substr($p->image,0,4) == 'http' ? $p->image : asset(Storage::url('course/main/'.$p->image))}}" alt=""></div>
                
            @endforeach
        
          </div>
        </div>
        <div class="col-xl-8">
          <div class="product-page-details">
            <h5>{{$paket->name}}</h5>
            
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star c checked"></span>
              <span class="fa fa-star c checked"></span>
              <span class="fa fa-star c checked"></span>
              <span class="fa fa-star c"></span>
          <hr>
          <p>Course yang didapat:</p>
         
          @foreach ($paket->course as $i=>$s)
          <a target="__blank" href="{{route('etalase.detail-course-paket',$s->id)}}"><p>{{$i+1}}. {{$s->name}}</p></a>
          @endforeach
          
          <div class="product-price digits">
            Rp. {{$paket->course()->sum('price')}}
          </div>
          <hr>
          <div>
            <table class="product-page-width">
              <tbody>
                <tr>
                <td>Tanggal Publish :</td>
                  <td>{{$paket->created_at->format('d-M-Y')}}</td>
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
            <button data-toggle="modal" data-target="#orderDetail" class="btn btn-success-gradien" type="button" data-original-title="Beli" title="">Beli</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Container-fluid Ends-->
</div>
<div class="modal fade" id="orderDetail" tabindex="-1" role="dialog" aria-labelledby="orderDetail" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Order</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
      </div>
      <div class="modal-body">
      <form action="{{route('ch.invoice-paketcourse',$paket->id)}}" method="post">
      @csrf
      <div class="row">
        <div class="col-md-12"><b>Pilih methode Pembayaran:</b></div>
        <div class="col-md-6 offset-2">
          <label for="">Melalui Bukti Transfer</label>
              <input type="radio" value="personal" name="methode">
              <label for="">Melalui Payment Gateway</label>
              <input type="radio" value="gateway" name="methode">
        </div>
      </div>
      <div class="form-group">
        <label for="">Kode Kupon</label>
        <input class="form-control" type="text" placeholder="kode kupon" name="kode">
        @error('kode')
<small>{{$message}}</small>
@enderror
      </div>
    </div>
    <div class="modal-footer">
      <button class="btn btn-primary" type="submit">Save changes</button>
    </form>  
          <button class="btn btn-danger" type="button" data-dismiss="modal">Close</button>
        </div> 
      </div>
    </div>
  </div>

@endsection
@section('footer')
<script src="{{ asset('/assets/js/rating/jquery.barrating.js') }}"></script>
  <script src="{{asset('/assets/js/rating/rating-script.js')}}"></script>
  <script src="{{asset('/assets/js/owlcarousel/owl.carousel.js') }}"></script>
  <script src="{{asset('/assets/js/ecommerce.js') }}"></script>
@endsection