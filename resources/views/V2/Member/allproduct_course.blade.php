@extends('v2.layouts.master')
@section('css')
<link href="{{asset('mmbr/custom.css')}}" rel="stylesheet">
@endsection
@section('js')
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
                        All Product <span style="font-weight: 100;">(course)</span>
                    </p>
                </a>
            </div>
            <!-- title Leaderboard-->
        </div>
        <div class="col-6">
            <div class="input-group shadow-lg">
                <input type="text" class="form-control" placeholder="cari nama"
                    aria-label="Recipient's username" aria-describedby="button-addon2">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i
                            class="fas fa-search"></i></button>
                </div>
                <button class="btn btn-primary ml-4 text-custome bg-secondary-card border-0"
                    type="submit"><i class="fas fa-filter"></i> Filter</button>
            </div>
        </div>
    </div>
    <div class="row">
        @foreach ($produk as $c)
        <div class="col mb-5">
            <div class="card" style="width: 18rem;">
                <a href="{{route(Request::path() == 'etalase/product' ? 'etalase.detail-produk' : 'etalase.detail-course',$c->id) }}">
                <img class="card-img-top mx-auto d-block" style="height: 10rem;width: 10rem;" src="{{asset(Storage::url(Request::path() == 'etalase/product' ? 'product/main/'.$c->image : 'paket/'.$c->image))}}" alt="Card image cap">
                <div class="card-body " style="text-decoration: none">
                    <h5 class="card-title text-black">{{$c->name}}</h5>
                    {!! $c->is_member ? '<span class="badge badge-primary mb-2 bg-purple">Free member</span> ' : null !!}

                    <p class="card-text mb-0 text-black">
                        E-Course

                    </p>
                </div>
            </a>
                <div class="card-footer d-flex">
                    <p class="text-custome">Rp.{{number_format($c->price,0,'.','.')}}</p>
                    <p class="ml-auto text-custome"><i style="display: flex; justify-content: flex-end; position: relative; left: 41px; top: 4px;" class="fas fa-star fa-sm"></i></p>
                    <p class="ml-auto">5.0</p>
                </div>
            </div>
        </div>
        @endforeach
        {{-- <div class="col mb-5">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top mx-auto d-block" style="height: 10rem;width: 10rem;" src="img/product/Untitled-1 1.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title text-black">7 Private Acces</h5>
                    <span class="badge badge-primary mb-2 bg-purple">Free member</span>
                    <p class="card-text mb-0 text-black">
                        E-Course

                    </p>
                </div>
                <div class="card-footer d-flex">
                    <p class="text-custome">Rp. 1.755.000</p>
                    <p class="ml-auto text-custome"><i style="display: flex; justify-content: flex-end; position: relative; left: 41px; top: 4px;" class="fas fa-star fa-sm"></i></p>
                    <p class="ml-auto">5.0</p>
                </div>
            </div>
        </div>
        <div class="col mb-5">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top mx-auto d-block" style="height: 10rem;width: 10rem;" src="img/product/Untitled-1 1.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title text-black">7 Private Acces</h5>
                    <span class="badge badge-primary mb-2 bg-purple">Free member</span>
                    <p class="card-text mb-0 text-black">
                        E-Course

                    </p>
                </div>
                <div class="card-footer d-flex">
                    <p class="text-custome">Rp. 1.755.000</p>
                    <p class="ml-auto text-custome"><i style="display: flex; justify-content: flex-end; position: relative; left: 41px; top: 4px;" class="fas fa-star fa-sm"></i></p>
                    <p class="ml-auto">5.0</p>
                </div>
            </div>
        </div>
        <div class="col mb-5">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top mx-auto d-block" style="height: 10rem;width: 10rem;" src="img/product/Untitled-1 1.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title text-black">7 Private Acces</h5>
                    <span class="badge badge-primary mb-2 bg-purple">Free member</span>
                    <p class="card-text mb-0 text-black">
                        E-Course

                    </p>
                </div>
                <div class="card-footer d-flex">
                    <p class="text-custome">Rp. 1.755.000</p>
                    <p class="ml-auto text-custome"><i style="display: flex; justify-content: flex-end; position: relative; left: 41px; top: 4px;" class="fas fa-star fa-sm"></i></p>
                    <p class="ml-auto">5.0</p>
                </div>
            </div>
        </div>
        <div class="col mb-5">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top mx-auto d-block" style="height: 10rem;width: 10rem;" src="img/product/Untitled-1 1.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title text-black">7 Private Acces</h5>
                    <span class="badge badge-primary mb-2 bg-purple">Free member</span>
                    <p class="card-text mb-0 text-black">
                        E-Course

                    </p>
                </div>
                <div class="card-footer d-flex">
                    <p class="text-custome">Rp. 1.755.000</p>
                    <p class="ml-auto text-custome"><i style="display: flex; justify-content: flex-end; position: relative; left: 41px; top: 4px;" class="fas fa-star fa-sm"></i></p>
                    <p class="ml-auto">5.0</p>
                </div>
            </div>
        </div>
        <div class="col mb-5">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top mx-auto d-block" style="height: 10rem;width: 10rem;" src="img/product/Untitled-1 1.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title text-black">7 Private Acces</h5>
                    <span class="badge badge-primary mb-2 bg-purple">Free member</span>
                    <p class="card-text mb-0 text-black">
                        E-Course

                    </p>
                </div>
                <div class="card-footer d-flex">
                    <p class="text-custome">Rp. 1.755.000</p>
                    <p class="ml-auto text-custome"><i style="display: flex; justify-content: flex-end; position: relative; left: 41px; top: 4px;" class="fas fa-star fa-sm"></i></p>
                    <p class="ml-auto">5.0</p>
                </div>
            </div>
        </div>
        <div class="col mb-5">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top mx-auto d-block" style="height: 10rem;width: 10rem;" src="img/product/Untitled-1 1.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title text-black">7 Private Acces</h5>
                    <span class="badge badge-primary mb-2 bg-purple">Free member</span>
                    <p class="card-text mb-0 text-black">
                        E-Course

                    </p>
                </div>
                <div class="card-footer d-flex">
                    <p class="text-custome">Rp. 1.755.000</p>
                    <p class="ml-auto text-custome"><i style="display: flex; justify-content: flex-end; position: relative; left: 41px; top: 4px;" class="fas fa-star fa-sm"></i></p>
                    <p class="ml-auto">5.0</p>
                </div>
            </div>
        </div>
        <div class="col mb-5">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top mx-auto d-block" style="height: 10rem;width: 10rem;" src="img/product/Untitled-1 1.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title text-black">7 Private Acces</h5>
                    <span class="badge badge-primary mb-2 bg-purple">Free member</span>
                    <p class="card-text mb-0 text-black">
                        E-Course

                    </p>
                </div>
                <div class="card-footer d-flex">
                    <p class="text-custome">Rp. 1.755.000</p>
                    <p class="ml-auto text-custome"><i style="display: flex; justify-content: flex-end; position: relative; left: 41px; top: 4px;" class="fas fa-star fa-sm"></i></p>
                    <p class="ml-auto">5.0</p>
                </div>
            </div>
        </div> --}}

    </div>
</div>
@endsection
