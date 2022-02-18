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
                    <h5>{{$name}}</h5>
                </div>
                <div class="card-body">
                    <a href="{{route('subCourse.create',$babCourse->id)}}" style="color:white">
                        <button
                            class="btn btn-info btn-lg pull-right mb-4"
                            type="button">
                            Tambah Course
                        </button>
                    </a>
                    <a href="{{route('file.kelola',$babCourse->course_id)}}" style="color:white;">
                        <button
                            class="btn btn-success btn-lg pull-right mb-4"
                            type="button">
                            kelola File
                        </button>
                    </a>
                    <div class="table-responsive">
                        <table class="display" id="basic-1">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Sequence</th>
                                <th>Judul</th>
                                <!-- <th>Varian</th> -->
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($course as $key => $ce)
                            
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$ce->sequence}}</td>
                                    <td>{{$ce->name}}</td>
                                <!-- <td>{{$ce->name}}</td> -->
                                    <td>
                                        <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                                                data-target="#preview-course{{$ce->id}}">
                                            Demo
                                        </button>
                                        <a href="{{route('subCourse.edit',['id'=>$ce->id])}}" style="color:white">
                                            <button type="button" class="btn btn-warning btn-sm ml-2">
                                                Edit
                                            </button>
                                        </a>
                                        <form onsubmit="return confirm('Are you sure?');" style="display:inline" action="{{route('subCourse.delete',$ce->id)}}" method="post">
                                        @csrf
                                        @method('delete')
                                    <button type="submit" class="btn btn-primary btn-sm ml-2">
                                        Delete
                                    </button>
                                </form>

                                    </td>
                                </tr>
                                
                                <div class="modal fade" id="preview-course{{$ce->id}}" tabindex="-1" role="dialog"
                                     aria-labelledby="preview-course" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div>
                                            
                                            <div class="modal-body modal-content">
                                                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                <br>
                                                {!! $ce->value !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
