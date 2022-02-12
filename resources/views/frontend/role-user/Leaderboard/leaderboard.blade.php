@extends('frontend.layouts.master')
@section('head')
        <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/date-picker.css')}}">
@endsection
@section('content')
<div class="page-body">
    <div class="container-fluid">
      <div class="page-header">
        <div class="row">
          <div class="col-lg-6">
            <h3>Leaderboard</h3>
            {{-- <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="../ltr/index.html">Home</a></li>
              <li class="breadcrumb-item">course/detail course</li>
            </ol> --}}
          </div>
        </div>
      </div>
    </div>
{{-- modal --}}
<div class="modal fade" id="filter-leaderboard" tabindex="-1" role="dialog" aria-labelledby="preview-course" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content p-l-10 p-r-10 ">
          <div class="modal-header">
              <h5 class="modal-title">Filter LeaderBoard</h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
          </div>
          <div class="modal-body">
            <div class="form-group row">
                <input class="datepicker-here form-control digits" type="text" data-range="true" data-multiple-dates-separator=" - " data-language="en" data-original-title="" title="">
            </div>
            <div class="form-group row">
                <select class="form-control field" data-type="select" id="inputsize">
                  <option value="col-md-1">Pilihan Barang</option>
                  <option value="col-md-1">Buah Naga </option>
                
                </select>
            </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-primary" type="button">Save changes</button>
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
              
          </div>
      </div>
  </div>
</div>
{{-- endModal --}}
    <div class="row mb-3 justify-content-end">
      <div class="col-md-3">
        <div class="btn-showcase">
          <button data-toggle="modal" data-target="#filter-leaderboard" class="btn btn-square btn-info btn-lg" type="button"  title=""><i class="icofont icofont-filter"></i>Filter</button>
        </div>
      </div>
    </div>
    <div class="table-responsive">
    <table class="table">
      <tbody>
        <tr class="bg-white shadow">
          <th class="align-middle text-secondary"><h3>1</h3></th>
          <td>
            <img src="{{asset('/assets/images/user.jpg')}}" class="img-fluid rounded-circle" style="width:9vh" alt="">
   </td>
          <td class="align-middle text-secondary"><h4><i>Sualaiman</i></h4></td>
          <td class="align-middle text-secondary"><h4><i>250 Poin</i></h4></td>
        </tr>

        <tr class="shadow">
          <th class="align-middle text-secondary"><h3>2</h3></th>
          <td>
            <img src="{{asset('/assets/images/user.jpg')}}" class="img-fluid rounded-circle" style="width:9vh" alt="">
   </td>
          <td class="align-middle text-secondary"><h4><i>Sualaiman</i></h4></td>
          <td class="align-middle text-secondary"><h4><i>250 Poin</i></h4></td>
        </tr>
      </tbody>
    </table>
    </div>
    <!-- Container-fluid Ends-->
  
@endsection
@section('footer') 
 <script src="{{asset('/assets/js/datepicker/date-picker/datepicker.js')}}"></script>
    <script src="{{asset('/assets/js/datepicker/date-picker/datepicker.en.js')}}"></script>
    <script src="{{asset('/assets/js/datepicker/date-picker/datepicker.custom.js')}}"></script>

@endsection