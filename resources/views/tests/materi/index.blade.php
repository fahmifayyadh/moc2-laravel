@extends('layouts.master',['title' => 'All Produk'])
@section('content')
<div class="page-body">
    <br>
    <div class="container-fluid product-wrapper">
        <div class="product-grid">
          <div class="feature-products">
            <div class="row">
              <div class="col-md-6 products-total">
                <h1 style="color:#fff">My Course</h1>
              </div>
              </div>
            </div>

          </div>
          <div class="product-wrapper-grid">
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
                  <div class="col-xl-3 col-sm-6 xl-4">
                    <div class="card">
                      <div class="product-box">
                        <div class="product-img">
                          <center>

                            <img class="img-fluid" style="height: 300px;width:300px" src="{{asset(Storage::url('course/main/'.$c->image))}}" alt="">
                          </center>
                          <div class="product-hover">
                            <ul>
                          {{-- <li>
                            <button class="btn" type="button"><i class="icon-shopping-cart"></i></button>
                          </li> --}}
                          <li>
                            <a href="{{route('myCourse.see',[$zz->paket->id,$c->id,$zz->id])}}"><button class="btn" type="button"><i class="icon-eye"></i></button></a>
                          </li>
                          {{-- <li>
                            <button class="btn" type="button"><i class="icofont icofont-law-alt-2"></i></button>
                          </li> --}}
                        </ul>
                      </div>
                    </div>
                    
                    <div class="product-details">
                    <h4>{{$c->name}}</h4> 
                    <!--<p>Nama Paket: {{$zz->paket->name}}</p>-->
                  </div>
                </div>
              </div>
            </div>
            @endif
            @endforeach
              @endforeach

            </div>
          </div>
        </div>
      </div>

</div>
 @endsection
<style>
  .footer{margin-left: 20px;}
</style>
