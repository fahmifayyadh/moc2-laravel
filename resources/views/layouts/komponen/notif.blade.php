<div class="modal fade" id="notif" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">All Notification</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Status</th>
                        <th scope="col">Notif</th>
                        <th scope="col">Time</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($all as $i=>$n)
                            
                        <tr>
                        <th scope="row">{{$i+1}}</th>
                        <td>{{$n->status == 'baca' ? 'Belum terbaca' : 'Terbaca'}}</td>
                        <td>{{$n->isi}}</td>
                        <td>{{$n->created_at->diffForHumans()}}</td>
                            <td>
                                @if ($n->status == 'baca')
                            <a href="{{route('notif.baca',$n->id)}}">

                                    <button class="btn btn-primary">Baca</button>
                                </a>
                                    
                                @endif
                            </td>
                        </tr>
                        @endforeach
                   
                    </tbody>
                  </table>
                </div>
              </div>
                <div class="modal-footer ">
                  <button class="btn btn-secondary" data-dismiss="modal" aria-label="Close">Cancel</button>
                </div>
         
            </div>
        </div>
        </div>

