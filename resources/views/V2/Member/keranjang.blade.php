@extends('V2.layouts.master')
@section('title','Keranjang')
@section('css')
<link href="{{asset('admin/css/custom.css')}}" rel="stylesheet">
@endsection
@section('js')
<script>
    $(document).ready(function() {
       
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('.delete-cart').click(function(){
            // get data on tag
            let id = $(this).data('id');
            
            // ajax request
            $.ajax({
                type:'POST',
                url: "{{url('cart/delete')}}" + '/' + id,
                data: {
                    "_token": "{{ csrf_token() }}",
                },
                success:function(data){
                    window.location.reload();
                }
            });
        });
        $('.add-cart').click(function(e){
        // get data on tag
        e.preventDefault();
        console.log('ss');
        let id = $(this).data('id');
        let quantity = $('#quantity').val();

        // ajax request
        $.ajax({
            type:'get',
            url: "{{url('cart/add/quantity')}}" + '/' + id,
            data:{id:id, quantity:quantity},
            success:function(data){
                // alert(data)
                window.location.reload();
                }
            });
        });
        $('.min-cart').click(function(e){
        // get data on tag
        e.preventDefault();
        console.log('ss');
        let id = $(this).data('id');
        let quantity = $('#quantity').val();

        // ajax request
        $.ajax({
            type:'get',
            url: "{{url('cart/min/quantity')}}" + '/' + id,
            data:{id:id, quantity:quantity},
            success:function(data){
                // alert(data)
                window.location.reload();
                }
            });
        });
    });

</script>
@endsection
@section('content')
<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="row">
        <div class="col-12 text-title-link">
            Keranjang
        </div>
    </div>
    <div class="row mb-2">
        <div class="col-12 text-title-link">
            <input type="checkbox" aria-label="Checkbox for following text input">
            Pilih semua produk
        </div>
    </div>
    <div class="row">
        <div class="col-sm-8">
            <div class="row">
                <!-- loop data -->
                @foreach($cart as $i => $c)
                <div class="col-sm-12 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <p>
                                <span class="float-left mt-5 mr-3">
                                    <input type="checkbox" aria-label="Checkbox for following text input" name="{{$c->product_id}}" value="{{$c->product_id}}" id="{{$c->product_id}}">
                                </span>
                                <span class="float-left d-flex flex-wrap align-items-center">
                                    <img src="{{substr($c->product->image,0,4) == 'http' ? $c->product->image : asset(Storage::url('product/main/'.$c->product->image))}}" width="120px" height="130px" alt="">
                                </span>
                                <span class="text-black ml-2">
                                    {{$c->product->name}}
                                </span>
                                <span class="float-right">
                                    <button class="delete-cart btn btn-transparant" id="" data-id="{{$c->product->id}}">
                                        <i class="fas fa-trash-alt"></i>        
                                    </button>
                                </span> 
                            </p>
                            <p>
                                <span class="text-custome ml-2">
                                Rp {{number_format($c->product->varian()->first()->price,0,'.','.')}}
                                </span>
                            </p>
                            <!-- button quantity -->
                            <div class="float-right mt-3">
                                <div class="css-h82t6w-unf-quantity-editor">
                                    <button type="button" class="min-cart css-199ul1b quantity-left-minus" data-type="minus" data-field=""id="min-cart" data-id="{{$c->product->id}}">
                                        <svg class="unf-icon" viewBox="0 0 24 24" width="18px" height="18px" fill="var(--NN300, #FF9F1C)" style="display: inline-block; vertical-align: middle;">
                                            <path d="M19 13H5c-.6 0-1-.4-1-1s.4-1 1-1h14c.6 0 1 .4 1 1s-.4 1-1 1z"></path>
                                        </svg>
                                    </button>
                                    <input id="quantity" name="quantity" class="css-1igct5v-unf-quantity-editor__input" data-unify="QuantityEditor" type="text" value="{{$c->quantity}}" min="1" max="100">
                                    <button type="button" class="add-cart css-199ul1b quantity-right-plus" data-type="plus" data-field=""id="add-cart" data-id="{{$c->product->id}}">
                                        <svg class="unf-icon" viewBox="0 0 24 24" width="18px" height="18px" fill="var(--GN500, #FF9F1C)" style="display: inline-block; vertical-align: middle;">
                                            <path d="M19 11h-6V5a1 1 0 00-2 0v6H5a1 1 0 000 2h6v6a1 1 0 002 0v-6h6a1 1 0 000-2z"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <!-- end button quantity -->
                        </div>
                    </div>
                </div>
              @endforeach
                <!-- end loop data -->
            </div>
        </div>
        <!-- checkout -->
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <p class="text-black">
                        Total
                    </p>
                    @php
                    $total = array();
                    foreach($cart as $c){
                        $quantity = $c->quantity;
                        $price = $c->product->varian()->first()->price;
                        $total[] = $quantity*$price;
                    }
                    @endphp
                    <p class="text-custome h3">
                        Rp @php echo array_sum($total); @endphp
                    </p>
                    <p>
                        <button class="btn button-custome btn-block text-title-link"> Checkout</button>
                    </p>
                    
                </div>
            </div>
        </div>
        <!-- end checkout -->
    </div>
</div>
@endsection