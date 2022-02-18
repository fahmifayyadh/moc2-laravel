@extends('layouts.master',['title' => 'Konfirmasi Komisi Masuk'])
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
                                                                    <h4 class="media-heading">Komisi</h4>
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
                                                                            <div class="dropdown">
                                                                                <div class="btn-group mb-0">
                                                                                    <button
                                                                                        class="dropbtn btn-warning btn-round"
                                                                                        type="button">Filter <span><i
                                                                                                class="icofont icofont-arrow-down"></i></span></button>
                                                                                    <div class="dropdown-content"><a
                                                                                            href="#">Sudah Di
                                                                                            Bayar</a><a href="#">Belum
                                                                                            di bayar</a>
                                                                                    </div>
                                                                                </div>
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
                                                <!-- End Invoice Mid-->
                                                <!-- <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">Data Tables</li>
                      </ol> -->
                                            </div>
                                            <div class="col-12">
                                                <!-- Bookmark Start-->
                                                <div class="card">
                                                    <div class="table-responsive invoice-table" id="table">
                                                        <table class="table table-bordered table-striped">
                                                            <tbody>
                                                                <tr>
                                                                    <td class="Number">
                                                                        <h5 class="p-2 mb-0">No</h5>
                                                                    </td>
                                                                    <td class="Afiliasi">
                                                                        <h5 class="p-2 mb-0">User</h5>
                                                                    </td>
                                                                    <td class="Afiliasi">
                                                                        <h5 class="p-2 mb-0">Nama Produk</h5>
                                                                    </td>
                                                                    <td class="Afiliasi">
                                                                        <h5 class="p-2 mb-0">Tanggal Transaksi</h5>
                                                                    </td>
                                                                    <td class="Komisi">
                                                                        <h5 class="p-2 mb-0">Total Komisi</h5>
                                                                    </td>
                                                                    <td class="Status">
                                                                        <h5 class="p-2 mb-0">Status</h5>
                                                                    </td>
                                                                    <td class="Action">
                                                                        <h5 class="p-2 mb-0">Aksi</h5>
                                                                    </td>

                                                                </tr>
                                                                @foreach ($transactionCourse as $i => $t)
                                                                <tr>
                                                                    <td>
                                                                        <label>{{$i+1}}</label>
                                                                    </td>
                                                                    <td>{{$t->user->name}}</td>
                                                                    <td>
                                                                        <p class="itemtext date">{{$t->paket->name}}
                                                                        </p>
                                                                    </td>
                                                                    <td>{{$t->created_at->format('d-m-Y')}}</td>
                                                                    <td>
                                                                        <p class="itemtext digits">Rp.
                                                                            {{$t->commission}}</p>
                                                                    </td>
                                                                    @if (!is_null($t->komisi) && $t->komisi->status ==
                                                                    'selesai')
                                                                    <td><span class="badge badge-pill badge-success"
                                                                            style="color: white;font-size:12px">Selesai</span>
                                                                    </td>
                                                                    @endif
                                                                    @if (is_null($t->komisi))
                                                                    <td><span class="badge badge-pill badge-warning"
                                                                            style="color: white;font-size:12px">Menunggu
                                                                            Pembayaran</span></td>
                                                                    @endif
                                                                    @if (!is_null($t->komisi) && $t->komisi->status ==
                                                                    'menunggu')
                                                                    <td><span class="badge badge-pill badge-info"
                                                                            style="color: white;font-size:12px">Silahkan
                                                                            Konfirmasi</span></td>
                                                                            @elseif(!is_null($t->komisi) && $t->komisi->status ==
                                                                            'batal')
                                                                            <td><span class="badge badge-pill badge-danger"
                                                                              style="color: white;font-size:12px">Batal</span></td>
                                                                    @endif
                                                                    <td>
                                                                        @if (!is_null($t->komisi) && $t->komisi->status
                                                                        == 'menunggu')
                                                                        <button type="submit"
                                                                            class="btn btn-info btn-sm"
                                                                            data-toggle="modal"
                                                                            data-target="#komisi-konfirmasi{{$t->id}}">Konfirmasi</button>
                                                                        @include('tests.afiliasi.komponenKomisi.konfrim')
                                                                        @endif
                                                                    </td>

                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <!-- End Table-->

                                                </div>
                                                <!-- End Table-->
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        {{$transactionCourse->links()}}
                                                        <div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- End InvoiceBot-->
                                    </div>
                                </div>
                                <!-- End Invoice-->
                                <!-- End Invoice Holder-->
                            </div>
                        </div>
                    </div>
                </div>
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
</div>
</div>

@endsection
<!-- Bookmark Ends-->
</div>
</div>
</div>
</div>
