@extends('V2.layouts.master')
@section('title','My Order Produk')
@section('css')
 <link href="{{asset('admin/css/custom.css')}}" rel="stylesheet">
@endsection
@section('content')
<div class="container-fluid" id="container-wrapper">
    <!-- title berita -->
    <div class="d-sm-flex align-items-center justify-content-between mb-2 mt-4">
        <a href="allproduct.html">
            <p style="color:white;font-family: 'Rubik', sans-serif; font-weight: 600; font-size: 30px;">
                <span style="color: #FF9F1C; font-family: 'Rubik', sans-serif; font-weight: bold;"> |
                </span>
                BERITA PENTING <span style="font-weight: 100;"></span>
            </p>
        </a>
    </div>
    <!-- title berita-->
    <!-- detail product -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="row">
                    <div class="col-md-5">
                        <div class="images p-3">
                            <div class="text-center p-4">
                                <!-- data prodcut -->
                                <img id="main-image" src="{{asset(Storage::url('paket/'.$course->image))}}" width="415px" height="429px" />
                                <!-- data prodcut -->
                            </div>
                            <div class="thumbnail text-center">
                                 <!-- data tumbnail  -->
                                  @foreach ($course->course as $i=>$xc)
                                <img class="image-active" style="border-radius: 20px;" onclick="change_image(this)" src="{{asset(Storage::url('course/main/'.$xc->image))}}" width="137,04px" height="146px"> 
                                @endforeach
                                <!-- data tumbnail -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="product p-4 mt-4">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <span class="tittle-text">{{$course->name}}</span>
                                </div>
                            </div>
                            <div class="mt-3 mb-3"> 
                                <span class="text-uppercase brand">
                                    <span class="text-custome">
                                        <i class="fas fa-star fa-sm"></i>
                                    </span>
                                    5.0
                                </span>
                                <h5 class="text-custome mt-3">Rp. 1.755.000</h5>
                                <hr>
                                <p class="dec-text mt-4">Course yang diperoleh :</>
                                <div class="price d-flex flex-row align-items-center"> 
                                    <ol class="list-text mt-4" style="margin-left: -20px;">
                                    	 @foreach ($course->course as $i=>$s)
                                        <li class="mb-3">{{$s->name}}</li>
                  						@endforeach
                                    </ol>
                                </div>
                                <hr>
                            </div>
                            <div class="row mt-5">
                                <div class="col-3">
                                    <p>Tanggal Publish</p>
                                    <p>Availability</p>
                                    <p>Batas Pemakaian</p>
                                </div>
                                <div class="col-6">
                                    <p>: {{$course->created_at->format('d-M-Y')}}</p>
                                    <p>: Out Of stock </p>
                                    <p>: {{$course->batas != null ? $course->batas.' hari': 'Life Time'}}</p>
                                </div>
                            </div>
                            @if (Request::path() != 'etalase/detail-course-paket/'.$course->id)  
                            <div class="float-right" style="margin-top:-50px"> <button class="btn button-custome mr-2 px-4 text-light" data-toggle="modal" data-target="#exampleModal">beli sekarang</button>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- detail product -->
    <div class="d-sm-flex align-items-center justify-content-between mb-2 mt-4">
        <a href="allproduct.html">
            <p style="color:white;font-family: 'Rubik', sans-serif; font-weight: 600; font-size: 30px;">
                <span style="color: #FF9F1C; font-family: 'Rubik', sans-serif; font-weight: bold;"> |
                </span>
                Produk Lainnya <span style="font-weight: 100;"></span>
            </p>
        </a>
    </div>
    <div class="row">
        <div class="col mb-5">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top mx-auto d-block" style="height: 10rem;width: 10rem;"
                    src="img/product/Untitled-1 1.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title text-black">7 Private Acces</h5>
                    <span class="badge badge-primary mb-2 bg-purple">Free member</span>
                    <p class="card-text mb-0 text-black">
                        E-Course
    
                    </p>
                </div>
                <div class="card-footer d-flex">
                    <p class="text-custome">Rp. 1.755.000</p>
                    <p class="ml-auto text-custome"><i
                            style="display: flex; justify-content: flex-end; position: relative; left: 41px; top: 4px;"
                            class="fas fa-star fa-sm"></i></p>
                    <p class="ml-auto">5.0</p>
                </div>
            </div>
        </div>
        <div class="col mb-5">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top mx-auto d-block" style="height: 10rem;width: 10rem;"
                    src="img/product/Untitled-1 1.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title text-black">7 Private Acces</h5>
                    <span class="badge badge-primary mb-2 bg-purple">Free member</span>
                    <p class="card-text mb-0 text-black">
                        E-Course
    
                    </p>
                </div>
                <div class="card-footer d-flex">
                    <p class="text-custome">Rp. 1.755.000</p>
                    <p class="ml-auto text-custome"><i
                            style="display: flex; justify-content: flex-end; position: relative; left: 41px; top: 4px;"
                            class="fas fa-star fa-sm"></i></p>
                    <p class="ml-auto">5.0</p>
                </div>
            </div>
        </div>
        <div class="col mb-5">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top mx-auto d-block" style="height: 10rem;width: 10rem;"
                    src="img/product/Untitled-1 1.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title text-black">7 Private Acces</h5>
                    <span class="badge badge-primary mb-2 bg-purple">Free member</span>
                    <p class="card-text mb-0 text-black">
                        E-Course
    
                    </p>
                </div>
                <div class="card-footer d-flex">
                    <p class="text-custome">Rp. 1.755.000</p>
                    <p class="ml-auto text-custome"><i
                            style="display: flex; justify-content: flex-end; position: relative; left: 41px; top: 4px;"
                            class="fas fa-star fa-sm"></i></p>
                    <p class="ml-auto">5.0</p>
                </div>
            </div>
        </div>
        <div class="col mb-5">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top mx-auto d-block" style="height: 10rem;width: 10rem;"
                    src="img/product/Untitled-1 1.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title text-black">7 Private Acces</h5>
                    <span class="badge badge-primary mb-2 bg-purple">Free member</span>
                    <p class="card-text mb-0 text-black">
                        E-Course
    
                    </p>
                </div>
                <div class="card-footer d-flex">
                    <p class="text-custome">Rp. 1.755.000</p>
                    <p class="ml-auto text-custome"><i
                            style="display: flex; justify-content: flex-end; position: relative; left: 41px; top: 4px;"
                            class="fas fa-star fa-sm"></i></p>
                    <p class="ml-auto">5.0</p>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    <p>
                        <span style="color: #FF9F1C; font-family: 'Rubik', sans-serif; font-weight: bold;"> | </span>
                        <span class="dec-text">Pilih Metode Pembayaran</span>
                    </p>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            	<form action="{{route('ch.invoice-course',$course->id)}}" method="post">
      			@csrf
 
      			<div class="form-check">
      				<input class="form-check-input" type="radio" name="methode" id="exampleRadios1" value="personal" checked>
      				<label class="form-check-label" for="exampleRadios1">
      					Melalui Bukti Transfer
      				</label>
      			</div>
      			<hr>
      			<div class="form-check">
      				<input class="form-check-input" type="radio" name="methode" id="exampleRadios2" value="gateway">
      				<label class="form-check-label" for="exampleRadios2">
      					Melalui Payment Gateway
      				</label>
      			</div>
		        <div class="modal-footer">
		        	<div class="input-group input-group-sm">
		         
		          <input class="form-control" type="text" placeholder="masukan kode kupon" name="kode" id="kode">
					 @error('kode')
					<small>{{$message}}</small>
					@enderror
		        </div>
                <button type="submit" class="btn button-custome btn-sm text-light">Lanjut Bayar</button>
            </div>
        </form>
        </div>
    </div>
</div>
@endsection

          @section('js')
<script>
        function change_image(image) {
                var container = document.getElementById("main-image");
                container.src = image.src;
            }
            document.addEventListener("DOMContentLoaded", function (event) {
            });
        </script>
        @endsection