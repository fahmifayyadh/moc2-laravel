@extends('layouts.master')
@section('head')
<script src="{{ asset('js/app.js') }}" defer></script>
@endsection
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
    <div class="card">
      <div class="card-body">
        <div class="tab-content" id="top-tabContent">
          <div class="tab-pane fade show active" id="top-home" role="tabpanel" aria-labelledby="top-home-tab">
            <div class="row">
              <!-- <div class="col-xl-12"> -->
                <div class="card-header">
                  <h5>Form Create</h5>
                </div>
              <!-- </div> -->
              <div class="col-sm-12 ">
                <form class="theme-form">
                    <div class="form-group">
                      <input class="form-control" id="exampleInputEmail1" type="text" placeholder="Title" data-original-title="" title="">
                    </div>
                    <div class="form-group">
                      <input class="form-control" id="exampleInputEmail1" type="number" placeholder="Harga" data-original-title="" title="">
                    </div>
                    <div class="form-group ">
                      <textarea class="form-control" id="exampleFormControlTextarea4" rows="3" placeholder="Course Detail"></textarea>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2">Choose Thumbnail</label>
                      <div class="col-md-4">
                        <input class="form-control" type="file" id="thumbnail" data-original-title="" title="">
                      </div>
                      <div class="col-6 "><button class="btn btn-primary f-right" data-original-title="" title="">Add</button></div>
                    </div>
                </form>
              </div>
              <!-- <div class="col-xl-6 col-lg-6">
                <a href="../assets/images/big-lightgallry/01.jpg" itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail" id="preview" src="../assets/images/lightgallry/01.jpg" itemprop="thumbnail" alt="Image description" style="height:320px ;width: 482px;"></a>
              </div> -->
            </div>
          </div>
        </div>
      </div>
    </div>  
  </div>
    <!-- Container-fluid Ends-->
  
@endsection