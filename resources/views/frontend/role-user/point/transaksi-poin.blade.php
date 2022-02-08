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
                                  <h4 class="media-heading">Transaksi Point</h4>
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
                            <button data-toggle="modal" data-target="#filter-leaderboard" class="btn btn-square btn-info btn-lg" type="button"  title=""><i class="icofont icofont-filter"></i>Filter</button>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        
                        {{-- modal --}}
                          <div class="modal fade" id="filter-leaderboard" tabindex="-1" role="dialog" aria-labelledby="preview-course" aria-hidden="true">
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
                          </div>
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
                                      <h5 class="p-2 mb-0">Detail</h5>
                                    </td>
                                  </td>
                                  <td class="Penjual">
                                    <h5 class="p-2 mb-0">Poin</h5>
                                  </td>
                                  <td class="Pembeli">
                                    <h5 class="p-2 mb-0">Tipe</h5>
                                  </td>

    
                                </tr>
                                <tr>
                                    <td>
                                        <label>1</label>
                                    </td>
                                    <td>
                                        <p class="itemtext digits">19/07/2020</p>
                                    </td>
                                    <td>
                                        <p class="itemtext date">input by admin</p>
                                    </td>
                                    <td>
                                        <p class="itemtext digits">10</p>
                                    </td>
    
                                    <td>
                                        <span class="badge badge-pill badge-success" style="color: white;font-size:12px">Tambah</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label>1</label>
                                    </td>
                                    <td>
                                        <p class="itemtext digits">19/07/2020</p>
                                    </td>
                                    <td>
                                        <p class="itemtext date">Tukar poin dengan reward a</p>
                                    </td>
                                    <td>
                                        <p class="itemtext digits">10</p>
                                    </td>
    
                                    <td>
                                        <span class="badge badge-pill badge-danger" style="color: white;font-size:12px">Kurang</span>
                                    </td>
                                </tr>
                                
                                

                    {{-- </tr> --}}
                  </tbody>
                </table>
              </div>
              <!-- End Table-->

            </div>
            <!-- End Table-->
            <div class="row">
              <div class="col-md-8">
                <ul class="pagination pagination-lg">
                  <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">4</a></li>
                  <li class="page-item"><a class="page-link" href="#">5</a></li>
                  <li class="page-item"><a class="page-link" href="#">6</a></li>
                  <li class="page-item"><a class="page-link" href="#">7</a></li>
                  <li class="page-item"><a class="page-link" href="#">8</a></li>
                  <li class="page-item"><a class="page-link" href="#">9</a></li>
                  <li class="page-item"><a class="page-link" href="#">10</a></li>
                  <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
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