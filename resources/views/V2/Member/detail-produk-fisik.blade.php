@extends('V2.layouts.master')
@section('title','Detail Produk')
@section('css')
<link href="{{asset('admin/css/custom.css')}}" rel="stylesheet">
@endsection
@section('js')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script>
    function change_image(image) {
        var container = document.getElementById("main-image");
        container.src = image.src;
    }
    document.addEventListener("DOMContentLoaded", function (event) {
    });

    $(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#add-cart').click(function(){
        // get data on tag
        console.log('ss');
        let id = $(this).data('id');
        let quantity = $('#quantity').val();

        // ajax request
        $.ajax({
            type:'POST',
            url:"{{route('cart.create',$product->id)}}",
            data:{id:id, quantity:quantity},
            success:function(data){
                // alert(data)
                window.location = "{{route('etalase.keranjang')}}";
            }
        });
    });

    $(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox();
    });
    });
    

    $(document).ready(function(){
        

        $('#provinci').change(function () {
            var optionKab = '';
            var ii=0;
            $.ajax({
                url: "{{route('getCity')}}",
                method: "GET",
                data: {
                    province_id: this.value,
                },
                success: function (data) {
                    $.each(data, function( key, value ) {
                    if(ii==0){
                        optionKab += '<option selected="" disabled>Kabupaten</option>';
                    }
                    ii+=1;
                    optionKab += '<option value="'+key+'">'+value+'</option>';
                    });
                    ii=0;
                    $("#kabupaten").find('option').remove().end().append(optionKab);
                    
                }
            });
        });
        $('#provinci').change();
        $('#kabupaten').change(function () {
            var optionKec = '';
            $.ajax({
                url: "{{route('getKecamatan')}}",
                method: "GET",
                data: {
                    city_id: this.value,
                },
                success: function (data) {
                    $.each(data, function( key, value ) {
                    optionKec += '<option value="'+key+'">'+value+'</option>';
                    });
                    $("#kecamatan").find('option').remove().end().append(optionKec);
                }
            });
        });
    });
    $(document).ready(function () {
            var quantitiy = 0;
            $('.quantity-right-plus').click(function (e) {
                // Stop acting like a button
                e.preventDefault();
                // Get the field name
                var quantity = parseInt($('#quantity').val());
                // If is not undefined
                $('#quantity').val(quantity + 1);
                // Increment
            });
            $('.quantity-left-minus').click(function (e) {
                // Stop acting like a button
                e.preventDefault();
                // Get the field name
                var quantity = parseInt($('#quantity').val());
                // If is not undefined
                // Increment
                if (quantity > 0) {
                    $('#quantity').val(quantity - 1);
                }
            });
        });

</script>
<!-- change quantity -->

