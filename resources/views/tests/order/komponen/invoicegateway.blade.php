<div class="modal fade" id="gate{{$tc->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Invoice</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <form action="{{route('order.invoiceCourse',$tc->id)}}" method="POST">
                    @csrf
                    <h3>Pilih Bank</h3>
                    <div class="form-group">
                        <label for="">Pilih bank</label>
                        <select name="bank" id="">
                            @foreach ($bank->where('type', 'gateway')->get() as $b)
                            <option value="{{$b->code}}">{{$b->name}}</option>
                            @endforeach
                        </select>
                    </div>
            </div>
            <div class="modal-footer ">
                <button type="submit" class="btn btn-primary">Add</button>
                </form>
                <button class="btn btn-secondary">Cancel</button>
            </div>
        </div>
    </div>
</div>
