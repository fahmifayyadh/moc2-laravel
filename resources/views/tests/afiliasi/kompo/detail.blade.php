
{{-- Detail modal --}}
<div class="modal fade" id="DetailModal{{$t->id}}" tabindex="-1" role="dialog"
    aria-labelledby="DetailModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"></h5>
                <button class="close" type="button" data-dismiss="modal"
                    aria-label="Close"><span
                        aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                {{-- <form class="theme-form"> --}}

                <div class="form-group">
                    <label for="">Komisi</label>
                    <input class="form-control" type="text" placeholder="Harga"
                        value="{{$t->commission}}" readonly>
                </div>

                <div class="form-group">
                    <label for="">Tanggal Dibuat</label>
                    <input class="form-control" type="text"
                        placeholder="Tanggal Transaksi"
                        value="{{$t->created_at->format('Y-m-d')}}" readonly>
                </div>

                <div class="form-group">
                    <label for="">Batas Penggunaan</label>
                    <input class="form-control" type="text"
                        placeholder="batas akhir ecourse" value="{{$t->batas}}"
                        readonly>
                </div>
                <div class="form-group">
                    <label for="">Nama Pembeli</label>
                    <input class="form-control" type="text"
                        placeholder="Jenis ecourse" value="{{$t->user->name}}"
                        readonly>
                </div>
                <div class="form-group">
                    <label for="">Nama Sponsor</label>
                    <input class="form-control" type="text"
                        placeholder="Jenis ecourse" value="{{$t->agent->user->name ?? 'tidak ada'}}"
                        readonly>
                </div>
                <div class="form-group">
                    <label for="">Point pembeli</label>
                    <input class="form-control" type="text"
                        placeholder="Jenis ecourse" value="{{$t->point_pembeli}}"
                        readonly>
                </div>
                <div class="form-group">
                    <label for="">Point Sponsor</label>
                    <input class="form-control" type="text"
                        placeholder="Jenis ecourse" value="{{$t->point_sponsor}}"
                        readonly>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-danger" type="button"
                    data-dismiss="modal">Close</button>
                {{-- <button class="btn btn-primary" type="button">Save changes</button> --}}
            </div>
        </div>
    </div>
</div>
{{-- end detail modal --}}
