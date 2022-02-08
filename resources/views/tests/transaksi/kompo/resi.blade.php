{{-- modal input resi --}}
<div class="modal fade" id="InputResiModal{{$i}}" tabindex="-1" role="dialog" aria-labelledby="InputResiModal"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"></h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <form class="theme-form" action="{{route('transaksi.resi',$t->id)}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input class="form-control" type="text" name="resi" value="{{$t->delivery->no_resi}}"
                            placeholder="Input Resi">
                    </div>
                    <div class="modal-footer ">
                        <button class="btn" style="background-color: blue;color:white">Save</button>
                </form>
                <button class="btn btn-danger" data-dismiss="modal">Back</button>
            </div>
        </div>

    </div>
</div>

{{-- end input resi --}}