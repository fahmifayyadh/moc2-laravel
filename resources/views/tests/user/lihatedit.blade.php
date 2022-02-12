@extends('layouts.master')
@section('content')
<div class="page-body">
    <div class="container-fluid">
      <div class="page-header">
      </div>
    </div>
    <div class="row justify-content-md-center">
        <div class="col-md-8">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title mb-0">Kelola Akun</h4>
                <div class="card-options"><a class="card-options-collapse" href="#" data-toggle="card-collapse" data-original-title="" title=""><i class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#" data-toggle="card-remove" data-original-title="" title=""><i class="fe fe-x"></i></a></div>
              </div>
              <div class="card-body">
              <form action="{{route('user.update',['id' => $user->id])}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                  <div class="row mb-2">
                    <div class="col-auto"><img class="img-70 rounded-circle" alt="" src="{{$user->foto ? asset(Storage::url('/user/'.$user->foto)) : asset('assets/images/user/7.jpg')}}" data-original-title="" title=""></div>
                    <div class="col">
                    <h3 class="mb-1">{{$user->name}}</h3>
                    <p>{{Str::title($user->role)}} - batas akun: {{$user->batas == null ? 'Life Time' : Carbon\Carbon::parse($user->batas)->format('d-M-Y')}}</p>
                    @if (auth()->user()->role == 'member')
                    <p class="mb-4">Sponsor by: {{$spon ?? '....'}}</p>
                        
                    @endif
                      
                  </div>
                  </div>

                  <div class="form-group mb-3">
                    <label class="form-label">Nama</label>
                  <input {!! $li != null ? 'readonly' : null !!} type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Nama" name="name" value="{{$user->name}}" data-original-title="" title="">
                  @error('name')
                  <div class="invalid-feedback">{{$message}}</div>
                  @enderror
                </div>
                  <div class="form-group mb-3">
                    <h6 class="form-label">Alamat</h6>
                  <textarea {!! $li != null ? 'readonly' : null !!} class="form-control @error('alamat') is-invalid @enderror" name="alamat" rows="5">{{$user->alamat}}</textarea>
                  @error('alamat')
                  <div class="invalid-feedback">{{$message}}</div>
                  @enderror  
                </div>
                  <div class="form-group mb-3">
                    <label class="form-label">Alamat Email</label>
                  <input {!! $li != null ? 'readonly' : null !!} type="email" class="form-control @error('email') is-invalid @enderror" placeholder="your-email@domain.com" name="email" value="{{$user->email}}" data-original-title="" title="">
                  @error('email')
                  <div class="invalid-feedback">{{$message}}</div>
                  @enderror    
                </div>
                <div class="form-group">
                  <label for="foto">Tanggal Lahir</label>
                      <input {!! $li != null ? 'readonly' : null !!} class="form-control" id="foto" value="{{$user->tanggal_lahir}}" type="date" name="ttl">
              </div>
                  <div class="form-group mb-3">
                    <label class="form-label">No Handphone</label>
                  <input {!! $li != null ? 'readonly' : null !!} type="text" class="form-control @error('no_hp') is-invalid @enderror" placeholder="No Handphone" name="no_hp" value="{{$user->no_hp}}" data-original-title="" title="">
                  @error('no_hp')
                  <div class="invalid-feedback">{{$message}}</div>
                  @enderror  
                </div>
                <div class="form-group mb-3">
                    <label class="form-label">No Rekening</label>
                  <input {!! $li != null ? 'readonly' : null !!} type="text" class="form-control @error('no_rekening') is-invalid @enderror" placeholder="No Rekening" name="no_rekening" value="{{$user->no_rekening}}" data-original-title="" title="">
                  @error('no_rekening')
                  <div class="invalid-feedback">{{$message}}</div>
                  @enderror  
                </div>
                <div class="form-group mb-3">
                    <label class="form-label">Atas Nama Rekening</label>
                  <input {!! $li != null ? 'readonly' : null !!} type="text" class="form-control @error('nama_rekening') is-invalid @enderror" placeholder="Atas Nama Rekening" name="nama_rekening" value="{{$user->nama_rekening}}" data-original-title="" title="">
                  @error('nama_rekening')
                  <div class="invalid-feedback">{{$message}}</div>
                  @enderror  
                </div>
                @if (auth()->user()->role == 'admin')
                    
                <div class="form-group mb-3">
                  <label class="form-label">Batas Akun User</label>
                  <span style="cursor: pointer" id="batas" class="text-primary">Seumur Hidup</span>
                  <input {!! $li != null ? 'readonly' : null !!} id="batass" type="date" class="form-control @error('batas') is-invalid @enderror" placeholder="Batas Akun" name="batas" value="{{$user->batas}}">
                  @error('batas')
                  <div class="invalid-feedback">{{$message}}</div>
                  @enderror  
                </div>
                @endif
                @if ($li == null)
                <div class="form-group mb-3 pull-right">
                <input {!! $li != null ? 'readonly' : null !!} type="checkbox" class="cb" id=""><label for="">Ganti Password</label>
                </div>
                    
                @endif
                  <div class="row cp">
                      <label for="">Ganti Password</label>
                    <!-- <div class="col-md-12">
                        <div class="form-group mb-3">
                          <label class="form-label">Password Lama</label>
                          <input {!! $li != null ? 'readonly' : null !!} class="form-control @error('old_password') is-invalid @enderror" type="password" name="old_password" data-original-title="" title="">
                          @error('old_password')
                          <div class="invalid-feedback">{{$message}}</div>
                          @enderror
                        </div>
                    </div>-->
                    <div class="col-md-12">
                        <div class="form-group mb-3">
                            <label class="form-label">Password Baru</label>
                            <input {!! $li != null ? 'readonly' : null !!} class="form-control @error('password') is-invalid @enderror" type="password" name="password" data-original-title="" title="">
                            @error('password')
                  <div class="invalid-feedback">{{$message}}</div>
                  @enderror
                          </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group mb-3">
                            <label class="form-label">Ulangi Password Baru</label>
                            <input {!! $li != null ? 'readonly' : null !!} type="password" class="form-control" name="password_confirmation">
                          </div>
                      </div>
                    </div>
                  <div class="form-group mb-3">
                    <label class="form-label">Ganti Foto</label>
                    <input {!! $li != null ? 'readonly' : null !!} class="form-control" type="file" name="foto">
                  </div>
                  @if (auth()->user()->role == 'admin')
                  @if ($user->role == 'admin')
                      
                  <div class="form-group mb-3">
                    <label for="inputEmail4">Provinsi</label>
                    <select name="provinci" id="provinci" class="form-control selectpicker" id="search-produk"  data-size="5" data-live-search="true">
                        <option selected="" disabled>Provinsi</option>
                        @foreach ($provinsi as $p)
                    <option value="{{$p->province_id}}">{{$p->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="inputEmail4">Kabupaten</label>
                    <select name="kota" class="form-control selectpicker" id="kabupaten"  data-size="5" data-live-search="true">
                        <option selected="" disabled>Kabupaten</option>
                    </select>
                </div>     
                <div class="form-group mb-3">
                  <label for="inputEmail4">Kota pengiriman yang digunakan</label>
                  <input {!! $li != null ? 'readonly' : null !!} readonly class="form-control" type="text" value="{{$kota ?? 'belum di Set'}}" data-original-title="" title="">  
              </div>
              @endif     
                  <div class="form-group mb-3">
                    <label for="akses">Hak Akses</label>
                    <select name="role" id="akses" class="form-control">
                      <option disabled value="">Hak Akses</option>
                      <option value="admin" {{$user->role == 'admin' ? 'selected' : ''}}>Admin</option>
                      <option value="member" {{$user->role == 'member' ? 'selected' : ''}}>Member</option>
                    </select>
                  </div>
                  <div class="form-group mb-3">
                    <label for="status">Status Keanggotaan</label>
                    <select name="status" id="status" class="form-control">
                      <option disabled value="">Status</option>
                      <option value="active" {{$user->status == 'active' ? 'selected' : ''}}>Active</option>
                      <option value="nonactive" {{$user->status == 'nonactive' ? 'selected' : ''}}>Nonactive</option>
                      <option value="pembeli" {{$user->status == 'pembeli' ? 'selected' : ''}}>Pembeli</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="sponsor">Pilih Sponsor</label>
                    <select id="sponsor" name="sponsor" class="form-control">
                      <option value="">Pilih Sponsor</option>
                      @foreach ($users as $u)
                      <option value="{{$u->email}}" {{$user->sponsor == $u->email ? 'selected' : null}}>{{$u->name}}</option>
                      @endforeach
                    </select>
                  </div>
                  @endif
                  
                  <div class="form-footer">
                    @if ($li == null)
                    <button class="btn btn-primary btn-block" data-original-title="" title="">Save</button>
                    @endif
                  </div>
                </form>
              </div>
            </div>
          </div>
        
    </div>
    <!-- Container-fluid Ends-->
  
@endsection
@section('footer')
    <script>
  $(document).ready(function(){
    $("#batas").click(function(){
    $("#batass").val("DD-MM-YYYY");

    });
  });      
      $('.cp').hide();

      var p = "@error('password') b @enderror";
      var op = "@error('old_password') o @enderror";
      
      if( p != '' || op != ''){
        $('.cp').show();

      }
      $('.cb').click(function(){
        if($('.cb:checked').val() == 'on'){
          $('.cp').show();
        }else{
          $('.cp').hide();
          
        }
      });
      $('#provinci').change(function () {
     var optionKab = '';
        $.ajax({
            url: "{{route('getCity')}}",
            method: "GET",
            data: {
                province_id: this.value,
            },
            success: function (data) {
              $.each(data, function( key, value ) {
                optionKab += '<option value="'+key+'">'+value+'</option>';
              });
              $("#kabupaten").find('option').remove().end().append(optionKab);
              $("#kabupaten").selectpicker("refresh");
            }
        });
    });
</script>
@endsection
