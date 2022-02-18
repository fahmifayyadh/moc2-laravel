<div class="modal fade" id="exampleModalCenter1{{$i->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content p-l-10 p-r-10 ">
        <form action="{{route('komisiFisik.bayar')}}" method="post">
        @csrf
      <input type="number" name="id_transaksi" value="{{$i->id}}" hidden>
      <div class="form-group">
          <label for="rek"><h4>No Rekening:</h4></label>
          <input name="no_rekening" type="number" class="form-control" value="{{\App\User::where('email',$i->user->sponsor)->first()->no_rekening}}" id="rek" placeholder="Masukan Nomer Rekening">
        </div>
        <div class="form-group">
          <label for="rek"><h4>Nama Penerima:</h4></label>
          <input name="name" type="text" class="form-control" id="rek" value="{{\App\User::where('email',$i->user->sponsor)->first()->nama_rekening}}" placeholder="Masukan Nama Pemilik Rekening">
        </div>
        <div class="form-group">
          <label for="rek"><h4>Bank:</h4></label>
          <select name="bank" id="">
            @foreach ($bank as $b)

            <option value="{{$b['code']}}">{{$b['name']}}</option>
            @endforeach
          </select>
        </div>
        <div class="modal-footer">
          <button class="btn btn-primary" type="submit">Bayar</button>
        </form>
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
        </div>
      </div>
    </div>