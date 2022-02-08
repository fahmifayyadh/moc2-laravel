@extends('layouts.master',['title' => 'paket'])
@section('head')
    <!-- data table -->
    <link rel="stylesheet" href="{{asset('/assets/datatable/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet"
          href="{{asset('/assets/datatable/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <style>
        body .modal-dialog { /* Width */
    max-width: 50%;
    width: auto !important;
}
    </style>
@endsection
@section('content')
    <div class="page-body">
        <div class="container-fluid">
           
        </div>
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Paket</h5>
                </div>
                <div class="card-body">
                <a href="{{route('course.paketCreate')}}" style="color:white">
                        <button
                            class="btn btn-info btn-lg pull-right mb-4"
                            type="button">
                            Tambah Paket
                        </button>
                    </a>
                    <div class="table-responsive">
                        <table class="display" id="basic-1">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Deskripsi</th>
                                <th>Batas Penggunaan</th>
                                <th>Harga</th>
                                <th>image</th>
                                <th>Free Member</th>
                                <th>Point pembeli</th>
                                <th>Point sponsor</th>
                                <th>Komisi</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($paket as $key => $ce)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$ce->name}}</td>
                                    <td>{{$ce->desc}}</td>
                                    <td>{{$ce->batas}} Hari</td>
                                    <td>{{$ce->price}}</td>
                                    <td><img class="img-fluid rounded-circle" style="width: 50px;height:50px" src="{{asset(Storage::url('/paket/'.$ce->image))}}" style="width: 50px" alt=""></td>
                                    <td>{{$ce->is_member == 1 ? 'benar' : 'Tidak'}}</td>
                                    <td>{{$ce->point_pembeli}}</td>
                                    <td>{{$ce->point_sponsor}}</td>
                                    <td>{{$ce->commission}}</td>
                                    <td>
                                        <button type="button" class="btn btn-info btn-sm ml-2"
                                        data-toggle="modal" data-target="#adc{{$ce->id}}">
                                            Add Course
                                        </button>
                                        <button type="button" class="btn btn-danger btn-sm ml-2"
                                        data-toggle="modal" data-target="#sales{{$ce->id}}">
                                            Sales Page
                                        </button>
                                       <a href="{{route('course.paketEdit',$ce->id)}}" style="color:white">
                                            <button type="button" class="btn btn-warning btn-sm ml-2">
                                                Edit
                                            </button>
                                        </a>
                                    <form style="display: inline" onsubmit="return confirm('apakah anda yakin?')" action="{{route('course.paketDelete',$ce->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-primary btn-sm ml-2">
                                        Delete
                                    </button>
                                </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->
        @foreach ($paket as $ce)
        @include('tests.course.add.course')
        @include('tests.course.add.sales')
        @endforeach
        @endsection
        @section('footer')
            <script>
                $(document).ready(function () {
                    $('#basic-1').DataTable({
                        "responsive": true,
                    });
                });

            </script>
@endsection
