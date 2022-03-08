@extends('V2.layouts.master')
@section('content')
                <div class="container-fluid" id="container-wrapper">
                    <!-- caraousel slide -->
                    <div id="carouselExampleIndicators" class="carousel slide mr-3" data-ride="carousel">
                        <ol class="carousel-indicators d-flex justify-content-end mr-5">
                             @forelse ($banner as $ic => $t)
                            <li data-target="#carouselExampleIndicators" data-slide-to="{{$ic}}"></li>
                            @empty
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            @endforelse
                        </ol>
                        <div class="carousel-inner">
                            @forelse ($banner as $i=>$it)
                            <div class="carousel-item @if ($i==0) active @endif">
                                <a @if ($it->link != '#') target="__blank" @endif href="{{$it->link}}">
                                    <img class="d-block w-100 rounded" src="{{asset(Storage::url('banner/'.$it->img))}}" alt="Iklan ye">
                                </a>
                            </div>
                            @empty
                            <div class="carousel-item active">
                                <a href="#">
                                    <img class="d-block w-100 rounded" src="https://images.unsplash.com/photo-1510936111840-65e151ad71bb?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" alt="Iklan ye">
                                </a>
                            </div>
                            @endforelse
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                      </a>
                  </div>
                    <!-- caraousel slide -->
                    <!-- title berita -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-2 mt-4">
                        <a href="#">
                            <p style="color:white;font-family: 'Rubik', sans-serif; font-weight: 600; font-size: 30px;">
                                <span style="color: #FF9F1C; font-family: 'Rubik', sans-serif; font-weight: bold;"> | </span>
                                BERITA PENTING <span style="font-weight: 100;"></span>
                            </p>
                        </a>
                    </div>
                    <!-- title berita-->
                    <!-- berita -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div id="posts" class="card-body accordion" id="accordionExample">
                                    <!-- list berita -->
                                    @foreach ($berita as $i => $b)
                                    <div class="row" id="pagination">
                                        <div class="col-3">
                                            <img src="{{asset(Storage::url('berita/'.$b->img))}}" class="img-fluid" alt="Responsive image">
                                        </div>
                                        <div class="col-9 my-auto text-black">
                                         <div data-toggle="collapse"
                                         data-target="#collapse{{$i+1}}" class="card-header" id="heading{{$i+1}}" style="background-color: #fff;padding: 0"  >
                                         <h2 class="mb-0">
                                            <p class="h4">Berita {{$i+1}}</p>
                                            <a style="color:black" class="btn btn-link" type="button" aria-expanded="true" aria-controls="collapse{{$i+1}}" onclick="mydisplay(document.getElementById('collapse'+{{$i+1}}))">
                                                <h5>{{$b->judul}}</h5>
                                            </a>
                                        </h2>
                                    </div>

                                    <div id="collapse{{$i+1}}" class="collapse" aria-labelledby="heading{{$i+1}}" data-parent="#accordionExample"style="background-color: #fff;padding: 0">
                                        <div style="padding: 10px" class="card-body">
                                            <div id="berr">
                                                {!!$b->isi!!}
                                            </div>
                                        </div>
                                    </div>
                                        <small>dibuat pada: {{$b->created_at}}</small>
                                        </div>
                                    </div>
                                    <hr style="border-top: 1px dashed" class="">
                                    @endforeach

                                    <!-- list berita -->
                                </div>
                                <div class="col-3" style="align-self: center;">
                                    {{ $berita }}
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <!-- dashboard -->
                    @php
                    $paket = 0;
                    $sp='';
                    $paket = $us->transactions_count+$us->transactions_course_count+$us->dummy_count; 

                    if($paket >= 100000){
                    $sp = 'Master Entrepreneur';
                    }elseif($paket >= 10000){
                    $sp = 'Entrepreneur';
                    }elseif($paket >= 1000){
                    $sp = 'Expert';
                    }elseif($paket >= 500){
                    $sp = 'Master Seller';
                    }elseif($paket >= 100){
                    $sp = 'Star Seller';
                    }elseif($paket >= 10){
                    $sp = 'Top Seller';
                    }else{
                    $sp = 'Reseller';
                    }
                    $ts = App\User::where('sponsor',auth()->user()->email)->count();
                    $rm = '';
                    if($ts >= 100000){
                    $rm = 'Director';
                    }elseif($ts >= 10000){
                    $rm = 'Mentor';
                    }elseif($ts >= 1000){
                    $rm = 'Diamond';
                    }elseif($ts >= 500){
                    $rm = 'Gold';
                    }elseif($ts >= 100){
                    $rm = 'Silver';
                    }elseif($ts >= 10){
                    $rm = 'Bronze';
                    }else{
                    $rm = 'Affiliate';
                    }
                    @endphp
                    <div class="d-sm-flex align-items-center justify-content-between mb-2 mt-4">
                        
                            <p>
                                <span style="color: #FF9F1C; font-family: 'Rubik', sans-serif; font-weight: bold;font-weight: 600; font-size: 30px;"> | </span>
                                <span style="color:white;font-family: 'Rubik', sans-serif; font-weight: 600; font-size: 30px;">DASHBOARD</span>  
                                <span class="badge bg-danger text-light">{{$sp}}</span>
                                <span class="badge bg-success text-light">{{$rm}}</span>
                                <span style="font-weight: 100;"></span>
                            </p>
                            <p style="text-indent: 15px;" class="text-light">
                                Tanggal daftar : {{auth()->user()->created_at->format('d-M-Y')}},
                                Masa Aktif User:
                                {{auth()->user()->batas == null ? 'Life Time' : Carbon\Carbon::parse(auth()->user()->batas)->format('d-M-Y')}}
                            </p>
                      
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card bg-primary-card" style="background-color: #252633;">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="card bg-secondary-card" style="background-color: #343546;">
                                                        <a type="button" data-toggle="modal" data-target="#totalomzet">
                                                        <div class="card-body">
                                                            <p style="color:#FF9F1C;font-family: 'Rubik', sans-serif; font-weight: 600; font-size: 20px;">
                                                                <span style="color: #FF9F1C; font-family: 'Rubik', sans-serif; font-weight: bold;"> | </span>
                                                               {{auth()->user()->role == 'admin' ? 'Saldo' : 'Komisi'}}<span style="font-weight: 100;"></span>
                                                            </p>
                                                            <p class="text-center text-light h1">
                                                                 {{number_format($saldo,0,'.','.')}}
                                                            </p>
                                                        </div></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-9">
                                            <!-- data hari ini -->
                                            <div class="row">
                                                <div class="col-12">
                                                    <p style="color:white;font-family: 'Rubik', sans-serif; font-weight: 600; font-size: 20px;">
                                                        <span style="color: #FF9F1C; font-family: 'Rubik', sans-serif; font-weight: bold;"> | </span>
                                                        Data Hari Ini <span style="font-weight: 100;"></span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="card bg-secondary-card" style="background-color: #343546;">
                                                        <div class="card-body ">
                                                            <p class="text-custome">
                                                                Point
                                                            </p>
                                                            <p class="text-center text-light h3">
                                                               {{number_format($leadnow,0,'.','.')}}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="card bg-secondary-card" style="background-color: #343546;">
                                                        <div class="card-body ">
                                                            <p class="text-custome">
                                                                Invitation
                                                            </p>
                                                            <p class="text-center text-light h3">
                                                               {{number_format($salesnow,0,'.','.')}}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="card bg-secondary-card" style="background-color: #343546;">
                                                        <div class="card-body ">
                                                            <p class="text-custome">
                                                               Omzet
                                                            </p>
                                                            <p class="text-center text-light h3">
                                                                {{number_format($omsetnow,0,'.','.')}}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- data bulan ini -->
                                            <div class="row mt-2">
                                                <div class="col-12">
                                                    <p style="color:white;font-family: 'Rubik', sans-serif; font-weight: 600; font-size: 20px;">
                                                        <span style="color: #FF9F1C; font-family: 'Rubik', sans-serif; font-weight: bold;"> | </span>
                                                        Data Bulan Ini <span style="font-weight: 100;"></span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="card bg-secondary-card" style="background-color: #343546;">
                                                        <div class="card-body ">
                                                            <p class="text-custome">
                                                                Point
                                                            </p>
                                                            <p class="text-center text-light h3">
                                                                {{number_format($leadbulan,0,'.','.')}}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="card bg-secondary-card" style="background-color: #343546;">
                                                        <div class="card-body ">
                                                            <p class="text-custome">
                                                                Invitation
                                                            </p>
                                                            <p class="text-center text-light h3">
                                                                {{number_format($salesbulan,0,'.','.')}}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="card bg-secondary-card" style="background-color: #343546;">
                                                        <div class="card-body ">
                                                            <p class="text-custome">
                                                              Omzet
                                                            </p>
                                                            <p class="text-center text-light h3">
                                                               {{number_format($omsetbulan,0,'.','.')}}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-5">
                                        <div class="col-3">
                                            <!-- total omzet -->
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="card bg-secondary-card" style="background-color: #343546;">
                                                        <div class="card-body ">
                                                            <p style="color:#FF9F1C;font-family: 'Rubik', sans-serif; font-weight: 600; font-size: 20px;">
                                                                <span style="color: #FF9F1C; font-family: 'Rubik', sans-serif; font-weight: bold;"> | </span>
                                                               Total Omzet<span style="font-weight: 100;"></span>
                                                            </p>
                                                            <p class="text-center text-light h1">
                                                                {{number_format($sales,0,'.','.')}}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-9">
                                            <!-- data semua -->
                                            <div class="row">
                                                <div class="col-12">
                                                    <p style="color:white;font-family: 'Rubik', sans-serif; font-weight: 600; font-size: 20px;">
                                                        <span style="color: #FF9F1C; font-family: 'Rubik', sans-serif; font-weight: bold;"> | </span>
                                                        Data Semua <span style="font-weight: 100;"></span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="card bg-secondary-card" style="background-color: #343546;">
                                                        <div class="card-body ">
                                                            <p class="text-custome">
                                                                Point
                                                            </p>
                                                            <p class="text-center text-light h3">
                                                               {{number_format($lead,0,'.','.')}}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="card bg-secondary-card" style="background-color: #343546;">
                                                        <div class="card-body ">
                                                            <p class="text-custome">
                                                                Invitation
                                                            </p>
                                                            <p class="text-center text-light h3">
                                                               {{number_format($sales,0,'.','.')}}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="card bg-secondary-card" style="background-color: #343546;">
                                                        <div class="card-body ">
                                                            <p class="text-custome">
                                                               Omzet
                                                            </p>
                                                            <p class="text-center text-light h3">
                                                               {{number_format($omset,0,'.','.')}}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- modal -->
                <!-- Button trigger modal -->
                <!-- Modal -->
                <div class="modal fade" id="totalomzet" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Silahkan pilih</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body text-center">
                               <a href="{{route('komisi.index')}}" ><button class="btn button-custome text-light" style="background-color: #FF9F1C;color:#FFFFFF;">Lihat Komisi Course</button></a> 
                              <a href="{{route('komisiFisik.index')}}" > <button class="btn button-custome text-light" style="background-color: #FF9F1C;color:#FFFFFF;">Lihat Komisi Fisik</button></a> 
                            </div>
                            
                        </div>
                    </div>
                </div>

@endsection
@section('js')
<script >
 function mydisplay(x){
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>
@endsection
