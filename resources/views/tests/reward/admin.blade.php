@extends('layouts.master')
@section('content')
<div class="page-body">
    <br>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
      <div class="row starter-main">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <!-- <div class="pull-right mr-4"><a href="#">Edit Profile Playlist</a></div> -->
              <h5>Reward</h5>
            
            </div>
            <div class="card-body">
              
              <!-- Tool -->
                <div class="dropdown-basic">
                  <div class="row justify-content-end">
                    <div style="padding-right: 10px;">
                      <button class="btn btn-success btn-lg" type="button" data-toggle="modal" data-target="#addReward">Add</button>
                      {{-- Modal add --}}
                      <div class="modal fade" id="addReward" tabindex="-1" role="dialog" aria-labelledby="addReward" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Add Reward</h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                </div>
                                <div class="modal-body">
                                <form class="theme-form" action="{{route('reward.add')}}" method="POST" enctype="multipart/form-data">
                                      @csrf  
                                      <div class="form-group">
                                            <input class="form-control" required type="text" placeholder="Title" name="judul">
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Choose Thumbnail</label>
                                            <div class="col-sm-9">
                                              <input class="form-control" required type="file" id="thumbnail" name="image">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                          <textarea name="desc" class="form-control" required placeholder="Deskripsi" id="" cols="30" rows="10"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" type="number" required placeholder="Point" name="harga_point">
                                        </div>
                                        <div class="form-group">
                                          <input placeholder="Jangka Waktu" required type="date" name="batas">
                                        </div>
                                      </div>
                                        <div class="modal-footer ">
                                          <button type="submit" class="btn btn-primary">Add</button>
                                        </form>
                                          <button class="btn btn-secondary" data-dismiss="modal" aria-label="Close">Cancel</button>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- end modal add --}}
                      {{-- <div class="dropdown">
                        <div class="btn-group mb-0">
                          <button class="dropbtn btn-info btn-round" type="button">Filter <span><i class="icofont icofont-arrow-down"></i></span></button>
                          <div class="dropdown-content"><a href="#">Selesai</a><a href="#">Belum selesai</a><a href="#">Pending</a>
                          </div>
                        </div>
                      </div> --}}
                  </div>
                </div>
                
              </div>
              <!-- End Tool -->
              <hr>
              <div class="table-responsive invoice-table" id="table">
                <table class="table table-bordered table-striped">
                    <thead class="active">
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Foto</th>
                            <th>Deskripsi</th>
                            <th>Point</th>
                            <th>Jangka Waktu</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                    <tbody>
                      @foreach ($reward as $i => $r)
                          
                        <tr>
                        <td>{{$i+1}}</td>
                        <td>{{$r->judul}}</td>
                          <td><a href="{{asset(Storage::url('reward/'.$r->image))}}"itemprop="contentUrl" data-size="1600x950">
                            <img class="img-thumbnail" id="preview"  src="{{asset(Storage::url('reward/'.$r->image))}}" itemprop="thumbnail"alt="Image description" style="height:100px ;width: 200px;" ></a></td>
                          <td style="width: 300px;">{{$r->desc}}</td>
                          <td>{{number_format($r->harga_point,0,'.','.')}}</td>
                          <td>{{$r->batas}}</td>

                          <td>
                              <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#DetailModal{{$i}}">Detail</button>
                              <br>
                              <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editModal{{$i}}">Edit</button>
                              <br>
                              @if (!$r->transactionReward()->exists())
                              <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal{{$i}}">Delete</button> 
                                  
                              @endif
                          </td>
                        
                        </tr>
                             {{-- Modal Delete --}}
                  <div class="modal fade" id="deleteModal{{$i}}" tabindex="-1" role="dialog" aria-labelledby="deleteModal" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Delete Reward</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body">
                            <form class="theme-form" action="{{route('reward.delete',$r->id)}}" method="POST" enctype="multipart/form-data">
                                  @csrf 
                                  @method('delete') 
                                  <h5>Apakah anda yakin akan menghapus?</h4>
                                    <div class="modal-footer ">
                                      <button type="submit" class="btn btn-primary">Delete</button>
                                    </form>
                                      <button class="btn btn-secondary" data-dismiss="modal" aria-label="Close">Cancel</button>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- end modal Delete --}}
                  {{-- Modal edit --}}
                  <div class="modal fade" id="editModal{{$i}}" tabindex="-1" role="dialog" aria-labelledby="editModal" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Edit Reward</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body">
                              <form class="theme-form" action="{{route('reward.edit',$r->id)}}" method="POST" enctype="multipart/form-data">
                                    @csrf  
                                    @method('put')
                                    <div class="form-group">
                                    <input class="form-control" type="text" placeholder="Title" name="judul" value="{{$r->judul}}">
                                      </div>
                                      <div class="form-group row">
                                          <label class="col-sm-3 col-form-label">Choose Thumbnail</label>
                                          <div class="col-sm-9">
                                            <input class="form-control" type="file" id="thumbnail" name="image">
                                          </div>
                                      </div>
                                      <div class="form-group">
                                      <textarea name="desc" class="form-control" placeholder="Deskripsi" id="" cols="30" rows="10">{{$r->desc}}</textarea>
                                      </div>
                                      <div class="form-group">
                                          <input class="form-control" type="number" placeholder="Point" name="harga_point" value="{{$r->harga_point}}">
                                      </div>
                                      <div class="form-group">
                                      <input placeholder="Jangka Waktu" type="date" name="batas" value="{{$r->batas}}" >
                                      </div>
                                    </div>
                                    <div class="modal-footer ">
                                      <button class="btn btn-primary">Edit</button>
                                    </form>
                                      <button class="btn btn-secondary" data-dismiss="modal" aria-label="Close">Cancel</button>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- end modal edit --}}
                   {{-- Modal detail --}}
                   <div class="modal fade" id="DetailModal{{$i}}" tabindex="-1" role="dialog" aria-labelledby="DetailModal" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Detail Reward</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body">
                              <form class="theme-form" action="" method="POST" enctype="multipart/form-data">
                                @csrf
                                <center><a href="{{asset(Storage::url('/reward/'.$r->image))}}"
                                  itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail"
                                                                                  id="preview"
                                                                                  src="{{asset(Storage::url('/reward/'.$r->image))}}"
                                                                                  itemprop="thumbnail"
                                                                                  alt="Image description"
                                                                                  style="height:400px ;width: 720px;"></a>
                                </center><br>
                                <div class="form-group">
                                <input class="form-control" type="text" placeholder="Title" value="{{$r->judul}}" name="name" readonly>
                                  </div>

                                  <div class="form-group">
                                  <textarea name="Deskripsi" class="form-control" placeholder="Deskripsi" id="" cols="30" rows="10" readonly>{{$r->desc}}</textarea>
                                  </div>
                                  <div class="form-group">
                                  <input class="form-control" type="number" placeholder="Point" name="Point" value="{{$r->harga_point}}" readonly>
                                  </div>
                                  <div class="form-group">
                                  <input class="form-control" type="number" placeholder="17/10/2020-20/10/2020" name="batas" value="{{$r->batas}}" readonly>
                                  </div>
                                  <div class="modal-footer ">
                                    <button class="btn btn-secondary" data-dismiss="modal" aria-label="Close">Cancel</button>
                                  </div>
                              </form>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- end modal detail --}}
                      @endforeach

                   

                  

             




                    </tbody>
                </table>
              </div>
              
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  
 @endsection