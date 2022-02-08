<div class="modal fade" id="preview-pembayaran{{$t->id}}" tabindex="-1"
    role="dialog" aria-labelledby="preview-pembayaran" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content p-l-10 p-r-10 ">
            <div class="modal-header">
                <h5 class="modal-title">Bukti Pembayaran</h5>
                <button class="close" type="button" data-dismiss="modal"
                    aria-label="Close"><span
                        aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <center><a
                        href="{{asset(Storage::url('bukti/'.$t->bukti))}}"
                        itemprop="contentUrl" data-size="1600x950"><img
                            class="img-thumbnail" id="preview"
                            src="{{asset(Storage::url('bukti/'.$t->bukti))}}"
                            itemprop="thumbnail" alt="Belum Upload Bukti"
                            style="height:400px ;width: 720px;"></a>
                </center>
                <hr>
                <form action="{{route('transaksi.buktiCourse',$t->id)}}"
                    method="post">
                    @csrf
                    <label for="tolak">Tolak</label>
                    <input id="tolak" type="radio" name="konfrim_bukti"
                        value="tolak">
                    <label for="terima">Terima</label>
                    <input id="terima" type="radio" name="konfrim_bukti"
                        value="terima">
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" type="submit">Save
                    changes</button>
                </form>
                <button class="btn btn-secondary" type="button"
                    data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>