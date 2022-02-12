@if ($t->status == 'proses' || $t->status == 'selesai' || $t->status == 'refund')
<div class="modal fade" id="DetailModal{{$i}}" tabindex="-1" role="dialog" aria-labelledby="DetailModal" aria-hidden="true">
 <div class="modal-dialog modal-dialog-centered" role="document">
     <div class="modal-content">
         <div class="modal-header">
             <h5 class="modal-title"></h5>
             <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
         </div>
         <div class="modal-body">
             {{-- <form class="theme-form"> --}}
                 
               <div class="form-group">
                 <label for="">Nama Pembeli</label>
                 <input class="form-control" type="text" placeholder="Nama Barang" value="{{$t->user->name}}" readonly>
               </div>
               <div class="form-group">
                <label for="">Nama Pengiriman</label>
                <input class="form-control" type="text" placeholder="Nama Barang" value="{{$t->delivery->name}}" readonly>
              </div>
              <div class="form-group">
                <label for="">No Hp Penerima</label>
                <input class="form-control" type="text" placeholder="Nama Barang" value="{{$t->delivery->no_hp}}" readonly>
              </div>
               <div class="form-group">
                  <label for="">Provinsi</label>
                 <input class="form-control" type="text" placeholder="Kode Transaksi" value="{{$t->delivery->province->name}}" readonly>
               </div>
               <div class="form-group">
                  <label for="">kabupaten</label>
                 <input class="form-control" type="text" placeholder="Kode Transaksi" value="{{$t->delivery->city->name}}" readonly>
               </div>
               <div class="form-group">
                  <label for="">Kecamatan</label>
                 <input class="form-control" type="text" placeholder="Kode Transaksi" value="{{$t->delivery->subdistrict->name}}" readonly>
               </div>
               <div class="form-group">
                  <label for="">Alamat</label>
                 <input class="form-control" type="text" placeholder="Kode Transaksi" value="{{$t->delivery->alamat}}" readonly>
               </div>
               <div class="form-group">
                <label for="">Kode Pos</label>
               <input class="form-control" type="text" placeholder="Kode Transaksi" value="{{$t->delivery->kode_pos}}" readonly>
             </div>
               <div class="form-group">
                 <label for="">Harga Ongkir</label>
                 <input class="form-control" type="text" placeholder="Harga" value="{{$t->delivery->ongkir}}" readonly>
               </div>

               <div class="form-group">
                 <label for="">Tanggal</label>
                 <input class="form-control" type="text" placeholder="Tanggal Selesai" value="{{$t->updated_at}}" readonly>
               </div>
              <div class="form-group">
                <label for="">Point pembeli</label>
                <input class="form-control" type="text" placeholder="status" value="{{$t->point_pembeli}}" readonly>
              </div>
              <div class="form-group">
                <label for="">Point sponsor</label>
                <input class="form-control" type="text" placeholder="status" value="{{$t->point_sponsor}}" readonly>
              </div>
              <div class="form-group">
                <label for="">komisi</label>
                <input class="form-control" type="text" placeholder="status" value="{{$t->commission}}" readonly>
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
{{-- end detail modal --}}
@endif