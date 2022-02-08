@extends('layouts.master')
@section('head')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

<link rel="stylesheet" href="https://printjs-4de6.kxcdn.com/print.min.css">
<!-- Latest compiled and minified JavaScript -->

@endsection
@section('content')
<div class="page-body">
    
    <!-- Container-fluid starts-->
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="card">
            <div class="card-body">
              <div class="invoice">
                <div id="printJS-form">
                  <div>
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="media">
                          <div class="media-left"><img class="media-object img-60" src="{{asset('/assets/images/logo/logo.png')}}" alt=""></div>
                          <div class="media-body m-l-20">
                            <h4 class="media-heading">MOC</h4>
                          <p>{{App\User::where('role','admin')->first()->email}}<br><span class="digits">{{App\User::where('role','admin')->first()->no_hp}}</span></p>
                          </div>
                        </div>
                        <!-- End Info-->
                      </div>
                      <div class="col-sm-6">
                        <div class="text-md-right">
                          <h3>Invoice #<span class="digits counter">{{$t->kode}}</span></h3>
                        <p>Checkout berhasil: <span class="digits"> {{$t->created_at}}</span><br>                                                            
                        Batas Waktu Pembayaran: <span class="digits">{{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $t->created_at)->addDays(1)}}</span></p>
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
                        <div class="media-left"></div>
                        <div class="media-body m-l-20">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-7">
                      <div class="text-md-right" id="project">
                      <h6>{{$n}}</h6>
                      <label>A.n - {{$an}}</label>
                      <p>No rekening : {{$b}}</p>
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
                              <h6 class="p-2 mb-0">Item</h6>
                            </td>
                            <td class="Hours">
                              <h6 class="p-2 mb-0">Price</h6>
                            </td>
                            <td class="Hours">
                              <h6 class="p-2 mb-0">Kupon</h6>
                            </td>
                            <td class="subtotal">
                              <h6 class="p-2 mb-0">Sub-total</h6>
                            </td>
                          </tr>
                
                          <tr>
                            <td>
                              <label>{{$t->paket->name}}</label>
                              <p class="m-0">{!!$t->desc!!}</p>
                            </td>
                            
                            <td>
                              <p class="itemtext digits">{{$t->price}}</p>
                            </td>
                            <td>
                              <p class="itemtext digits">{{$t->discount}}</p>
                            </td>
                            <td>
                              <p class="itemtext digits">{{$t->price}}</p>
                            </td>
                          </tr>
                      
                          <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="Rate">
                              <h6 class="mb-0 p-2">Total</h6>
                            </td>
                            <td class="payment digits">
                            <h6 class="mb-0 p-2">Rp.{{number_format($x['amount'],0,'.','.')}}</h6>
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
                  <button class="btn btn btn-primary mr-2" type="button" onclick="printJS('printJS-form', 'html')">Print</button>
                <a href="{{route('home')}}"><button class="btn btn-secondary" type="button">Close</button></a>
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
<script src="
https://printjs-4de6.kxcdn.com/print.min.js"></script>
@endsection