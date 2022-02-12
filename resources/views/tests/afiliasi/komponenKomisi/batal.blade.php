<div class="modal fade" id="exampleModalCenter3{{$i->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter3" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Apakah anda yakin?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        </div>
        <div class="modal-footer">
        <form action="{{route('komisi.batal')}}" method="POST">
          @csrf
        <input type="number" name="trans" value="{{$i->id}}" hidden>
          <button class="btn btn-primary" type="submit">Ya</button>
        </form>
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Tidak</button>
      </div>
    </div>
  </div>
</div>