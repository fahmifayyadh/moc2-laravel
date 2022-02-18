@extends('v2.layouts.master')
@section('title', 'Detail Product Ecourse')
@section('css')
<link href="{{asset('mmbr/custom.css')}}" rel="stylesheet">
@endsection
@section('js')
@endsection
@section('content')
<div class="container-fluid" id="container-wrapper">
    <!-- title berita -->
    <div class="d-sm-flex align-items-center justify-content-between mb-2 mt-4">
        {{-- <a href="allproduct.html"> --}}
            <p class="ml-3"><a href="{{ route('etalase.course') }}" style="color: #FF9F1C;">All products</a></p>
            <p style="color:white;font-family: 'Rubik', sans-serif; font-weight: 600; font-size: 30px; float:left">

                {{-- <span style="color: #FF9F1C; font-family: 'Rubik', sans-serif; font-weight: bold;"> |

                </span> --}}
                 {{-- <span style="font-weight: 100;"></span> --}}

            </p>
        {{-- </a> --}}
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
                                <img id="main-image" src="{{asset(Storage::url('course/main/'.$course->image))}}" width="415px" height="429px" />
                                <!-- data prodcut -->
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
                            </div>
                            <p>{!!$course->desc!!}</p>
                            <div class="row mt-5">
                                <div class="col-3">
                                    <p>Tanggal Publish</p>
                                    <p>Availability</p>
                                </div>
                                <div class="col-6">
                                    <p>: {{$course->created_at->format('d-M-Y')}}</p>
                                    <p>: In stock</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
