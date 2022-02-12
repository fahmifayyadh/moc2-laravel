@extends('V2.layouts.master',['title'=>'Edit Banner'])
@section('head')
<script src="{{ asset('js/app.js') }}" defer></script>
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/summernote.css')}}">
@endsection
<style>
	.card {
		border-radius: 10px;
	}
	.row .col-12 .card img {
		width: 100%;
		height: 439px;
		object-fit: cover;
		border-radius: 10px;
	}
	.row .col-5 .mb-3 label {
		font-size: 16px;
		font-weight: 700;
		font-family: 'Roboto', sans-serif;
		color: white;
	}
	.row .col-12 .btn {
		padding: 2px 5vh 2px 5vh;
		color: black;
		font-size: 16px ;
		font-weight: 700;
		font-family: 'Roboto', sans-serif;
		margin-bottom: 5vh;
	}
	@media only screen and (max-width: 400px) {
		.row .col-12 .card img {
			width: 100%;
			height: 100px;
			object-fit: cover;
		}
		.row .col-12 .btn {
			padding: 2px 2vh 2px 2vh;
		}
	}
</style>
@section('content')
<div class="container-fluid" id="container-wrapper">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">	
		<p style="color:white;font-family: 'Rubik', sans-serif; font-weight: 600; font-size: 30px;">
			<span style="color: #FF9F1C; font-family: 'Rubik', sans-serif; font-weight: bold;"> | </span>
			EDIT BANNER <span style="font-weight: 100;"></span>
		</p>
	</div>
	<div class="container container-2">
		<form aaction="{{route('banner.edit',$banner->id)}}" method="POST" enctype="multipart/form-data">
		@csrf
        @method('PUT')
			<div class="row">
				<div class="col-12">
					<div class="card">
						<img src="{{ asset(Storage::url('banner/'.$banner->img))}}" alt="">
					</div>
				</div>
				<div class="col-12 col-md-5 col-lg-5 mt-5">
					<div class="mb-3">
						<label for="formFile" class="form-label">Link Baner</label>
						<input class="form-control" value="{{$banner->link}}" type="text" placeholder="Link *opsional" name="link" value="{{old('link')}}">
						@error('link')
						<small>{{$message}}</small>
						@enderror
					</div>
					<div class="mb-3">
						<label for="formFile" class="form-label">Upload Baner</label>
						<input class="form-control" type="file" id="formFile"  style=" font-family: 'Rubik', sans-serif;font-size: 14px; color:#FF9F1C; ;"  name="img">
					</div>
				</div>
				<div class="col-12">
					<button type="submit" class="btn btn-light">SAVE</button>
				</div>
			</div>
		</form>
	</div>
</div>
<script src="{{asset('/assets/js/editor/summernote/summernote.js')}}"></script>
<script src="{{asset('/assets/js/editor/summernote/summernote.custom.js')}}"></script>
@endsection