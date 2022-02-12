@extends('layouts.master')
@section('head')
        <!-- data table -->
        <link rel="stylesheet" href="{{asset('/assets/datatable/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
        <link rel="stylesheet" href="{{asset('/assets/datatable/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    
@endsection
@section('content')
<div class="page-body">
    <div class="container-fluid">
      <div class="page-header">
        <div class="row">
          <div class="col-lg-6">
            <h3>Course</h3>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="../ltr/index.html">Home</a></li>
              <li class="breadcrumb-item">course/detail course</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <h5>Cara Memasak</h5>
          {{-- deksripsi singkat --}}
          <span>Lorem ipsum dolor sit amet consectetur adipisicing elit.</span>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="display" id="basic-1">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Gambar</th>
                  <th>Varian</th>
                  <th>Harga</th>
                  <th>Deskripsi</th>
                  <th>Poin</th>
                  <th>Action</th>
              </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>das</td>
                  <td>1</td>
                  <td>kjkj</td>
                  <td>das</td>
                  <td>dsf</td>
                  <td>saa</td>
                  <td>
                      <button type="button" class="btn btn-primary btn-sm">
                          Delete
                      </button>
                      <button
                          type="button"
                          class="btn btn-warning btn-sm ml-2"
                      >
                          Edit
                      </button>
                  </td>
              </tr>
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