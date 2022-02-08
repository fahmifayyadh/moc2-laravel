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
                                  <h4 class="media-heading">Pencairan Dana</h4>
                                </div>
                              </div>
                              <!-- End Info-->
                            </div>

                            <div class="col-sm-6">
                              <div class="text-md-right">
                                <br>
                                <br>
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
                  <label for="usr">Saldo Anda</label>
                  <div class="input-group">
                    <div class="input-group-prepend"><span class="input-group-text" id="inputGroupPrepend">Rp</span></div>
                    <input class="form-control" id="read-only" type="number" placeholder="2.000.0000" aria-describedby="inputGroupPrepend" readonly>
                  </div>
                  <br>
                  <br>
                  <label for="usr">Total Pencairan</label>
                  <div class="input-group">
                    <div class="input-group-prepend"><span class="input-group-text" id="inputGroupPrepend">Rp</span></div>
                    <input class="form-control" id="inputNumber" type="number" placeholder="Masukan Nominal" aria-describedby="inputGroupPrepend" required="">
                  </div>
                  <br>
                  <div class="alert alert-info">
                    <strong>Info!</strong> Untuk pengisian rekening penerima, akan lebih baik jika anda mengisi lebih dari 1 rekening yang anda miliki untuk mempermudah kami melakukan pencairan dana
                  </div>
                  <div class="form-group">
                    <label for="rek">No Rekening:</label>
                    <input type="number" class="form-control" id="rek" placeholder="Masukan Nomer Rekening">
                  </div>
                </div>
                <div class="card-footer ">
                  <center><button class="btn btn-primary"  data-toggle="modal" data-target="#refbutt01" data-original-title="" title="">Kirim</button>
                    <div class="modal fade" id="refbutt01" tabindex="-1" role="dialog" aria-labelledby="refbutt01" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title">Apakah anda yakin?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                          </div>
                          <div class="modal-body">
                            <p>untuk pengiriman dana.</p>
                          </div>
                          <div class="modal-footer">
                            <button class="btn btn-primary" type="button">Ya</button>
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Tidak</button>
                          </div>
                        </div>
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
