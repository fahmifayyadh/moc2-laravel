@extends('layouts.master',['title', 'Semua E-Course'])
@section('content')
<div class="page-body">
  <div class="container-fluid">
    <div class="page-header">
      
    </div>
  </div>
   {{-- modal --}}
<div class="modal fade" id="filter-leaderboard" tabindex="-1" role="dialog" aria-labelledby="preview-course" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content p-l-10 p-r-10 ">
          <div class="modal-header">
              <h5 class="modal-title">Filter Course</h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
          </div>
          <div class="modal-body">
          <form action="{{route('course.courseSearch')}}" method="GET">
            <div class="form-group row">
                <input class="form-control" type="text" name="name" placeholder="nama e-course">
            </div>
            <div class="form-group row">
              <input class="form-control" type="text" name="desc" placeholder="Dekripsi">
          </div>
          </div>
          <div class="modal-footer">
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
              <button class="btn btn-primary" type="submit">Save changes</button>
          </div>
        </form>
      </div>
  </div>
</div>
{{-- endModal --}}
    
  <div class="row mb-3 justify-content-end">
    <div class="col-md-2">
      <div class="btn-showcase">
        <button data-toggle="modal" data-target="#filter-leaderboard" class="btn btn-square btn-info btn-lg" type="button" title=""><i class="icofont icofont-filter"></i>Filter</button>
      </div>
    </div>
      <div class="col-md-4">
        <form action="{{route('course.courseSearch')}}" method="get">
          <div class="input-group">
            <div class="input-group-prepend"><span class="input-group-text" id="inputGroupPrepend2"><i class="icofont icofont-ui-search"></i></span></div>
            <input class="form-control" id="validationDefaultUsername" type="text" placeholder="search" required="" name="name" data-original-title="" title="">
          </div>
        </form>
    </div>
  </div>
  <div class="row">
    @foreach ($c as $item)
    <div class="col-sm-12 col-md-6">
      <div class="card">
        <div class="card-header" style="padding: 15px">
        <h5>{{$item->name}}</h5>
          {{-- <div class="card-header-right" style="top:4px">
            <ul class="list-unstyled card-option">
              <li><i class="fa fa-spin fa-cog"></i></li>
              <li><i class="view-html fa fa-code"></i></li>
              <li><i class="icofont icofont-maximize full-card"></i></li>
              <li><i class="icofont icofont-minus minimize-card"></i></li>
              <li><i class="icofont icofont-refresh reload-card"></i></li>
              <li><i class="icofont icofont-error close-card"></i></li>
            </ul>
          </div> --}}
        </div>
        
        <div class="card-body mt-1" style="padding: 10px">
          <div class="row mb-2">
            <div class="col-md-6">
              <center>
                <img class="img-thumbnail" id="preview" src="{{asset(Storage::url('course/main/'.$item->image))}}" itemprop="thumbnail" alt="Image description" style="height: 200px;width:200px" data-original-title="" title="">
              </center>
          
            </div>
            <div class="col-md-6">
              <p class="mb-0">{{ Str::limit($item->desc, 60)}}</p>
            </div>
          </div>
          <div class="row justify-content-end">
            <div class="col-md-5 mt-1">
            <span style="color:gray" class="mr-2"><i class="icofont icofont-notebook"></i>{{$item->subCourse()->count()}}</span>
            <span style="color:gray"><i class="icofont icofont-eye-alt"></i>{{$item->paket()->count()}}x</span> 
            </div>
          </div>
          
          
        </div>
        <div class="card-footer" style="padding: 10px">
             <div class="btn-showcase pull-right">
              <a href="{{route('babCourse.index',$item->id)}}" style="color:white"><button class="btn btn-pill btn-info btn-sm" type="button" data-original-title="MOC active" title="">Add</button></a>
             <form style="display:inline" onclick="return confirm('apakah anda yakin?')" action="{{route('course.delete',$item->id)}}" method="post">
            @csrf
            @method('delete')
            <button class="btn btn-pill btn-primary btn-sm" type="submit" data-original-title="MOC active" title="">Delete</button>
            </form>
            <a href="{{route('course.edit',['id'=>$item->id])}}" style="color:white">
              <button class="btn btn-pill btn-warning btn-sm" type="button" data-original-title="MOC active" title="">
                  Edit
                </button>
              </a>
            </div>
          </div>
          
        </div>
      </div>
      @endforeach
    </div>      
</div>
@endsection
