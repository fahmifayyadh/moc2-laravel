@extends('frontend.layouts.master')
@section('head')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

<!-- Latest compiled and minified JavaScript -->

@endsection
@section('content')
<div class="page-body">
    <div class="container-fluid">
      <div class="page-header">
        <div class="row">
          <div class="col-6">
            <h3>Invoice</h3>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
              <li class="breadcrumb-item">ECommerce</li>
            </ol>
          </div>
          <div class="col-6">
            <!-- Bookmark Start-->
            <div class="bookmark pull-right">
              <ul>
                <li><a href="#" data-container="body" data-toggle="popover" data-placement="top" title="" data-original-title="Chat"><i data-feather="message-square"></i></a></li>
                <li><a href="#" data-container="body" data-toggle="popover" data-placement="top" title="" data-original-title="Icons"><i data-feather="command"></i></a></li>
                <li><a href="#" data-container="body" data-toggle="popover" data-placement="top" title="" data-original-title="Learning"><i data-feather="layers"></i></a></li>
                <li><a href="#"><i class="bookmark-search" data-feather="star"></i></a>
                  <form class="form-inline search-form" action="#" method="get">
                    <div class="form-group form-control-search">
                      <div class="Typeahead Typeahead--twitterUsers">
                        <div class="u-posRelative">
                          <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text" placeholder="Search.." name="q" title="" autofocus>
                          <div class="spinner-border Typeahead-spinner" role="status"><span class="sr-only">Loading...</span></div>
                        </div>
                        <div class="Typeahead-menu"></div>
                        <script id="result-template" type="text/x-handlebars-template">
                          <div class="ProfileCard u-cf">
                          <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
                          <div class="ProfileCard-details">
                          <div class="ProfileCard-realName"></div>
                          </div>
                          </div>
                        </script>
                        <script id="empty-template" type="text/x-handlebars-template"><div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div></script>
                      </div>
                    </div>
                  </form>
                </li>
              </ul>
            </div>
            <!-- Bookmark Ends-->
          </div>
        </div>
      </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="card">
            <div class="card-body">
              <div class="invoice">
                <div>
                  <div>
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="media">
                          <div class="media-left"><img class="media-object img-60" src="{{asset('/assets/images/logo/logo.png')}}" alt=""></div>
                          <div class="media-body m-l-20">
                            <h4 class="media-heading">MOC</h4>
                            <p>admin@gmail.com<br><span class="digits">082222222222</span></p>
                          </div>
                        </div>
                        <!-- End Info-->
                      </div>
                      <div class="col-sm-6">
                        <div class="text-md-right">
                          <h3>Invoice #<span class="digits counter">1069</span></h3>
                          <p>Checkout berhasil: May<span class="digits"> 27, 2015 |</span><span class="digits"> 15:00 WIB</span><br>                                                            
                            Batas Waktu Pembayaran: June <span class="digits">28, 2015 |</span><span class="digits"> 15:00 WIB</span></p>
                        </div>
                        <!-- End Title-->
                      </div>
                    </div>
                  </div>
                  <hr>
                  <!-- End InvoiceTop-->
                  <div class="row">
                    <div class="col-md-5">
                      <div class="media">
                        <div class="media-left"><img class="media-object rounded-circle img-60" src="../assets/images/user/1.jpg" alt=""></div>
                        <div class="media-body m-l-20">
                          <h4 class="media-heading">Johan Deo</h4>
                          <p>Puri Bunga Nirawana Cluster Menteng no 14<br> kecamatan Sumbersari, kabupaten Jember <br> provinsi jawa timur<br><span class="digits">082222222222</span></p>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-7">
                      <div class="text-md-right" id="project">
                        <h6>BRI</h6>
                        <p>1234567789999</p>
                      </div>
                    </div>
                  </div>
                  <!-- End Invoice Mid-->
                  <div>
                    <div class="table-responsive invoice-table" id="table">
                      <table class="table table-bordered table-striped">
                        <tbody>
                          <tr>
                            <td class="item">
                              <h6 class="p-2 mb-0">Item Description</h6>
                            </td>
                            <td class="Hours">
                              <h6 class="p-2 mb-0">Hours</h6>
                            </td>
                            <td class="Rate">
                              <h6 class="p-2 mb-0">Rate</h6>
                            </td>
                            <td class="subtotal">
                              <h6 class="p-2 mb-0">Sub-total</h6>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <label>Lorem Ipsum</label>
                              <p class="m-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </td>
                            <td>
                              <p class="itemtext digits">5</p>
                            </td>
                            <td>
                              <p class="itemtext digits">$75</p>
                            </td>
                            <td>
                              <p class="itemtext digits">$375.00</p>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <label>Lorem Ipsum</label>
                              <p class="m-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </td>
                            <td>
                              <p class="itemtext digits">3</p>
                            </td>
                            <td>
                              <p class="itemtext digits">$75</p>
                            </td>
                            <td>
                              <p class="itemtext digits">$225.00</p>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <label>Lorem Ipsum</label>
                              <p class="m-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </td>
                            <td>
                              <p class="itemtext digits">10</p>
                            </td>
                            <td>
                              <p class="itemtext digits">$75</p>
                            </td>
                            <td>
                              <p class="itemtext digits">$750.00</p>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <label>Lorem Ipsum</label>
                              <p class="m-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </td>
                            <td>
                              <p class="itemtext digits">10</p>
                            </td>
                            <td>
                              <p class="itemtext digits">$75</p>
                            </td>
                            <td>
                              <p class="itemtext digits">$750.00</p>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <p class="itemtext"></p>
                            </td>
                            <td>
                              <p class="m-0">HST</p>
                            </td>
                            <td>
                              <p class="m-0 digits">13%</p>
                            </td>
                            <td>
                              <p class="m-0 digits">$419.25</p>
                            </td>
                          </tr>
                          <tr>
                            <td></td>
                            <td></td>
                            <td class="Rate">
                              <h6 class="mb-0 p-2">Total</h6>
                            </td>
                            <td class="payment digits">
                              <h6 class="mb-0 p-2">$3,644.25</h6>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <!-- End Table-->
                    <div class="row">
                      <div class="col-md-8">
                        <div>
                          <p class="legal"><strong>Thank you for your business!</strong> </p>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <form class="text-right">
                          {{-- <input type="image" src="../assets/images/other-images/paypal.png" name="submit" alt="PayPal - The safer, easier way to pay online!"> --}}
                        </form>
                      </div>
                    </div>
                  </div>
                  <!-- End InvoiceBot-->
                </div>
                <div class="col-sm-12 text-center mt-3">
                  <button class="btn btn btn-primary mr-2" type="button" onclick="myFunction()">Print</button>
                  <a href="transaksi-produk-member"><button class="btn btn-secondary" type="button">Close</button></a>
                </div>
                <!-- End Invoice-->
                <!-- End Invoice Holder-->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Container-fluid Ends-->
  </div>


@endsection                        <!-- Bookmark Ends-->
@section('footer')
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

<!-- (Optional) Latest compiled and minified JavaScript translation files -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/i18n/defaults-*.min.js"></script>

@endsection