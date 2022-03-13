@extends('V2.layouts.master')
@section('content')
<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="row">
        <div class="col-7">
            <!-- title KOMISI FISIK -->
            <div class="d-sm-flex align-items-center justify-content-between">
                <a href="allproduct.html">
                    <p
                        style="color:white;font-family: 'Rubik', sans-serif; font-weight: 600; font-size: 30px;">
                        <span
                            style="color: #FF9F1C; font-family: 'Rubik', sans-serif; font-weight: bold;">
                            | </span>
                            Detail Pembayaran <span style="font-weight: 100;"></span>
                    </p>
                </a>
            </div>
            <!-- title KOMISI FISIK-->
        </div>
        <div class="col-3">
            
        </div>
        <div class="col-2">
            
        </div>
    </div>
    <div class="row">
        <div class="col-sm-8">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col">Total Harga (1 barang)</div>
                        <div class="col text-right text-black">Rp 125.000</div>
                    </div>
                    <hr>
                    <div class="row mb-2">
                        <div class="col text-black font-weight-bold">Total Bayar</div>
                        <div class="col text-right text-custome font-weight-bold">Rp 125.000</div>
                    </div>
                    <hr>
                    <div class="row mb-2">
                        <div class="col text-black font-weight-bold">Barang yang dibeli</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col"><span class="text-custome font-weight-bold"> Revolotion Bright 100 ml</span> x1 </div>
                        <div class="col text-right text-black">Rp 125.000</div>
                    </div>
                    <div class="row">
                        <div class="col">Nomer Resi</div>
                        <div class="col text-right">34343434343434</div>
                    </div>
                    <div class="row">
                        <div class="col">Marketplace</div>
                        <div class="col text-right">Tokopedia</div>
                    </div>
                    <div class="row">
                        <div class="col">Olshop</div>
                        <div class="col text-right">Mocolshop</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-2">
            <button class="btn btn-block btn-sm button-custome text-white mt-auto" data-toggle="modal" data-target="#exampleModal2">Lihat My Order</button>
        </div>
    </div>
</div>
<!---Container Fluid-->

<!-- Modal Lihat My Order-->
<div class="modal fade bd-example-modal-lg" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header" style="border-bottom: 0px;">
                <h5 class="modal-title" id="exampleModalLabel">
                    <p>
                        <span style="color: #FF9F1C; font-family: 'Rubik', sans-serif; font-weight: bold;"> | </span>
                        <span class="dec-text">Detail Penerima</span>
                    </p>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row text-black mb-3">
                    <div class="col-3">Nama Penerima</div><div class="col-4"> : Danuar Riyadi</div>
                </div>
                <div class="row text-black mb-3">
                    <div class="col-3">No. Hp Penerima</div><div class="col-4"> : 0853743292359</div>
                </div>
                <div class="row text-black mb-3">
                    <div class="col-3">Marketplace</div><div class="col-8"> : Tokopedia</div>
                </div>
                <div class="row text-black mb-3">
                    <div class="col-3">Olshop</div><div class="col-4"> : mocmembershop</div>
                </div>
                <div class="row text-black mb-3">
                    <div class="col-3">Resi</div><div class="col-4"> : 465475474</div>
                </div>
                <div class="row text-black mb-3">
                    <div class="col-3">Kecamatan</div><div class="col-4"> : Cilegon</div>
                </div>
                <div class="row text-black mb-3">
                    <div class="col-3">Kode Pos</div><div class="col-4"> : 17212</div>
                </div>
                <div class="row mt-5">
                    <div class="col-12">
                        <p class="h5">
                            <span style="color: #FF9F1C; font-family: 'Rubik', sans-serif; font-weight: bold;"> | </span>
                            <span class="dec-text">Detail Penerima</span>
                        </p>
                    </div>
                </div>
                <div class="row text-black mt-2 mb-3">
                    <div class="col-10">
                        <img src="img/item/image.png" class="mr-2" width="44px" height="40" alt="">
                        <span class="text-custome font-weight-bold">
                            Revolotion Bright 100 ml
                            <span class="">x1</span>
                        </span>
                    </div>
                    <div class="col-2 text-right">Rp 125.000</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection