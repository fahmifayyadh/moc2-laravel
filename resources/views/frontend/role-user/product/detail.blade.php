@extends('frontend.layouts.master')
@section('head')
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
            <div class="item"><img src="../assets/images/ecommerce/01.jpg" alt=""></div>
            <div class="item"><img src="../assets/images/ecommerce/02.jpg" alt=""></div>
            <div class="item"><img src="../assets/images/ecommerce/03.jpg" alt=""></div>
            <div class="item"><img src="../assets/images/ecommerce/04.jpg" alt=""></div>
            <div class="item"><img src="../assets/images/ecommerce/05.jpg" alt=""></div>
            <div class="item"><img src="../assets/images/ecommerce/06.jpg" alt=""></div>
            <div class="item"><img src="../assets/images/ecommerce/07.jpg" alt=""></div>
            <div class="item"><img src="../assets/images/ecommerce/08.jpg" alt=""></div>
          </div>
          <div class="owl-carousel owl-theme" id="sync2">
            <div class="item"><img src="../assets/images/ecommerce/01.jpg" alt=""></div>
            <div class="item"><img src="../assets/images/ecommerce/02.jpg" alt=""></div>
            <div class="item"><img src="../assets/images/ecommerce/03.jpg" alt=""></div>
            <div class="item"><img src="../assets/images/ecommerce/04.jpg" alt=""></div>
            <div class="item"><img src="../assets/images/ecommerce/05.jpg" alt=""></div>
            <div class="item"><img src="../assets/images/ecommerce/06.jpg" alt=""></div>
            <div class="item"><img src="../assets/images/ecommerce/07.jpg" alt=""></div>
            <div class="item"><img src="../assets/images/ecommerce/08.jpg" alt=""></div>
          </div>
        </div>
        <div class="col-xl-8">
          <div class="product-page-details">
            <h5>Fusion white & blue printed regular fit asymmetric</h5>
            <div class="d-flex">
              <select id="u-rating-fontawesome" name="rating" autocomplete="off">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select><span>(250 review)</span>
            </div>
          </div>
          <hr>
          <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p>
          <div class="product-price digits">
            <del>$350.00    </del>$26.00
          </div>
          <hr>
          <div>
            <table class="product-page-width">
              <tbody>
                <tr>
                  <td>Category :</td>
                  <td>shopcart_fashion</td>
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
            <a href="checkout-member"><button class="btn btn-success-gradien" type="button" data-original-title="Beli" title="">Beli</button></a>
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