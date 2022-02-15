@extends('layouts.master',['title' => 'Status Transaksi E-Course'])
@section('content')
<div class="page-body">
    <br>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row starter-main">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <!-- <div class="pull-right mr-4"><a href="#">Edit Profile Playlist</a></div> -->
                        <h5>Status Afiliasi</h5>

                    </div>
                    <div class="card-body">
                        <!-- Tool -->
                        <div class="dropdown-basic">
                            <div class="row justify-content-end">
                                <div style="padding-left: 10px;">
                                    <!-- <button class="btn btn-info btn-lg" type="button">Tambah Course</button> -->
                                   
                                    <!-- <button class="btn btn-pill btn-info btn-sm" type="button" data-original-title="btn btn-pill btn-info btn-sm" title="">Tambah Course</button> -->
                                </div>
                                
                            </div>

                        </div>
                        <!-- <div class="row justify-content-end">
                
              <div class="col-md-3">
                <button class="btn btn-pill btn-info btn-sm" type="button" data-original-title="btn btn-pill btn-info btn-sm" title="">Tambah Course</button>
              </div>
              </div> -->
                        <!-- End Tool -->
                        <hr>
                        <div class="table-responsive invoice-table" id="table">
                            <table class="table table-bordered table-striped">
                                <thead class="active">
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Pembeli</th>
                                        <th>Nama Barang</th>
                                        <th>Whatsapp</th>
                                        <th>Harga</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($transaksi as $i=>$t)
                                    <tr>
                                        <td>{{$i+1}}</td>
                                        <td>{{$t->user->name}}</td>
                                        <td>{{$t->paket->name}}</td>
                                        <td>
                                        @if ($t->status != 'selesai')
                                        
                                            <a target="__blank"
                                                href="https://wa.me/62{{substr($t->user->no_hp,0, 1) == 0 ? substr($t->user->no_hp,1) :(substr($t->user->no_hp,0, 1) == 6 ? substr($t->user->no_hp,2) : (substr($t->user->no_hp,0, 1) == 8 ? $t->user->no_hp :$t->user->no_hp))}}">Chat</a>
                                        @endif
                                        </td>
                                            
                                        <td>
                                            {{number_format($t->price-$t->discount,0,'.','.')}}
                                            
                                        </td>
                                        <td>{{$t->user->email}}</td>
                                        {{-- Detail modal --}}
                                      @include('tests.afiliasi.kompo.detail')

                                       @include('tests.transaksi.komponen.badgeCourse')
                                        <td>
                                          
                                            <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                                                data-target="#DetailModal{{$t->id}}">Detail</button>
                                           
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-12">
                          
                            {{$transaksi->links()}}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    @endsection