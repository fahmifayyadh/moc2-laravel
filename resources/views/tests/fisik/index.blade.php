@extends('layouts.master',['title'=>'Semua Produk Fisik'])
@section('content')
<div class="page-body">
    <div class="container-fluid">
      <div class="page-header">
        
        {{-- modal --}}
<div class="modal fade" id="filter-leaderboard" tabindex="-1" role="dialog" aria-labelledby="preview-course" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content p-l-10 p-r-10 ">
          <div class="modal-header">
              <h5 class="modal-title">Filter Produk</h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
          </div>
          <div class="modal-body">
          <form action="{{route('produk.produkSearch')}}" method="GET">
            <div class="form-group row">
                <input class="form-control" type="text" name="name" placeholder="nama e-course">
            </div>
            <div class="form-group row">
              <input class="form-control" type="text" name="desc" placeholder="Dekripsi">
          </div>
          <div class="form-group row">
            <input class="form-control" type="number" name="point" placeholder="Point">
        </div>
        <div class="form-group row">
          <input class="form-control" type="number" name="price" placeholder="Harga">
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
                <div class="input-group">
                  <div class="input-group-prepend"><span class="input-group-text" id="inputGroupPrepend2"><i
                    class="icofont icofont-ui-search"></i></span></div>
                    <form style="display: inline" action="" method="get">
                                  <input class="form-control" id="validationDefaultUsername" type="text" placeholder="search"
                                   name="name" required="" data-original-title="" title="">
                                </form>
                </div>
      </div>
    </div>

    <div class="row">
      @foreach ($products as $pr)
      <div class="col-sm-12 col-md-6">
        <div class="card">
          <div class="card-header" style="padding: 15px">
            <h5>{{$pr->name}}</h5>
          </div>
          <div class="card-body" style="padding: 10px">
            <div class="row mb-2">
              <div class="col-md-6">
                <img class="img-thumbnail" id="preview" src="{{asset(Storage::url('/product/main/'.$pr->image))}}" itemprop="thumbnail" alt="Image description" style="width: 200px;height:200px" data-original-title="" title="">
            
              </div>
              <div class="col-md-6">
                <p class="mb-0">{!!$pr->desc!!} </p>
              </div>
            </div>
            <div class="row justify-content-end">
              <div class="col-md-7">
              <span style="color:gray" class="mr-2">RP, {{number_format($pr->varian()->first()->price,0,'.','.')}}</span>
                <span style="color:gray" class="mr-2"><i class="icofont icofont-cart"></i>{{$pr->transaksi()->count()}} terjual</span>
                <span style="color:gray"><i class="icofont icofont-ui-pointer"></i>{{$pr->point_pembeli}} Poin</span> 
              </div>
            </div>
            
            
          </div>
          <div class="card-footer" style="padding: 10px">
               <div class="btn-showcase pull-right">
                <button class="btn btn-pill btn-info btn-sm" type="button" data-original-title="MOC active" title="" data-toggle="modal"   data-target="#preview-course{{$pr->id}}">Preview</button>
               <form style="display: inline" onclick="return confirm('apakah anda yakin?')" action="{{route('produk.delete',$pr->id)}}" method="post">
                @csrf
                @method('delete')
                <button class="btn btn-pill btn-primary btn-sm" type="submit" data-original-title="MOC active" title="">Delete</button>
              
              </form>
              <a href="{{route('produk.edit',['id'=>$pr->id])}}" style="color:white">
                <button class="btn btn-pill btn-warning btn-sm" type="button" data-original-title="MOC active" title="">
                    Edit
                  </button>
                </a>
              </div>
            </div>
            
          </div>
        </div>

                    <div class="modal fade" id="preview-course{{$pr->id}}" tabindex="-1" role="dialog"
                         aria-labelledby="preview-course" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content p-l-10 p-r-10 ">
                                <div class="modal-header">
                                    <h5 class="modal-title">{{$pr->name}}</h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                                            aria-hidden="true">×</span></button>
                                </div>
                    <div class="modal-body">
                        
                    <div class="row">
                        <div class="col-md-12">
                      <a href="{{asset(Storage::url('/product/main/'.$pr->image))}}' itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail" id="preview" src="{{asset(Storage::url('/product/main/'.$pr->image))}}" itemprop="thumbnail" alt="Image description" style="height:360px ;width:100%;"></a> 
                      </div>
                      <hr>
                          <div class="col-md-12">
                              <p class="lead">{!!$pr->desc!!}</p>
                            </div>
                </div>
                    </div>
                    <!-- <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                        <button class="btn btn-primary" type="button">Save changes</button>
                    </div> -->
                </div>
            </div>
        </div>
        @endforeach
    </div>
      </div>
    </div>
</div>
@endsection