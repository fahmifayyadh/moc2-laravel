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

  <!-- Container Fluid-->
  <div class="container-fluid" id="container-wrapper">
                    <div class="row">
                        <div class="col-7">
                            <!-- title KOMISI FISIK -->
                            <div class="d-sm-flex align-items-center justify-content-between">
                                <a href="allproduct.html">
                                    <p
                                        style="color:white;font-family: 'Rubik', sans-serif; font-weight: 600; font-size: 30px;">
                                        <span
                                            style="color: #FF9F1C; font-family: 'Rubik', sans-serif; font-weight: bold;">
                                            | </span>
                                        FACEBOOK PIXEL <span style="font-weight: 100;"></span>
                                    </p>
                                </a>
                            </div>
                            <!-- title KOMISI FISIK-->
                        </div>
                        <div class="col-3">
                            
                        </div>
                        <div class="col-2">
                            
                    </div>
                    <div class="card bg-primary-card mb-5">
                        <div
                            class="card-header py-1 d-flex flex-row align-items-center justify-content-between bg-secondary-card">

                        </div>
                        <div class="table-responsive">
                            <table class="table table-borderless align-items-center table-flush">
                                <thead class="thead bg-secondary-card">
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama Produk</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- loop data -->
                                    @foreach ($courses as $i => $c)
                                
                                    <tr class=" text-custome">
                                        <td>{{$i+1}}</td>
                                        <td>{{$c->name}}</td>
                                        <td><button class="btn btn-warning">Edit</button></td>
                                    </tr>
                                    <!-- <tr class=" text-custome">
                                        <td>2</td>
                                        <td>Master Secrets Facebook & Instagram Ads Course</td>
                                        <td><button class="btn btn-warning">Edit</button></td>
                                    </tr> -->
                                    <!-- loop data -->
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer bg-primary-card"></div>
                    </div>
                </div>
                <!---Container Fluid-->
                
</div>
</div>
</div>
</div>
</div>
@endsection
@section('footer')
    <script>
      @if($t)
      window.onload = function(){
      var button = document.getElementById('clickButton');
    button.click();
      }
      @endif
    </script>
@endsections
