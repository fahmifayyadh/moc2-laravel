@extends('layouts.master',['title' => 'Generate Afiliasi'])
@section('head')
<script>
    function myFunction(l = 0) {
        var copyText = document.getElementById(l == 0 ? "myInput" : "myInput1");
        copyText.select();
        copyText.setSelectionRange(0, 99999)
        document.execCommand("copy");
    }
</script>
@endsection
@section('content')
<div class="page-body">
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-12">
                    <!-- Container-fluid starts-->
                    <div class="container">

                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="invoice">
                                        <div style="padding-left: px;">
                                            <div>
                                                <div>

                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="media">
                                                                <div class="media-left"> </div>
                                                                <div class="media-body m-l-20">
                                                                    <h2 class="media-heading">Link Afiliasi</h2>
                                                                </div>
                                                            </div>
                                                            <!-- End Info-->
                                                        </div>

                                                        <div class="col-sm-6">
                                                            <div class="text-md-right">

                                                                <br>
                                                                <br>

                                                                <div class="dropdown-basic">
                                                                    <div class="row justify-content-end">
                                                                        <div style="padding-left: 10px;">
                                                                            <!-- <button class="btn btn-info btn-lg" type="button">Tambah Course</button> -->
                                                                        </div>
                                                                        <!-- <button class="btn btn-pill btn-info btn-sm" type="button" data-original-title="btn btn-pill btn-info btn-sm" title="">Tambah Course</button> -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Title-->
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <!-- End InvoiceTop-->
                                            <h3></h3>
                                            <!-- Start Invoice Top-->
                                            <br>
                                            <h4 class="ui header">Link Produk</h4>
                                            <form action="{{route('afiliasi.generate')}}" method="POST">
                                                @csrf
                                                <div class="ui fluid action input">

                                                    <select id="product_id" name="product"
                                                        class="ui fluid dropdown select2-hidden-accessible"
                                                        data-select2-id="product_id" tabindex="-1" aria-hidden="true">
                                                        <option value="" data-select2-id="6">Pilih Produk</option>
                                                        @foreach ($products as $p)
                                                        <option value="{{$p->id}}">{{$p->name}}</option>
                                                        @endforeach
                                                    </select>
                                                    <button type="submit"
                                                        class="btn btn-primary btn-sm">Generate</button>
                                                </div>
                                            </form>
                                            <div id="affiliate-link-holder">
                                                <div class="field">
                                                    <a href="#" data-toggle="tooltip"
                                                        title="Link menuju ke halaman landing / sales page">Halaman
                                                        Penjualan / Sales Page</a>
                                                    <div class="ui fluid action input">
                                                        <input id="myInput" name="aff-link-0" type="text"
                                                            value="{{$link ?? 'Kosong'}}/salesPage" readonly="">
                                                        <button class="btn btn-success btn-sm" onclick="myFunction()"><i
                                                                class="copy icon"></i> Copy</button>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="field">
                                                    <a href="#" data-toggle="tooltip"
                                                        title="Link menuju ke halaman checkout">Halaman Checkout</a>
                                                    <div class="ui fluid action input">
                                                        <input id="myInput1" name="aff-link-1" type="text"
                                                            value="{{$link ?? 'Kosong'}}" readonly="">
                                                        <button class="btn btn-success btn-sm"
                                                            onclick="myFunction(1)"><i class="copy icon"></i>
                                                            Copy</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </tr>
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    @endsection
    <!-- Bookmark Ends-->
