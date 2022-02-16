@extends('V2.layouts.master')
@section('title','Edit User')
<style>
	.container-2 {
		background: #ffbd60;
		border-radius: 20px;
		margin-bottom: 10vh;
	}

	.row {
		padding: 50px 0px 0px 0px;
		justify-content: center;
	}

	.col-4 h4 {
		font-weight: 700;
		font-size: 30px;
		font-family: 'Roboto', sans-serif;
		color: white;
	}

	.col-4 .btn-1 {
		background: #A927F9;
		color: white;
		font-size: 11px;
		font-family: 'Rubik', sans-serif;
		/*margin-top: -2vh;*/
	}

	.col-4 .akun {
		font-size: 9px;
		margin-top: 2vh;
		font-family: 'Roboto';
		color: #1F2028;
		font-style: normal;
		font-weight: 300;
		line-height: 11px;
		/* identical to box height */


		color: #1F2028;
	}

	.col-4 .sponsor {
		margin-top: -2vh;
		font-size: 9px;
		font-weight: 700;
		font-family: 'Roboto', sans-serif;
		color: black;
	}

	.col-4 .btn-2 {
		background: black;
		font-size: 7px;
		font-weight: 500;
		color: white;
		font-family: 'Rubik', sans-serif;
		/*margin-top: -5vh;*/
		/*padding: 0.5vh 1vh 0.5vh 1vh;*/
	}

	.row .col-5 img {
		width: 120px;
		height: 120px;
		border-radius: 100%;

	}

	.dropdown-item:hover {
		background: none;
	}

	@media only screen and (max-width: 1200px) {
		.row {
			padding: 20px 0px 0px 0px;
			justify-content: center;
		}

		.row .col-5 img {
			width: 100px;
			height: 100px;
			border-radius: 100%;

		}

		.col-4 .btn-1 {
			margin-top: -1vh;
		}

		.col-4 .akun {
			font-size: 9px;
			margin-top: 0vh;
			font-family: 'Roboto', sans-serif;
			color: black;
		}

		.col-4 .sponsor {
			margin-top: -1vh;
			font-size: 9px;
			font-weight: 700;
			font-family: 'Roboto', sans-serif;
			color: black;
		}

		.col-4 .btn-2 {
			background: black;
			font-size: 6px;
			font-weight: 500;
			color: white;
			font-family: 'Rubik', sans-serif;
			/*margin-top: -2vh;*/
			/*padding: 0.5vh 1vh 0.5vh 1vh;*/
		}
	}
</style>
<style>
	form {
		margin-top: -10vh;
	}

	form .btn-1 {
		background: #1F2028;
		font-size: 9px;
		font-weight: 500;
		color: white;
		font-family: 'Rubik', sans-serif;
		/* margin-top: -5vh; */
		/* padding: 0.5vh 1vh 0.5vh 1vh; */
	}

	form .buttonn .col .btn-3 {
		background: white;
		color: #353535;
		font-size: 11px;
		font-family: 'Roboto', sans-serif;
		font-weight: 700;
		margin-right: 8vh;

	}

	.buttonn .col {
		text-align: center;
		margin-bottom: 5vh;
	}

	form .buttonn .col .btn-4 {
		font-size: 16px;
		font-family: 'Roboto', sans-serif;
		font-weight: 700;
		background: #1F2028;
		color: white;
		padding: 2px 20px 3px 20px;
	}

	form .mb-3 label {
		font-size: 9px;
		font-weight: 700;
		font-family: 'Roboto', sans-serif;
		color: #1F2028;
	}

	form .mb-3 input {
		border-radius: 10px;
	}

	form .mb-3 textarea {
		border-radius: 10px;
	}

	form .col-8 .mb-3 label {
		font-size: 9px;
		font-weight: 700;
		font-family: 'Roboto', sans-serif;
		color: #1F2028;
	}

	form .col-8 .mb-3 input {
		border-radius: 10px;

	}

	form .form-group label {
		font-size: 9px;
		font-weight: 700;
		font-family: 'Roboto', sans-serif;
		color: #1F2028;

	}

	form .form-group select {
		border-radius: 10px;
	}

	@media only screen and (max-width: 1200px) {
		form {
			margin-top: -3vh;
		}
	}
</style>
@section('content')

