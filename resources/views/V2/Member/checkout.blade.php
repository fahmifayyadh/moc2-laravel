@extends('V2.layouts.master')
@section('title','Checkout')
@section('head')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
<!-- Latest compiled and minified JavaScript -->
<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '{{$pixel ?? '2717783195127340'}}');
  fbq('track', 'PageView');
  </script>
  <noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id={{$pixel ?? '2717783195127340'}}&ev=PageView&noscript=1"
  /></noscript>
  <!-- End Facebook Pixel Code -->
@endsection
@section('js')
<script>
  $(document).ready(function () {
    $('#provinci').change(function () {
     var optionKab = '';
        $.ajax({
            url: "{{route('getCity')}}",
            method: "GET",
            data: {
                province_id: this.value,
            },
            success: function (data) {
              $.each(data, function( key, value ) {
                optionKab += '<option value="'+key+'">'+value+'</option>';
              });
              $("#kabupaten").find('option').remove().end().append(optionKab);
              $("#kabupaten").selectpicker("refresh");
            }
        });
    });
});
</script>
@endsection
@section('content')
<div class="page-body checkout">
    <div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      
        <p style="color:white;font-family: 'Rubik', sans-serif; font-weight: 600; font-size: 30px;">
          <span style="color: #FF9F1C; font-family: 'Rubik', sans-serif; font-weight: bold;"> | </span>
          CHECKOUT <span style="font-weight: 100;"></span>
        </p>
      
    </div>
    <div class="container container-2">
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
      <div class="card mb-3">
        <div class="card-header">
          <h5>Billing Details</h5>
        </div>
        <form action="{{route('ch.invoice')}}" method="POST">
          @csrf
          <input type="number" name="id" value="{{$course->product->id}}" hidden>
        <div class="card-body">
          <div class="row">
            <div class="col-lg-6 col-sm-12">
                <div class="row">
                  <div class="form-group col-sm-12">
                    <label for="inputEmail4">Nama Penerima</label>
                  <input class="form-control" id="inputEmail4" type="text" name="name" required>
                  </div>
                 
                </div>
                <div class="row">
                  <div class="form-group col-sm-12">
                    <label for="inputEmail5">No Hp penerima</label>
                    <input class="form-control" name="no_hp" type="text" required>
                  </div>
                </div>
                <div class="form-group">
                    <label for="inputAddress5">Alamat Penerima</label>
                    <textarea name="alamat" class="form-control" placeholder="Alamat" required id="" cols="30" rows="3"></textarea>
                  </div>
                <div class="form-group">
                    <label for="inputEmail4">Provinsi</label>
                    <select name="provinci" id="provinci" class="form-control selectpicker" id="search-produk"  data-size="5" data-live-search="true">
                    <option value="{{$provinsi->province_id}}">{{$provinsi->name}}</option>
                      
                    </select>
                </div>
                <div class="form-group">
                    <label for="inputEmail4">Kabupaten</label>
                    <select name="kabupaten" class="form-control selectpicker" id="kabupaten"  data-size="5" data-live-search="true">
                      <option value="{{$city->city_id}}">{{$city->name}}</option>
                    
                    </select>
                </div>
                <div class="form-group">
                  <label for="inputEmail4">Kecamatan</label>
                  <select name="kecamatan" class="form-control selectpicker" id="kecamatan"  data-size="5" data-live-search="true">
                    <option value="{{$kecamatan->subdistrict_id}}">{{$kecamatan->name}}</option>
                  
                  </select>
              </div>
                <div class="form-group">
                    <label for="pos">Kode Pos</label>
                    <input type="number" id="pos" name="kode_pos">
                </div>
            </div>
          <input type="text" value="{{$exspedisi}}" name="exspedisi" hidden>
          <input type="text" value="{{$kupon->kode ?? 'hjk'}}" name="kupon" hidden>
            <div class="col-lg-6 col-sm-12">
              <div class="checkout-details">
                <div class="order-box">
                  <div class="title-box">
                    <div class="checkbox-title">
                      <h4>Product </h4><span>Price</span>
                    </div>
                  </div>
                  <ul class="qty">
                  <li>{{$course->product->name ?? null}} <span>Rp.{{$course->price ?? null}}</span></li>
                @if (!is_null($kupon))
                <li>{{strtoupper($kupon->kode)}} <span>Rp.-{{$kupon->nominal}}</span></li>
                @endif    
                </ul>
                  <ul class="sub-total">
                    <input type="number" name="price" value="{{$course->id}}" hidden>
                    <input type="number" name="kuantiti" value="{{$kuantiti ?? null}}" hidden>
                    
                    <li>kuantiti <span class="count">{{$kuantiti ?? 1}}</span></li>
                  </ul>
                  <ul class="sub-total total">
                    @php
                        if(is_null($kupon)){
                          $nominal = 0;
                        }else{
                          $nominal = $kupon->nominal;
                        }
                    @endphp
                    <li>Total Rp.<input type="number" name="total" value="{{($course->price*$kuantiti)-$nominal ?? null}}" readonly></li>
                  </ul>
                  <div class="animate-chk">
                    <div class="row">
                      <div class="col">
                        <label class="d-block" for="edo-ani1">
                          <div class="form-group">
                          <select name="bank" required class="form-control selectpicker" id="search-produk" required data-size="5" data-live-search="true">
                      
                            @foreach ($bank as $b)
                          <option value="{{$b->id}}">{{$b->name}}</option>
                            @endforeach
                        </select>
                          </div>
                        <br>
                        <div class="row">
                          @for ($i = 0; $i < count($jen); $i++)
                          <div class="col-md-12">
                            <input type="radio" {{$i == 0 ?'checked' : ''}} id="v{{$i}}" name="jenis" value="{{$jen[$i]}}">
                            <label for="v{{$i}}">
                                <div class="col-md-12">{{$jen[$i]}} : Rp.{{$harga[$i]}}</div>
                            </label>
                               
                            
                          </div>
                          @endfor
                        </div>
                        </label>
                        <br>
                        {{-- <label class="d-block" for="edo-ani2">
                          <input class="radio_animated" id="edo-ani2" type="radio" name="rdo-ani" checked="" data-original-title="" title="">PayPal<img class="img-paypal" src="../assets/images/checkout/paypal.png" alt="">
                        </label> --}}
                      </div>
                    </div>
                  </div>
                  <div class="text-right"><button class="btn btn-primary mb-3" type="submit">Beli</button></div>
                </form>
                </div>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection