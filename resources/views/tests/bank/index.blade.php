@extends('layouts.master',['title' => 'Pengaturan Bank Pembayaran'])
@section('content')
<div class="page-body">
    <div class="container-fluid">
      <div class="page-header">
        <div class="row">
          <div class="col-6">
            <h3>Bank</h3>
          </div>
          <div class="col-6">
          </div>
        </div>
      </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
      <div class="row starter-main">
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
              <!-- <div class="pull-right mr-4"><a href="#">Edit Profile Playlist</a></div> -->
              <h5>Bank Personal</h5>
            
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
                                      <h5 class="modal-title">Personal Bank</h5>
                                      <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                  </div>
                                  <div class="modal-body">
                                      <form class="theme-form" action="{{route('bank.createPersonal')}}" method="POST" enctype="multipart/form-data">
                                        @csrf  
                                        <div class="form-group">
                                              <input class="form-control" type="text" placeholder="Nama Bank" name="name">
                                          </div>
                                          <div class="form-group row">
                                              <label class="col-sm-3 col-form-label">Choose Thumbnail</label>
                                              <div class="col-sm-9">
                                                <input class="form-control" type="file" id="thumbnail" name="image">
                                              </div>
                                            </div>
                                          <div class="form-group">
                                              <input class="form-control" type="text" placeholder="No. Rekening Bank" name="no_rekening">
                                          </div>
                                          <div class="form-group">
                                              <input class="form-control" type="text" placeholder="Nama Pemilik" name="nama_pemilik">
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
                            <th>Nama Bank</th>
                            <th>Logo Bank</th>
                            <th>No. Rekening</th>
                            <th>Nama Pemilik</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                    <tbody>
                      @foreach ($useBank as $ind => $u)
                          
                      
                        <tr>
                          <td>{{$ind+1}}</td>
                        <td>{{$u->name}}</td>
                        <td><img class="img-fluid rounded-circle" src="{{asset(Storage::url('bank/'.$u->image))}}" style="width: 50px;height:50px" alt=""></td>
                        <td>{{$u->no_rekening}}</td>
                        <td>{{$u->nama_pemilik}}</td>
                          <td>
                              <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#EditBankModal{{$u->id}}">Edit</button>
                              <form action="{{route('bank.delete',['id'=>$u->id])}}" method="POST">@csrf @method('delete') <button type=submit class="btn btn-danger btn-sm">Delete</button></form>
                              
                          </td>
                          <div class="modal fade" id="EditBankModal{{$u->id}}" tabindex="-1" role="dialog" aria-labelledby="EditBankModal" aria-hidden="true">
                              <div class="modal-dialog modal-dialog-centered" role="document">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <h5 class="modal-title">Modal title</h5>
                                          <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                      </div>
                                      <div class="modal-body">
                                        <form class="theme-form" action="{{route('bank.updatePersonal',['id'=>$u->id])}}" method="POST" enctype="multipart/form-data">
                                          @csrf
                                          @method('put')  
                                          <div class="form-group">
                                          <input class="form-control" type="text" value="{{$u->name}}" placeholder="Nama Bank" name="name">
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Choose Thumbnail</label>
                                                <div class="col-sm-9">
                                                  <input class="form-control" type="file" id="thumbnail" name="image">
                                                </div>
                                              </div>
                                            <div class="form-group">
                                                <input class="form-control" type="text" value="{{$u->no_rekening}}" placeholder="No. Rekening Bank" name="no_rekening">
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" type="text" value="{{$u->nama_pemilik}}" placeholder="Nama Pemilik" name="nama_pemilik">
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
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                </div>
              </div>
              
              </div>
            </div>
          </div>


          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h5>Payment Gateway</h5>
              
              </div>
              <div class="card-body">
                <!-- Tool -->
                  <div class="dropdown-basic">
                    <div class="row justify-content-end">
                    <div style="padding-left: 10px;">
                        <!-- <button class="btn btn-info btn-lg" type="button">Tambah Course</button> -->
                        <button class="btn btn-primary btn-lg" type="button" data-toggle="modal" data-target="#exampleModal">Add</button>
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">PaymentGateway</h5>
                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    </div>
                                    <div class="modal-body">
                                    <form class="theme-form" action="{{route('bank.create')}}" method="POST">
                                          @csrf
                                          
                                          <div class="form-group">

                                          <select name="code" class="form-control digits" id="exampleFormControlSelect9" >
                                            <option value="" disabled selected>Pilih PaymentGateway</option>
                                            @foreach ($pembayaran as $item)
                                          <option value="{{$item['code']}}">{{$item['name']}}</option>
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
                              <th>PaymentGateway</th>
                              <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($useBankk as $index=>$u)                
                          <tr>
                            <td>{{$index+1}}</td>
                          <td>{{$u->name}}</td>
                            <td>
                                <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editPayment{{$u->id}}">Edit</button>
                                <form action="{{route('bank.delete',['id'=>$u->id])}}" method="POST">@csrf @method('delete') <button type=submit class="btn btn-danger btn-sm">Delete</button></form>
                              
                            </td>
                          <div class="modal fade" id="editPayment{{$u->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
                              <div class="modal-dialog modal-dialog-centered" role="document">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <h5 class="modal-title">Edit PaymentGateway</h5>
                                          <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                      </div>
                                      <div class="modal-body">
                                      <form class="theme-form" action="{{route('bank.updatePayment',['id'=>$u->id])}}" method="POST">
                                            @csrf
                                            @method('put')
                                            <div class="form-group">
  
                                            <select name="code" class="form-control digits" id="exampleFormControlSelect9" >
                                              <option value="" disabled selected>Pilih PaymentGateway</option>
                                              @foreach ($pembayaran as $item)
                                            <option value="{{$item['code']}}" {{$item['code'] == $u->code ? 'selected' :null}}>{{$item['name']}}</option>
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
 