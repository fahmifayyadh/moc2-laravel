@extends('layouts.master',['title' => 'Tambah Produk Fisik'])
@section('head')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/summernote.css')}}">
@stop
@section('content')
<div class="page-body">
        
  <div class="container-fluid">
    <br>
    <div class="col-sm-12">
      <div class="card">
        <div class="card-body">
          <div class="tab-content" id="top-tabContent">
            <div class="tab-pane fade show active" id="top-home" role="tabpanel" aria-labelledby="top-home-tab">
              <div class="row">
                <div class="col-xl-12">
                  <div class="card-header">
                    <h5>Form Create</h5>
                  </div>
                </div>
                <div class="col-xl-6 ">
                    <form class="theme-form" action="{{route('produk.store')}}" method="POST" enctype="multipart/form-data">
                      @csrf
                      <div class="form-group">
                        <input class="form-control" required type="text" placeholder="Nama Produk" data-original-title="" title="" name="name">
                      </div>
                      <div class="form-group">
                        <input class="form-control" required type="number" name="berat" placeholder="Berat, Satuan Gram" data-original-title="" title="">
                      </div>
                      <div class="form-group">
                       
                        <input class="form-control" type="number" name="length" placeholder="panjang, satuan cm, Opsional" data-original-title="" title="">
                      </div>
                      <div class="form-group">
                      
                        <input class="form-control" type="number" name="width" placeholder="lebar, satuan cm, Opsional" data-original-title="" title="">
                      </div>
                      <div class="form-group">
                       
                        <input class="form-control" type="number" name="height" placeholder="tinggi, satuan cm, Opsional" data-original-title="" title="">
                      </div>
                      <div class="form-group">
                        <input class="form-control" required type="number" name="point_pembeli" placeholder="Poin pembeli" data-original-title="" title="">
                      </div>
                      <div class="form-group">
                        <input class="form-control" required type="number" name="point_sponsor" placeholder="Poin sponsor" data-original-title="" title="">
                      </div>
                      <div class="form-group">
                        <input class="form-control" required type="number" name="commission" placeholder="komisi" data-original-title="" title="">
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Choose Thumbnail</label>
                        <div class="col-sm-9">
                          <input class="form-control" required type="file" name="image" id="thumbnail" data-original-title="" title="">
                        </div>
                      </div>
                      <div class="form-group ">
                          <label for="">Deskripsi Singkat</label>
                        <textarea required class="form-control summernote" id="exampleFormControlTextarea4" name="desc"  rows="3" placeholder="Deskripsi"></textarea>
                      </div>
                      <div class="form-group">
                        <div class="row p-0 m-0 justify-content-between">
                          <label class="mt-1 col-md-6">Varian</label>
                          <button class="btnan btn btn-primary btn-sm col-md-6" type="button">
                            Tambah Varian
                          </button>
                        </div>
                        <hr>
                        <div class="row">
                          <div class="col-md-6">
                            <input class="form-control" required type="text" placeholder="Nama varian" name="nameVarian[]" >
                          </div>
                          <div class="col-md-6">
                            <input class="form-control" required type="nunber" placeholder="Harga Varian" name="priceVarian[]" >
                          </div>
                        </div>
                        <div class="refs"></div>
                      </div>
                      <div class="card-footer ">
                        <center><button class="btn btn-primary" data-original-title="" title="">Submit</button>
                        {{-- <button class="btn btn-secondary" data-original-title="" title="">Cancel</button></center> --}}
                      </div>
                  </form>
                </div>
                <div class="col-xl-6 col-lg-6">
                  <a href="{{asset('/assets/images/big-lightgallry/01.jpg')}}" itemprop="contentUrl" data-size="1600x950" data-original-title="" title=""><img class="img-thumbnail" id="preview" src="{{asset('/assets/images/lightgallry/01.jpg')}}" itemprop="thumbnail" alt="Image description" style="height:320px ;width: 482px;" data-original-title="" title=""></a>
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
  <script>
    function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        
        reader.onload = function(e) {
          $('#preview').attr('src', e.target.result);   
      }
        reader.readAsDataURL(input.files[0]);
      }
    }
    $("#thumbnail").change(function() {
      readURL(this);
    });
    $(document).ready(function(){
      var f = `<br><div class="row">
            <div class="col-md-6">
              <input class="form-control" type="text" placeholder="Nama varian" name="nameVarian[]" >
            </div>
            <div class="col-md-6">
              <input class="form-control" type="nunber" placeholder="Harga Varian" name="priceVarian[]" >
            </div>
          </div>`;
      $(".btnan").on('click', function(){
        $(".refs").append(f);
      });
    });
  </script>
  @endsection