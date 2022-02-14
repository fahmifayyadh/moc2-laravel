@extends('V2.layouts.master')
@section('title','List User')
@section('head')
<link rel="stylesheet" href="{{asset('/assets/datatable/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet"
href="{{asset('/assets/datatable/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
@endsection
<style>
	#animated input[type=text] {
		width: 325.76px;
		height: 50px;
		box-sizing: border-box;
		border: 1px solid #c8c8c8; 
		/* border-radius: 4px; */
		font-size: 16px;
		background-color: white;
		padding: 7px 5px 7px 40px;
		-webkit-transition: width 0.5s ease-out;
		transition: width 0.5s ease-out;
		border-radius: 100px;
	}

	#animated i {
		position: relative;
		left: 30px;
	}

	@media (max-width: 912px) {
		#animated i {
			position: relative;
			left: 15px;
			top: 38px;
		}
	}

	form i {
		color: #FF9F1C;
	}

	::-webkit-input-placeholder {
		/* Edge */
		color: #FF9F1C;
		font-style: italic;
	}

	.pagination p {
		font-family: 'Rubik', sans-serif;
		font-size: 30px;
		font-style: normal;
		font-weight: 500;
		line-height: 36px;
		letter-spacing: 0em;
		text-align: left;
		color: #ffffff;

	}

	.pagination .jumlah {
		height: 30px;
		width: 56px;
		left: 172px;
		top: 250px;
		border-radius: 5px;
		background: #252633;
		margin: 0px 10px 0px 10px;
		box-shadow: 0px 3px 4px 0px #00000040;
	}

	.pagination .jumlah p {
		text-align: center;
		font-family: 'Rubik', sans-serif;
		color:
		#FF9F1C;
		font-size: 30px;
		font-style: normal;
		font-weight: 700;
		line-height: 36px;
		letter-spacing: 0em;
		margin-top: -1px;
	}

	.col-12 .tambah .btn-5 {
		font-size: 17px;
		font-family: 'Rubik', sans-serif;
		font-weight: 500;
		background: #283246;
		color: #ffffff;
		padding: 2px 20px 2px 20px;


	}
</style>
<style>
	.card .profil {
		text-align: center;
		justify-content: center;
		align-items: center;
	}
	.card .nama {
		margin-top: 10vh;
	}
	.card .profil img {
		height: 172px;
		width: 172px;
		left: 185px;
		top: 284px;
		/* border-radius: 0px; */
		border-radius: 100%;
		object-fit: cover;
		margin-top: 5vh;

	}

	.card .nama p {
		font-family: 'Roboto', sans-serif;
		font-size: 30px;
		font-style: normal;
		font-weight: 700;
		line-height: 35px;
		letter-spacing: 0em;
		text-align: left;
		color: black;

	}

	.card .nama .btn-4 {
		font-size: 13px;
		font-family: 'Rubik', sans-serif;
		font-weight: 500;
		background: #A927F9;

		color: rgb(255, 255, 255);
		padding: 2px 20px 2px 20px;
	}

	.card .nama .poin {
		font-family: 'Roboto', sans-serif;
		font-size: 15px;
		font-style: normal;
		font-weight: 400;
		line-height: 18px;
		letter-spacing: 0em;
		text-align: left;

	}

	.card .nama .poin span {
		color: #FF9F1C;
		font-family: 'Roboto', sans-serif;
		font-size: 15px;
		font-style: normal;
		font-weight: 700;
		line-height: 18px;
		letter-spacing: 0em;
		text-align: center;

	}

	.card .edit .btn-5 {
		font-size: 13px;
		font-family: 'Rubik', sans-serif;
		font-weight: 500;
		background: #FF9F1C;
		color: rgb(255, 255, 255);
		padding: 2px 20px 2px 20px;
	}

	.container-fluid .search .btn-5 {
		font-size: 13px;
		font-family: 'Rubik', sans-serif;
		font-weight: 500;
		background: #FF9F1C;
		color: rgb(255, 255, 255);
		padding: 10px 40px 10px 40px;
	}
