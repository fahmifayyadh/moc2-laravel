<div class="modal fade" id="belii" tabindex="-1" role="dialog" aria-labelledby="preview-pembayaran" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="border-radius: 20px; background: #F2F2F2;">
            <div class="modal-header">
                <h5 class="modal-title">Checkout</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <form id="formBeli" action="{{route('ch.product',$product->id)}}" method="POST">
                    @csrf
                  <p>Pilih Harga Varian</p>
                    @forelse ($product->Varian()->get() as $i=>$v)
                  
                    <input type="radio" {{$i == 0 ?'checked' : ''}} id="v{{$v->id}}" name="varian" value="{{$v->id}}">
                    <label for="v{{$v->id}}">
                        <div class="col-md-12">{{$v->name}} : Rp.{{$v->price}}</div>
                    </label>
                    <br>
                    @empty
                    Empty Price
                    @endforelse
                    <div class="form-group">
                        <label for="inputEmail4">Provinsi</label>
                        <select name="provinci" id="provinci" class="form-control selectpicker" id="search-produk"
                            data-size="5" data-live-search="true">
                            <option selected="" disabled>Provinsi</option>
                            @foreach ($provinsi as $p)
                            <option value="{{$p->province_id}}">{{$p->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail4">Kabupaten</label>
                        <select name="kota" class="form-control selectpicker" id="kabupaten" data-size="5"
                            data-live-search="true">
                           
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail4">Kecamatan</label>
                        <select name="kecamatan" required class="form-control selectpicker" id="kecamatan" data-size="5"
                            data-live-search="true">
                           
                        </select>
                    </div>
                    <div class="form-group">
                        <select class="form-control selectpicker" id="search-produk" data-size="5" data-live-search="true"
                            name="exspedisi">
                            @foreach ($exspedisi as $e)
                            <option value="{{$e->name}}">{{Str::title($e->name)}}</option>

                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Kode Kupon</label>
                        <input class="form-control" type="text" placeholder="kode kupon" name="kode">
                        @error('kode')
                        <small>{{$message}}</small>
                        @enderror
                      </div>
                    <div class="form-group">
                    <input class="form-control" type="number" name="kuantiti" placeholder="Kuantiti" required> 
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" type="submit">Save changes</button>
                </form>
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>