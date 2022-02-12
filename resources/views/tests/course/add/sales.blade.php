<div class="modal fade" id="sales{{$ce->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Link Sales Page</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                @if ($ce->sales()->exists())
                <a onclick="return confirm('apakah anda yakin?')" href="{{route('sales.delete',$ce->sales->id)}}">
                    <button class="btn btn-sm btn-warning pull-right">Clear</button>
                </a>
                    
                @endif
                <form id="saless{{$ce->id}}" action="{{route('sales.create',$ce->id)}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Link</label>
                        <input type="text" class="form-control" placeholder="example https://google.com" value="{{$ce->sales->link ?? null}}" name="link" required>
                      </div>
                    </form>
            </div>
            <div class="modal-footer ">
                <button onclick="document.getElementById('saless{{$ce->id}}').submit()" type="button" class="btn btn-primary">Save changes</button>
            
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>