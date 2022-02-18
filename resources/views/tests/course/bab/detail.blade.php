@extends('layouts.master',['title' => $name])
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
                    <h5>Kelola Bab Pembelajaran</h5>
                    <p>{{$name}}</p>
                </div>
                <div class="card-body">
                    <a href="{{route('babCourse.create',$idd)}}" style="color:white">
                        <button
                            class="btn btn-info btn-lg pull-right mb-4"
                            type="button">
                            Tambah Bab Course
                        </button>
                    </a>
                    <div class="table-responsive">
                        <table class="display" id="basic-1">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul Bab</th>
                                <!-- <th>Varian</th> -->
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($course as $key => $ce)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$ce->name}}</td>
                                    <td>
                                        <a href="{{route('subCourse.index',$ce->id)}}">
                                            <button type="button" class="btn btn-info btn-sm">
                                            Sub Course
                                        </button>
                                    </a>
                                        <a href="{{route('babCourse.edit',$ce->id)}}" style="color:white">
                                            <button type="button" class="btn btn-warning btn-sm ml-2">
                                                Edit
                                            </button>
                                        </a>
                                        <form onsubmit="return confirm('Are you sure?');" style="display:inline" action="{{route('babCourse.delete',$ce->id)}}" method="post">
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
                });

            </script>
@endsection
