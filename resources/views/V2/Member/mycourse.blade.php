 @extends('V2.layouts.master')
@section('title','My Course')
@section('css')
 <link href="{{asset('admin/css/custom.css')}}" rel="stylesheet">
@endsection
@section('content')
 <div class="container-fluid" id="container-wrapper">
                    <div class="row">
                        <div class="col-6">
                            <!-- title Leaderboard -->
                            <div class="d-sm-flex align-items-center justify-content-between">
                                <a href="allproduct.html">
                                    <p
                                        style="color:white;font-family: 'Rubik', sans-serif; font-weight: 600; font-size: 30px;">
                                        <span
                                            style="color: #FF9F1C; font-family: 'Rubik', sans-serif; font-weight: bold;">
                                            | </span>
                                            My Course
                                    </p>
                                </a>
                            </div>
                            <!-- title Leaderboard-->
                        </div>
                    </div>
                    <div class="row">
                        @php
                        $a=[]
                        @endphp  
                        @foreach ($course as $zz)
                      @foreach ($zz->paket->course as $c)
                      @if (!in_array($c->id,$a))     
                      @php
                          $a[] = $c->id 
                      @endphp
                    <div class="col-4 mb-4">
                            <div class="card" style="height: 100%;">
                                 <a href="{{route('myCourse.see',[$zz->paket->id,$c->id,$zz->id])}}"><img class="card-img-top mx-auto d-block" style="height: 25rem;width: 20rem;" src="{{asset(Storage::url('course/main/'.$c->image))}}" alt="Mycourse Img">
                                <div class="card-body">
                                    <h5 class="card-title text-black text-center">{{$c->name}}</h5>
                                </div></a>
                                <div class="card-footer d-flex">
                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach
                         @endforeach
                
                    </div>
                </div>
                <!---Container Fluid-->
@endsection