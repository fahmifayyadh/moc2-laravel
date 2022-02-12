@extends('layouts.master',['title'=>'Create Paket'])
@section('head')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/summernote.css')}}">
@stop
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
                  <h5>Create Paket</h5>
                </div>
              <!-- </div> -->
              <div class="col-sm-12 ">
                <form class="theme-form" action="{{route('course.paketCreate')}}" method="POST" enctype="multipart/form-data">
                  @csrf
                              <div class="form-group">
                                <input class="form-control" type="text" placeholder="Name" name="name" value="{{old('name')}}">
                                @error('name')
                      <small>{{$message}}</small>
                      @enderror
                              </div>
                              <div class="form-group">
                                <label for="">Free member</label>
                                <select name="is_member" class="form-control" id="">
                                <option value="1">iya</option>
                                <option value="0">tidak</option>   
                                </select>
                                @error('is_member')
                      <small>{{$message}}</small>
                      @enderror
                              </div>
                              <div class="form-group">
                                <input class="form-control" type="number" placeholder="Harga" name="price" value="{{old('price')}}" required>
                                @error('price')
                      <small>{{$message}}</small>
                      @enderror
                              </div>
                              <div class="form-group">
                                <input class="form-control" type="number" placeholder="Batas hari penggunaan video (life time tidak perlu diisi)" name="batas" value="{{old('batas')}}">
                                @error('batas')
                      <small>{{$message}}</small>
                      @enderror
                              </div>
                              <div class="form-group">
                                <label for="">point pembeli</label>
                                <input class="form-control" type="number" placeholder="Point Pembeli" name="point_pembeli" required value="{{old('point') ?? 0}}">
                                @error('point_pembeli')
                      <small>{{$message}}</small>
                      @enderror
                              </div>
                              <div class="form-group">
                                <label for="">point sponsor</label>

                                <input class="form-control" type="number" placeholder="Point Sponsor" name="point_sponsor" value="{{old('point') ?? 0}}" required>
                                @error('point_sponsor')
                      <small>{{$message}}</small>
                      @enderror
                              </div>
                              <div class="form-group">
                                <label for="">komisi</label>

                                <input class="form-control" type="number" placeholder="Komisi" name="commission" value="{{old('commission') ?? 0}}" required>
                                @error('commission')
                      <small>{{$message}}</small>
                      @enderror
                              </div>
                              <div class="form-group ">
                                  <label for="">Deskripsi Singkat</label>
                                <textarea class="form-control summernote" rows="3" placeholder="Paket Detail" name="desc" value="{{old('desc')}}" required></textarea>
                                @error('desc')
                      <small>{{$message}}</small>
                      @enderror
                              </div>
                              <div class="form-group row">
                                <label class="col-sm-2">Choose Thumbnail</label>
                                <div class="col-md-4">
                                  <input class="form-control" type="file" name="image" value="{{old('image')}}" required>
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
 @section('footer')
    <script src="{{asset('/assets/js/editor/summernote/summernote.js')}}"></script>
    <script src="{{asset('/assets/js/editor/summernote/summernote.custom.js')}}"></script>
  @stop