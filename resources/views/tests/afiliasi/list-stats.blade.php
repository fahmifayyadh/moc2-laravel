@extends('layouts.master', ['title' => 'Status Sponsor'])
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
                                  <h4 class="media-heading">Daftar Status Afiliasi</h4>
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
                                <td class="Penjual">
                                  <h5 class="p-2 mb-0">Nama User</h5>
                                </td>
                                <td class="Penjual">
                                  <h5 class="p-2 mb-0">Produk</h5>
                                </td>
                                <td class="Status">
                                  <h5 class="p-2 mb-0">Total Poin</h5>
                                </td>
                              <td class="Status">
                                <h5 class="p-2 mb-0">Tanggal</h5>
                              </td>
                              <td class="Stats">
                                <h5 class="p-2 mb-0">Status</h5>
                              </td>
                              <td class="Action">
                                <h5 class="p-2 mb-0">Action</h5>
                              </td>

                            </tr>
                            @foreach ($agents as $i=>$a)
                                
                            
                            <tr>
                              <td>
                              <label>{{$i+1}}</label>
                              </td>
                              <td>
                              <p class="itemtext digits">{{$a->user->name}}</p>
                              </td>
                              <td>
                              <p class="itemtext digits">{{$a->paket->name}}</p>
                              </td>
                              <td>
                                <p class="itemtext date">{{$a->transaksi()->where('status','selesai')->sum('point_sponsor')}}</p>
                              </td>
                              <td>
                                <p class="itemtext digits">{{$a->created_at->format('Y-m-d')}}</p>
                              </td>
                              <td>
                                <span class="badge badge-pill badge-success" style="color: white;font-size:12px">Aktif</span>
                              </td>

                              <td>
                              <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#afi0{{$a->id}}">Detail</button>
                                <div class="modal fade" id="afi0{{$a->id}}" tabindex="-1" role="dialog" aria-labelledby="afi0" aria-hidden="true">
                                  <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title">Detail Status</h5>
                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                      </div>
                                      <div class="modal-body">
                                        <p>link yang digunakan : <a target="__blank" href="{{URL::to('/').'/order-sponsor/'.$a->user_id.'/'.$a->kode}}">{{URL::to('/').'/order-sponsor/'.$a->user_id.'/'.$a->kode}}</a></p> 
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </td>

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
              {{$agents->links()}}
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
