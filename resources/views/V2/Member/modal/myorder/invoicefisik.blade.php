<div class="modal fade" id="orderDetail{{$tf->id}}" tabindex="-1" role="dialog" aria-labelledby="orderDetail"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                                    <p>
                                        <span style="color: #FF9F1C; font-family: 'Rubik', sans-serif; font-weight: bold;"> | </span>
                                        <span class="dec-text">Detail Pembayaran</span>
                                    </p>
                                </h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                {{-- <form class="theme-form"> --}}
                <form action="{{route('order.invoice',$tf->id)}}" method="GET">
                    <div class="form-group">
                        <select class="form-control" name="bank" id="">
                            @foreach ($bank as $b)
                            <option value="{{$b->id}}">{{$b->name}}</option>

                            @endforeach
                        </select>
                    </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" type="submit">See</button>
                </form>
                <button class="btn btn-danger" type="button" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>