 <!-- Modal 2-->
                    <div class="modal fade bd-example-modal-lg" id="terimaproduk{{$tf->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header" style="border-bottom: 0px;">
                                <h5 class="modal-title" id="exampleModalLabel">
                                    <p>
                                        <span style="color: #FF9F1C; font-family: 'Rubik', sans-serif; font-weight: bold;"> | </span>
                                        <span class="dec-text">Detail Penerima</span>
                                    </p>
                                </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row text-black mb-3">
                                    <div class="col-3">Nama Penerima</div><div class="col-4"> : {{$tf->delivery->name}}</div>
                                </div>
                                <div class="row text-black mb-3">
                                    <div class="col-3">No. Hp Penerima</div><div class="col-4"> :{{$tf->delivery->no_hp}}</div>
                                </div>
                                <div class="row text-black mb-3">
                                    <div class="col-3">Alamat Pengiriman</div><div class="col-8"> : {{$tf->delivery->alamat}}</div>
                                </div>
                                <div class="row text-black mb-3">
                                    <div class="col-3">Provinsi</div><div class="col-4"> : {{$tf->delivery->province->name}}</div>
                                </div>
                                <div class="row text-black mb-3">
                                    <div class="col-3">Kabupaten</div><div class="col-4"> : {{$tf->delivery->city->name}}</div>
                                </div>
                                <div class="row text-black mb-3">
                                    <div class="col-3">Kecamatan</div><div class="col-4"> : {{$tf->delivery->subdistrict->name}}</div>
                                </div>
                                <div class="row text-black mb-3">
                                    <div class="col-3">Kode Pos</div><div class="col-4"> : {{$tf->delivery->kode_pos}}</div>
                                </div>
                            </div>
                
                        </div>
                    </div>
                    </div>