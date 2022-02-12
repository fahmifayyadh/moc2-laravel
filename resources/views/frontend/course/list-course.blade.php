@extends('layouts.master')
@section('content')
<div class="page-body">
    <div class="container-fluid">
      <div class="page-header">
        <div class="row">
          <div class="col-lg-6">
            <h3>Layout Light</h3>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="../ltr/index.html">Home</a></li>
              <li class="breadcrumb-item">Color Version</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <div class="row mb-3 justify-content-end">
      
        <div class="col-md-4">
        <div class="form-group m-0">
          <input class="form-control" type="search" placeholder="Search.." data-original-title="" title=""><i class="fa fa-search"></i>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12 col-md-6">
        <div class="card">
          <div class="card-header">
            <h5>Cara membuat kue</h5>
            <div class="card-header-right">
              <ul class="list-unstyled card-option">
                <li><i class="fa fa-spin fa-cog"></i></li>
                <li><i class="view-html fa fa-code"></i></li>
                <li><i class="icofont icofont-maximize full-card"></i></li>
                <li><i class="icofont icofont-minus minimize-card"></i></li>
                <li><i class="icofont icofont-refresh reload-card"></i></li>
                <li><i class="icofont icofont-error close-card"></i></li>
              </ul>
            </div>
          </div>
          <div class="card-body mt-1">
            <div class="row mb-2" style="margin-top: -8%">
              <div class="col-md-6">
                <img class="img-thumbnail" id="preview" src="/assets/images/lightgallry/01.jpg" itemprop="thumbnail" alt="Image description" style="width: 100%;" data-original-title="" title="">
            
              </div>
              <div class="col-md-6">
                <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry... </p>
              </div>
            </div>
            <div class="row justify-content-end">
              <div class="col-md-6 mt-1" style="margin-right:-20%">
                <span style="color:gray" class="mr-2"><i class="icofont icofont-cur-dollar-flase"></i>25.000</span>
                <span style="color:gray"><i class="icofont icofont-eye-alt"></i>52x</span> 
              </div>
            </div>
            
            
          </div>
          <div class="card-footer" style="margin-top:-5%">
               <div class="btn-showcase pull-right" style="margin:-5%">
                <button class="btn btn-pill btn-info btn-sm" type="button" data-original-title="btn btn-pill btn-danger active" title=""><a href="/course/detail-course" style="color:white"> Detail</a></button>
                <button class="btn btn-pill btn-primary btn-sm" type="button" data-original-title="btn btn-pill btn-danger active" title="">Delete</button>
                <button class="btn btn-pill btn-warning btn-sm" type="button" data-original-title="btn btn-pill btn-danger active" title="">Edit</button>
              </div>
            </div>
            
          </div>
        </div>
      </div>      
    </div>
  </div>
@endsection