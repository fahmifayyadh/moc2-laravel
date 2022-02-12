@extends('layouts.master',['title' => 'Facebook Pixel'])
@section('head')
<script>
  function myFunction() {
    var copyText = document.getElementById("myInput");
    copyText.select();
    copyText.setSelectionRange(0, 99999)
    document.execCommand("copy");
  }
  </script>
@endsection
@section('content')
<div class="page-body">
  <div class="container-fluid">
    <div class="page-header">
      <div class="row">
        <div class="col-12">
          <!-- Container-fluid starts-->
          <div class="container">

            <div class="col-sm-12">
              <div class="card">
                <div class="card-body">
                  <div class="invoice">
                    <div style="padding-left: px;">
                      <div>
                        <div>
                          <div class="row">
                            <div class="col-sm-6">
                              <div class="media">
                                <div class="media-left"> </div>
                                <div class="media-body m-l-20">
                                  <h4 class="media-heading">Facebook Pixel</h4>
                                </div>
                              </div>
                              <!-- End Info-->
                            </div>
                            <div class="col-sm-6">
                              <div class="text-md-right">
                                <br>
                                <br>
                                <div class="dropdown-basic">
                                  <div class="row justify-content-end">
                                    <div style="padding-left: 10px;">
                                      <!-- <button class="btn btn-info btn-lg" type="button">Tambah Course</button> -->
                                     
                                      <!-- <button class="btn btn-pill btn-info btn-sm" type="button" data-original-title="btn btn-pill btn-info btn-sm" title="">Tambah Course</button> -->
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <!-- End Title-->
                            </div>
                          </div>
                        </div>
                        <hr>
                        <!-- End InvoiceTop-->
                        <h3></h3>
                        <!-- Start Invoice Top-->
                        <br>
                        <!-- End Invoice Mid-->
                        <!-- <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">Data Tables</li>
                      </ol> -->
                    </div>
                    <div class="col-12">
                      <!-- Bookmark Start-->
                      <div class="card">
                        <div class="table-responsive invoice-table" id="table">
                          <table class="table table-bordered table-striped">
                            <tbody>
                              <tr>
                                <td class="Number">
                                  <h5 class="p-2 mb-0">No</h5>
                                </td>
                                <td class="Penjual">
                                  <h5 class="p-2 mb-0">Produk</h5>
                                </td>
                                <td class="Status">
                                  <h5 class="p-2 mb-0">Action</h5>
                                </td>
                              </tr>
                              @foreach ($courses as $i => $c)
                                
                              <tr>
                                <td>
                                <label>{{$i+1}}</label>
                                </td>
                                <td>
                                <p class="itemtext digits">{{$c->name}}</p>
                                </td>
                                <td>
                                <button id="clickButton" type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#afi0{{$i+1}}">Edit</button>
                                </td>
                              </tr>
                              <div class="modal fade" id="afi0{{$i+1}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Facebook pixel</h5>
                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                                                    aria-hidden="true">×</span></button>
                                        </div>
                                        <div class="modal-body">
                  
                                                <form action="{{route('facebookPixel.pixel')}}" method="POST">
                                                  @csrf
                                                      <label>ID Pixel</label>
                                                <div class="form-group">
                                                      
                                                      <input type="text" id="id_pixel" class="form-control" name="pixel_id"
                                                          value="{{$c->agent()->where([['paket_id',$c->id],['user_id',auth()->user()->id]])->first()->pixel ?? null}}"
                                                          placeholder="masukan ID">
                                                      <input type="hidden" id="product_id" name="product_id" value="{{$c->id}}">
                                                </div>
                                                <center>
                                                  <button class="btn btn-primary btn-sm" type="submit">Submit</button>
<br>
                                                </center>
                                              </form>
                                                      <p><b>Silahkan Salin link berikut</b></p>
                                                      <hr>
                                                      <p>URL Equals</p>
                                                      <div class="ui fluid action input">
                                                          <input id="myInput" name="fb-pixel-link-checkout" type="text" value="{{$link ?? 'kosong'}}" readonly="">
                                                          <button class="btn btn-sm btn-success" onclick="myFunction()"
                                                              data-clipboard-target="#fb-pixel-link-checkout"><i class="copy icon"></i> Copy</button>
                                                      </div>
                                                  
                                        </div>
                                        <div class="modal-footer ">
                                          
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                              @endforeach
  
                            </div>
                              </div>
                </tbody>
              </table>
            </div>
            <!-- End Table-->

          </div>
          <!-- End Table-->
          <div class="row">
            <div class="col-md-8">
              {{$courses->links()}}
              <div>
              </div>
            </div>

          </div>
        </div>
      </div>
      <!-- End InvoiceBot-->
    </div>
  </div>
  <!-- End Invoice-->
  <!-- End Invoice Holder-->
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</tr>
</tbody>
</table>
</div>
</div>

</div>
</div>
</div>
</div>
</div>
</div>

@endsection                        <!-- Bookmark Ends-->
</div>
</div>
</div>
</div>
@section('footer')
    <script>
      @if($t)
      window.onload = function(){
      var button = document.getElementById('clickButton');
    button.click();
      }
      @endif
    </script>
@endsection