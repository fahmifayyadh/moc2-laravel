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
                                          <button class="dropbtn btn-warning btn-round" type="button">Filter <span><i class="icofont icofont-arrow-down"></i></span></button>
                                        <div class="dropdown-content"><a href="{{route('order.filter','selesai')}}">Sudah Di Bayar/Selesai</a><a href="{{route('order.filter','pembayaran')}}">Belum di bayar</a><a href="{{route('order.filter','proses')}}">Proses Pengiriman</a><a href="{{route('order.filter','batal')}}">Batal</a>
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
                                <td class="Afiliasi">
                                  <h5 class="p-2 mb-0">Point pembeli</h5>
                                </td>
                                <td class="Afiliasi">
                                  <h5 class="p-2 mb-0">Kuantiti</h5>
                                </td>
                                <td class="Afiliasi">
                                  <h5 class="p-2 mb-0">Exspedisi</h5>
                                </td>
                                <td class="Afiliasi">
                                  <h5 class="p-2 mb-0">Jenis Pengiriman</h5>
                                </td>
                                <td class="Afiliasi">
                                  <h5 class="p-2 mb-0">Kupon</h5>
                                </td>
                                <td class="Afiliasi">
                                  <h5 class="p-2 mb-0">Penerima</h5>
                                </td>
                                <td class="Afiliasi">
                                  <h5 class="p-2 mb-0">No Resi</h5>
                                </td>
                                <td class="Penjual">
                                  <h5 class="p-2 mb-0"> Tanggal Beli </h5>
                                </td>
                                <td class="Komisi">
                                  <h5 class="p-2 mb-0">Tanggal Tiba</h5>
                                </td>
                                <td class="Komisi">
                                  <h5 class="p-2 mb-0">Total harga</h5>
                                </td>
                                <td class="Status">
                                  <h5 class="p-2 mb-0">Status</h5>
                                </td>
                                <td class="Action">
                                  <h5 class="p-2 mb-0">Action</h5>
                                </td>
                              </tr>
                             
                              @foreach ($transFisik ?? [] as $i => $tf)
                                  
                              <tr>
                                <td>
                                <label>{{$i+1}}</label>
                                </td>
                                <td>
                                  <p class="itemtext">{{$tf->product->name}}</p>
                                </td>
                                <td>
                                  <p class="itemtext date">Produk</p>
                                </td>
                                <td>
                                  <p class="itemtext date">{{$tf->point_pembeli}}</p>
                                </td>
                                <td>
                                  <p class="itemtext date">{{$tf->kuantiti}}</p>
                                </td>
                                <td>
                                  <p class="itemtext date">{{$tf->delivery->kurir}}</p>
                                </td>
                                <td>
                                  <p class="itemtext date">{{$tf->delivery->jenis}}</p>
                                </td>
                                <td>
                                  <p class="itemtext date">{{$tf->kupon != null ? $tf->kupon->kode.'-'.$tf->discount : null}}</p>
                                </td>
                                 <td>
                                  <p class="itemtext date">{{$tf->delivery->name}}</p>
                                </td>
                                <td>
                                  <p class="itemtext date">{{$tf->delivery->no_resi}}</p>
                                </td>
                                
                                <td>
                                  <p class="itemtext digits">{{$tf->created_at->format('d-m-Y')}}</p>
                                </td>
                                <td>
                                  <p class="itemtext digits">{{$tf->status == 'selesai' ? $tf->updated_at->format('d-m-Y') : 'Belum Selesai'}}</p>
                                </td>
                                <td>
                                  <p class="itemtext digits">{{number_format(($tf->price*$tf->kuantiti)-$tf->discount+$tf->delivery->ongkir,0,'.','.')}}</p>
                                </td>
                                @include('tests.order.komponen.badgefisik')
                                <td>
                                  @if ($tf->status != 'refund' && $tf->status != 'batal' && $tf->status != 'selesai')
                                      
                                  <button type="button" class="btn btn-light btn-sm" data-toggle="modal" data-target="#orderDetail{{$tf->id}}">Invoice</button>
                                  @include('tests.order.komponen.invoicefisik')
                                  @endif
                                  @if ($tf->status != 'proses' && $tf->status != 'batal' && $tf->status != 'selesai' && $tf->status != 'refund')
                                      
                                  <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#bukti{{$tf->id}}">Bukti</button>
                                @include('tests.order.komponen.buktifisik')

                                @endif
                              </td>
                              
                                </tr>
                                @endforeach
                              </tbody>
                         </table>
              </div>
              <!-- End Table-->

            </div>
            <!-- End Table-->
            <div class="row">
              <div class="col-md-12">
                @if ($cx ?? false)
                {{$transFisik->links() ?? null}}
                    
                @endif
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
