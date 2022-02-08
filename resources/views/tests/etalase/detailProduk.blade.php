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
            <div class="item"><img src="{{substr($product->image,0,4) == 'http' ? $product->image : asset(Storage::url('product/main/'.$product->image))}}" alt=""></div>
            <div class="item"><img src="{{substr($product->image,0,4) == 'http' ? $product->image : asset(Storage::url('product/main/'.$product->image))}}" alt=""></div>
            <div class="item"><img src="{{substr($product->image,0,4) == 'http' ? $product->image : asset(Storage::url('product/main/'.$product->image))}}" alt=""></div>
            <div class="item"><img src="{{substr($product->image,0,4) == 'http' ? $product->image : asset(Storage::url('product/main/'.$product->image))}}" alt=""></div>
            <div class="item"><img src="{{substr($product->image,0,4) == 'http' ? $product->image : asset(Storage::url('product/main/'.$product->image))}}" alt=""></div>
            <div class="item"><img src="{{substr($product->image,0,4) == 'http' ? $product->image : asset(Storage::url('product/main/'.$product->image))}}" alt=""></div>
            <div class="item"><img src="{{substr($product->image,0,4) == 'http' ? $product->image : asset(Storage::url('product/main/'.$product->image))}}" alt=""></div>
            <div class="item"><img src="{{substr($product->image,0,4) == 'http' ? $product->image : asset(Storage::url('product/main/'.$product->image))}}" alt=""></div>
          </div>
          <div class="owl-carousel owl-theme" id="sync2">
            <div class="item"><img src="{{substr($product->image,0,4) == 'http' ? $product->image : asset(Storage::url('product/main/'.$product->image))}}" alt=""></div>
            <div class="item"><img src="{{substr($product->image,0,4) == 'http' ? $product->image : asset(Storage::url('product/main/'.$product->image))}}" alt=""></div>
            <div class="item"><img src="{{substr($product->image,0,4) == 'http' ? $product->image : asset(Storage::url('product/main/'.$product->image))}}" alt=""></div>
            <div class="item"><img src="{{substr($product->image,0,4) == 'http' ? $product->image : asset(Storage::url('product/main/'.$product->image))}}" alt=""></div>
            <div class="item"><img src="{{substr($product->image,0,4) == 'http' ? $product->image : asset(Storage::url('product/main/'.$product->image))}}" alt=""></div>
            <div class="item"><img src="{{substr($product->image,0,4) == 'http' ? $product->image : asset(Storage::url('product/main/'.$product->image))}}" alt=""></div>
            <div class="item"><img src="{{substr($product->image,0,4) == 'http' ? $product->image : asset(Storage::url('product/main/'.$product->image))}}" alt=""></div>
            <div class="item"><img src="{{substr($product->image,0,4) == 'http' ? $product->image : asset(Storage::url('product/main/'.$product->image))}}" alt=""></div>
          </div>
        </div>
        <div class="col-xl-8">
          <div class="product-page-details">
            <h5>{{$product->name}}</h5>
            
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star c checked"></span>
              <span class="fa fa-star c checked"></span>
              <span class="fa fa-star c checked"></span>
              <span class="fa fa-star c"></span>
          <hr>
        <p>{!!$product->desc!!}</p>
          <div class="product-price digits">
              
            </div>
          </div>
          <hr>
          <div>
            <table class="product-page-width">
              <tbody>
                <tr>
                  <td>Tanggal Publish :</td>
                  <td>{{$product->created_at->format('d-M-Y')}}</td>
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
          <button id="beli" data-toggle="modal" data-target="#belii" class="btn btn-success-gradien" type="button" data-original-title="Beli" title="">Beli</button>
        </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Container-fluid Ends-->
</div>
  @include('tests.etalase.komponen.modalfisik')
@endsection
@section('footer')
<script>
  $(document).ready(function(){
   
    $('#provinci').change(function () {
     var optionKab = '';
     var ii=0;
        $.ajax({
            url: "{{route('getCity')}}",
            method: "GET",
            data: {
                province_id: this.value,
            },
            success: function (data) {
              $.each(data, function( key, value ) {
                if(ii==0){
                  optionKab += '<option selected="" disabled>Kabupaten</option>';
                }
                ii+=1;
                optionKab += '<option value="'+key+'">'+value+'</option>';
              });
              ii=0;
              $("#kabupaten").find('option').remove().end().append(optionKab);
              
            }
        });
    });
    $('#provinci').change();
    $('#kabupaten').change(function () {
     var optionKec = '';
        $.ajax({
            url: "{{route('getKecamatan')}}",
            method: "GET",
            data: {
                city_id: this.value,
            },
            success: function (data) {
              $.each(data, function( key, value ) {
                optionKec += '<option value="'+key+'">'+value+'</option>';
              });
              $("#kecamatan").find('option').remove().end().append(optionKec);
            }
        });
    });
  });
</script>

<script src="{{ asset('/assets/js/rating/jquery.barrating.js') }}"></script>
  <script src="{{asset('/assets/js/rating/rating-script.js')}}"></script>
  <script src="{{asset('/assets/js/owlcarousel/owl.carousel.js') }}"></script>
  <script src="{{asset('/assets/js/ecommerce.js') }}"></script>
@endsection