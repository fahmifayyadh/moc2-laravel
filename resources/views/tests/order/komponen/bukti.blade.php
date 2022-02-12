<div class="modal fade" id="bukti{{$tc->id}}"
tabindex="-1" role="dialog"
aria-labelledby="orderDetail"
aria-hidden="true">
<div class="modal-dialog modal-dialog-centered"
    role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Detail
                Order</h5>
            <button class="close"
                type="button"
                data-dismiss="modal"
                aria-label="Close"><span
                    aria-hidden="true">×</span></button>
        </div>
        <div class="modal-body">
            <form
                action="{{route('order.buktiCourse',$tc->id)}}"
                method="post"
                enctype="multipart/form-data">
                @csrf
                <img style="width: 300px;height:300px"
                    src="{{asset(Storage::url('bukti/'.$tc->bukti))}}"
                    alt="Tidak Ada Bukti Transfer">
                <input type="file"
                    name="bukti">
        </div>
        <div class="modal-footer">
            <button class="btn btn-primary"
                type="submit">Save
                changes</button>
            </form>
            <button class="btn btn-danger"
                type="button"
                data-dismiss="modal">Close</button>
        </div>
    </div>
</div>
</div>