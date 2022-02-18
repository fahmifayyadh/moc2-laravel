@extends('layouts.master')

@section('content')

 <div class="container-fluid" id="container-wrapper">
                    <div class="row">
                        <div class="col-6">keranjang</div>
                    </div>
                    <div class="row">
                        <div class="col-8 col-sm-10">
                            <div class="card">
                                <div class="card-body">
                                    <input type="checkbox" name="" id="">
                                    <img width="171.19px" height="166px" src="img/product/Untitled-1 1.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-4 col-sm-2"> 
                            <div class="card">
                                <div class="card-body">    
                                    <p>total</p>
                                    <p>Rp 125.000</p>
                                    <p><button class="btn btn-lg btn-danger" type="submit">checkout(1)</button></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection
<!-- Bookmark Ends-->

@section('footer')
<script>
    $(document).ready(function () {
        $('.carousel').carousel({
            interval: 4000
        });
        $('#berr *').css("width", "100%")
    });
</script>
@endsection