@extends('layouts.master')
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
                                  <h4 class="media-heading">Tukar Poin</h4>
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
                                      <div class="dropdown">
                                        <div class="btn-group mb-0">
                                          <button class="dropbtn btn-info btn-round" type="button">Filter <span><i class="icofont icofont-arrow-down"></i></span></button>
                                          <div class="dropdown-content"><a href="#">Sudah Di Bayar</a><a href="#">Belum di bayar</a>
                                          </div>
                                        </div>
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
                        <h3></h3>
                        <!-- Start Invoice Top-->
                        <br>
                        <!-- End Invoice Mid-->
                        <!-- <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">Data Tables</li>
                      </ol> -->
                    </div>
                    <div class="col-12">
                      <!-- Bookmark Start-->
                      <div class="card">
                        <div class="table-responsive invoice-table" id="table">
                          <table class="table table-bordered table-striped">
                            <tbody>
                              <tr>
                                <td class="Number">
                                  <h5 class="p-2 mb-0">No</h5>
                                </td>
                                <td class="Promo">
                                  <h5 class="p-2 mb-0">Rewards</h5>
                                </td>
                              </td>
                              <td class="Penjual">
                                <h5 class="p-2 mb-0">Poin</h5>
                              </td>
                              <td class="Pembeli">
                                <h5 class="p-2 mb-0">Tanggal</h5>
                              </td>
                              <td class="Action">
                                <h5 class="p-2 mb-0">Status</h5>
                              </td>
                              <td class="Action">
                                <h5 class="p-2 mb-0">Action</h5>
                              </td>

                            </tr>
                            <tr>
                              <td>
                                <label>1</label>
                              </td>
                              <td>
                                <p class="itemtext digits">PROMONEWNORMAL</p>
                              </td>
                              <td>
                                <p class="itemtext date">2</p>
                              </td>
                              <td>
                                <p class="itemtext digits">19/07/2020</p>
                              </td>

                              <td>
                                <span class="badge badge-pill badge-success" style="color: white;font-size:12px">aktif</span>
                              </td>
                              <td>
                                <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#afi0">Detail</button>
                                <div class="modal fade" id="afi0" tabindex="-1" role="dialog" aria-labelledby="afi0" aria-hidden="true">
                                  <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title">Detail Poin</h5>
                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                      </div>
                                      <div class="modal-body">
                                        <p>Poin dari affiliasi order 938 untuk produk premium membership, tier 1.</p>
                                      </div>
                                        <!-- <div class="modal-footer">
                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                                        <button class="btn btn-primary" type="button">Save changes</button>
                                      </div> -->
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </td>

                          </td>
                        </tr>
                        <tr>
                          <td>
                            <label>2</label>
                          </td>
                          <td>
                            <p class="itemtext digits">PROMOMEMBER</p>
                          </td>
                          <td>
                            <p class="itemtext digits">2</p>
                          </td>
                          <td>
                            <p class="itemtext digits">19/07/2020</p>
                          </td>

                           <td>
                            <span class="badge badge-pill badge-success" style="color: white;font-size:12px">aktif</span>
                          </td>
                          <td>
                            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#afi">Detail</button>
                            <div class="modal fade" id="afi" tabindex="-1" role="dialog" aria-labelledby="afi" aria-hidden="true">
                              <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title">Detail Poin</h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                  </div>
                                  <div class="modal-body">
                                    <p>Poin dari affiliasi order 937 untuk produk premium membership, tier 1.</p>
                                  </div>
                                    <!-- <div class="modal-footer">
                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                                    <button class="btn btn-primary" type="button">Save changes</button>
                                  </div> -->
                                </div>
                              </div>
                            </div>
                          </div>
                        </td>

                      </td>
                    </tr>
                    <tr>
                      <td>
                        <label>3</label>
                      </td>
                      <td>
                        <p class="itemtext digits">PROMOIMLEK</p>
                      </td>
                      <td>
                        <p class="itemtext digits">3</p>
                      </td>
                      <td>
                        <p class="itemtext digits">19/07/2020</p>
                      </td>

                      <td>
                        <span class="badge badge-pill badge-success" style="color: white;font-size:12px">aktif</span>
                      </td>
                      <td>
                          <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#afi1">Detail</button>
                          <div class="modal fade" id="afi1" tabindex="-1" role="dialog" aria-labelledby="afi1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title">Detail Poin</h5>
                                  <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                </div>
                                <div class="modal-body">
                                  <p>Poin dari affiliasi order 938 untuk produk premium membership, tier 1.</p>
                                </div>
                            <!-- <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                            <button class="btn btn-primary" type="button">Save changes</button>
                          </div> -->
                        </div>
                      </div>
                    </div>
                  </div>
                </td>
            </tr>
            <tr>
              <td>
                <label>4</label>
              </td>
              <td>
                <p class="itemtext digits">PROMOKILAT</p>
              </td>
              <td>
                <p class="itemtext digits">1</p>
              </td>
              <td>
                <p class="itemtext digits">19/07/2020</p>
              </td>

              <td>
                <span class="badge badge-pill badge-danger" style="color: white;font-size:12px">Menunggu konfirmasi</span>
              </td>
              <td>
                <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#afi2">Detail</button>
                <div class="modal fade" id="afi2" tabindex="-1" role="dialog" aria-labelledby="afi2" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">Detail Poin</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                      </div>
                      <div class="modal-body">
                        <p>Poin dari affiliasi order 939 untuk produk premium membership, tier 1.</p>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="itemtext">5</p>
                    </td>
                    <td>
                      <p class="itemtext digits">PROMOMEI</p>
                    </td>
                    <td>
                      <p class="m-0 date">3</p>
                    </td>
                    <td>
                      <p class="itemtext digits">19/07/2020</p>
                    </td>

                    <td>
                      <span class="badge badge-pill badge-danger" style="color: white;font-size:12px">Menunggu Konfirmasi</span>
                    </td>
                    <td>
                      <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#afi9">Detail</button>
                      <div class="modal fade" id="afi9" tabindex="-1" role="dialog" aria-labelledby="afi9" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title">Detail Poin</h5>
                              <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body">
                              <p>Poin dari affiliasi order 938 untuk produk premium membership, tier 1.</p>
                            </div>
                              <!-- <div class="modal-footer">
                              <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                              <button class="btn btn-primary" type="button">Save changes</button>
                            </div> -->
                          </div>
                        </div>
                      </div>
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
