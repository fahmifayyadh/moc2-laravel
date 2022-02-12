@extends('frontend.layouts.master')
@section('content')
<div class="page-body">
  <div class="container-fluid">
    <div class="page-header">
      <div class="row">
        <div class="col-12">
          <!-- Container-fluid starts-->
          <div class="container">

            <div class="col-sm-12">
              <div class="card">
                <div class="card-body">
                  <div class="invoice">
                    <div style="padding-left: px;">
                      <div>
                        <div>
                          <div class="row">
                            <div class="col-sm-6">
                              <div class="media">
                                <div class="media-left"> </div>
                                <div class="media-body m-l-20">
                                  <h4 class="media-heading">Pembelian E-Course</h4>
                                </div>
                              </div>
                              <!-- End Info-->
                            </div>
                            <div class="col-sm-6">
                              <div class="text-md-right">
                                <br>
                                <br>
                                <div class="dropdown-basic">
                                  <div class="row justify-content-end">
                                    <div style="padding-left: 10px;">
                                      <!-- <button class="btn btn-info btn-lg" type="button">Tambah Course</button> -->
                                    </div>
                                    <!-- <button class="btn btn-pill btn-info btn-sm" type="button" data-original-title="btn btn-pill btn-info btn-sm" title="">Tambah Course</button> -->
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- End Title-->
                          </div>
                        </div>
                      </div>
                      <hr>
                      <!-- End InvoiceTop-->

                      <!-- Start Invoice Top-->

                      <!-- End Invoice Mid-->
                      <!-- <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                      <li class="breadcrumb-item">Data Tables</li>
                    </ol> -->
                    <!-- Container-fluid starts-->
                    <div class="col-sm-12">
                      <div class="card">
                        <div class="card-header">
                          <h5>Paket</h5>
                        </div>
                        <div class="card-body row pricing-content">
                          <div class="col-md-4">
                            <div class="pricing-block card text-center">
                              <svg x="0" y="0" viewBox="0 0 360 220">
                                <g>
                                  <path fill="#7366ff" d="M0.732,193.75c0,0,29.706,28.572,43.736-4.512c12.976-30.599,37.005-27.589,44.983-7.061                                        c8.09,20.815,22.83,41.034,48.324,27.781c21.875-11.372,46.499,4.066,49.155,5.591c6.242,3.586,28.729,7.626,38.246-14.243                                        s27.202-37.185,46.917-8.488c19.715,28.693,38.687,13.116,46.502,4.832c7.817-8.282,27.386-15.906,41.405,6.294V0H0.48                                        L0.732,193.75z"></path>
                                </g>
                                <text transform="matrix(1 0 0 1 69.7256 116.2686)" fill="#fff" font-size="50">Rp.399</text>
                                <text transform="matrix(0.9566 0 0 1 197.3096 83.9121)" fill="#fff" font-size="29.0829"></text>
                                <text transform="matrix(1 0 0 1 233.9629 115.5303)" fill="#fff" font-size="15.4128">/Bulan</text>
                              </svg>
                              <div class="pricing-inner">
                                <h3 class="font-primary">Standard</h3>
                                <ul class="pricing-inner">
                                  <li>
                                    <h6><b></b>Sosial Media Strategi</h6>
                                  </li>
                                  <li>
                                    <h6><b></b>Basic Course</h6>
                                  </li>
                                  <li>
                                    <h6><b></b>Bebras</h6>
                                  </li>
                                  <li>
                                    <h6><b></b>x</h6>
                                  </li>
                                  <li>
                                    <h6><b></b>x</h6>
                                  </li>
                                </ul>
                                <div class="product-details">
                                  <button class="btn btn-primary"  data-toggle="modal" data-target="#refbutt04" data-original-title="" title="">Langganan</button>
                                    <div class="modal fade" id="refbutt04" tabindex="-1" role="dialog" aria-labelledby="refbutt04" aria-hidden="true">
                                      <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">

                                            <div class="col-lg-12 col-sm-12">
                                              <div class="checkout-details">
                                                <div class="order-box">
                                                  <div class="title-box">
                                                    <div class="checkbox-title">
                                                      <h3>Product </h3><span>Total</span>
                                                    </div>
                                                  </div>
                                                  <ul class="qty">
                                                    <li>Paket Standard × 1 <span>Rp 399.000</span></li>
                                                    <li>-<span>-</span></li>
                                                  </ul>
                                                  <ul class="sub-total">
                                                    <li>Subtotal <span class="count">Rp 399.000</span></li>
                                                    <li class="shipping-class">Shipping
                                                      <div class="shopping-checkout-option">
                                                        <label class="d-block" for="chk-ani">
                                                          <input class="checkbox_animated" id="chk-ani" type="checkbox" checked="">Option 1
                                                        </label>
                                                        <label class="d-block" for="chk-ani1">
                                                          <input class="checkbox_animated" id="chk-ani1" type="checkbox">Option 2
                                                        </label>
                                                      </div>
                                                    </li>
                                                  </ul>
                                                  <ul class="sub-total total">
                                                    <li>Total <span class="count">Rp 439.000</span></li>
                                                  </ul>
                                                  <div class="animate-chk">
                                                    <div class="row">
                                                      <div class="col">
                                                        <label class="d-block" for="edo-ani">
                                                          <input class="radio_animated" id="edo-ani" type="radio" name="rdo-ani" checked="" data-original-title="" title="">Check Payments
                                                        </label>
                                                        <label class="d-block" for="edo-ani1">
                                                          <input class="radio_animated" id="edo-ani1" type="radio" name="rdo-ani" data-original-title="" title="">Cash On Delivery
                                                        </label>
                                                        <label class="d-block" for="edo-ani2">
                                                          <input class="radio_animated" id="edo-ani2" type="radio" name="rdo-ani" checked="" data-original-title="" title="">PayPal<img class="img-paypal" src="../assets/images/checkout/paypal.png" alt="">
                                                        </label>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="text-right"><a class="btn btn-primary" href="#">Place Order</a></div>
                                                  <br>
                                                  <br>
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
                          <div class="col-md-4">
                            <div class="pricing-block card text-center">
                              <svg x="0" y="0" viewBox="0 0 360 220">
                                <g>
                                  <path fill="#7366ff" d="M0.732,193.75c0,0,29.706,28.572,43.736-4.512c12.976-30.599,37.005-27.589,44.983-7.061                                        c8.09,20.815,22.83,41.034,48.324,27.781c21.875-11.372,46.499,4.066,49.155,5.591c6.242,3.586,28.729,7.626,38.246-14.243                                        s27.202-37.185,46.917-8.488c19.715,28.693,38.687,13.116,46.502,4.832c7.817-8.282,27.386-15.906,41.405,6.294V0H0.48                                        L0.732,193.75z"></path>
                                </g>
                                <text transform="matrix(1 0 0 1 69.7256 116.2686)" fill="#fff" font-size="50">Rp.599</text>
                                <text transform="matrix(0.9566 0 0 1 197.3096 83.9121)" fill="#fff" font-size="29.0829"></text>
                                <text transform="matrix(1 0 0 1 233.9629 115.5303)" fill="#fff" font-size="15.4128">/Bulam</text>
                              </svg>
                              <div class="pricing-inner">
                                <h3 class="font-primary">Business</h3>
                                <ul class="pricing-inner">
                                  <li>
                                    <h6><b></b>Sosial Media Strategi</h6>
                                  </li>
                                  <li>
                                    <h6><b></b>Media Promotion</h6>
                                  </li>
                                  <li>
                                    <h6><b></b>Basic course</h6>
                                  </li>
                                  <li>
                                    <h6><b></b>Bebras</h6>
                                  </li>
                                  <li>
                                    <h6><b></b>x</h6>
                                  </li>
                                </ul>
                                <div class="product-details">
                                  <button class="btn btn-primary"  data-toggle="modal" data-target="#refbutt03" data-original-title="" title="">Langganan</button>
                                    <div class="modal fade" id="refbutt03" tabindex="-1" role="dialog" aria-labelledby="refbutt03" aria-hidden="true">
                                      <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">

                                            <div class="col-lg-12 col-sm-12">
                                              <div class="checkout-details">
                                                <div class="order-box">
                                                  <div class="title-box">
                                                    <div class="checkbox-title">
                                                      <h3>Product </h3><span>Total</span>
                                                    </div>
                                                  </div>
                                                  <ul class="qty">
                                                    <li>Paket Bussiness × 1 <span>Rp 599.000</span></li>
                                                    <li>-<span>-</span></li>
                                                  </ul>
                                                  <ul class="sub-total">
                                                    <li>Subtotal <span class="count">Rp 599.000</span></li>
                                                    <li class="shipping-class">Shipping
                                                      <div class="shopping-checkout-option">
                                                        <label class="d-block" for="chk-ani">
                                                          <input class="checkbox_animated" id="chk-ani" type="checkbox" checked="">Option 1
                                                        </label>
                                                        <label class="d-block" for="chk-ani1">
                                                          <input class="checkbox_animated" id="chk-ani1" type="checkbox">Option 2
                                                        </label>
                                                      </div>
                                                    </li>
                                                  </ul>
                                                  <ul class="sub-total total">
                                                    <li>Total <span class="count">Rp 639.000</span></li>
                                                  </ul>
                                                  <div class="animate-chk">
                                                    <div class="row">
                                                      <div class="col">
                                                        <label class="d-block" for="edo-ani">
                                                          <input class="radio_animated" id="edo-ani" type="radio" name="rdo-ani" checked="" data-original-title="" title="">Check Payments
                                                        </label>
                                                        <label class="d-block" for="edo-ani1">
                                                          <input class="radio_animated" id="edo-ani1" type="radio" name="rdo-ani" data-original-title="" title="">Cash On Delivery
                                                        </label>
                                                        <label class="d-block" for="edo-ani2">
                                                          <input class="radio_animated" id="edo-ani2" type="radio" name="rdo-ani" checked="" data-original-title="" title="">PayPal<img class="img-paypal" src="../assets/images/checkout/paypal.png" alt="">
                                                        </label>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="text-right"><a class="btn btn-primary" href="#">Place Order</a></div>
                                                  <br>
                                                  <br>
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
                          <div class="col-md-4">
                            <div class="pricing-block card text-center">
                              <svg x="0" y="0" viewBox="0 0 360 220">
                                <g>
                                  <path fill="#7366ff" d="M0.732,193.75c0,0,29.706,28.572,43.736-4.512c12.976-30.599,37.005-27.589,44.983-7.061                                        c8.09,20.815,22.83,41.034,48.324,27.781c21.875-11.372,46.499,4.066,49.155,5.591c6.242,3.586,28.729,7.626,38.246-14.243                                        s27.202-37.185,46.917-8.488c19.715,28.693,38.687,13.116,46.502,4.832c7.817-8.282,27.386-15.906,41.405,6.294V0H0.48                                        L0.732,193.75z"></path>
                                </g>
                                <text transform="matrix(1 0 0 1 69.7256 116.2686)" fill="#fff" font-size="50">Rp.799</text>
                                <text transform="matrix(0.9566 0 0 1 197.3096 83.9121)" fill="#fff" font-size="20.0829"></text>
                                <text transform="matrix(1 0 0 1 233.9629 115.5303)" fill="#fff" font-size="15.4128">/Bulan</text>
                              </svg>
                              <div class="pricing-inner">
                                <h3 class="font-primary">Premium</h3>
                                <ul class="pricing-inner">
                                  <li>
                                    <h6><b></b>Sosial Media Strategi</h6>
                                  </li>
                                  <li>
                                    <h6><b></b>Skincare promotion</h6>
                                  </li>
                                  <li>
                                    <h6><b></b>Basic Course</h6>
                                  </li>
                                  <li>
                                    <h6><b></b>Premium Course</h6>
                                  </li>
                                  <li>
                                    <h6><b></b>E-book Strategi</h6>
                                  </li>
                                </ul>
                                <div class="product-details">
                                  <button class="btn btn-primary"  data-toggle="modal" data-target="#refbutt02" data-original-title="" title="">Langganan</button>
                                    <div class="modal fade" id="refbutt02" tabindex="-1" role="dialog" aria-labelledby="refbutt02" aria-hidden="true">
                                      <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">

                                            <div class="col-lg-12 col-sm-12">
                                              <div class="checkout-details">
                                                <div class="order-box">
                                                  <div class="title-box">
                                                    <div class="checkbox-title">
                                                      <h3>Product </h3><span>Total</span>
                                                    </div>
                                                  </div>
                                                  <ul class="qty">
                                                    <li>Paket Premium × 1 <span>Rp 799.000</span></li>
                                                    <li>-<span>-</span></li>
                                                  </ul>
                                                  <ul class="sub-total">
                                                    <li>Subtotal <span class="count">Rp 799.000</span></li>
                                                    <li class="shipping-class">Shipping
                                                      <div class="shopping-checkout-option">
                                                        <label class="d-block" for="chk-ani">
                                                          <input class="checkbox_animated" id="chk-ani" type="checkbox" checked="">Option 1
                                                        </label>
                                                        <label class="d-block" for="chk-ani1">
                                                          <input class="checkbox_animated" id="chk-ani1" type="checkbox">Option 2
                                                        </label>
                                                      </div>
                                                    </li>
                                                  </ul>
                                                  <ul class="sub-total total">
                                                    <li>Total <span class="count">Rp 839.000</span></li>
                                                  </ul>
                                                  <div class="animate-chk">
                                                    <div class="row">
                                                      <div class="col">
                                                        <label class="d-block" for="edo-ani">
                                                          <input class="radio_animated" id="edo-ani" type="radio" name="rdo-ani" checked="" data-original-title="" title="">Check Payments
                                                        </label>
                                                        <label class="d-block" for="edo-ani1">
                                                          <input class="radio_animated" id="edo-ani1" type="radio" name="rdo-ani" data-original-title="" title="">Cash On Delivery
                                                        </label>
                                                        <label class="d-block" for="edo-ani2">
                                                          <input class="radio_animated" id="edo-ani2" type="radio" name="rdo-ani" checked="" data-original-title="" title="">PayPal<img class="img-paypal" src="../assets/images/checkout/paypal.png" alt="">
                                                        </label>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="text-right"><a class="btn btn-primary" href="#">Place Order</a></div>
                                                  <br>
                                                  <br>
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
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="card">
                        <div class="card-header">
                          <h5>Satuan</h5>
                        </div>
                        <div class="product-wrapper-grid">
                          <div class="row">
                            <div class="col-xl-3 col-sm-6 xl-4">
                              <div class="card">
                                <div class="product-box">
                                  <div class="product-img"><img class="img-fluid" src="../assets/images/ecommerce/01.jpg" alt="">
                                    <div class="product-hover">
                                      <ul>
                                        <li>
                                          <button class="btn" type="button" data-toggle="modal" data-target="#exampleModalCenter"><i class="icon-eye"></i></button>
                                        </li>
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
                                              <h4>Sosial Media Strategi</h4>
                                              <div class="product-view">
                                                <h6 class="f-w-600">Membahas seputar strategi iklan sosial media</h6>
                                                <p class="mb-0"></p>
                                              </div>
                                              <div class="product-qnty">
                                                <h6 class="f-w-600"></h6>
                                                <fieldset>
                                                </fieldset>
                                                <div class="addcart-btn">
                                                  <button class="btn btn-primary" type="button">Beli</button>
                                                  <button class="btn btn-primary" type="button">Selesai</button>
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
                                    <h4>Sosial Media Strategi</h4>
                                    <button class="btn btn-primary"  data-toggle="modal" data-target="#refbutt05" data-original-title="" title="">Langganan</button>
                                      <div class="modal fade" id="refbutt05" tabindex="-1" role="dialog" aria-labelledby="refbutt05" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                          <div class="modal-content">
                                              <div class="col-lg-12 col-sm-12">
                                                <div class="checkout-details">
                                                  <div class="order-box">
                                                    <div class="title-box">
                                                      <div class="checkbox-title">
                                                        <h3>Product </h3><span>Total</span>
                                                      </div>
                                                    </div>
                                                    <ul class="qty">
                                                      <li>Sosial Media × 1 <span>Rp 79.000</span></li>
                                                      <li>-<span>-</span></li>
                                                    </ul>
                                                    <ul class="sub-total">
                                                      <li>Subtotal <span class="count">Rp 79.000</span></li>
                                                      <li class="shipping-class">Shipping
                                                        <div class="shopping-checkout-option">
                                                          <label class="d-block" for="chk-ani">
                                                            <input class="checkbox_animated" id="chk-ani" type="checkbox" checked="">Option 1
                                                          </label>
                                                          <label class="d-block" for="chk-ani1">
                                                            <input class="checkbox_animated" id="chk-ani1" type="checkbox">Option 2
                                                          </label>
                                                        </div>
                                                      </li>
                                                    </ul>
                                                    <ul class="sub-total total">
                                                      <li>Total <span class="count">Rp 83.000</span></li>
                                                    </ul>
                                                    <div class="animate-chk">
                                                      <div class="row">
                                                        <div class="col">
                                                          <label class="d-block" for="edo-ani">
                                                            <input class="radio_animated" id="edo-ani" type="radio" name="rdo-ani" checked="" data-original-title="" title="">Check Payments
                                                          </label>
                                                          <label class="d-block" for="edo-ani1">
                                                            <input class="radio_animated" id="edo-ani1" type="radio" name="rdo-ani" data-original-title="" title="">Cash On Delivery
                                                          </label>
                                                          <label class="d-block" for="edo-ani2">
                                                            <input class="radio_animated" id="edo-ani2" type="radio" name="rdo-ani" checked="" data-original-title="" title="">PayPal<img class="img-paypal" src="../assets/images/checkout/paypal.png" alt="">
                                                          </label>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="text-right"><a class="btn btn-primary" href="#">Lanjutkan Pesanan</a></div>
                                                    <br>
                                                    <br>
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
                            <div class="col-xl-3 col-sm-6 xl-4">
                              <div class="card">
                                <div class="product-box">
                                  <div class="product-img">
                                    <img class="img-fluid" src="../assets/images/ecommerce/02.jpg" alt="">
                                    <div class="product-hover">
                                      <ul>
                                        <li>
                                          <button class="btn" type="button" data-toggle="modal" data-target="#exampleModalCenter1"><i class="icon-eye"></i></button>
                                        </li>
                                      </ul>
                                    </div>
                                  </div>
                                  <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter1" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <div class="product-box row">
                                            <div class="product-img col-md-6"><img class="img-fluid" src="../assets/images/ecommerce/02.jpg" alt=""></div>
                                            <div class="product-details col-md-6 text-left">
                                              <h4>Facebook ads Policy</h4>
                                              <div class="product-view">
                                                <h6 class="f-w-600">Details</h6>
                                                <p class="mb-0"></p>
                                              </div>
                                              <div class="product-qnty">
                                                <h6 class="f-w-600"></h6>
                                                <fieldset>
                                                </fieldset>
                                                <div class="addcart-btn">
                                                  <button class="btn btn-primary" type="button">Putar Video</button>
                                                  <button class="btn btn-primary" type="button">Selesai</button>
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
                                    <h4>Facebook ads Policy</h4>
                                    <button class="btn btn-primary"  data-toggle="modal" data-target="#refbutt00" data-original-title="" title="">Langganan</button>
                                      <div class="modal fade" id="refbutt00" tabindex="-1" role="dialog" aria-labelledby="refbutt00" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                          <div class="modal-content">
                                              <div class="col-lg-12 col-sm-12">
                                                <div class="checkout-details">
                                                  <div class="order-box">
                                                    <div class="title-box">
                                                      <div class="checkbox-title">
                                                        <h3>Product </h3><span>Total</span>
                                                      </div>
                                                    </div>
                                                    <ul class="qty">
                                                      <li>Facebook ads policy × 1 <span>Rp 79.000</span></li>
                                                      <li>-<span>-</span></li>
                                                    </ul>
                                                    <ul class="sub-total">
                                                      <li>Subtotal <span class="count">Rp 79.000</span></li>
                                                      <li class="shipping-class">Shipping
                                                        <div class="shopping-checkout-option">
                                                          <label class="d-block" for="chk-ani">
                                                            <input class="checkbox_animated" id="chk-ani" type="checkbox" checked="">Option 1
                                                          </label>
                                                          <label class="d-block" for="chk-ani1">
                                                            <input class="checkbox_animated" id="chk-ani1" type="checkbox">Option 2
                                                          </label>
                                                        </div>
                                                      </li>
                                                    </ul>
                                                    <ul class="sub-total total">
                                                      <li>Total <span class="count">Rp 83.000</span></li>
                                                    </ul>
                                                    <div class="animate-chk">
                                                      <div class="row">
                                                        <div class="col">
                                                          <label class="d-block" for="edo-ani">
                                                            <input class="radio_animated" id="edo-ani" type="radio" name="rdo-ani" checked="" data-original-title="" title="">Check Payments
                                                          </label>
                                                          <label class="d-block" for="edo-ani1">
                                                            <input class="radio_animated" id="edo-ani1" type="radio" name="rdo-ani" data-original-title="" title="">Cash On Delivery
                                                          </label>
                                                          <label class="d-block" for="edo-ani2">
                                                            <input class="radio_animated" id="edo-ani2" type="radio" name="rdo-ani" checked="" data-original-title="" title="">PayPal<img class="img-paypal" src="../assets/images/checkout/paypal.png" alt="">
                                                          </label>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="text-right"><a class="btn btn-primary" href="#">Place Order</a></div>
                                                    <br>
                                                    <br>
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
                            <div class="col-xl-3 col-sm-6 xl-4">
                              <div class="card">
                                <div class="product-box">
                                  <div class="product-img"><img class="img-fluid" src="../assets/images/ecommerce/03.jpg" alt="">
                                    <div class="product-hover">
                                      <ul>
                                        <li>
                                          <button class="btn" type="button" data-toggle="modal" data-target="#exampleModalCenter2"><i class="icon-eye"></i></button>
                                        </li>
                                      </ul>
                                    </div>
                                  </div>
                                  <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter2" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <div class="product-box row">
                                            <div class="product-img col-md-6"><img class="img-fluid" src="../assets/images/ecommerce/03.jpg" alt=""></div>
                                            <div class="product-details col-md-6 text-left">
                                              <h4>Traffic Temperature</h4>
                                              <div class="product-view">
                                                <h6 class="f-w-600">Details</h6>
                                                <p class="mb-0"></p>
                                              </div>
                                              <div class="product-qnty">
                                                <h6 class="f-w-600"></h6>
                                                <fieldset>
                                                </fieldset>
                                                <div class="addcart-btn">
                                                  <button class="btn btn-primary" type="button">Putar Video</button>
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
                                      <h4>Traffic Temperature</h4>
                                    <button class="btn btn-primary"  data-toggle="modal" data-target="#refbutt01" data-original-title="" title="">Langganan</button>
                                      <div class="modal fade" id="refbutt01" tabindex="-1" role="dialog" aria-labelledby="refbutt01" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                          <div class="modal-content">

                                              <div class="col-lg-12 col-sm-12">
                                                <div class="checkout-details">
                                                  <div class="order-box">
                                                    <div class="title-box">
                                                      <div class="checkbox-title">
                                                        <h3>Product </h3><span>Total</span>
                                                      </div>
                                                    </div>
                                                    <ul class="qty">
                                                      <li>Traffic Temperature × 1 <span>Rp 79.000</span></li>
                                                      <li>-<span>-</span></li>
                                                    </ul>
                                                    <ul class="sub-total">
                                                      <li>Subtotal <span class="count">Rp 79.000</span></li>
                                                      <li class="shipping-class">Shipping
                                                        <div class="shopping-checkout-option">
                                                          <label class="d-block" for="chk-ani">
                                                            <input class="checkbox_animated" id="chk-ani" type="checkbox" checked="">Option 1
                                                          </label>
                                                          <label class="d-block" for="chk-ani1">
                                                            <input class="checkbox_animated" id="chk-ani1" type="checkbox">Option 2
                                                          </label>
                                                        </div>
                                                      </li>
                                                    </ul>
                                                    <ul class="sub-total total">
                                                      <li>Total <span class="count">Rp 83.000</span></li>
                                                    </ul>
                                                    <div class="animate-chk">
                                                      <div class="row">
                                                        <div class="col">
                                                          <label class="d-block" for="edo-ani">
                                                            <input class="radio_animated" id="edo-ani" type="radio" name="rdo-ani" checked="" data-original-title="" title="">Check Payments
                                                          </label>
                                                          <label class="d-block" for="edo-ani1">
                                                            <input class="radio_animated" id="edo-ani1" type="radio" name="rdo-ani" data-original-title="" title="">Cash On Delivery
                                                          </label>
                                                          <label class="d-block" for="edo-ani2">
                                                            <input class="radio_animated" id="edo-ani2" type="radio" name="rdo-ani" checked="" data-original-title="" title="">PayPal<img class="img-paypal" src="../assets/images/checkout/paypal.png" alt="">
                                                          </label>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="text-right"><a class="btn btn-primary" href="#">Place Order</a></div>
                                                    <br>
                                                    <br>
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
                                      </div>
                                    </div>
                                                     <!-- Container-fluid Ends-->
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
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Container-fluid Ends-->
</div>
</td>
</tr>
<tr>
</tr>
</tbody>
</table>
</div>
<!-- End Table-->
</div>
<!-- End Table-->
</div>
</div>
</div>
</div>
<!-- End InvoiceBot-->
</div>
</div>
<!-- End Invoice-->
<!-- End Invoice Holder-->
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</tr>
</tbody>
</table>
</div>
</div>

</div>
</div>
</div>
</div>
</div>
</div>

@endsection                        <!-- Bookmark Ends-->
</div>
</div>
</div>
</div>
