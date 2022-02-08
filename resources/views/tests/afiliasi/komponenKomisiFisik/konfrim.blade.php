<div class="modal fade" id="komisi-konfirmasi{{$t->id}}" tabindex="-1" role="dialog" aria-labelledby="komisi-konfirmasi" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Apakah anda yakin?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        </div>
          <form action="{{route('komisiFisik.konfrim')}}" method="POST">
            @csrf
          <input type="number" name="id_komisi" value="{{$t->komisiFisik->id}}" hidden>

        <div class="modal-footer">
          <button class="btn btn-success" type="submit">Ya</button>
        </form>
          <button class="btn btn-danger" type="button" data-dismiss="modal">Tidak</button>
        </div>
      </div>
    </div>
