@extends('layouts.master',['title' => 'All User'])
@section('head')
<script src="{{ asset('js/app.js') }}" defer></script>
@endsection
@section('content')
<div class="page-body">
          <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row justify-content-end">
            <div class="col-md-4 mt-4">
        <form action="{{route('user.index')}}" method="get">
          <div class="input-group">
            <div class="input-group-prepend"><span class="input-group-text" id="inputGroupPrepend2"><i class="icofont icofont-ui-search"></i></span></div>
            <input class="form-control" id="validationDefaultUsername" type="text" placeholder="search" required="" name="search" data-original-title="" title="">
          </div>
        </form>
    </div>
    <div class="col-md-3">
            <div style="padding-left: 10px;">
                <!-- <button class="btn btn-info btn-lg" type="button">Tambah Course</button> -->
                <br>
                <button class="btn btn-info btn-lg" type="button" data-toggle="modal" data-target="#exampleModalCenter" id="clickButton">Add</button>
                
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h5 class="modal-title">Add User</h5>
                              <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                          </div>
                          <div class="modal-body">
                            <form class="theme-form" method="POST" action="{{ route('user.create') }}" enctype="multipart/form-data">
                              @csrf
      
                              <div class="form-group"> 
                                      <input id="name" placeholder="Nama" type="text" class="form-control " name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
      
                              
                              </div>
      
                              <div class="form-group"> 
                                      <input id="email" type="email" placeholder="E-mail" class="form-control" name="email" value="{{ old('email') }}" required autocomplete="email">
      
                              </div>
      
                              <div class="form-group">
                                      <input id="password" type="password" placeholder="Password" class="form-control" name="password" required autocomplete="new-password">
      
                              </div>
      
                              <div class="form-group">
                            
                                      <input id="password-confirm" type="password" placeholder="Confrim Password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                              </div>
                              <div class="form-group">
                                  <textarea name="alamat" class="form-control" placeholder="Alamat" id="" cols="30" rows="10"></textarea>
                                </div>
                              <div class="form-group">
                                  <input type="text" name="no_hp" class="form-control" placeholder="nomor handphone">    
                                  
                                </div>
                              <div class="form-group">
                                  <label for="foto">Foto</label>
                                      <input class="form-control" id="foto" type="file" name="foto">
                              </div>
                              <div class="form-group">
                                <label for="foto">Tanggal Lahir</label>
                                    <input class="form-control" id="foto" type="date" name="ttl">
                            </div>
                              <div class="form-group">
                                  <select name="role" class="form-control">
                                      <option disabled value="">Hak Akses</option>
                                      <option value="admin">Admin</option>
                                      <option value="member">Member</option>
                                  </select>
                              </div>
                              <div class="form-group">
                                <select name="sponsor" class="form-control">
                                    <option value="">Pilih Sponsor</option>
                                    @foreach ($users as $u)
                                    <option value="{{$u->id}}">{{$u->name}}</option>
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
        
        <div class="row p-t-15">
          @foreach ($users as $u)
          <div class="col-md-6 col-lg-6 col-xl-4 box-col-6">
            <div class="card custom-card">
              {{-- <div class="card-header"><img class="img-fluid" src="../assets/images/user/ww.jpg" alt=""></div> --}}
                  <div class="card-profile mt-3">
                    <img style="object-fit: cover;border-radius: 50%;width:100px;height:90px" class="rounded-circle" src="{{$u->foto ? asset(Storage::url('/user/'.$u->foto)): asset('assets/images/user/5.jpg')}}" alt="">
                  </div>
                  
                  <div class="text-center profile-details">
                    {{-- {{route('user.detail',['id'=>$u->id])}} --}}
                  <a href="#"><h4>{{$u->name}}</h4></a>
                    <h6>{{$u->role}}</h6>
                  <h6>Perolehan Point: <span data-toggle="modal" data-target="#edit-point{{$u->id}}" class="text-primary" style="cursor: pointer">{{$u->point}}</span></h6>
                  <h6>Chat Member: <span class="text-info" style="cursor: pointer"><a target="__blank"
                    href="https://api.whatsapp.com/send?phone=62{{substr($u->no_hp, 1)}}">Chat</a></span></h6>
                  
                  <div class="modal fade" id="edit-point{{$u->id}}" tabindex="-1" role="dialog"
                    aria-labelledby="preview-pembayaran" aria-hidden="true">
                   <div class="modal-dialog modal-dialog-centered" role="document">
                       <div class="modal-content p-l-10 p-r-10 ">
                           <div class="modal-header">
                               <h5 class="modal-title">Edit Point</h5>
                               <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                                       aria-hidden="true">×</span></button>
                           </div>
                           <div class="modal-body">
                           <form action="{{route('user.updatePoint',$u->id)}}" method="post">
                          @csrf
                            @method('put')
                            <div class="form-group mb-3">
                              <label class="form-label">Point</label>
                            <input type="number" class="form-control @error('point') is-invalid @enderror" placeholder="ganti point" name="point" value="{{$u->point}}" data-original-title="" title="">
                            @error('point')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror  
                          </div>
                          <div class="form-group mb-3">
                            <label class="form-label">Pesan</label>
                          <input type="text" class="form-control @error('pesan') is-invalid @enderror" placeholder="Pesan" name="pesan" title="">
                          @error('pesan')
                          <div class="invalid-feedback">{{$message}}</div>
                          @enderror  
                        </div>
                          </div>
                          <div class="modal-footer">
                            <button class="btn btn-primary" type="submit">Save changes</button>
                          </form>
                                
                               <button class="btn btn-secondary" type="button" data-dismiss="modal" aria-label="Close">Close</button>
                           </div> 
                       </div>
                   </div>
                    </div>
                  </div>
                  <div class="card-footer row">
                    <div class="row">

                      <div class="col-md-3">
                        <a href="{{route('user.edit',[$u->id,'lihat'])}}"><button class="btn btn-sm btn-success">Lihat</button></a>
                      </div>
                      <div class="col-md-3">
                        <a href="{{route('user.edit',$u->id)}}"><button class="btn btn-sm btn-warning">Edit</button></a>
                      </div>
                      <div class="col-md-3">
                        <button data-toggle="modal" data-target="#editl{{$u->id}}" class="btn btn-sm btn-primary">LB</button>
                      </div>
                      <div class="col-md-3">
                        <form style="display: inline" action="{{route('user.bypass',$u->id)}}" method="post">
                          @csrf
                          <button type="submit" class="btn btn-sm btn-info">Bypass</button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              {{-- modal --}}
<div class="modal fade" id="editl{{$u->id}}" tabindex="-1" role="dialog" aria-labelledby="preview-course" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content p-l-10 p-r-10 ">
          <div class="modal-header">
              <h5 class="modal-title">Edit LeaderBoard</h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
          </div>
          <div class="modal-body">
          <form action="{{route('dummy.store',$u->id)}}" method="POST">
            @csrf
            <div class="form-group row">
                <input class="form-control field" placeholder="jumlah data" value="{{$u->dummy()->count()}}" type="number" name="jumlah">
            </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-primary" type="submit">Save changes</button>
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
          </div>
        </form>
      </div>
  </div>
</div>
{{-- endModal --}}
              @endforeach
              <div class="row mb-4">
                 <div class="col-md-12">
                     {{$users->links()}}
                 </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>
        
@endsection
@section('footer')
    <script>
      @if($errors->any())
      window.onload = function(){
      var button = document.getElementById('clickButton');
    button.click();
      }
      @endif
    </script>
@endsection