</style>
@section('content')
<div class="container-fluid" id="container-wrapper">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<a href="allproduct.html">
			<p
			style="color:white;font-family: 'Rubik', sans-serif; font-weight: 600; font-size: 30px;list-style: none;">
			<span style="color: #FF9F1C; font-family: 'Rubik', sans-serif; font-weight: bold;"> | </span>
			LIST USER <span style="font-weight: 100;"></span>

		</p>

	</a>

	<div class="search" style="float: right; display: flex;">
		<form id="animated" action="{{route('user.index')}}" method="get">
			<i class="fa fa-search" aria-hidden="true"></i>
			<input type="text" name="search" placeholder="Search">
		</form>
		<div class="add pl-4 pr-3">
			<button class="btn btn-5" type="button" data-toggle="modal" data-target="#exampleModalCenter" id="clickButton">Add</button>
		</div>

	</div>
</div>


<div class="row">
	 @foreach ($users as $u)
	<div class="col-4 p-4">
		<div class="card">
			<div class="profil pt-5">
				<img src="{{$u->foto ? asset(Storage::url('/user/'.$u->foto)): asset('assets/images/user/5.jpg')}}" alt="">
			</div>
			<div class="nama pl-4" >
				<a href="{{route('user.detail',$u->id)}}"><h4>{{$u->name}}</h4></a>
				<h6 href="" class="btn btn-4">{{$u->role}}</h6>
				<p class="poin pt-3">Perolehan Point :<span data-toggle="modal" data-target="#edit-point{{$u->id}}" class="text-primary" style="cursor: pointer">{{$u->point}}</span></p>
			</div>
			<div class="edit pl-4 pb-3">
				<a href="{{route('user.edit',$u->id)}}" class="btn btn-5">Edit</a>
				<button data-toggle="modal" data-target="#editl{{$u->id}}" class="btn btn-5">LB</button>
				<form style="display: inline" action="{{route('user.bypass',$u->id)}}" method="post">
                @csrf
                <button type="submit" class="btn btn-5">Bypass</button>
                </form>
			</div>
		</div>
	</div>
	<!-- {{-- MODAL EDIT POIN --}} -->
	<div class="modal fade" id="edit-point{{$u->id}}" tabindex="-1" role="dialog"
		aria-labelledby="preview-pembayaran" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content p-l-10 p-r-10 ">
				<div class="modal-header">
					<h6
					style="color:#000000;font-family: 'Rubik', sans-serif; font-weight: 500; font-size: 28px;list-style: none;line-height: 33.18px">
					<span style="color: #FF9F1C; font-family: 'Rubik', sans-serif; font-weight: bold;"> | </span>
					Edit Point <span style="font-weight: 100;"></span>

				</h6>
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
						<button class="btn btn-primary" type="submit" style="background-color: #FF9F1C">Save changes</button>
					</form>
				</div> 
			</div>
		</div>
	</div>
      <!-- {{{-- ENDMODAL --}}} -->
      {{-- modal Leaderboard--}}
      <div class="modal fade" id="editl{{$u->id}}" tabindex="-1" role="dialog" aria-labelledby="preview-course" aria-hidden="true">
      	<div class="modal-dialog modal-dialog-centered" role="document">
      		<div class="modal-content p-l-10 p-r-10 ">
      			<div class="modal-header">
      				<h6
      				style="color:#000000;font-family: 'Rubik', sans-serif; font-weight: 500; font-size: 28px;list-style: none;line-height: 33.18px">
      				<span style="color: #FF9F1C; font-family: 'Rubik', sans-serif; font-weight: bold;"> | </span>
      				Edit LeaderBoard <span style="font-weight: 100;"></span>

      			</h6>
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
      				<button class="btn btn-primary" type="submit"  style="background-color: #FF9F1C">Save changes</button>
      				<button class="btn btn-secondary" type="button" data-dismiss="modal" style="background-color: #353535">Close</button>
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
<!-- Documentation Link -->

<!---Container Fluid-->
</div>
{{-- modal tambah user --}}
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header"><h6
				style="color:#000000;font-family: 'Rubik', sans-serif; font-weight: 500; font-size: 28px;list-style: none;line-height: 33.18px">
				<span style="color: #FF9F1C; font-family: 'Rubik', sans-serif; font-weight: bold;"> | </span>
				Add User <span style="font-weight: 100;"></span>
			</h6>
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
					<button class="btn btn-primary" style="background-color: #FF9F1C">Add</button>
					<button class="btn btn-secondary" data-dismiss="modal" aria-label="Close" style="background-color: #353535">Cancel</button>
				</div>
			</form>
		</div>
	</div>
</div>
</div>  
{{-- endmodal --}}
@endsection