@extends('layouts.master',['title' => 'Pengaturan Exspedisi'])
@section('content')
<div class="page-body">
    <div class="container-fluid">
      <div class="page-header">
        <div class="row">
          <div class="col-6">
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
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
      <div class="row starter-main">
        <div class="col-sm-12">
          <div class="card">
            <div class="card-header">
              <!-- <div class="pull-right mr-4"><a href="#">Edit Profile Playlist</a></div> -->
              <h5>Semua Ekspedisi</h5>
  @php
      $kur ='jne, pos, tiki, rpx, pandu, wahana, sicepat, jnt, pahala, sap, jet, indah, dse, slis, first, ncs, star, ninja, lion, idl, rex, ide, sentral';
              $kur = explode(",", $kur);
  @endphp          
            </div>
            <div class="card-body">
              <!-- Tool -->
                <div class="dropdown-basic">
                  <div class="row justify-content-end">
                  <div style="padding-left: 10px;">
                      <!-- <button class="btn btn-info btn-lg" type="button">Tambah Course</button> -->
                      <button class="btn btn-info btn-lg" type="button" data-toggle="modal" data-target="#exampleModalCenter">Add</button>
                      <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <h5 class="modal-title">Personal Exspedisi</h5>
                                      <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                  </div>
                                  <div class="modal-body">
                                  <form action="{{route('exspedisi.store')}}" class="theme-form" method="POST">
                                    @csrf    
                                    
                                    <div class="form-group">
                                            <select name="name" class="form-control btn-square" id="select-1">
                                              <option value="p" disabled selected>Pilih Exspedisi</option>
                                              @foreach ($kur as $k)
                                              <option value="{{trim($k)}}">{{Str::title($k)}}</option>
                                                  
                                              @endforeach
                                              
                                              
                                            </select>
                                          </div>
                                          <div class="modal-footer ">
                                            <button class="btn btn-primary">Add</button>
                                            <button class="btn btn-secondary" data-dismiss="modal" aria-label="Close">Cancel</button>
                                          </div>
                                      </form>
                                  </div>
                              </div>
                          </div>
                      </div>
                    <!-- <button class="btn btn-pill btn-info btn-sm" type="button" data-original-title="btn btn-pill btn-info btn-sm" title="">Tambah Course</button> -->
                  </div>
                </div>
                
              </div>
              <hr>
              <div class="table-responsive">
                <div id="advance-4_wrapper" class="dataTables_wrapper">
                  <table id="table_id" class="table table-hover text-nowrap">
                    <thead class="active">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                    <tbody>
                      @foreach ($kurir as $in => $item)
                        <tr>
                          <td>{{$in+1}}</td>
                        <td>{{$item->name}}</td>
                          <td>
                              <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#EditExsModal{{$item->id}}">Edit</button>
                              <form action="{{route('exspedisi.delete',['id'=>$item->id])}}" method="POST">@csrf @method('delete') <button type=submit class="btn btn-danger btn-sm">Delete</button></form>
                          
                          </td>
                          <div class="modal fade" id="EditExsModal{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="EditBankModal" aria-hidden="true">
                              <div class="modal-dialog modal-dialog-centered" role="document">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <h5 class="modal-title">Edit Exspedisi</h5>
                                          <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                      </div>
                                      <div class="modal-body">
                                      <form class="theme-form" action="{{route('exspedisi.edit',['id' => $item->id])}}" method="POST">
                                        @csrf    
                                        @method('put')
                                        <div class="form-group">
                                          <select name="name" class="form-control btn-square" id="select-1">
                                            <option value="p" disabled selected>Pilih Exspedisi</option>
                                            @foreach ($kur as $k)
                                            <option value="{{trim($k)}}" {!! $item->name == trim($k) ? 'selected' : null !!}>{{Str::title($k)}}</option>
                                                
                                            @endforeach
                                            
                                            
                                          </select>
                                            </div>
                                              <div class="modal-footer ">
                                                <button class="btn btn-primary">Add</button>
                                                <button class="btn btn-secondary" data-dismiss="modal" aria-label="Close">Cancel</button>
                                              </div>
                                          </form>
                                      </div>
                                      <!-- <div class="modal-footer">
                                          <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                                          <button class="btn btn-primary" type="button">Save changes</button>
                                      </div> -->
                                  </div>
                              </div>
                          </div>
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
    </div>
  
 @endsection