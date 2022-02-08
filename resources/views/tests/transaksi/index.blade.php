@extends('layouts.master')
@section('head')
        <!-- data table -->
        <link rel="stylesheet" href="{{asset('/assets/datatable/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
        <link rel="stylesheet" href="{{asset('/assets/datatable/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/date-picker.css')}}">

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
          <h5>Transaksi</h5>
          {{-- deksripsi singkat --}}
          <span>Lorem ipsum dolor sit amet consectetur adipisicing elit.</span>
        </div>
        <div class="card-body">
          
{{-- modal --}}
<div class="modal fade" id="transaksi" tabindex="-1" role="dialog" aria-labelledby="preview-course" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content p-l-10 p-r-10 ">
          <div class="modal-header">
              <h5 class="modal-title">Filter Transaksi</h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
          </div>
          <div class="modal-body">
            <div class="form-group row">
                <input class="datepicker-here form-control digits" type="text" data-range="true" data-multiple-dates-separator=" - " data-language="en" data-original-title="" title="">
            </div>
            <div class="form-group row">
                <select class="form-control field" data-type="select" id="inputsize">
                  <option value="col-md-1">Semua Barang</option>
                  <option value="col-md-1">Buah Naga </option>
                
                </select>
            </div>
          </div>
          <div class="modal-footer">
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
              <button class="btn btn-primary" type="button">Save changes</button>
          </div>
      </div>
  </div>
</div>
{{-- endModal --}} 
<div class="row mb-3 justify-content-end">
  <div class="col-md-3">
<div class="btn-showcase">
  <button data-toggle="modal" data-target="#transaksi" class="btn btn-square btn-info btn-lg" type="button" data-original-title="btn btn-square btn-info btn-lg" title=""><i class="icofont icofont-filter"></i>Filter</button>
</div>
</div>
</div>
          <div class="table-responsive">
            <table class="display" id="basic-1">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Pembeli</th>
                  <th>Kode Pembelian</th>
                  <th>Nama Barang</th>
                  <th>status</th>
                  <th>Diskon</th>
                  <th>Harga</th>
                  <th>Action</th>
              </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                <td>Hadi</td>
                  <td>4rt5</td>
                  <td>skin care</td>
                  <td>Selesai</td>
                  <td>120000</td>
                <td>50000</td>
                  <td>
                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#belum">
                      Konfrimasi
                      {{--  jika panding  --}}
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
<script src="{{asset('/assets/js/datepicker/date-picker/datepicker.js')}}"></script>
<script src="{{asset('/assets/js/datepicker/date-picker/datepicker.en.js')}}"></script>
<script src="{{asset('/assets/js/datepicker/date-picker/datepicker.custom.js')}}"></script>

<script>
  $(document).ready(function () {
      $('#basic-1').DataTable({
          "responsive": true,
       });
  });

</script>
@endsection