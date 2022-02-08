@extends('frontend.layouts.master')
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
                          <button data-toggle="modal" data-target="#filter-leaderboard" class="btn btn-square btn-info btn-lg" type="button"  title=""><i class="icofont icofont-filter"></i>Filter</button>
                        </div>
                      </div>
                  </div>
                </div>
                {{-- modal --}}
                  <div class="modal fade" id="filter-leaderboard" tabindex="-1" role="dialog" aria-labelledby="preview-course" aria-hidden="true">
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
                  </div>
                {{-- endModal --}}
              </div>
              <!-- End Tool -->
              <hr>
              <div class="table-responsive invoice-table" id="table">
                <table class="table table-bordered table-striped">
                    <thead class="active">
                        <tr>
                            <th>No</th>
                            <th>Title</th>
                            <th>Foto</th>
                            <th>Deskripsi</th>
                            <th>Point</th>
                            <th>Jangka Waktu</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                    <tbody>
                        <tr>
                          <td>1</td>
                          <td>abc</td>
                          <td><a href="{{asset(Storage::url('../assets/images/product/1.png'))}}"itemprop="contentUrl" data-size="1600x950">
                            <img class="img-thumbnail" id="preview"  src="{{asset(Storage::url('../assets/images/product/1.png'))}}" itemprop="thumbnail"alt="Image description" style="height:200px ;width: 320px;" ></a></td>
                          <td style="width: 300px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</td>
                          <td>20000</td>
                          <td>10 November 2020</td>
                          <td>
                              {{-- <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#DetailModal">Detail</button> --}}
                              <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#Modalbeli">Tukar</button>


                          </td>

                        </tr>


                      {{-- Modal detail --}}
                      <div class="modal fade" id="DetailModal" tabindex="-1" role="dialog" aria-labelledby="DetailModal" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Detail Reward</h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                </div>
                                <div class="modal-body">
                                    <form class="theme-form" action="" method="POST" enctype="multipart/form-data">
                                      @csrf
                                      <center><a href="{{asset(Storage::url('../assets/images/product/1.png'))}}"
                                        itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail"
                                                                                        id="preview"
                                                                                        src="{{asset(Storage::url('../assets/images/product/1.png'))}}"
                                                                                        itemprop="thumbnail"
                                                                                        alt="Image description"
                                                                                        style="height:400px ;width: 720px;"></a>
                                      </center><br>
                                      <div class="form-group">
                                            <input class="form-control" type="text" placeholder="Title" name="name" readonly>
                                        </div>

                                        <div class="form-group">
                                          <textarea name="Deskripsi" class="form-control" placeholder="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum." id="" cols="30" rows="10" readonly></textarea>
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" type="number" placeholder="Point" name="Point" readonly>
                                        </div>
                                        <div class="form-group">
                                          <input class="form-control" type="number" placeholder="17/10/2020-20/10/2020" name="Point" readonly>
                                        </div>
                                        <div class="modal-footer ">
                                          {{-- <button class="btn btn-primary">Save</button> --}}
                                          <button class="btn btn-secondary" data-dismiss="modal" aria-label="Close">Close</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- end modal detail --}}

                    {{-- Modal Beli --}}
                    <div class="modal fade" id="Modalbeli" tabindex="-1" role="dialog" aria-labelledby="Modalbeli" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <h5 class="modal-title">Anda yakin akan membeli reward ini?</h5>
                                  <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                              </div>
                              <div class="modal-body">
                                  <form class="theme-form" action="" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <center><a href="{{asset(Storage::url('../assets/images/product/1.png'))}}"
                                      itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail"
                                                                                      id="preview"
                                                                                      src="{{asset(Storage::url('../assets/images/product/1.png'))}}"
                                                                                      itemprop="thumbnail"
                                                                                      alt="Image description"
                                                                                      style="height:400px ;width: 720px;"></a>
                                    </center><br>
                                    <div class="form-group">
                                          <input class="form-control" type="text" placeholder="Title" name="name" readonly>
                                      </div>

                                      <div class="form-group">
                                        <textarea name="Deskripsi" class="form-control" placeholder="Deskripsi" id="" cols="30" rows="10" readonly></textarea>
                                      </div>
                                      <div class="form-group">
                                          <input class="form-control" type="number" placeholder="Point" name="Point" readonly>
                                      </div>
                                      <div class="form-group">
                                        <input class="form-control" type="number" placeholder="17/10/2020-20/10/2020" name="Point" readonly>
                                      </div>
                                      <div class="modal-footer ">
                                        <button class="btn btn-primary">Beli</button>
                                        <button class="btn btn-secondary" data-dismiss="modal" aria-label="Close">Cancel</button>
                                      </div>
                                  </form>
                              </div>
                          </div>
                      </div>
                  </div>
                  {{-- end modal Beli --}}






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
