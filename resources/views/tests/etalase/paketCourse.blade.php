@extends('layouts.master',['title' => 'All Produk'])
@section('content')
<div class="page-body">
    <br>
    <div class="container-fluid product-wrapper">
        <div class="product-grid">
          <div class="feature-products">
            <div class="row">
              <div class="col-md-6 products-total">
                <h1>Product</h1>
              </div>
            </div>

          </div>
          <div class="product-wrapper-grid">
            <div class="row bg-white p-3 rounded">
              
              @foreach ($paket as $c)
              <div class="col-xl-3 col-sm-6 xl-4">
                <div class="card">
                  <div class="product-box">
                    <div class="product-img"><img class="img-fluid" src="{{asset(Storage::url('course/main/'.$c->course[0]->image ?? null))}}" style="height: 200px;width:100%" alt="">
                      <div class="product-hover">
                        <ul>
                          {{-- <li>
                            <button class="btn" type="button"><i class="icon-shopping-cart"></i></button>
                          </li> --}}
                          <li>
                          <a href="{{route('etalase.detailPaketCourse',$c->id)}}"><button class="btn" type="button"><i class="icon-eye"></i></button></a>
                          </li>
                        </ul>
                      </div>
                    </div>
              
                    <div class="product-details">
                    <h4>Jenis Paket {{$c->name}}</h4>
                    <p>Course yang didapat:</p>
                    @foreach ($c->course as $i=>$s)
                    <p>{{$i+1}}. {{$s->name}}</p>
                    @endforeach
                    <p>E-course</p>
                  <div class="product-price">
                      Rp. {{$c->course()->sum('price')}}
                    </div>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach

            </div>
          </div>
        </div>
      </div>

</div>
  
 @endsection