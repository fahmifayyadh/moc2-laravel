<div class="modal fade" id="afiliasi-detail55{{$i->id}}" tabindex="-1" role="dialog"
aria-labelledby="afiliasi-detail5" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
  <div class="modal-content p-l-10 p-r-10 ">
    <div class="modal-header">
      <h4 class="modal-title">Detail</h4>
      <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
        aria-hidden="true">×</span></button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label for="">Barang yang di-promosikan</label>
        <input class="form-control" type="text" placeholder="{{$i->product->name}}" readonly>
        </div>
        <div class="form-group">
            <label for="">Harga Barang</label>
        <input class="form-control" type="text/" placeholder="{{$i->price}}" readonly>
        </div>
        <div class="form-group">
           <label for="">Tanggal Pembelian</label>
        <input class="form-control" type="text/" placeholder="{{$i->created_at}}" readonly>
        </div>
        
    </div>
  </div>
</div>
</div>