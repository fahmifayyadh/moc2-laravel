@extends('layouts.master',['title' => 'Edit Produk Fisik'])
@section('head')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/summernote.css')}}">
@stop
@section('content')
<div class="page-body">
        
  <div class="container-fluid">
    <br>
    <div class="col-sm-12">
      <div class="card">
        <div class="card-body"style="background-color:#fff;">
          <div class="tab-content" id="top-tabContent">
            <div class="tab-pane fade show active" id="top-home" role="tabpanel" aria-labelledby="top-home-tab">
              <div class="row">
                <div class="col-xl-12">
                  <div class="card-header">
                    <h5>Edit Produk</h5>
                  </div>
                </div>
                <div class="col-xl-6 ">
                  <form  class="theme-form"  action="{{route('produk.update',['id' => $product->id])}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                      <div class="form-group">
                        <input class="form-control" type="text" placeholder="Nama Produk" data-original-title="" title="" value="{{$product->name}}" name="name">
                      </div>
                      <div class="form-group">
                      <input class="form-control" type="number" name="berat" placeholder="Berat, Satuan Gram" value="{{$product->berat}}" data-original-title="" title="">
                      </div>
                      <div class="form-group">
                       <label for="">Panjang*</label>
                      <input class="form-control" value="{{$product->length}}" type="number" name="length" placeholder="panjang, satuan cm, Opsional" data-original-title="" title="">
                      </div>
                      <div class="form-group">
                      <label for="">Lebar*</label>
                      <input class="form-control" value="{{$product->width}}" type="number" name="width" placeholder="lebar, satuan cm, Opsional" data-original-title="" title="">
                      </div>
                      <div class="form-group">
                       <label for="">Tinggi*</label>
                      <input class="form-control" value="{{$product->height}}" type="number" name="height" placeholder="tinggi, satuan cm, Opsional" data-original-title="" title="">
                      </div>
                      <div class="form-group">
                        <label for="">point pembeli</label>
                        <input class="form-control" type="number" name="point_pembeli" placeholder="Poin pembeli" data-original-title="" title="" value="{{$product->point_pembeli}}">
                      </div>
                      <div class="form-group">
                        <label for="">point sponsor</label>
                        <input class="form-control" type="number" name="point_sponsor" placeholder="Poin sponsor" data-original-title="" title="" value="{{$product->point_sponsor}}">
                      </div>
                      <div class="form-group">
                        <label for="">komisi</label>
                        <input class="form-control" type="number" name="commission" placeholder="komisi" data-original-title="" title="" value="{{$product->commission}}">
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Choose Thumbnail</label>
                        <div class="col-sm-9">
                          <input class="form-control" type="file" name="image" id="thumbnail" data-original-title="" title="">
                        </div>
                      </div>
                      <div class="form-group ">
                          <label for="">Deskripsi Singkat</label>
                        <textarea class="form-control summernote" id="exampleFormControlTextarea4" name="desc"  rows="3" placeholder="Deskripsi">{{$product->desc}}</textarea>
                      </div>
                      
                      <div class="card-footer ">
                        <center><button class="btn btn-danger" data-original-title="" title="">Submit</button>
                        <button class="btn btn-warning" data-original-title="" title="">Cancel</button></center>
                      </div>
                  </form>
                </div>
                <div class="col-xl-6 col-lg-6">
                  <a href="{{asset(Storage::url('/product/main/'.$product->image))}}" itemprop="contentUrl" data-size="1600x950" data-original-title="" title=""><img class="img-thumbnail" id="preview" src="{{asset(Storage::url('/product/main/'.$product->image))}}" itemprop="thumbnail" alt="Image description" style="height:320px ;width: 482px;" data-original-title="" title=""></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <br>
    <div class="col-sm-12">
      <div class="card p-4">
        <button type="button" class="tmsa col-md-3 mb-3 btn btn-primary btn-sm">
          Tambah Varian Lain
        </button>
        <!-- MODAL ADD VARIAN -->
        <div class="modal fade" id="modalVarian" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="{{route('v.store', ['id' => $product->id])}}" method="POST">
                @csrf
                @method('put')
                <div class="form-group">
                  <input class="form-control" type="text" name="nameVarian" placeholder="Nama Varian" value="">
                </div>
                <div class="form-group">
                  <input class="form-control" type="number" name="priceVarian" placeholder="Harga" value="">
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Buat Varian</button>
              </div>
            </div>
            </form>
          </div>
        </div>
        <table class="table text-center table-bordered">
          <thead>
            <th>No</th>
            <th>Nama Varian</th>
            <th>Harga</th>
          </thead>
          <tbody>
            @foreach($product->Varian as $index => $varian)
            <tr>
              <form action="{{route('v.update',['id' => $varian->id])}}" method="POST">
                @csrf
                @method('put')
                <td>
                    {{($index + 1)}}
                </td>
                <td class="tdname{{$varian->id}}">
                    {{$varian->name}}
                </td>
                <td class="tdprice{{$varian->id}}">
                    {{$varian->price}}
                </td>
                <td class="tdInputName{{$varian->id}}" style="display: none">
                    <input class="form-control" type="text" name="nameVarian" value="{{$varian->name}}" required>
                </td>
                <td class="tdInputPrice{{$varian->id}}" style="display: none">
                    <input class="form-control" type="number" name="priceVarian" value="{{$varian->price}}" required>
                </td>
                <td class="text-center">
                  <div class="row m-0">
                  <button type="button" id="bl" class="bl{{$varian->id}} btn btn-sm btn-warning" bd="{{$varian->id}}">Ubah</button>
                  <button type="submit" style="display: none" class="boq{{$varian->id}} btn btn-sm btn-primary">Simpan</button>
                  <button type="button" style="display: none" id="fl" class="boX{{$varian->id}} btn btn-sm btn-success" bd="{{$varian->id}}">Batal</button>
                  </form>
                  <form action="{{route('v.delete', ['id' => $varian->id])}}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="bl{{$varian->id}} btn btn-sm btn-danger" bd="{{$varian->id}}">Hapus</button>
                  </form>
                  </div>
                </td>
            </tr>
            @endforeach
          </tbody>
        </table>
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
        reader.readAsDataURL(input.files[0]); // convert to base64 string
      }
    }

    $(document).ready(function(){
      $(".tmsa").on('click', function(){
        $("#modalVarian").modal('show');
      });
      $(document).on('click', "#bl", function () {
        var fq = $(this).attr("bd");
        $(".tdname"+fq).hide();
        $(".tdprice"+fq).hide();
        $(".bl"+fq).hide();
        $(".boq"+fq).show();
        $(".boX"+fq).show();
        $(".tdInputName"+fq).show();
        $(".tdInputPrice"+fq).show();
      });
      $(document).on('click', "#fl", function () {
        var faq = $(this).attr("bd");
        $(".tdname"+faq).show();
        $(".tdprice"+faq).show();
        $(".bl"+faq).show();
        $(".boq"+faq).hide();
        $(".boX"+faq).hide();
        $(".tdInputName"+faq).hide();
        $(".tdInputPrice"+faq).hide();
      });
    });
    $("#thumbnail").change(function() {
      readURL(this);
    });
  </script>
  @endsection