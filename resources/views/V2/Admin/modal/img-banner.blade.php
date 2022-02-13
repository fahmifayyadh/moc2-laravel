<div class="modal fade" id="img{{$b->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">image</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <img style="width: 100%" height="200px" src="{{ Storage::url('banner/'.$b->img) }}" alt="">
            </div>
            <div class="modal-footer ">
                <button class="btn btn-secondary">Close</button>
            </div>
        </div>
    </div>
</div>
