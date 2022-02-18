@extends('layouts.master',['title'=>'Create Banner'])
@section('head')
<script src="{{ asset('js/app.js') }}" defer></script>
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/summernote.css')}}">
@endsection
@section('content')
<div class="page-body">
    <div class="container-fluid">
     
    </div>
    <div class="card">
      <div class="card-body">
        <div class="tab-content" id="top-tabContent">
          <div class="tab-pane fade show active" id="top-home" role="tabpanel" aria-labelledby="top-home-tab">
            <div class="row">
              <!-- <div class="col-xl-12"> -->
                <div class="card-header">
                  <h5>Create Berita</h5>
                </div>
              <!-- </div> -->
              <div class="col-sm-12 ">
            	<form class="theme-form" action="{{route('banner.create')}}" method="POST" enctype="multipart/form-data">
	      			@csrf
                    <div class="form-group">
                      <input class="form-control" type="text" placeholder="Link *opsional" name="link" value="{{old('link')}}">
	                    @error('link')
						<small>{{$message}}</small>
						@enderror
                    </div>
                    <div class="form-group">
                      <label for="">Upload Banner</label>
                      <input type="file" class="form-control" name="img" id="">
                      <small>Max size 5mb</small>
                    </div>
                      <div class="col-6 "><button class="btn btn-primary f-right" type="submit">Add</button></div>
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
@section('footer')
<script src="{{asset('/assets/js/editor/summernote/summernote.js')}}"></script>
<script src="{{asset('/assets/js/editor/summernote/summernote.custom.js')}}"></script>
@endsection