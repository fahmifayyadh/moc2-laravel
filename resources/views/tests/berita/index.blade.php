@extends('layouts.master',['title' => 'paket'])
@section('head')
    <!-- data table -->
    <link rel="stylesheet" href="{{asset('/assets/datatable/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet"
          href="{{asset('/assets/datatable/datatables-responsive/css/responsive.bootstrap4.min.css')}}">

@endsection
@section('content')
    <div class="page-body">
        <div class="container-fluid">
           
        </div>
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Kelola Berita</h5>
                </div>
                <div class="card-body">
                <a href="{{route('berita.create')}}" style="color:white">
                        <button
                            class="btn btn-info btn-lg pull-right mb-4"
                            type="button">
                            Tambah Berita
                        </button>
                    </a>
                    <div class="table-responsive">
                        <table class="display" id="basic-1">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Isi</th>
                                <th>Type</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($berita as $i => $b)
                            @include('tests.berita.isi')
                                <tr>
                                    <td>{{$i+1}}</td>
                                    <td>{{$b->judul}}</td>
                                    <td><span style="color: aqua;cursor:pointer" data-toggle="modal" data-target="#isi{{$b->id}}">lihat</span></td>
                                <td>{{$b->type}}</td>
                                    <td>
                                        
                                       <a href="{{route('berita.edit',$b->id)}}" style="color:white">
                                            <button type="button" class="btn btn-warning btn-sm ml-2">
                                                Edit
                                            </button>
                                        </a>
                                    <form style="display: inline" onclick="return confirm('apakah anda yakin?')" action="{{route('berita.delete',$b->id)}}" method="post">
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

        @endsection
        @section('footer')
            <script>
                $(document).ready(function () {
                    $('#basic-1').DataTable({
                        "responsive": true,
                    });
        $('#berr *').css("width", "100%")

                });

            </script>
@endsection
