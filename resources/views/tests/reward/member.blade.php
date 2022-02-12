@extends('layouts.master')
@section('content')
<div class="page-body">
    {{-- <div class="container-fluid">
      <div class="page-header">
        <div class="row">
          <div class="col-6">
            <h3>Add User</h3>
            <!-- <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
              <li class="breadcrumb-item">Data Tables</li>
            </ol> -->
          </div>
          <div class="col-6">
            <!-- Bookmark Start-->

            <!-- Bookmark Ends-->
          </div>
        </div>
      </div>
    </div> --}}
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
                      <div class="dropdown">
                        <div class="btn-group mb-0">
                          {{-- <button data-toggle="modal" data-target="#filter-leaderboard" class="btn btn-square btn-info btn-lg" type="button"  title=""><i class="icofont icofont-filter"></i>Filter</button> --}}
                        </div>
                      </div>
                  </div>
                </div>
                {{-- modal --}}
                  {{-- <div class="modal fade" id="filter-leaderboard" tabindex="-1" role="dialog" aria-labelledby="preview-course" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content p-l-10 p-r-10 ">
                        <div class="modal-header">
                          <h5 class="modal-title">Filter LeaderBoard</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        </div>
                        <div class="modal-body">
                          <div class="form-group row">
                            <input class="datepicker-here form-control digits" type="text" data-range="true" data-multiple-dates-separator=" - " data-language="en" data-original-title="" title="">
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button class="btn btn-primary" type="button">Save changes</button>
                          <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div> --}}
                {{-- endModal --}}
              </div>
              <!-- End Tool -->
              <hr>
              <div class="table-responsive invoice-table" id="table">
                <table class="table table-bordered table-striped">
                    <thead class="active">
                        <tr>
                            <th>No</th>
                            <th>Reward</th>
                            <th>Photo Reward</th>
                            <th>Deskripsi</th>
                            <th>Point</th>
                            <th>Jangka Waktu</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                    <tbody>
                      @foreach ($reward as $i=>$r)
                        <tr>
                        <td>{{$i+1}}</td>
                        <td>{{$r->judul}}</td>
                        <td><a href="{{asset(Storage::url('/reward/'.$r->image))}}"itemprop="contentUrl" data-size="1600x950">
                            <img class="img-thumbnail" id="preview"  src="{{asset(Storage::url('/reward/'.$r->image))}}" itemprop="thumbnail"alt="Image description" style="height:auto; width: 100%;" ></a></td>
                        <td style="width: 200px;">{{$r->desc}}</td>
                        <td>{{number_format($r->harga_point,0,'.','.')}}</td>
                        <td>{{$r->batas}}</td>
                        <td>
                              {{-- <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#DetailModal">Detail</button> --}}
                          <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#Modalbeli{{$i}}">Tukar</button>


                          </td>

                     
                    {{-- Modal Beli --}}
                        <div class="modal fade" id="Modalbeli{{$i}}" tabindex="-1" role="dialog" aria-labelledby="Modalbeli" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <h5 class="modal-title">Anda yakin akan membeli reward ini?</h5>
                                  <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                              </div>
                              <div class="modal-body">
                              <form class="theme-form" action="{{route('reward.tukar',$r->id)}}" method="POST" enctype="multipart/form-data">
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
                                        <button class="btn btn-success">Beli</button>
                                      </form>
                                        <button class="btn btn-danger" data-dismiss="modal" aria-label="Close">Cancel</button>
                                      </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  {{-- end modal Beli --}}
                </tr>
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
