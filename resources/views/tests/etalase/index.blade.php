@extends('layouts.master',['title' => 'All Produk'])
@section('content')
<div class="page-body">
    <br>
    <div class="container-fluid product-wrapper">
        <div class="product-grid">
          <div class="feature-products">
            <div class="row">
              <div class="col-md-6 products-total">
                <h1 style="color:#fff;">Product</h1>
              </div>
            
            </div>

          </div>
          <div class="product-wrapper-grid">
            <div class="row bg-transparent p-3 rounded">
              
              @foreach ($produk as $c)
                  
              <div class="col-xl-3 col-sm-6 xl-4">
                <div class="card">
                  <div class="product-box">
                    <div class="product-img">
                      <center>
                        <img class="img-fluid" src="{{asset(Storage::url(Request::path() == 'etalase/product' ? 'product/main/'.$c->image : 'paket/'.$c->image))}}" style="object-fit: cover;height: 300px;width:300px" alt="">

                      </center>
                      <div class="product-hover">
                        <ul>
                          {{-- <li>
                            <button class="btn" type="button"><i class="icon-shopping-cart"></i></button>
                          </li> --}}
                          <li>
                            <a href="{{route(Request::path() == 'etalase/product' ? 'etalase.detail-produk' : 'etalase.detail-course',$c->id) }}"><button class="btn" type="button"><i class="icon-eye"></i></button></a>
                          </li>
                          {{-- <li>
                            <button class="btn" type="button"><i class="icofont icofont-law-alt-2"></i></button>
                          </li> --}}
                        </ul>
                      </div>
                    </div>
              
                    <div class="product-details">
                    <h4>{{$c->name}}</h4>
                    @if (Request::path() == 'etalase/product')

                    <p>Produk Fisik</p>
                    <p>Harga Varian</p>
                    <div class="row">
                      @forelse ($c->Varian()->get() as $v)
                      <div class="col-md-12">{{$v->name}} : Rp.{{number_format($v->price,0,'.','.')}}</div>
                      @empty
                          Empty Price
                      @endforelse
                    </div>
                    @else
                    {!! $c->is_member ? '<span class="badge badge-info ml-2 text-white"> free Member </span>' : null !!}
                    <p>E-course</p>
                    <div class="product-price">
                      Rp.{{number_format($c->price,0,'.','.')}}
                    </div>
                    @endif
                     
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