@extends('layouts.master',['titile' => 'checkout'])
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
  fbq('init', '{{$ag->pixel ?? "2717783195127340"}}');
  fbq('track', 'PageView');
  fbq('track', 'AddToCart');
  </script>
  <noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id={{$ag->pixel ?? '2717783195127340'}}&ev=PageView&noscript=1"
  /></noscript>
  <!-- End Facebook Pixel Code -->
<style>
  .container-fluid{width:80%;}
  @media screen and (max-width: 640px){
    .container-fluid{width:100%;}
   .order-box .qty li span{font-size:12px;}
  }
</style>
@endsection
@section('content')
<div class="page-body checkout" style="margin: 0">
    <div class="container-fluid">
      <div class="page-header">
        <div class="row">
          <div class="col-6">
            <div class="page-header-left">                                   
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid" >
      <div class="card">
        <div class="card-header" style="background-color:#bdbdbd; text-align:center;">
          <div class="row mt-3">
            <div class="col-md-12">
              <div class="card">
                <center>

                  <img style="height:auto;width:300px" src="{{asset(Storage::url('paket/'.$ag->paket->image))}}" class="card-img-top img-fluid" alt="Fopto tidak ditemukan">
                </center>
                <div class="card-body"style="background-color:#fff; border-radius:30px;">
                  <h3 class="card-title">{{$ag->paket->name}}</h3>
                  <p class="card-text">{!!$ag->paket->desc!!}</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <form style="margin-top: -10%" action="{{route('orderSponsor.invoice',$ag->kode)}}" method="POST">
          @csrf
        <div class="card-body">
          <div class="row mt-5">
            <div class="col-lg-6 col-sm-12">
                <div class="row">
                  <div class="form-group col-sm-12">
                    <label for="inputEmail4">Nama</label>
                  <input class="form-control" id="inputEmail4" type="text" name="name" required>
                  </div>     
                </div>
                <div class="row">
                  <div class="form-group col-sm-12">
                    <label for="inputEmail5">Phone</label>
                    <input class="form-control" name="no_hp" type="text" required>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-sm-12">
                    <label for="inputEmail12">Email</label>
                    <input class="form-control" name="email" type="email" required>
                  </div>
                </div>
                <div class="form-group">
                    <label for="inputAddress5">Alamat lengkap</label>
                    <textarea name="alamat" class="form-control" placeholder="Alamat lengkap" required id="" cols="30" rows="3"></textarea>
                  </div>
            </div>
            <div class="col-lg-6 col-sm-12">
              <div class="checkout-details">
                <div class="order-box">
                  <div class="title-box">
                    <div class="checkbox-title">
                      <h4>Produk </h4><span>Harga</span>
                    </div>
                  </div>
                  <ul class="qty">
                    <li>{{$ag->paket->name ?? null}} <span class="harga-paket">Rp.{{number_format($ag->paket->price ?? 0,0,'.','.')}}</span></li>
         
                    </ul>
                  <ul class="sub-total total">
                    <li>Total Rp.<input type="number" name="total" value="{{$ag->paket->price}}" readonly></li>
                    <li>Kode kupon: <input type="text" name="kupon" placeholder="kode Kupon"></li>
                  </ul>
                  <div class="animate-chk">
                    
                  </div>
                  <div class="text-right"><button class="btn btn-success" type="submit">Beli</button></div>
                </form>
                </div>
              </div>
</div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Container-fluid Ends-->
  </div>

@endsection                        
@section('footer')
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

<!-- (Optional) Latest compiled and minified JavaScript translation files -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/i18n/defaults-*.min.js"></script>
@endsection