<div class="container-fluid" id="container-wrapper">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<a href="" style="margin-bottom: 30px">
			<p style="color:white;font-family: 'Rubik', sans-serif; font-weight: 600; font-size: 30px;">
				<span style="color: #FF9F1C; font-family: 'Rubik', sans-serif; font-weight: bold;"> | </span>
				EDIT USER <span style="font-weight: 100;"></span>
			</p>
		</a>
	</div>
	<div class="container container-2">
		<form action="{{route('user.update',['id' => $user->id])}}" method="POST" enctype="multipart/form-data">
			@csrf
			@method('put')
			<div class="row">
				<div class="col-5 col-md-2 col-lg-2">
					<img src="{{$user->foto ? asset(Storage::url('/user/'.$user->foto)) : asset('assets/images/user/7.jpg')}}" alt="">
				</div>
				<div class="col-4">
					<h4>{{$user->name}}</h4>
					<button type="button" class="btn btn-1">{{($user->role)}}</button>
					<p class="akun">Batas Akun :<span> {{$user->batas == null ? 'Life Time' : Carbon\Carbon::parse($user->batas)->format('d-M-Y')}}</span> <i class="fa fa-calendar-alt"></i></p>
					@if ($user->role == 'member')
					<p class="sponsor">Sponsor by: {{$spon ?? '....'}}</p>
					<!-- status course -->
					<ul class="navbar-nav ml-auto">
						<li class="nav-item dropdown no-arrow mx-1">
							<a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<button type="button" class="btn btn-2">Status E-Course</button>
							</a>
							<div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
								<h6 class="dropdown-header" style="font-family: 'Rubik', sans-serif; font-weight: 500; color:black ;">
									<span style="color:#FF9F1C; font-weight: bold ;">|</span> Status E-Course
								</h6>

								<hr style="margin: 0; padding: 0; background:#fddbab ;">
								@php
								$a=[]
								@endphp              
								@foreach ($course as $zz)
								@foreach ($zz->paket->course as $c)
								@if (!in_array($c->id,$a))

								@php
								$a[] = $c->id 
								@endphp
								<a class="dropdown-item d-flex align-items-center" href="#">
									<div class="small text-gray-500 d-flex">
										<p style="color: black; padding-right: 2vh "> <span>.</span></p>
										<p style="color: black;">{{$c->name}}</p>
										<a href="" class="btn-success" style="color: rgb(255, 255, 255);  padding: 1vh 1vh 1vh 1vh; height: 25px; width: 150px; text-align: center; text-decoration: none;">
											<p>Aktif</p>
										</a>
									</div>
									<hr style="margin: 0; padding: 0; background:#fddbab ;">
								</a>
								  @endif
            @endforeach
              @endforeach
								<div class="add text-center">
									 @if (auth()->user()->role == 'member')
									<a class="btn btn-" style="background: #A927F9;    font-family: 'Rubik', sans-serif; color: white; font-weight: 500px; font-size: 11px;margin-top: 2.5vh; padding: 1px 3vh 1px 3vh;" href="{{route('etalase.course')}}">Add</a>
									@endif
								</div>
							</div>
						</li>
					</ul>
					@endif
				</div>
			</div>
			<div class="row">
				<div class="col-12 col-md-6 col-lg-6">
					<div class="mb-3">
						<label for="exampleFormControlInput1" class="form-label fw-bold">Nama</label>
						<input {!! $li != null ? 'readonly' : null !!} type="text" class=" form-control @error('name') is-invalid @enderror" placeholder="Nama" name="name" value="{{$user->name}}" data-original-title="" title="" style="font-family: 'Rubik', sans-serif;font-size: 14px;color:black;">
						@error('name')
						<div class="invalid-feedback">{{$message}}</div>
						@enderror
					</div>
					<div class="mb-3">
						<label for="exampleFormControlTextarea1" class="form-label fw-bold">Alamat</label>
						<textarea {!! $li != null ? 'readonly' : null !!} class=" form-control @error('alamat') is-invalid @enderror" name="alamat" rows="5" style="font-family: 'Rubik', sans-serif;font-size: 14px;color:black;">{{$user->alamat}}</textarea>
						@error('alamat')
						<div class="invalid-feedback">{{$message}}</div>
						@enderror  
					</div>
					<div class="mb-3">
						<label for="exampleFormControlInput1" class="form-label fw-bold">Email</label>
						<input {!! $li != null ? 'readonly' : null !!} type="email" class=" form-control @error('email') is-invalid @enderror" placeholder="your-email@domain.com" name="email" value="{{$user->email}}" data-original-title="" title="" style="font-family: 'Rubik', sans-serif;font-size: 14px;color:black;">
						@error('email')
						<div class="invalid-feedback">{{$message}}</div>
						@enderror 
					</div>
					<div class="mb-3">
						<label for="exampleFormControlInput1" class="form-label fw-bold">Tanggal Lahir</label>
						<input {!! $li != null ? 'readonly' : null !!} class="form-control datepicker-here" id="foto" value="{{$user->tanggal_lahir}}" type="text" name="ttl" data-range="true" data-multiple-dates-separator="/" data-language="en" data-original-title="" title="" data-date-format="yyyy-mm-dd" style="font-family: 'Rubik', sans-serif;font-size: 14px;color:black;">
					</div>
					<div class="mb-3">
						<label for="exampleFormControlInput1" class="form-label fw-bold">Nomor Handphone</label>
						<input {!! $li != null ? 'readonly' : null !!} type="text" class=" form-control @error('no_hp') is-invalid @enderror" placeholder="No Handphone" name="no_hp" value="{{$user->no_hp}}" data-original-title="" title="" style="font-family: 'Rubik', sans-serif;font-size: 14px;color:black;">
						@error('no_hp')
						<div class="invalid-feedback">{{$message}}</div>
						@enderror 
					</div>
					<div class="mb-3">
						<label for="exampleFormControlInput1" class="form-label fw-bold">Nomor Rekening</label>
						<input {!! $li != null ? 'readonly' : null !!} type="text" class=" form-control @error('no_rekening') is-invalid @enderror" placeholder="No Rekening" name="no_rekening" value="{{$user->no_rekening}}" data-original-title="" title=""style="font-family: 'Rubik', sans-serif;font-size: 14px;color:black;"> 
						@error('no_rekening')
						<div class="invalid-feedback">{{$message}}</div>
						@enderror  
					</div>
					<div class="mb-3">
						<label class="form-label fw-bold">Atas Nama Rekening</label>
						<input {!! $li != null ? 'readonly' : null !!} type="text" class="form-control @error('nama_rekening') is-invalid @enderror" placeholder="Atas Nama Rekening" name="nama_rekening" value="{{$user->nama_rekening}}" data-original-title="" title="" style="font-family: 'Rubik', sans-serif;font-size: 14px;color:black;">
						@error('nama_rekening')
						<div class="invalid-feedback">{{$message}}</div>
						@enderror  
					</div>
					 @if (auth()->user()->role == 'admin')
					<div class="form-group">
						<label class="form-label fw-bold">Batas Akun User</label>
                  		<span style="cursor: pointer" id="batas" class="small text-primary">Seumur Hidup</span>
						<input {!! $li != null ? 'readonly' : null !!} id="batass" type="text" class="form-control @error('batas') is-invalid @enderror datepicker-here" placeholder="Batas Akun" name="batas" value="{{$user->batas}}" data-range="true" data-multiple-dates-separator="/" data-language="en" data-original-title="" title="" data-date-format="yyyy-mm-dd">
						@error('batas')
						<div class="invalid-feedback">{{$message}}</div>
						@enderror  
					</div>
					@endif

					<span class="btn bnt-2" for="" style="color: black;font-weight: bolder;">Ganti Password</span>
					<div class="col-8">
						<div class="mb-3">
							<label for="exampleFormControlInput1" class="form-label fw-bold">Password Baru</label>
							<input {!! $li != null ? 'readonly' : null !!} class=" form-control @error('password') is-invalid @enderror" type="password" name="password" data-original-title="" title="" style="font-family: 'Rubik', sans-serif;font-size: 14px;color:black;">
							@error('password')
							<div class="invalid-feedback">{{$message}}</div>
							@enderror
						</div>
					</div>
					<div class="col-8">
						<div class="mb-3">
							<label for="exampleFormControlInput1" class="form-label fw-bold">Ulangi Pasword</label>
							<input {!! $li != null ? 'readonly' : null !!} type="password" class=" form-control" name="password_confirmation" style="font-family: 'Rubik', sans-serif;font-size: 14px;color:black;">
						</div>
					</div>
					<div class="mb-3">
						<label for="formFile" class="form-label fw-bold">Ganti Foto</label>
						<input {!! $li != null ? 'readonly' : null !!} class=" form-control" type="file" name="foto">
					</div>
					@if ($user->role == 'admin')
					<div class="form-group mb-3">
						<label for="inputEmail4">Provinsi</label>
						<select name="provinci" id="provinci" class=" form-control selectpicker" id="search-produk"  data-size="5" data-live-search="true" style="font-family: 'Rubik', sans-serif;font-size: 14px;color:black;">
							<option selected="" disabled>Provinsi</option>
							@foreach ($provinsi as $p)
							<option value="{{$p->province_id}}">{{$p->name}}</option>
							@endforeach
						</select>
					</div>
					<div class="form-group mb-3">
						<label for="inputEmail4">Kabupaten</label>
						<select name="kota" class=" form-control selectpicker" id="kabupaten"  data-size="5" data-live-search="true" style="font-family: 'Rubik', sans-serif;font-size: 14px;color:black;">
							<option selected="" disabled>Kabupaten</option>
						</select>
					</div>     
					<div class="form-group mb-3">
						<label for="inputEmail4">Kota pengiriman yang digunakan</label>
						<input {!! $li != null ? 'readonly' : null !!} readonly class=" form-control" type="text" value="{{$kota ?? 'belum di Set'}}" data-original-title="" title="" style="font-family: 'Rubik', sans-serif;font-size: 14px;color:black;">  
					</div>
					@endif 
					<div class="form-group">
						<label for="exampleFormControlSelect1" style="color: black;">Hak Akses</label>
						<select name="role" id="akses" class=" form-control" style="font-family: 'Rubik', sans-serif;font-size: 14px;color:black;">
							<option disabled value="">Hak Akses</option>
							<option value="admin" {{$user->role == 'admin' ? 'selected' : ''}}>Admin</option>
							<option value="member" {{$user->role == 'member' ? 'selected' : ''}}>Member</option>
						</select>
					</div>
					<div class="form-group">
						<label for="exampleFormControlSelect1" style="color: black;">Status Keanggotaan</label>
						<select name="status" id="status" class=" form-control" style="font-family: 'Rubik', sans-serif;font-size: 14px;color:black;">
							<option disabled value="">Status</option>
							<option value="active" {{$user->status == 'active' ? 'selected' : ''}}>Active</option>
							<option value="nonactive" {{$user->status == 'nonactive' ? 'selected' : ''}}>Nonactive</option>
							<option value="pembeli" {{$user->status == 'pembeli' ? 'selected' : ''}}>Pembeli</option>
						</select>
					</div>
					<div class="form-group">
						<label for="exampleFormControlSelect1" style="color: black;">Sponsor</label>
						<select id="sponsor" name="sponsor" class=" form-control" style="font-family: 'Rubik', sans-serif;font-size: 14px;color:black;">
							<option value="{{$user->sponsor}}" selected="" hidden="">{{$spon}}</option>
							@foreach ($users as $u)
							<option value="{{$u->email}}" {{$user->sponsor == $u->email ? 'selected' : null}}>{{$u->name}}</option>
							@endforeach
						</select>
					</div>
					
					<div class="buttonn justify-content-center">
						<div class="col">
							<a class="btn btn-3" href="{{route('dashboard.index')}}" role="button" >Cancel</a>
							<!-- modal -->
							<!-- <div class="modal fade" id="exampleModalTogglee{{ $user->id }}" aria-hidden="true"
								aria-labelledby="exampleModalToggleLabel" tabindex="-1">
								<div class="modal-dialog modal-dialog-centered">
									<div class="modal-content" style="border-radius: 20px; background: #F2F2F2;">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalToggleLabel" style="font-family: 'Rubik', sans-serif; font-weight: 500; color:black ;">
									<span style="color:#FF9F1C; font-weight: bold ;">|</span>Tambah Sponsor</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											
											<div class="mb-3">
												<select id="sponsor" name="sponsor" class=" form-control">
													<option value="">Pilih Sponsor</option>
													@foreach ($users as $u)
													<option value="{{$u->email}}" {{$user->sponsor == $u->email ? 'selected' : null}}>{{$u->name}}</option>
													@endforeach
												</select>
											</div>
										</div>
									</div>
								</div>
							</div>  -->
							<!-- endmodal -->
							
							@if ($li == null)
							<button type="submit" class="btn btn-4">Save</button>
							@endif
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
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