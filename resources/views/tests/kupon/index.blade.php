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
                    <h5>Kelola Kupon</h5>
                </div>
                <div class="card-body">
                <a href="{{route('kupon.create')}}" style="color:white">
                        <button
                            class="btn btn-info btn-lg pull-right mb-4"
                            type="button">
                            Tambah Kupon
                        </button>
                    </a>
                    <div class="table-responsive">
                        <table class="display" id="basic-1">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode</th>
                                <th>Penggunaan</th>
                                <th>Penggunaan perUser</th>
                                <th>Nominal</th>
                                <th>Batas</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($kupon as $i => $k)
                                <tr>
                                    <td>{{$i+1}}</td>
                                    <td>{{$k->kode}}</td>
                                <td>{{$k->product ? 'Product ,' : null}}{{$k->course ? 'Course':null}}</td>
                                <td>{{$k->penggunaan}}</td>
                                <td>{{$k->nominal}}</td>
                                <td>{{Carbon\Carbon::parse($k->batas)->format('d-M-Y')}}</td>    
                                <td>
                                        
                                       <a href="{{route('kupon.edit',$k->id)}}" style="color:white">
                                            <button type="button" class="btn btn-warning btn-sm ml-2">
                                                Edit
                                            </button>
                                        </a>
                                    <form style="display: inline" onclick="return confirm('apakah anda yakin?')" action="{{route('kupon.delete',$k->id)}}" method="post">
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
