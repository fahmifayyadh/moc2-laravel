@extends('frontend.layouts.master')
@section('content')
<div class="page-body">
    <br>
    <div class="container-fluid product-wrapper">
        <div class="product-grid">
          <div class="feature-products">
            <div class="row">
              <div class="col-md-6 products-total">
                <h1>Product</h1>
              </div>
              <div class="col-md-6 text-right"><span class="f-w-600 m-r-5">Showing Products 1 - 24 Of 200 Results</span>
                <div class="select2-drpdwn-product select-options d-inline-block">
                  <select class="form-control btn-square" name="select">
                    <option value="opt1">Featured</option>
                    <option value="opt2">Lowest Prices</option>
                    <option value="opt3">Highest Prices</option>
                  </select>
                </div>
              </div>
            </div>

          </div>
          <div class="product-wrapper-grid">
            <div class="row">
              <div class="col-xl-3 col-sm-6 xl-4">
                <div class="card">
                  <div class="product-box">
                    <div class="product-img"><img class="img-fluid" src="../assets/images/ecommerce/01.jpg" alt="">
                      <div class="product-hover">
                        <ul>
                          {{-- <li>
                            <button class="btn" type="button"><i class="icon-shopping-cart"></i></button>
                          </li> --}}
                          <li>
                            <a href="{{ route('detail-member') }}"><button class="btn" type="button"><i class="icon-eye"></i></button></a>
                          </li>
                          {{-- <li>
                            <button class="btn" type="button"><i class="icofont icofont-law-alt-2"></i></button>
                          </li> --}}
                        </ul>
                      </div>
                    </div>
                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
                      <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <div class="product-box row">
                              <div class="product-img col-md-6"><img class="img-fluid" src="../assets/images/ecommerce/01.jpg" alt=""></div>
                              <div class="product-details col-md-6 text-left">
                                <h4>Woman</h4>
                                <div class="product-price">
                                  <del>$350.00    </del>$26.00
                                </div>
                                <div class="product-view">
                                  <h6 class="f-w-600">Kategori</h6>
                                  <p class="mb-0">Produk detail Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo.</p>
                                </div>

                                <div class="product-qnty">
                                  {{-- <h6 class="f-w-600">Quantity</h6>
                                  <fieldset>
                                    <div class="input-group">
                                      <input class="touchspin text-center" type="text" value="5">
                                    </div>
                                  </fieldset> --}}
                                  <div class="addcart-btn">
                                    <button class="btn btn-primary" type="button">Beli</button>

                                  </div>
                                </div>
                              </div>
                            </div>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="product-details">
                      <h4>Woman</h4>
                      <p>Kategori Produk.</p>
                      <div class="product-price">
                        <del>$350.00    </del>$26.00
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-xl-3 col-sm-6 xl-4">
                <div class="card">
                  <div class="product-box">
                    <div class="product-img"><img class="img-fluid" src="../assets/images/ecommerce/01.jpg" alt="">
                      <div class="product-hover">
                        <ul>
                          {{-- <li>
                            <button class="btn" type="button"><i class="icon-shopping-cart"></i></button>
                          </li> --}}
                          <li>
                            <a href="{{ route('detail-member') }}"><button class="btn" type="button"><i class="icon-eye"></i></button></a>
                          </li>
                          {{-- <li>
                            <button class="btn" type="button"><i class="icofont icofont-law-alt-2"></i></button>
                          </li> --}}
                        </ul>
                      </div>
                    </div>
                    <div class="product-details">
                      <h4>Woman</h4>
                      <p>Kategori Produk.</p>
                      <div class="product-price">
                        <del>$350.00    </del>$26.00
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>

</div>
  
 @endsection