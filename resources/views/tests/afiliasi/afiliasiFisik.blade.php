@extends('layouts.master',['title' => 'Status Sponsor Afiliasi'])
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
                                  <h4 class="media-heading">Daftar komisi Fisik Afiliasi</h4>
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
                                  <h5 class="p-2 mb-0">Nama Pembeli</h5>
                                </td>
                                <td class="Pembeli">
                                  <h5 class="p-2 mb-0">Nama produk</h5>
                                </td>
                                <td class="Afiliasi">
                                  <h5 class="p-2 mb-0">Kategori Afiliasi</h5>
                                </td>
                                <td class="Penjual">
                                  <h5 class="p-2 mb-0">Sponsor </h5>
                                </td>
                                <td class="komisiFisik">
                                  <h5 class="p-2 mb-0">Total komisi Fisik</h5>
                                </td>
                                <td class="Status">
                                  <h5 class="p-2 mb-0">Status</h5>
                                </td>
                                <td class="Action">
                                  <h5 class="p-2 mb-0">Aksi</h5>
                                </td>

                              </tr>
                           @foreach ($transaksi as $t=>$i) 
                          <tr>
                            <td>
                              <label>{{$t+1}}</label>
                            </td>
                            <td>
                            <p class="itemtext digits">{{$i->user->name}}</p>
                            </td>
                            <td>
                              <p class="itemtext digits">{{$i->product->name}}</p>
                              </td>
                            <td>
                              <p class="itemtext digits">Product</p>
                            </td>
                            <td>
                              <p class="itemtext digits">{{$i->user->sponsor ?? 'tidak ada'}}</p>
                            </td>
                            <td>
                            <p class="itemtext digits">Rp. {{$i->commission}}</p>
                          </td>
                              <td>
                                @if (is_null($i->komisiFisik))
                                <span class="badge badge-pill badge-warning" style="color: white;font-size:12px">Belum Di Bayar</span>
                                @endif
                                @if (!is_null($i->komisiFisik) && $i->komisiFisik->status == 'menunggu')
                                <span class="badge badge-pill badge-success" style="color: white;font-size:12px">Suda Di Bayar</span>
                                @endif
                                @if (!is_null($i->komisiFisik) && $i->komisiFisik->status == 'batal')
                                <span class="badge badge-pill badge-danger" style="color: white;font-size:12px">Batal</span>
                                @endif
                                @if (!is_null($i->komisiFisik) && $i->komisiFisik->status == 'selesai')
                                <span class="badge badge-pill badge-primary" style="color: white;font-size:12px">Selesai</span>
                                @endif
                            </td>
                            <td>
                            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#afiliasi-detail55{{$i->id}}">Detail</button>
                            @include('tests.afiliasi.komponenKomisiFisik.detail')
                            @if (is_null($i->komisiFisik))
                            <button class="btn btn-success" type="button" data-toggle="modal" data-target="#exampleModalCenter1{{$i->id}}">Bayar</button>
                            @include('tests.afiliasi.komponenKomisiFisik.pembayaran')
                            <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#exampleModalCenter3{{$i->id}}">Batal</button>
                            @include('tests.afiliasi.komponenKomisiFisik.batal')
                            
                          @endif
                        </td>
                      </tr>
                        @endforeach
                    
                  </tbody>
                </table>
              </div>
              <!-- End Table-->

            </div>
            <div class="row">
              <div class="col-md-8">
                  {{$transaksi->links()}}
                  <div>
                  </div>
              </div>
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
