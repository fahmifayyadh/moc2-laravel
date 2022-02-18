@extends('frontend.layouts.master')
@section('content')
<div class="page-body">
    {{-- <div class="container-fluid">
      <div class="page-header">
        <div class="row">
          <div class="col-6">
            <h3>Add User</h3>
            <!-- <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
              <li class="breadcrumb-item">Data Tables</li>
            </ol> -->
          </div>
          <div class="col-6">
            <!-- Bookmark Start-->
           
            <!-- Bookmark Ends-->
          </div>
        </div>
      </div>
    </div> --}}
    <br>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
      <div class="row starter-main">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <!-- <div class="pull-right mr-4"><a href="#">Edit Profile Playlist</a></div> -->
              <h5>Transaksi Produk Fisik</h5>
            
            </div>
            <div class="card-body">
              <!-- Tool -->
                <div class="dropdown-basic">
                  <div class="row justify-content-end">
                  <div style="padding-left: 10px;">
                      <!-- <button class="btn btn-info btn-lg" type="button">Tambah Course</button> -->
                      <div class="dropdown">
                        <div class="btn-group mb-0">
                          <button class="dropbtn btn-info btn-round" type="button">Filter <span><i class="icofont icofont-arrow-down"></i></span></button>
                          <div class="dropdown-content"><a href="#">Selesai</a><a href="#">Belum selesai</a><a href="#">Pending</a>
                          </div>
                        </div>
                      </div>
                    <!-- <button class="btn btn-pill btn-info btn-sm" type="button" data-original-title="btn btn-pill btn-info btn-sm" title="">Tambah Course</button> -->
                  </div>
                </div>
                
              </div>
              <!-- <div class="row justify-content-end">
                
              <div class="col-md-3">
                <button class="btn btn-pill btn-info btn-sm" type="button" data-original-title="btn btn-pill btn-info btn-sm" title="">Tambah Course</button>
              </div>
              </div> -->
              <!-- End Tool -->
              <hr>
              <div class="table-responsive invoice-table" id="table">
                <table class="table table-bordered table-striped">
                    <thead class="active">
                        <tr>
                            <th>No</th>
                            <th>Nama Barang</th>
                            <th>Kode Transaksi</th>
                            <th>Harga</th>
                            <th>Waktu</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                    <tbody>
                        <tr>
                          <td>1</td>
                          <td>abc</td>
                          <td><a href="invoice-member">1069</a></td>
                          <td>10 November 2020</td>
                          <td>20000</td>
                          <td><span class="badge badge-pill badge-success" style="color: white;font-size:12px">Selesai</span></td>
                          <td>
                              <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#DetailModal">Detail</button>
                              {{-- <button type="button" class="btn btn-danger btn-sm">Cancel</button> --}}
                            
                          </td>
                        
                        </tr>

 
                          <tr>
                            <td>1</td>
                            <td>abc</td>
                            <td><a href="invoice-member">1069</a></td>
                            <td>10 November 2020</td>
                            <td>20000</td>
                            <td><span class="badge badge-pill badge-warning" style="color: white;font-size:12px">Menunggu Pembayaran</span></td>
                            <td>
                              <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#preview-pembayaran">Detail</button>
                              <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#InputResiModal">Proses</button>
                              <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#CancelModal">Cancel</button>
                            </td>
                          
                          </tr>
                          <tr>
                            <td>1</td>
                            <td>abc</td>
                            <td><a href="invoice-member">1069</a></td>
                            <td>10 November 2020</td>
                            <td>20000</td>
                            <td><span class="badge badge-pill badge-danger" style="color: white;font-size:12px">Pesanan Ditolak</span></td>
                            <td>
                                {{-- <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#ProsesModal">Proses</button> --}}
                                {{-- <button type="button" class="btn btn-danger btn-sm">Cancel</button> --}}
                              
                            </td>
                          
                          </tr>
                          <tr>
                            <td>1</td>
                            <td>abc</td>
                            <td><a href="invoice-member">1069</a></td>
                            <td>10 November 2020</td>
                            <td>20000</td>
                            <td>
                              <span class="badge badge-pill badge-info" style="color: white;font-size:12px">Sedang Diproses</span>

                            <td>
                                <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#ProsesModal">Detail</button>
                                <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#TerimaModal">Proses</button>
                                {{-- <button type="button" class="btn btn-danger btn-sm">Cancel</button> --}}
                              
                            </td>
                          
                          </tr>

                          {{-- detail modal --}}
                          <div class="modal fade" id="DetailModal" tabindex="-1" role="dialog" aria-labelledby="DetailModal" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Nama Barang/1069</h5>
                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    </div>
                                    <div class="modal-body">
                                        {{-- <form class="theme-form"> --}}
                                            
                                          <div class="form-group">
                                            <input class="form-control" type="text" placeholder="No Resi" readonly>
                                          </div>
                                          <div class="form-group">
                                            <input class="form-control" type="text" placeholder="Nama Barang" readonly>
                                          </div>
                                          <div class="form-group">
                                            <input class="form-control" type="text" placeholder="Kode Transaksi" readonly>
                                          </div>

                                          <div class="form-group">
                                            <input class="form-control" type="text" placeholder="Harga" readonly>
                                          </div>

                                          <div class="form-group">
                                            <input class="form-control" type="text" placeholder="Tanggal Selesai" readonly>
                                          </div> --}}
                                          {{-- <div class="modal-footer ">
                                            <button class="btn btn-primary">Save</button>
                                            <button class="btn btn-secondary">Back</button>
                                          </div>
                                        {{-- </form> --}}
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-danger" type="button" data-dismiss="modal">Close</button>
                                        {{-- <button class="btn btn-primary" type="button">Save changes</button> --}}
                                    </div> 
                                </div>
                            </div>
                          </div>

                          {{-- Detail sedang diproses modal  --}}
                          <div class="modal fade" id="ProsesModal" tabindex="-1" role="dialog" aria-labelledby="ProsesModal" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Nama Barang/1069</h5>
                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    </div>
                                    <div class="modal-body">
                                        {{-- <form class="theme-form"> --}}
                                            
                                          <div class="form-group">
                                            <input class="form-control" type="text" placeholder="No Resi" readonly>
                                          </div>
                                        {{-- </form> --}}
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-danger" type="button" data-dismiss="modal">Close</button>
                                        {{-- <button class="btn btn-primary" type="button">Save changes</button> --}}
                                    </div> 
                                </div>
                            </div>
                          </div>


                          <div class="modal fade" id="preview-pembayaran" tabindex="-1" role="dialog"
                            aria-labelledby="preview-pembayaran" aria-hidden="true">
                           <div class="modal-dialog modal-dialog-centered" role="document">
                               <div class="modal-content p-l-10 p-r-10 ">
                                   <div class="modal-header">
                                       <h5 class="modal-title">Bukti Pembayaran</h5>
                                       <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                                               aria-hidden="true">×</span></button>
                                   </div>
                                   <div class="modal-body">
                                       {{-- klo belum ada isinya kosongin aja --}}
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
                                        <input class="form-control" type="text" placeholder="Kode Transaksi" readonly>
                                      </div>
                                       <div class="form-group">
                                          <input class="form-control" type="text" placeholder="Nama Pengirim" readonly>
                                        </div>
                                        <div class="form-group">
                                          <input class="form-control" type="text" placeholder="No Rekening" readonly>
                                        </div>
                                        <div class="form-group">
                                          <input class="form-control" type="text" placeholder="Nominal" readonly>
                                        </div>
   
                                   </div>
                                   <!-- <div class="modal-footer">
                                       <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                                       <button class="btn btn-primary" type="button">Save changes</button>
                                   </div> -->
                               </div>
                           </div>
                       </div>

                       {{-- modal cancel --}}
                          <div class="modal fade" id="CancelModal" tabindex="-1" role="dialog" aria-labelledby="CancelModal" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title"></h5>
                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    </div>
                                    <div class="modal-body">
                                        <form class="theme-form">
                                            
                                            <div class="form-group">
                                                <select class="form-control digits" id="exampleFormControlSelect9" >
                                                    <option value="" disabled selected>-Cancel order?-</option>
                                                    <option>Yes</option>
                                                    <option>No</option>
                                                </select>
                                            </div>
                                            <!-- <div class="form-group">
                                                <input class="form-control" type="text" placeholder="Nama Pemilik">
                                              </div> -->
                                            <div class="modal-footer ">
                                              <button class="btn btn-primary">Save</button>
                                              <button class="btn btn-secondary">Back</button>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- <div class="modal-footer">
                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                                        <button class="btn btn-primary" type="button">Save changes</button>
                                    </div> -->
                                </div>
                            </div>
                        </div>

                        {{-- modal Terima Barang --}}
                        <div class="modal fade" id="TerimaModal" tabindex="-1" role="dialog" aria-labelledby="TerimaModal" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Barang Sudah Diterima?</h5>
                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    </div>
                                    <div class="modal-body">
                                        <form class="theme-form">
                                            
                                            <div class="form-group">
                                                <select class="form-control digits" id="exampleFormControlSelect9" >
                                                    <option value="" disabled selected>-Barang Sudah Diterima?-</option>
                                                    <option>Yes</option>
                                                    <option>No</option>
                                                </select>
                                            </div>
                                            <!-- <div class="form-group">
                                                <input class="form-control" type="text" placeholder="Nama Pemilik">
                                              </div> -->
                                            <div class="modal-footer ">
                                              <button class="btn btn-primary">Save</button>
                                              <button class="btn btn-secondary">Back</button>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- <div class="modal-footer">
                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                                        <button class="btn btn-primary" type="button">Save changes</button>
                                    </div> -->
                                </div>
                            </div>
                        </div>



                        {{-- modal input resi --}}
                        <div class="modal fade" id="InputResiModal" tabindex="-1" role="dialog" aria-labelledby="InputResiModal" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <h5 class="modal-title">Upload Bukti Pembayaran</h5>
                                      <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                  </div>
                                  <div class="modal-body">
                                      <form class="theme-form">
                                          
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Choose Image</label>
                                            <div class="col-sm-9">
                                              <input class="form-control" type="file" id="thumbnail" name="image">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" type="text" placeholder="Kode Transaksi" readonly>
                                          </div>
                                           <div class="form-group">
                                              <input class="form-control" type="text" placeholder="Nama Pengirim">
                                            </div>
                                            <div class="form-group">
                                              <input class="form-control" type="text" placeholder="No Rekening" >
                                            </div>
                                            <div class="form-group">
                                              <input class="form-control" type="text" placeholder="Nominal" readonly>
                                            </div>
                                          <!-- <div class="form-group">
                                              <input class="form-control" type="text" placeholder="Nama Pemilik">
                                            </div> -->
                                          <div class="modal-footer ">
                                            <button class="btn " style="background-color: blue;color:white">Save</button>
                                            <button class="btn btn-danger" data-dismiss="modal">Back</button>
                                          </div>
                                      </form>
                                  </div>
                                  <!-- <div class="modal-footer">
                                      <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                                      <button class="btn btn-primary" type="button">Save changes</button>
                                  </div> -->
                              </div>
                          </div>
                        </div>
                    </tbody>
                </table>
              </div>
              
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  
 @endsection