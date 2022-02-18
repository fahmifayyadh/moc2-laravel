@extends('layouts.master',['title'=>'Edit E-Course'])
@section('head')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/summernote.css')}}">
@stop
@section('content')
<div class="page-body">
        
    <div class="container-fluid">
      
      <div class="col-sm-12">
        <br>
        <div class="card">
          <div class="card-body">
            <div class="tab-content" id="top-tabContent">
              <div class="tab-pane fade show active" id="top-home" role="tabpanel" aria-labelledby="top-home-tab">
                <div class="row">
                  <div class="col-xl-12">
                    <div class="card-header">
                      <h5>Edit</h5>
                    </div>
                  </div>
                  <div class="col-sm-12 ">
        					<form action="{{route('subCourse.update', ['id' => $subCourse->id])}}" method="POST" enctype="multipart/form-data">
        						@csrf
        						@method('put')
      									<div class="form-group">
                          <input class="form-control" id="exampleInputEmail1" value="{{$subCourse->name}}" type="text" placeholder="Title" name="name" data-original-title="" title="">
                        </div>
                        <div class="form-group">
                          <input class="form-control" value="{{$subCourse->sequence}}" type="number" name="sequence">
                        </div>
                        <div class="form-group">
                          <textarea name="value" class="form-control summernote" cols="30" rows="10">{!! $subCourse->value !!}</textarea>
                        </div>
                        <div class="card-footer ">
                          <center><button class="btn btn-primary" data-original-title="" title="">Submit</button>
                          {{-- <button class="btn btn-secondary" data-original-title="" title="">Cancel</button></center> --}}
                        </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection
    @section('footer')
<script src="{{asset('/assets/js/editor/summernote/summernote.js')}}"></script>
    <script src="{{asset('/assets/js/editor/summernote/summernote.custom.js')}}"></script>
  @stop