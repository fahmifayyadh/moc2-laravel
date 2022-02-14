<div class="modal fade" id="isi{{$b->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" style="color:#000;font-family: 'Rubik', sans-serif; font-weight: 600; font-size: 30px;list-style: none;">
                <span style="color: #FF9F1C; font-family: 'Rubik', sans-serif; font-weight: bold;"> | </span>
              Isi Berita <span style="font-weight: 100;"></span></h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body modal-content">
                <img style="width: 100%" height="200px" src="{{ Storage::url('berita/'.$b->img) }}" alt="">
                <div id="berr">
                    {!! $b->isi !!}

                </div>
            </div>
            <div class="modal-footer ">
                <button class="btn btn-secondary" data-dismiss="modal" aria-label="Close">Close</button>
            </div>
        </div>
    </div>
</div>
