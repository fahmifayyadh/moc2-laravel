<div class="modal fade bd-example-modal-lg" id="kirimproduk{{$tf->id}}" tabindex="-1" role="dialog" aria-labelledby="kirimproduk"
aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header" style="border-bottom: 0px;">
            <h5 class="modal-title" id="exampleModalLabel">
                <p>
                    <span style="color: #FF9F1C; font-family: 'Rubik', sans-serif; font-weight: bold;"> | </span>
                    <span class="dec-text">Detail Pengiriman</span>
                </p>
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="row text-black mb-3">
                <div class="col-3">Penerima</div><div class="col-4"> : {{$tf->delivery->name}}</div>
            </div>
            <div class="row text-black mb-3">
                <div class="col-3">Exspedisi</div><div class="col-4"> : {{$tf->delivery->kurir}}</div>
            </div>
            <div class="row text-black mb-3">
                <div class="col-3">Jenis Pengiriman</div><div class="col-4"> : {{$tf->delivery->jenis}}</div>
            </div>
            <div class="row text-black mb-3">
                <div class="col-3">No Resi</div><div class="col-4"> : {{$tf->delivery->no_resi != null ? $tf->delivery->no_resi :'Belum Ada'}}</div>
            </div>
            <div class="row text-black mb-5">
                <div class="col-3">Tanggal Tiba</div><div class="col-4"> : {{$tf->status == 'selesai' ? $tf->updated_at->format('d-m-Y') : 'Belum Selesai'}}</div>
            </div>
        </div>

    </div>
</div>
</div>