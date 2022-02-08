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
                                  <h4 class="media-heading">My Order</h4>
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
                                <td class="Pembeli">
                                  <h5 class="p-2 mb-0">Nama Produk</h5>
                                </td>
                                <td class="Afiliasi">
                                  <h5 class="p-2 mb-0">Jenis Produk</h5>
                                </td>
                                <td class="Penjual">
                                  <h5 class="p-2 mb-0"> Tanggal Beli </h5>
                                </td>
                                <td class="Komisi">
                                  <h5 class="p-2 mb-0">Tanggal Tiba</h5>
                                </td>
                                <td class="Komisi">
                                  <h5 class="p-2 mb-0">Nominal</h5>
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
                                  <p class="itemtext">Barang1</p>
                                </td>
                                <td>
                                  <p class="itemtext date">Masker</p>
                                </td>
                                <td>
                                  <p class="itemtext digits">14-10-2020</p>
                                </td>
                                <td>
                                  <p class="itemtext digits">17-10-2020</p>
                                </td>
                                <td>
                                  <p class="itemtext digits">Rp 50000</p>
                                </td>
                                <td>
                                  <span class="badge badge-pill badge-success" style="color: white;font-size:12px">Sudah Di Bayar</span>
                                </td>
                                <td>
                                  <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#orderDetail">Detail</button>
                              </td>
                              </tr>
                              <div class="modal fade" id="orderDetail" tabindex="-1" role="dialog" aria-labelledby="orderDetail" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Detail Order</h5>
                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        </div>
                                        <div class="modal-body">
                                            {{-- <form class="theme-form"> --}}
                                                
                                              <div class="form-group">
                                                <input class="form-control" type="text" placeholder="Nama Pemesan" readonly>
                                              </div>
                                              <div class="form-group">
                                                <input class="form-control" type="text" placeholder="Id Pemesanan" readonly>
                                              </div>
                                              <div class="form-group">
                                                <input class="form-control" type="text" placeholder="Nama Produk" readonly>
                                              </div>
                                              <div class="form-group">
                                                <input class="form-control" type="text" placeholder="Jenis Produk" readonly>
                                              </div>
                                              <div class="form-group">
                                                <input class="form-control" type="text" placeholder="Jumlah Pesanan" readonly>
                                              </div>
                                              <div class="form-group">
                                                <input class="form-control" type="text" placeholder="Harga Normal" readonly>
                                              </div>
                                              <div class="form-group">
                                                <input class="form-control" type="text" placeholder="Harga Promo" readonly>
                                              </div>
                                              <div class="form-group">
                                                <input class="form-control" type="text" placeholder="Tanggal Pesan" readonly>
                                              </div>
                                              <div class="form-group">
                                                <input class="form-control" type="text" placeholder="Tanggal Tiba" readonly>
                                              </div>
                                              {{-- <div class="modal-footer ">
                                                <button class="btn btn-primary">Save</button>
                                                <button class="btn btn-secondary">Back</button>
                                              </div> --}}
                                            {{-- </form> --}}
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-danger" type="button" data-dismiss="modal">Close</button>
                                            {{-- <button class="btn btn-primary" type="button">Save changes</button> --}}
                                        </div> 
                                    </div>
                                </div>
                              </div>
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
