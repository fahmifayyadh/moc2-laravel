@extends('V2.layouts.master')
@section('title','Profil User')
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
		font-size: 5px;
		font-weight: 500;
		color: white;
		font-family: 'Rubik', sans-serif;
		/*margin-top: -5vh;*/
		padding: 0.5vh 1vh 0.5vh 1vh;
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
			font-size: 5px;
			font-weight: 500;
			color: white;
			font-family: 'Rubik', sans-serif;
			/*margin-top: -2vh;*/
			padding: 0.5vh 1vh 0.5vh 1vh;
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
				DETAIL USER <span style="font-weight: 100;"></span>
			</p>
		</a>
	</div>
	<div class="container container-2">
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
							</div>
						</li>
					</ul>
					@endif
				</div>
			</div>
			<div class="row">
				<div class="col-12 col-md-6 col-lg-6">
					<div class="mb-3">
						<label for="exampleFormControlInput1" class="form-label">Nama</label>
						<input readonly type="text" class=" form-control @error('name') is-invalid @enderror" placeholder="Nama" name="name" value="{{$user->name}}" data-original-title="" title="" style="font-family: 'Rubik', sans-serif;font-size: 14px;color:black;">
					</div>
					<div class="mb-3">
						<label for="exampleFormControlTextarea1" class="form-label">alamat</label>
						<textarea readonly class=" form-control @error('alamat') is-invalid @enderror" name="alamat" rows="5" style="font-family: 'Rubik', sans-serif;font-size: 14px;color:black;">{{$user->alamat}}</textarea>
					</div>
					<div class="mb-3">
						<label for="exampleFormControlInput1" class="form-label">Email</label>
						<input readonly type="email" class=" form-control @error('email') is-invalid @enderror" placeholder="your-email@domain.com" name="email" value="{{$user->email}}" data-original-title="" title="" style="font-family: 'Rubik', sans-serif;font-size: 14px;color:black;">
					</div>
					<div class="mb-3">
						<label for="exampleFormControlInput1" class="form-label">Tanggal Lahir</label>
						<input readonly class=" form-control" id="foto" value="{{$user->tanggal_lahir}}" type="date" name="ttl" style="font-family: 'Rubik', sans-serif;font-size: 14px;color:black;">
					</div>
					<div class="mb-3">
						<label for="exampleFormControlInput1" class="form-label">Nomor Handphone</label>
						<input readonly type="text" class=" form-control @error('no_hp') is-invalid @enderror" placeholder="No Handphone" name="no_hp" value="{{$user->no_hp}}" data-original-title="" title="" style="font-family: 'Rubik', sans-serif;font-size: 14px;color:black;">
					</div>
					<div class="mb-3">
						<label for="exampleFormControlInput1" class="form-label">Nomor Rekening</label>
						<input readonly type="text" class=" form-control @error('no_rekening') is-invalid @enderror" placeholder="No Rekening" name="no_rekening" value="{{$user->no_rekening}}" data-original-title="" title=""style="font-family: 'Rubik', sans-serif;font-size: 14px;color:black;"> 
					</div>
					<div class="mb-3">
						<label class="form-label">Atas Nama Rekening</label>
						<input readonly type="text" class="form-control @error('nama_rekening') is-invalid @enderror" placeholder="Atas Nama Rekening" name="nama_rekening" value="{{$user->nama_rekening}}" data-original-title="" title="" style="font-family: 'Rubik', sans-serif;font-size: 14px;color:black;">
					</div>
					<div class="form-group">
						<label for="exampleFormControlSelect1" style="color: black;">Hak Akses</label>
						<select name="role" id="akses" class=" form-control" style="font-family: 'Rubik', sans-serif;font-size: 14px;color:black;" disabled="">
							<option value="{{$user->role}}" selected="">{{$user->role}}</option>
							<option value="admin" {{$user->role == 'admin' ? 'selected' : ''}}>Admin</option>
							<option value="member" {{$user->role == 'member' ? 'selected' : ''}}>Member</option>
						</select>
					</div>
					<div class="form-group">
						<label for="exampleFormControlSelect1" style="color: black;">Status Keanggotaan</label>
						<select name="status" id="status" class=" form-control" style="font-family: 'Rubik', sans-serif;font-size: 14px;color:black;" disabled="">
							<option value="{{$user->status}}" selected="">{{$user->status}}</option>
							<option value="active" {{$user->status == 'active' ? 'selected' : ''}}>Active</option>
							<option value="nonactive" {{$user->status == 'nonactive' ? 'selected' : ''}}>Nonactive</option>
							<option value="pembeli" {{$user->status == 'pembeli' ? 'selected' : ''}}>Pembeli</option>
						</select>
					</div>
					<div class="buttonn justify-content-center">
						<div class="col">
							<a href="{{route('user.edit',$user->id)}}" class="btn btn-primary">Edit</a>
						</div>
					</div>
				</div>
			</div>
	</div>
</div>
@endsection