@extends('layouts.master',['title'=>'Create Kupon'])
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
                  <h5>Edit Kupon</h5>
                </div>
              <!-- </div> -->
              <div class="col-sm-12 ">
            	<form class="theme-form" action="{{route('kupon.edit',$kupon->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="form-group">
          <label for="">Kode Kupon</label>
          <input class="form-control" type="text" placeholder="kode kupon" name="kode" value="{{$kupon->kode}}">
          @error('kode')
<small>{{$message}}</small>
@enderror
        </div>
        <div class="form-group">
          <label for="">Batas Penggunaan perUser</label>
          <input class="form-control" type="number" placeholder="batas penggunaan kupon" name="penggunaan" value="{{$kupon->penggunaan}}">
          @error('penggunaan')
<small>{{$message}}</small>
@enderror
        </div>
        <div class="form-group">
          <label for="">Untuk Product Fisik</label>
        <select class="form-control" name="product" id="">
          <option value="1" >Iya</option>
          <option value="0" {!! $kupon->product ? null : 'selected' !!}>Tidak</option>
        </select>
        </div>
        <div class="form-group">
          <label for="">Untuk E-course</label>
        <select class="form-control" name="course" id="">
          <option value="1">Iya</option>
          <option value="0" {!! $kupon->course ? null : 'selected' !!}>Tidak</option>
        </select>
        </div>
        <div class="form-group">
          <label for="">Nominal Potongan</label>
          <input class="form-control" type="number" placeholder="Nominal" name="nominal" value="{{$kupon->nominal}}">
          @error('nominal')
<small>{{$message}}</small>
@enderror
        </div>
        <div class="form-group">
          <label for="">Batas Penggunaan</label>
        <input class="form-control" type="date" name="batas" value="{{$kupon->batas}}">
          @error('kode')
<small>{{$message}}</small>
@enderror
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