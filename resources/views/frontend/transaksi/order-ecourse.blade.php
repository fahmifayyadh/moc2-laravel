@extends('layouts.master')
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
            <div class="card-header"style="background-color:#bdbdbd;">
              <!-- <div class="pull-right mr-4"><a href="#">Edit Profile Playlist</a></div> -->
              <h5>Transaksi E-Course</h5>
            
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
                          <td>iki kode</td>
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
                            <td>iki kode</td>
                            <td>10 November 2020</td>
                            <td>20000</td>
                            <td><span class="badge badge-pill badge-warning" style="color: white;font-size:12px">Menunggu Pembayaran</span></td>
                            <td>
                              
                              
                            </td>
                          
                        </tr>




                          {{-- Detail modal --}}
                          <div class="modal fade" id="DetailModal" tabindex="-1" role="dialog" aria-labelledby="DetailModal" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title"></h5>
                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    </div>
                                    <div class="modal-body">
                                        {{-- <form class="theme-form"> --}}
                                            
                                          <div class="form-group">
                                            <input class="form-control" type="text" placeholder="Harga" readonly>
                                          </div>

                                          <div class="form-group">
                                            <input class="form-control" type="text" placeholder="Tanggal Transaksi" readonly>
                                          </div>

                                          <div class="form-group">
                                            <input class="form-control" type="text" placeholder="batas akhir ecourse" readonly>
                                          </div>

                                          <div class="form-group">
                                            <input class="form-control" type="text" placeholder="Jenis ecourse" readonly>
                                          </div>
                                          <div class="form-group">
                                            <input class="form-control" type="text" placeholder="Jenis Paket" readonly>
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
              
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  
 @endsection