@extends('layouts.master')
@section('head')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

<!-- Latest compiled and minified JavaScript -->

@endsection
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
                                  <h4 class="media-heading">Riwayat Pencairan Dana</h4>
                                </div>
                              </div>
                              <!-- End Info-->
                            </div>

                          </div>
                        </div>
                        <hr>
                        <!-- End InvoiceTop-->
                        <h3></h3>
                        <!-- Start Invoice Top-->
                        <br>

                    </div>
                    <div class="col-12">
                      <!-- Bookmark Start-->
                      <div class="row mb-3 justify-content-end">
                        <div class="col-md-3">
                          <div class="btn-showcase">
                            {{-- <button data-toggle="modal" data-target="#filter-leaderboard" class="btn btn-square btn-info btn-lg" type="button"  title=""><i class="icofont icofont-filter"></i>Filter</button> --}}
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        
                        {{-- modal --}}
                          {{-- <div class="modal fade" id="filter-leaderboard" tabindex="-1" role="dialog" aria-labelledby="preview-course" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                              <div class="modal-content p-l-10 p-r-10 ">
                                <div class="modal-header">
                                  <h5 class="modal-title">Filter LeaderBoard</h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                </div>
                                <div class="modal-body">
                                  <div class="form-group row">
                                    <input class="datepicker-here form-control digits" type="text" data-range="true" data-multiple-dates-separator=" - " data-language="en" data-original-title="" title="">
                                  </div>
                                  <div class="form-group row">
                                    <select class="form-control selectpicker" data-live-search="true">
                                      <option data-tokens="skincare">skincare</option>
                                      <option data-tokens="abc">abc</option>
                                      <option data-tokens="cobaa">cobaa</option>
                                    </select>
                                  </div>
                                  <div class="form-group row">
                                    <select class="form-control field" data-type="select" id="inputsize">
                                      <option value="col-md-1" disabled selected>Pilihan Status</option>
                                      <option value="col-md-1">Sudah Di Bayar </option>
                                      <option value="col-md-1">Belum Di Bayar </option>
                                    </select>
                                </div>
                                </div>
                                <div class="modal-footer">
                                  <button class="btn btn-primary" type="button">Save changes</button>
                                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                                </div>
                              </div>
                            </div>
                          </div> --}}
                        {{-- endModal --}}
                        <div class="table-responsive invoice-table" id="table">
                          <table class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <td class="Number">
                                      <h5 class="p-2 mb-0">No</h5>
                                    </td>
                                    <td class="Date">
                                        <h5 class="p-2 mb-0">Tanggal</h5>
                                      </td>
                                    <td class="Promo">
                                      <h5 class="p-2 mb-0">Nama penerima</h5>
                                    </td>
                                  </td>
                                  <td class="Penjual">
                                    <h5 class="p-2 mb-0">Total</h5>
                                  </td>
                                  <td class="Pembeli">
                                    <h5 class="p-2 mb-0">No Rek Tujuan</h5>
                                  </td>
                                  <td class="Pembeli">
                                    <h5 class="p-2 mb-0">Bank</h5>
                                  </td>
    
                                </tr>
                                @foreach ($pay as $i=>$p)
                                    
                                <tr>
                                  <td>
                                    <label>{{$i+1}}</label>
                                  </td>
                                    <td>
                                    <p class="itemtext digits">{{$p->created_at->format('d-M-Y')}}</p>
                                    </td>
                                    <td>
                                    <p class="itemtext date">{{$p->name}}</p>
                                    </td>
                                    <td>
                                    <p class="itemtext digits">{{$p->amount}}</p>
                                    </td>
                                    <td>
                                    <p class="itemtext digits">{{$p->no_rekening}}</p>
                                      </td>
                                    <td>
                                   
                                      <p class="itemtext digits">{{$p->bank}}</p </td>
                                  </tr>
                                  @endforeach
                             
                                
                                

                    {{-- </tr> --}}
                  </tbody>
                </table>
              </div>
              <!-- End Table-->

            </div>
            <!-- End Table-->
            <div class="row">
              <div class="col-md-8">
               {{-- klinks --}}
                <div>
                </div>
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


@endsection                        <!-- Bookmark Ends-->
@section('footer')
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

<!-- (Optional) Latest compiled and minified JavaScript translation files -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/i18n/defaults-*.min.js"></script>
@endsection