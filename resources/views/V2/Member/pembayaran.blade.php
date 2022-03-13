@extends('V2.layouts.master')
@section('js')
<script>
    $("document").ready(function(){
        $(".tab-slider--body").hide();
        $(".tab-slider--body:first").show();
    });

    $(".tab-slider--nav li").click(function() {
    $(".tab-slider--body").hide();
    var activeTab = $(this).attr("rel");
    $("#"+activeTab).fadeIn();
        if($(this).attr("rel") == "tab2"){
            $('.tab-slider--tabs').addClass('slide');
        }else{
            $('.tab-slider--tabs').removeClass('slide');
        }
    $(".tab-slider--nav li").removeClass("active");
    $(this).addClass("active");
    });

</script>
@endsection
@section('content')
<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="row">
        <div class="col-8">
            <!-- title KOMISI FISIK -->
            <div class="d-sm-flex align-items-center justify-content-between">
                <a href="allproduct.html">
                    <p
                        style="color:white;font-family: 'Rubik', sans-serif; font-weight: 600; font-size: 30px;">
                        <span
                            style="color: #FF9F1C; font-family: 'Rubik', sans-serif; font-weight: bold;">
                            | </span>
                            Pengiriman <span style="font-weight: 100;"></span>
                    </p>
                </a>
            </div>
            <!-- title KOMISI FISIK-->
        </div>
        <div class="col-2">
            <p class="mt-4 ml-1 text-white">Marketplace</p>
        </div>
        <div class="col-2">
            <div class="text-right">
                <div class="tab-slider--nav mt-4 ml-5">
                    <ul class="tab-slider--tabs">
                        <li class="tab-slider--trigger active" rel="tab1"><i class="fas fa-circle"></i></li>
                        <li class="tab-slider--trigger" rel="tab2"><i class="fas fa-circle"></i></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <div class="tab-slider--container">
        <!-- tab 1 -->
        <div id="tab1" class="tab-slider--body">                                
            <div class="row">
                <div class="col-sm-8">
                    <div class="card">
                        <div class="card-body">
                            <form>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="formGroupExampleInput" class="text-black">Provinsi</label>
                                            <select class="form-control">
                                                <option>Masukkan Provinsi Anda</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput" class="text-black">Kota / Kabupaten</label>
                                            <select class="form-control">
                                                <option>Masukkan Kabupaten Anda</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput" class="text-black">Kecamatan</label>
                                            <select class="form-control">
                                                <option>Masukkan Kecamatan Anda</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput" class="text-black">Kelurahan</label>
                                            <select class="form-control">
                                                <option>Masukkan Kelurahan Anda</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1" class="text-black">Alamat lengkap</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" style="height: 134px;"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1" class="text-black">Nama Penerima</label>
                                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Nama Penerima Barang">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1" class="text-black">Nomor Handphone</label>
                                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Nomer Handphone Anda">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="formGroupExampleInput" class="text-black">Pilih Pengirim</label>
                                <select class="form-control">
                                    <option>Masukkan Kelurahan Anda</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput" class="text-black">Pilih Kurir</label>
                                <select class="form-control">
                                    <option>Masukkan Kelurahan Anda</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group mt-1">
                        <label for="exampleFormControlInput1" class="text-white">Kode Kupon</label>
                        <input type="email" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="Masukkan kode kupon">
                    </div>

                    <div class="form-group" style="margin-top: -10px;">
                        <label for="formGroupExampleInput" class="text-white">Pilih bank</label>
                        <select class="form-control form-control-sm">
                            <option>Pilih bankyang tersedia</option>
                        </select>
                    </div>

                    <button class="btn btn-block btn-sm button-custome text-white">Lanjut</button>

                </div>
            </div>
        </div>
        <!-- tab 2 -->
        <div id="tab2" class="tab-slider--body">
            <div class="row">
                <div class="col-sm-8">
                    <div class="card">
                        <div class="card-body">
                            <form>
                    
                                <div class="row">
                                    <div class="col">
                                        
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1" class="text-black">Nama Penerima</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Nama Penerima Barang">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1" class="text-black">Nomor Handphone</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Nomer Handphone">
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput" class="text-black">Marketplace</label>
                                            <select class="form-control">
                                                <option>Pilih Nama Marketplace</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1" class="text-black">Olshop</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Nama Olshop">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="formGroupExampleInput" class="text-black">Resi</label>
                                            <select class="form-control">
                                                <option>Masukkan Resi Pengiriman</option>
                                            </select>
                                        </div>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 d-flex flex-column">
                    <a href="{{route('order.invoiceMarketplace')}}" style="text-decoration: none;"><button class="btn btn-block btn-sm button-custome text-white mt-auto">Lanjut</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!---Container Fluid-->
@endsection