@endsection
@section('content')
<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <!-- title berita -->
    <div class="d-sm-flex align-items-center justify-content-between mb-2 mt-4">
        <a href="#">
            <p style="color:white;font-family: 'Rubik', sans-serif; font-weight: 600; font-size: 30px;">
                <span style="color: #FF9F1C; font-family: 'Rubik', sans-serif; font-weight: bold;"> |
                </span>
                DETAIL PRODUK <span style="font-weight: 100;"></span>
            </p>
        </a>
    </div>
    <!-- title berita-->
    <!-- detail product -->
    <div class="row">
        <div class="col-10">
            <div class="card">
                <div class="row">
                    <div class="col-md-6">
                        <div class="images p-3">
                            <div class="text-center p-4">
                                <!-- data prodcut -->
                                <img id="main-image" src="{{substr($product->image,0,4) == 'http' ? $product->image : asset(Storage::url('product/main/'.$product->image))}}" width="415px" height="429px" />
                                <!-- data prodcut -->
                            </div>
                            <div class="thumbnail">
                                <!-- data tumbnail  -->
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <img class="image-active" style="border-radius: 20px;" onclick="change_image(this)" src="{{substr($product->image,0,4) == 'http' ? $product->image : asset(Storage::url('product/main/'.$product->image))}}"
                                            width="120px" height="120px">
                                        <img class="image-active" style="border-radius: 20px;" onclick="change_image(this)" src="{{substr($product->image,0,4) == 'http' ? $product->image : asset(Storage::url('product/main/'.$product->image))}}"
                                            width="120px" height="120px">
                                        <img class="image-active" style="border-radius: 20px;" onclick="change_image(this)" src="{{substr($product->image,0,4) == 'http' ? $product->image : asset(Storage::url('product/main/'.$product->image))}}"
                                            width="120px" height="120px">
                                    </div>
                                </div>
                                <div class="row mt-4 ml-4">
                                    <div class="col-6">
                                        <p>Tanggal Publish</p>
                                        <p>Availability</p>
                                        <p>Batas Pemakaian</p>
                                    </div>
                                    <div class="col-6">
                                        <p>: {{$product->created_at->format('d-M-Y')}}</p>
                                        <p>: In stock</p>
                                        <p>: 365 hari</p>
                                    </div>
                                </div>
                                <!-- data tumbnail -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="product p-4 mt-4">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <span class="tittle-text">{{$product->name}}</span>
                                </div>
                            </div>
                            <div class="mt-3 mb-3">
                                <span class="text-uppercase brand">
                                    <span class="text-custome">
                                        <i class="fas fa-star fa-sm"></i>
                                    </span>
                                    5.0
                                </span>
                                <h5 class="text-custome mt-3">Rp. {{number_format($product->varian()->first()->price,0,'.','.')}}</h5>
                                <hr>
                                <p>{!!$product->desc!!}</p>        
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-2">
            <div class="card">
                <div class="card-body p-2">
                    <p class="text-black">Atur jumlah dan catat</p>
                    <!-- <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text bg-transparant">
                                <button type="button" class="quantity-left-minus btn-outline-primary border-0 p-0" data-type="minus" data-field="">
                                    <span class="bg-transparant text-custome h4 glyphicon glyphicon-minus">-</span>
                                </button>
                            </div>
                        </div>
                        <form id="addcart">
                        <input type="text" id="quantity" name="quantity" class="form-control" value="10" min="1" max="100">
                        </form>
                        <div class="input-group-prepend">
                            <div class="input-group-text bg-transparant">
                                <button type="button" class="quantity-right-plus btn btn-link border-0 p-0" data-type="plus" data-field="">
                                    <span class="bg-transparant text-custome glyphicon glyphicon-plus">+</span>
                                </button>
                            </div>
                        </div>
                    </div> -->
                   <!-- KERANJANG -->
                    <div class="css-h82t6w-unf-quantity-editor" data-id="">
                        <button type="button" class="css-199ul1b quantity-left-minus" data-type="minus" data-field="" >
                            <svg class="unf-icon" viewBox="0 0 24 24" width="18px" height="18px" fill="var(--NN300, #FF9F1C)" style="display: inline-block; vertical-align: middle;">
                                <path d="M19 13H5c-.6 0-1-.4-1-1s.4-1 1-1h14c.6 0 1 .4 1 1s-.4 1-1 1z"></path>
                            </svg>
                        </button>
                        <input id="quantity" name="quantity" class="css-1igct5v-unf-quantity-editor__input" data-unify="QuantityEditor" type="text" value="1" min="1" max="100" style="width: 7rem;">
                        <button type="button" class="css-199ul1b quantity-right-plus" data-type="plus" data-field="" onclick="addcart()">
                            <svg class="unf-icon" viewBox="0 0 24 24" width="18px" height="18px" fill="var(--GN500, #FF9F1C)" style="display: inline-block; vertical-align: middle;">
                                <path d="M19 11h-6V5a1 1 0 00-2 0v6H5a1 1 0 000 2h6v6a1 1 0 002 0v-6h6a1 1 0 000-2z"></path>
                            </svg>
                        </button>
                    </div>
                    <p >
                        <div class="row text-black">
                            <div class="col">
                                Stok
                            </div>
                            <div class="col text-right">
                           {{$product->quantity}}
                            </div>
                        </div>
                    </p>
                    <p >
                        
                        <div class="row text-black">
                            <div class="col-sm-6">
                                Subtotal
                            </div>
                            <div class="col-sm-6 text-right">
                           
                            </div>
                        </div>
                    </p>
                   
                    <button class="btn button-outline-custome btn-block mb-3" id="add-cart" data-id="{{$product->id}}">+ keranjang</button>
                    <button class="btn button-custome btn-block text-light" data-toggle="modal" data-target="#belii">beli sekarang</button>
                </div>
            </div>
        </div> 
    </div> 
    <!-- detail product -->

    {{-- Produk lainnya --}}
    <div class="d-sm-flex align-items-center justify-content-between mb-2 mt-4">
        <a href="#">
            <p style="color:white;font-family: 'Rubik', sans-serif; font-weight: 600; font-size: 30px;">
                <span style="color: #FF9F1C; font-family: 'Rubik', sans-serif; font-weight: bold;"> |
                </span>
                Produk Lainnya <span style="font-weight: 100;"></span>
            </p>
        </a>
    </div>
    <div class="row">
        @foreach ($randomProduct as $p)
        <div class="col-xl-3 col-md-3 mb-5">
            <div class="card" style="width: 15rem;">
                <a href="{{route('etalase.detail-produk',$p->id) }}"><img class="card-img-top mx-auto d-block" style="height: 20rem; object-fit: cover;height: 300px;width:237px"
                    src="{{asset(Storage::url('product/main/'.$p->image))}}" alt="Card image cap"></a>
                <div class="card-body">
                    <h5 class="card-title text-black">{{$p->name}}</h5>
                    <p class="card-text mb-0 text-black">
                        produk fisik
                    </p>
                    <span class="badge badge-primary mb-2 bg-purple">Free member</span>
                </div>
                <div class="card-footer d-flex">
                    <p class="text-custome">Rp.{{number_format($p->varian()->first()->price,0,'.','.')}}</p>
                    <p class="ml-auto text-custome"><i
                            style="display: flex; justify-content: flex-end; position: relative; left: 20px; top: 4px;"
                            class="fas fa-star fa-sm"></i></p>
                    <p class="ml-auto">5.0</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>

</div>
            <!---Container Fluid-->
        <!-- Modal pembayaran -->
        <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1"
                                value="option1" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                Default radio
                            </label>
                        </div>
                        <hr>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2"
                                value="option2">
                            <label class="form-check-label" for="exampleRadios2">
                                Melalui Payment Gateway
                            </label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                        </div>
                        <button type="button" class="btn button-custome btn-sm text-light">Lanjut Bayar</button>
                    </div>
        
                </div>
            </div>
        </div>
@include('V2.Member.modal.checkout')
@endsection