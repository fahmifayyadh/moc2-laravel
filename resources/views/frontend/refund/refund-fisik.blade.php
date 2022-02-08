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
                                  <h4 class="media-heading">Daftar Refund Produk Fisik</h4>
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
                                <td class="Pembeli">
                                  <h5 class="p-2 mb-0">Nama Produk</h5>
                                </td>

                              </td>
                              <td class="Penjual">
                                <h5 class="p-2 mb-0"> Nama Pembeli </h5>
                              </td>
                              <td class="Komisi">
                                <h5 class="p-2 mb-0">Nominal</h5>
                              </td>
                              <td class="Tanggal">
                                <h5 class="p-2 mb-0">Tanggal Pembelian</h5>
                              </td>
                              <td class="Status">
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
                                <p class="itemtext">Smart Weight</p>
                              </td>
                              <td>
                                <p class="itemtext date">Randi</p>
                              </td>

                              <td>
                                <p class="itemtext digits">Rp 2.000.00</p>
                              </td>
                              <td>
                                <p class="itemtext date">23-04-2020 23:56</p>
                              </td>
                              <td>
                                <span class="badge badge-pill badge-success" style="color: white;font-size:12px">Sudah Di Bayar</span>
                              </td>
                              <td>
                                <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#preview-pembayaran0">Detail</button>
                                <div class="modal fade" id="preview-pembayaran0" tabindex="-1" role="dialog"
                                aria-labelledby="preview-pembayaran0" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                  <div class="modal-content p-l-10 p-r-10 ">
                                    <div class="modal-header">
                                      <h4 class="modal-title">Bukti Pembayaran</h4>
                                      <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                                        aria-hidden="true">×</span></button>
                                      </div>
                                      <div class="modal-body">
                                        <h6 class="modal-title">--General--</h6>
                                        <center><a href="{{asset(Storage::url('../assets/images/product/1.png'))}}"
                                          itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail"
                                          id="preview"
                                          src="{{asset(Storage::url('../assets/images/product/1.png'))}}"
                                          itemprop="thumbnail"
                                          alt="Image description"
                                          style="height:400px ;width: 720px;"></a>
                                        </center>
                                        <hr>
                                        <div class="form-group">
                                          <input class="form-control" type="text" placeholder="Nama Pembeli" readonly>
                                        </div>
                                        <div class="form-group">
                                          <input class="form-control" type="text/" placeholder="Produk" readonly>
                                        </div>
                                        <div class="form-group">
                                          <input class="form-control" type="text/" placeholder="Nominal" readonly>
                                        </div>
                                        <div class="form-group">
                                          <input class="form-control" type="text/" placeholder="Tanggal Pembelian" readonly>
                                        </div>
                                        <h6 class="modal-title">--Penerima--</h6>
                                        <div class="form-group">
                                          <input class="form-control" type="text/" placeholder="Nama Penerima" readonly>
                                        </div>
                                        <div class="form-group">
                                          <input class="form-control" type="text" placeholder="No Rekening" readonly>
                                        </div>
                                        <h6 class="modal-title">--Refund--</h6>
                                        <div class="form-group">
                                          <input class="form-control" type="text" placeholder="Nama Pengirim" readonly>
                                        </div>
                                        <div class="form-group">
                                          <input class="form-control" type="text/" placeholder="Nominal" readonly>
                                        </div>
                                        <div class="form-group">
                                          <input class="form-control" type="text" placeholder="No Rekening" readonly>
                                        </div>
                                        <div class="form-group">
                                          <input class="form-control" type="text/" placeholder="Status" readonly>
                                        </div>
                                        <!-- <div class="modal-footer">
                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                                        <button class="btn btn-primary" type="button">Save changes</button>
                                      </div> -->
                                    </div>
                                  </div>
                                </div>
                                      <!-- <div class="modal-footer">
                                      <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                                      <button class="btn btn-primary" type="button">Save changes</button>
                                    </div> -->
                                  </div>
                                </div>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <label>2</label>
                            </td>
                            <td>
                              <p class="itemtext digits">Beauty Powder</p>
                            </td>
                            <td>
                              <p class="itemtext digits">Gea Rofiqoh</p>
                            </td>

                            <td>
                              <p class="itemtext digits">Rp 700.000</p>
                            </td>
                            <td>
                              <p class="itemtext date">04-Maret-2020</p>
                            </td>
                            <td>
                              <span class="badge badge-pill badge-success" style="color: white;font-size:12px">Sudah Di Bayar</span>
                            </td>
                            <td>
                              <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#preview-pembayaran2">Detail</button>
                              <div class="modal fade" id="preview-pembayaran2" tabindex="-1" role="dialog"
                              aria-labelledby="preview-pembayaran2" aria-hidden="true">
                              <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content p-l-10 p-r-10 ">
                                  <div class="modal-header">
                                    <h4 class="modal-title">Bukti Pembayaran</h4>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                                      aria-hidden="true">×</span></button>
                                    </div>
                                    <div class="modal-body">
                                      <h6 class="modal-title">--General--</h6>
                                      <center><a href="{{asset(Storage::url('../assets/images/product/1.png'))}}"
                                        itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail"
                                        id="preview"
                                        src="{{asset(Storage::url('../assets/images/product/1.png'))}}"
                                        itemprop="thumbnail"
                                        alt="Image description"
                                        style="height:400px ;width: 720px;"></a>
                                      </center>
                                      <hr>
                                      <div class="form-group">
                                        <input class="form-control" type="text" placeholder="Gea Rofiqoh" readonly>
                                      </div>
                                      <div class="form-group">
                                        <input class="form-control" type="text/" placeholder="Beauty Powder" readonly>
                                      </div>
                                      <div class="form-group">
                                        <input class="form-control" type="text/" placeholder="Rp 700.000" readonly>
                                      </div>
                                      <div class="form-group">
                                        <input class="form-control" type="text/" placeholder="4-Maret-2020" readonly>
                                      </div>
                                      <h6 class="modal-title">--Penerima--</h6>
                                      <div class="form-group">
                                        <input class="form-control" type="text/" placeholder="Gea Rofiqoh" readonly>
                                      </div>
                                      <div class="form-group">
                                        <input class="form-control" type="text" placeholder="7739347021" readonly>
                                      </div>
                                      <h6 class="modal-title">--Refund--</h6>
                                      <div class="form-group">
                                        <input class="form-control" type="text" placeholder="Anisa" readonly>
                                      </div>
                                      <div class="form-group">
                                        <input class="form-control" type="text/" placeholder="Rp 650.000" readonly>
                                      </div>
                                      <div class="form-group">
                                        <input class="form-control" type="text" placeholder="63472837082" readonly>
                                      </div>
                                      <div class="form-group">
                                        <input class="form-control" type="text/" placeholder="Sudah Di Bayar" readonly>
                                      </div>
                                      <!-- <div class="modal-footer">
                                      <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                                      <button class="btn btn-primary" type="button">Save changes</button>
                                    </div> -->
                                  </div>
                                </div>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <label>3</label>
                            </td>
                            <td>
                              <p class="itemtext digits">Rani</p>
                            </td>
                            <td>
                              <p class="itemtext digits">Produk Fisik</p>
                            </td>

                            <td>
                              <p class="itemtext digits">Rp 3.100.000</p>
                              <td>
                                <p class="itemtext date">23-04-2020 23:56</p>
                              </td>
                            </td>
                            <td>
                              <span class="badge badge-pill badge-danger" style="color: white;font-size:12px">Belum Di Bayar</span>
                            </td>
                            <td>
                              <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#preview-pembayaran1">Detail</button>
                              <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#refund-modal">Refund</button>
                              <!--DETAIL FORM-->
                            <div class="modal fade" id="preview-pembayaran1" tabindex="-1" role="dialog"
                            aria-labelledby="preview-pembayaran1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                              <div class="modal-content p-l-10 p-r-10 ">
                                <div class="modal-header">
                                  <h4 class="modal-title">Bukti Pembayaran</h4>
                                  <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">×</span></button>
                                  </div>
                                  <div class="modal-body">
                                    <h6 class="modal-title">--General--</h6>
                                    <center><a href="{{asset(Storage::url('../assets/images/product/1.png'))}}"
                                      itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail"
                                      id="preview"
                                      src="{{asset(Storage::url('../assets/images/product/1.png'))}}"
                                      itemprop="thumbnail"
                                      alt="Image description"
                                      style="height:400px ;width: 720px;"></a>
                                    </center>
                                    <hr>
                                    <div class="form-group">
                                      <input class="form-control" type="text" placeholder="Nama Pembeli" readonly>
                                    </div>
                                    <div class="form-group">
                                      <input class="form-control" type="text/" placeholder="Produk" readonly>
                                    </div>
                                    <div class="form-group">
                                      <input class="form-control" type="text/" placeholder="Nominal" readonly>
                                    </div>
                                    <div class="form-group">
                                      <input class="form-control" type="text/" placeholder="Tanggal Pembelian" readonly>
                                    </div>
                                    <h6 class="modal-title">--Penerima--</h6>
                                    <div class="form-group">
                                      <input class="form-control" type="text/" placeholder="Nama Penerima" readonly>
                                    </div>
                                    <div class="form-group">
                                      <input class="form-control" type="text" placeholder="No Rekening" readonly>
                                    </div>
                                    <h6 class="modal-title">--Refund--</h6>
                                    <div class="form-group">
                                      <input class="form-control" type="text" placeholder="Nama Pengirim" readonly>
                                    </div>
                                    <div class="form-group">
                                      <input class="form-control" type="text/" placeholder="Nominal" readonly>
                                    </div>
                                    <div class="form-group">
                                      <input class="form-control" type="text" placeholder="No Rekening" readonly>
                                    </div>
                                    <div class="form-group">
                                      <input class="form-control" type="text" placeholder="Status" readonly>
                                    </div>
                                    <!-- <div class="modal-footer">
                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                                    <button class="btn btn-primary" type="button">Save changes</button>
                                  </div> -->
                                </div>
                              </div>
                            </div>
                          </div>

                               <!--REFUND FORM-->

                            <div class="modal fade" id="refund-modal" tabindex="-1" role="dialog"
                            aria-labelledby="refund-modal" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                              <div class="modal-content p-l-10 p-r-10 ">
                                <div class="modal-header">
                                  <h5 class="modal-title">Form Refund</h5>
                                  <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">×</span></button>
                                  </div>
                                  <div class="modal-body">
                                      <form class="theme-form">
                                  <div class="form-group">
                                    <input class="form-control" type="text" placeholder="Nama Pengirim">
                                  </div>
                                  <div class="form-group">
                                    <input class="form-control" type="text" placeholder="No Rekening">
                                  </div>
                                  <div class="form-group">
                                    <input class="form-control" type="text" placeholder="Nominal">
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleFormControlFile1">Unggah bukti transfer</label>
                                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                  </div>
                                  <div class="form-group">
                                  <div class="modal-footer">
                                    <button class="btn btn-primary" type="button">Bayar</button>
                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                                  </div>
                                </div>
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                            <div class="modal-footer">
                              <button class="btn btn-primary" type="button">Bayar</button>
                              <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                            </div>
                          </div>
                              <!-- <div class="modal-footer">
                              <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                              <button class="btn btn-primary" type="button">Save changes</button>
                            </div> -->
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
                        <p class="itemtext digits">Rahmad</p>
                      </td>
                      <td>
                        <p class="itemtext digits">E-Course</p>
                      </td>

                      <td>
                        <p class="itemtext digits">Rp 3.500.000</p>
                      </td>
                      <td>
                        <p class="itemtext date">23-04-2020 23:56</p>
                      </td>
                      <td>
                        <span class="badge badge-pill badge-danger" style="color: white;font-size:12px">Belum Di Bayar</span>
                      </td>
                      <td>
                        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#preview-pembayaran1">Detail</button>
                        <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#refund-modal">Refund</button>
                        <!--DETAIL FORM-->
                      <div class="modal fade" id="preview-pembayaran1" tabindex="-1" role="dialog"
                      aria-labelledby="preview-pembayaran1" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content p-l-10 p-r-10 ">
                          <div class="modal-header">
                            <h4 class="modal-title">Bukti Pembayaran</h4>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                              aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body">
                              <h6 class="modal-title">--General--</h6>
                              <center><a href="{{asset(Storage::url('../assets/images/product/1.png'))}}"
                                itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail"
                                id="preview"
                                src="{{asset(Storage::url('../assets/images/product/1.png'))}}"
                                itemprop="thumbnail"
                                alt="Image description"
                                style="height:400px ;width: 720px;"></a>
                              </center>
                              <hr>
                              <div class="form-group">
                                <input class="form-control" type="text" placeholder="Nama Pembeli" readonly>
                              </div>
                              <div class="form-group">
                                <input class="form-control" type="text/" placeholder="Produk" readonly>
                              </div>
                              <div class="form-group">
                                <input class="form-control" type="text/" placeholder="Nominal" readonly>
                              </div>
                              <div class="form-group">
                                <input class="form-control" type="text/" placeholder="Tanggal Pembelian" readonly>
                              </div>
                              <h6 class="modal-title">--Penerima--</h6>
                              <div class="form-group">
                                <input class="form-control" type="text/" placeholder="Nama Penerima" readonly>
                              </div>
                              <div class="form-group">
                                <input class="form-control" type="text" placeholder="No Rekening" readonly>
                              </div>
                              <h6 class="modal-title">--Refund--</h6>
                              <div class="form-group">
                                <input class="form-control" type="text" placeholder="Nama Pengirim" readonly>
                              </div>
                              <div class="form-group">
                                <input class="form-control" type="text/" placeholder="Nominal" readonly>
                              </div>
                              <div class="form-group">
                                <input class="form-control" type="text" placeholder="No Rekening" readonly>
                              </div>
                              <div class="form-group">
                                <input class="form-control" type="text" placeholder="Status" readonly>
                              </div>
                              <!-- <div class="modal-footer">
                              <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                              <button class="btn btn-primary" type="button">Save changes</button>
                            </div> -->
                          </div>
                        </div>
                      </div>
                    </div>

                         <!--REFUND FORM-->

                      <div class="modal fade" id="refund-modal" tabindex="-1" role="dialog"
                      aria-labelledby="refund-modal" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content p-l-10 p-r-10 ">
                          <div class="modal-header">
                            <h5 class="modal-title">Form Refund</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                              aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body">
                                <form class="theme-form">

                            <div class="form-group">
                              <input class="form-control" type="text" placeholder="Nama Pengirim">
                            </div>
                            <div class="form-group">
                              <input class="form-control" type="text" placeholder="No Rekening">
                            </div>
                            <div class="form-group">
                              <input class="form-control" type="text" placeholder="Nominal">
                            </div>
                            <div class="form-group">
                              <label for="exampleFormControlFile1">Unggah bukti transfer</label>
                              <input type="file" class="form-control-file" id="exampleFormControlFile1">
                            </div>
                            <div class="form-group">
                            <div class="modal-footer">
                              <button class="btn btn-primary" type="button">Bayar</button>
                              <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                            </div>
                          </div>
                          </div>
                        </div>
                      </div>
                        <!-- <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                        <button class="btn btn-primary" type="button">Save changes</button>
                      </div> -->
                    </div>
                  </div>
                </div>
                            <!-- <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                            <button class="btn btn-primary" type="button">Save changes</button>
                          </div> -->
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p class="itemtext">5</p>
                  </td>
                  <td>
                    <p class="m-0">Angga</p>
                  </td>
                  <td>
                    <p class="m-0 date">E-Course</p>
                  </td>

                  <td>
                    <p class="itemtext digits">Rp 4.000.000</p>
                  </td>
                  <td>
                    <p class="itemtext date">23-04-2020 23:56</p>
                  </td>
                  <td>
                    <span class="badge badge-pill badge-danger" style="color: white;font-size:12px">Belum Di Bayar</span>
                  </td>
                  <td>
                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#preview-pembayaran1">Detail</button>
                    <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#refund-modal">Refund</button>
                    <!--DETAIL FORM-->
                  <div class="modal fade" id="preview-pembayaran1" tabindex="-1" role="dialog"
                  aria-labelledby="preview-pembayaran1" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content p-l-10 p-r-10 ">
                      <div class="modal-header">
                        <h4 class="modal-title">Bukti Pembayaran</h4>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                          aria-hidden="true">×</span></button>
                        </div>
                        <div class="modal-body">
                          <h6 class="modal-title">--General--</h6>
                          <center><a href="{{asset(Storage::url('../assets/images/product/1.png'))}}"
                            itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail"
                            id="preview"
                            src="{{asset(Storage::url('../assets/images/product/1.png'))}}"
                            itemprop="thumbnail"
                            alt="Image description"
                            style="height:400px ;width: 720px;"></a>
                          </center>
                          <hr>
                          <div class="form-group">
                            <input class="form-control" type="text" placeholder="Nama Pembeli" readonly>
                          </div>
                          <div class="form-group">
                            <input class="form-control" type="text/" placeholder="Produk" readonly>
                          </div>
                          <div class="form-group">
                            <input class="form-control" type="text/" placeholder="Nominal" readonly>
                          </div>
                          <div class="form-group">
                            <input class="form-control" type="text/" placeholder="Tanggal Pembelian" readonly>
                          </div>
                          <h6 class="modal-title">--Penerima--</h6>
                          <div class="form-group">
                            <input class="form-control" type="text/" placeholder="Nama Penerima" readonly>
                          </div>
                          <div class="form-group">
                            <input class="form-control" type="text" placeholder="No Rekening" readonly>
                          </div>
                          <h6 class="modal-title">--Refund--</h6>
                          <div class="form-group">
                            <input class="form-control" type="text" placeholder="Nama Pengirim" readonly>
                          </div>
                          <div class="form-group">
                            <input class="form-control" type="text/" placeholder="Nominal" readonly>
                          </div>
                          <div class="form-group">
                            <input class="form-control" type="text" placeholder="No Rekening" readonly>
                          </div>
                          <div class="form-group">
                            <input class="form-control" type="text" placeholder="Status" readonly>
                          </div>
                          <!-- <div class="modal-footer">
                          <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                          <button class="btn btn-primary" type="button">Save changes</button>
                        </div> -->
                      </div>
                    </div>
                  </div>
                </div>
                     <!--REFUND FORM-->
                  <div class="modal fade" id="refund-modal" tabindex="-1" role="dialog"
                  aria-labelledby="refund-modal" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content p-l-10 p-r-10 ">
                      <div class="modal-header">
                        <h5 class="modal-title">Form Refund</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                          aria-hidden="true">×</span></button>
                        </div>
                        <div class="modal-body">
                          <form class="theme-form">
                        <div class="form-group">
                          <input class="form-control" type="text" placeholder="Nama Pengirim">
                        </div>
                        <div class="form-group">
                          <input class="form-control" type="text" placeholder="No Rekening">
                        </div>
                        <div class="form-group">
                          <input class="form-control" type="text" placeholder="Nominal">
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlFile1">Unggah bukti transfer</label>
                          <input type="file" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                        <div class="form-group">
                        <div class="modal-footer">
                          <button class="btn btn-primary" type="button">Bayar</button>
                          <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                        </div>
                      </div>
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-primary" type="button">Bayar</button>
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                  </div>
                    <!-- <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                    <button class="btn btn-primary" type="button">Save changes</button>
                  </div> -->
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
