<div class="modal fade" id="person{{$tc->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Invoice</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <form>
                    <h3>Silakan Transafer ke rekening Bank berikut</h3>
                    <div class="form-group">
                        <label for="">Harga Yang Harus Dibayar</label>
                        <input class="form-control" readonly type="text" placeholder="Name" name="name"
                            value="{{number_format($tc->price-$tc->discount,0,'.','.')}}">
                    </div>
                </form>
                <table>
                    <tbody>

                        <tr>
                            <th>No</th>
                            <th>Nama Bank:</th>
                            <th>No rekening:</th>
                            <th>Atas Nama:</th>

                        </tr>
                        @foreach ($personal as $i=>$b)
                        <tr>
                            <td>{{$i+1}}</td>
                            <td>{{$b->name}}</td>
                            <td>{{$b->no_rekening}}</td>
                            <td>{{$b->nama_pemilik}}</td>
                        </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="modal-footer ">
                <button class="btn btn-secondary">Cancel</button>
            </div>
        </div>
    </div>
</div>