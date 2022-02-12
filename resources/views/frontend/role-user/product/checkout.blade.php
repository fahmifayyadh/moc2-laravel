@extends('frontend.layouts.master')
@section('head')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

<!-- Latest compiled and minified JavaScript -->

@endsection
@section('content')
<div class="page-body checkout">
    <div class="container-fluid">
      <div class="page-header">
        <div class="row">
          <div class="col-6">
            <div class="page-header-left">                                   
              <h3>Checkout</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
      <div class="card">
        <div class="card-header">
          <h5>Billing Details</h5>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-lg-6 col-sm-12">
              <form>
                <div class="row">
                  <div class="form-group col-sm-12">
                    <label for="inputEmail4">Nama</label>
                    <input class="form-control" id="inputEmail4" type="email">
                  </div>
                 
                </div>
                <div class="row">
                  <div class="form-group col-sm-12">
                    <label for="inputEmail5">No Hp</label>
                    <input class="form-control" id="inputEmail5" type="email">
                  </div>
                </div>
                <div class="form-group">
                    <label for="inputAddress5">Alamat</label>
                    <textarea name="alamat" class="form-control" placeholder="Alamat" id="" cols="30" rows="3"></textarea>
                  </div>
                <div class="form-group">
                    <label for="inputEmail4">Provinsi</label>
                    <select class="form-control selectpicker" id="search-produk"  data-size="5" data-live-search="true">
                        <option selected="" disabled>Provinsi</option>
                        <option data-tokens="skincare">Jatim</option>
                        <option data-tokens="abc">Jateng</option>
                        <option data-tokens="cobaa">Jabar</option>

                        <option data-tokens="skinc1are">Jakarta</option>
                        <option data-tokens="ab1c">Jogja</option>
                        <option data-tokens="co1baa">cobaa</option>
                        <option data-tokens="sk1incare">skincare</option>
                        <option data-tokens="ab1c">abc</option>
                        <option data-tokens="cob1aa">cobaa</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="inputEmail4">Kabupaten</label>
                    <select class="form-control selectpicker" id="search-produk"  data-size="5" data-live-search="true">
                        <option selected="" disabled>Kabupaten</option>
                        <option data-tokens="skincare">Jatim</option>
                        <option data-tokens="abc">Jateng</option>
                        <option data-tokens="cobaa">Jabar</option>

                        <option data-tokens="skinc1are">Jakarta</option>
                        <option data-tokens="ab1c">Jogja</option>
                        <option data-tokens="co1baa">cobaa</option>
                        <option data-tokens="sk1incare">skincare</option>
                        <option data-tokens="ab1c">abc</option>
                        <option data-tokens="cob1aa">cobaa</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="inputEmail4">Kecamatan</label>
                    <select class="form-control selectpicker" id="search-produk"  data-size="5" data-live-search="true">
                        <option selected="" disabled>Kecamatan</option>
                        <option data-tokens="skincare">Jatim</option>
                        <option data-tokens="abc">Jateng</option>
                        <option data-tokens="cobaa">Jabar</option>

                        <option data-tokens="skinc1are">Jakarta</option>
                        <option data-tokens="ab1c">Jogja</option>
                        <option data-tokens="co1baa">cobaa</option>
                        <option data-tokens="sk1incare">skincare</option>
                        <option data-tokens="ab1c">abc</option>
                        <option data-tokens="cob1aa">cobaa</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="inputEmail4">Kode Pos</label>
                    <select class="form-control selectpicker" id="search-produk"  data-size="5" data-live-search="true">
                        <option selected="" disabled>Kode pos</option>
                        <option data-tokens="skincare">Jatim</option>
                        <option data-tokens="abc">Jateng</option>
                        <option data-tokens="cobaa">Jabar</option>

                        <option data-tokens="skinc1are">Jakarta</option>
                        <option data-tokens="ab1c">Jogja</option>
                        <option data-tokens="co1baa">cobaa</option>
                        <option data-tokens="sk1incare">skincare</option>
                        <option data-tokens="ab1c">abc</option>
                        <option data-tokens="cob1aa">cobaa</option>
                    </select>
                </div>
                {{-- <div class="form-group">
                    <label for="inputEmail4">Expedisi</label>
                    <select class="form-control selectpicker" id="search-produk"  data-size="5" data-live-search="true">
                        <option selected="" disabled>Expedisi</option>
                        <option data-tokens="skincare">Jatim</option>
                        <option data-tokens="abc">Jateng</option>
                        <option data-tokens="cobaa">Jabar</option>

                        <option data-tokens="skinc1are">Jakarta</option>
                        <option data-tokens="ab1c">Jogja</option>
                        <option data-tokens="co1baa">cobaa</option>
                        <option data-tokens="sk1incare">skincare</option>
                        <option data-tokens="ab1c">abc</option>
                        <option data-tokens="cob1aa">cobaa</option>
                    </select>
                </div> --}}
                <div class="form-group">
                  <div class="form-check">
                    <input class="form-check-input" id="gridCheck" type="checkbox">
                    <label class="form-check-label" for="gridCheck">Check me out</label>
                  </div>
                </div>
              </form>
            </div>
            <div class="col-lg-6 col-sm-12">
              <div class="checkout-details">
                <div class="order-box">
                  <div class="title-box">
                    <div class="checkbox-title">
                      <h4>Product </h4><span>Total</span>
                    </div>
                  </div>
                  <ul class="qty">
                    <li>Pink Slim Shirt × 1 <span>$25.10</span></li>
                    <li>SLim Fit Jeans × 1 <span>$555.00</span></li>
                  </ul>
                  <ul class="sub-total">
                    <li>Subtotal <span class="count">$380.10</span></li>
                    <li class="shipping-class">Expedisi
                      <div class="shopping-checkout-option">
                        <select class=" selectpicker" id="search-produk"  data-size="5" data-live-search="true">
                            <option selected="" disabled>Expedisi</option>
                            <option data-tokens="skincare">JNE</option>
                            <option data-tokens="abc">J&T</option>
                            <option data-tokens="cobaa">POS</option>
    
                            <option data-tokens="skinc1are">Jakarta</option>
                            <option data-tokens="ab1c">Jogja</option>
                            <option data-tokens="co1baa">cobaa</option>
                            <option data-tokens="sk1incare">skincare</option>
                            <option data-tokens="ab1c">abc</option>
                            <option data-tokens="cob1aa">cobaa</option>
                        </select>
                      </div>
                    </li>
                  </ul>
                  <ul class="sub-total total">
                    <li>Total <span class="count">$620.00</span></li>
                  </ul>
                  <div class="animate-chk">
                    <div class="row">
                      <div class="col">
                        <label class="d-block" for="edo-ani1">
                          <input class="radio_animated" id="edo-ani1" type="radio" name="rdo-ani" data-original-title="" title="">Bank 
                          <select class=" selectpicker" id="search-produk"  data-size="5" data-live-search="true">
                            <option selected="" disabled>Bank</option>
                            <option data-tokens="skincare">BCA</option>
                            <option data-tokens="abc">BRI</option>
                            <option data-tokens="cobaa">BNI</option>
    
                            <option data-tokens="skinc1are">Jakarta</option>
                            <option data-tokens="ab1c">Jogja</option>
                            <option data-tokens="co1baa">cobaa</option>
                            <option data-tokens="sk1incare">skincare</option>
                            <option data-tokens="ab1c">abc</option>
                            <option data-tokens="cob1aa">cobaa</option>
                        </select>
                        
                        </label>
                        <br>
                        {{-- <label class="d-block" for="edo-ani2">
                          <input class="radio_animated" id="edo-ani2" type="radio" name="rdo-ani" checked="" data-original-title="" title="">PayPal<img class="img-paypal" src="../assets/images/checkout/paypal.png" alt="">
                        </label> --}}
                      </div>
                    </div>
                  </div>
                  <div class="text-right"><a class="btn btn-primary" href="invoice-member">Beli  </a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Container-fluid Ends-->
  </div>

@endsection                        
@section('footer')
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

<!-- (Optional) Latest compiled and minified JavaScript translation files -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/i18n/defaults-*.min.js"></script>
@endsection