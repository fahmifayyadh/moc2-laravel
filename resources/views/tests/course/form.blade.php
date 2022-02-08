@extends('layouts.master',['title'=>'Create E-Course'])
@section('head')
<script src="{{ asset('js/app.js') }}" defer></script>
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
                  <h5>Create E-Course</h5>
                </div>
              <!-- </div> -->
              <div class="col-sm-12 ">
            	<form class="theme-form" action="{{route('course.store')}}" method="POST" enctype="multipart/form-data">
				@csrf
                    <div class="form-group">
                      <input class="form-control" required type="text" placeholder="Name" name="name" value="{{old('name')}}">
	                    @error('name')
						<small>{{$message}}</small>
						@enderror
                    </div>
                    <div class="form-group ">
                      <textarea class="form-control" required rows="3" placeholder="Course Detail" name="desc" value="{{old('desc')}}"></textarea>
                      @error('desc')
						<small>{{$message}}</small>
					  @enderror
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2">Choose Thumbnail</label>
                      <div class="col-md-4">
                        <input class="form-control" required type="file" name="image" value="{{old('image')}}">
                      </div>
                      @error('image')
   					  <small>{{$message}}</small>
					  @enderror
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