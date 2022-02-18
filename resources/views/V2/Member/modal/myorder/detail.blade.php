<div class="modal fade" id="#orderDetail{{$tc->id}}" tabindex="-1" role="dialog" aria-labelledby="orderDetail"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Detail
                    Order</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                {{-- <form class="theme-form"> --}}
                <div class="form-group">
                    <label for="">ID
                        Pemesanan</label>
                    <input class="form-control" type="text" placeholder="Id Pemesanan" value="{{$tc->id}}_{{$tc->kode}}"
                        readonly>
                </div>
                <div class="form-group">
                    <label for="">Nama
                        Produk</label>
                    <input class="form-control" type="text" placeholder="Nama Produk" value="{{$tc->paket->name}}"
                        readonly>
                </div>
                <div class="form-group">
                    <label for="">Harga</label>
                    <input class="form-control" type="text" placeholder="Harga Normal"
                        value="Rp.{{$tc->price-$tc->discount}}"
                        readonly>
                </div>
                <div class="form-group">
                    <label for="">Tanggal
                        Pembelian</label>
                    <input class="form-control" type="text" placeholder="Tanggal Pesan" value="{{$tc->created_at}}"
                        readonly>
                </div>
                <div class="form-group">
                    <label for="">Tanggal
                        Pembayaran</label>
                    <input class="form-control" type="text" placeholder="Tanggal Tiba"
                        value="{{$tc->status == 'selesai' ? $tc->updated_at->format('d-m-Y') : 'Belum Selesai'}}"
                        readonly>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-danger" type="button" data-dismiss="modal">Close</button>
                {{-- <button class="btn btn-primary" type="button">Save changes</button> --}}
            </div>
        </div>
    </div>
</div>