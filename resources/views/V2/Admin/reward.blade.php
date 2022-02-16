@extends('V2.layouts.master')
@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('/assets/css/date-picker.css')}}">
<style>
    .datepicker{
      z-index: 1100 !important;
    }     
    table {
      border-radius: 5px;
      background: black;
    }

    table thead .th-3 {
      border: none;
      background: #283246;
      font-family: 'Rubik', sans-serif;
      font-size: 25px;
      font-style: normal;
      font-weight: 400;


      color: rgb(182, 182, 182);
    }

    table thead .th-1 {
      background: #283246;
      border-radius: 5px 0px 0px 0px;
      border: none;
      font-family: 'Rubik', sans-serif;
      font-size: 25px;
      font-style: normal;
      font-weight: 400;
      color: rgb(182, 182, 182);

    }

    table thead .th-2 {
      text-align: center;
      border-radius: 0px 5px 0px 0px;
      border: none;
      color: rgb(182, 182, 182);
      background:
        #283246;
      font-family: 'Rubik', sans-serif;
      font-size: 25px;
      font-style: normal;
      font-weight: 400;
    }

    table tbody tr td {
      font-family: 'Roboto', sans-serif;
      font-size: 21px;
      font-style: normal;
      font-weight: 500;
      line-height: 21.61px;
      letter-spacing: 0em;
      text-align: left;
      color: #FF9F1C;

    }

    table tbody tr td img {
      width: 79px;
      height: 79px;
      left: 424px;
      top: 433px;
    }

    table tbody tr td .btn-4 {
      font-size: 17px;
      font-family: 'Rubik', sans-serif;
      font-weight: 500;
      background: #F4F4F4;
      color: rgb(0, 0, 0);
      padding: 2px 20px 2px 20px;
    }

    table tbody tr td .btn-5 {
      font-size: 17px;
      font-family: 'Rubik', sans-serif;
      font-weight: 500;
      background: #283246;
      color: #FF9F1C;
      padding: 2px 20px 2px 20px;

    }

    .container-3 .judul {

      padding-bottom: 5vh;
      margin-bottom: 5vh;
      text-align: center;

    }

    .container-3 .judul a {
      float: right;
      padding: 10px 20px 10px 20px;
      /* top: 302px; */
      color: #ffffff;
      background: #FF9F1C;
      border-radius: 4px;
      font-family: 'Roboto', sans-serif;
      font-size: 22px;
      font-style: normal;
      font-weight: 700;
      line-height: 11px;
      letter-spacing: 0em;
      text-align: center;
      box-shadow: 0px 3px 4px 0px #00000040;
    }

    .container-3 .cards {
      box-shadow: 0px 3px 4px 0px #00000040;
    }

    table tbody tr td .btn-8:hover {
      color: #F86D6D;
    }

    form .gambar-1 img {
      width: 226px;
      height: 226px;
      left: 577px;
      top: 456px;
      margin: 3vh;
    }

    table tbody tr td .btn-7 {
      font-size: 17px;
      font-family: 'Rubik', sans-serif;
      font-weight: 500;
      background: #FF9F1C;

      color: #283246;
      padding: 2px 20px 2px 20px;
    }

    table tbody tr td .btn-8 {
      font-size: 17px;
      font-family: 'Rubik', sans-serif;
      font-weight: 500;
      background: #283246;

      color: #FF9F1C;
      padding: 2px 20px 2px 20px;
    }

    table tbody tr td .btn-8:hover {
      color: #F86D6D;
    }

    .modal-header .modal-title {
      font-family: 'Rubik', sans-serif;
      font-size: 17px;
      font-style: normal;
      font-weight: 500;
      line-height: 20px;
      letter-spacing: 0em;
      text-align: center;
    }
  </style>
@endsection
@section('js')
<script src="{{asset('/assets/js/datepicker/date-picker/datepicker.js')}}"></script>
<script src="{{asset('/assets/js/datepicker/date-picker/datepicker.en.js')}}"></script>
<script src="{{asset('/assets/js/datepicker/date-picker/datepicker.custom.js')}}"></script>
<script>
  $('input.numberformat').keyup(function(event) {
    if(event.which >= 37 && event.which <= 40) return;
    $(this).val(function(index, value) {
      return value
      .replace(/\D/g, "")
      .replace(/\B(?=(\d{3})+(?!\d))/g, ".")
      ;
    });
  });
</script>
@endsection
@section('content')

<style>
  .d-sm-flex a {
    text-decoration: none;
  }
</style>
<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <a href="allproduct.html">
      <p
        style="color:white;font-family: 'Rubik', sans-serif; font-weight: 600; font-size: 30px;list-style: none;">
        <span style="color: #FF9F1C; font-family: 'Rubik', sans-serif; font-weight: bold;"> | </span>
        REWARD <span style="font-weight: 100;"></span>
      </p>
    </a>
  </div>


  <!-- Row -->
  <div class="row" style="margin: 0; padding: 0;">

    <div class="col-12 col-md-12 col-lg-12">
      <div class="container container-3">
        <div class="judul">
          <a href="" type="submit" class="btn btn-5" data-toggle="modal" data-target="#addReward" role="button">Add</a>
        </div>
        <!-- Modal Add Reward -->
        <div class="modal fade" id="addReward" aria-hidden="true"
          aria-labelledby="exampleModalToggleLabel" tabindex="-1">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="border-radius: 20px; background: #F2F2F2;">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalToggleLabel">Add Reward</h5>
              </div>
              <div class="modal-body">
                <!-- form -->
                <form action="{{route('reward.add')}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="mb-3">
                    <input type="text" class="form-control" required type="text" placeholder="Judul" name="judul" id="exampleFormControlInput1"
                      style="font-family: 'Rubik', sans-serif;font-size:17px; color:#FF9F1C; font-weight: 500;"
                      placeholder="">
                  </div>
                  <div class="mb-3">
                    <label class="col-form-label">Choose Thumbnail</label>
                    <input class="form-control" name="image" id="formFileSm" type="file" required>
                  </div>
                  <div class="mb-3">
                    <input required id="datepicker" class="datepicker-here form-control digits" type="text" data-range="true" name="batas" data-multiple-dates-separator="/" data-language="en" data-original-title="" title="" data-date-format="yyyy-mm-dd" placeholder="Jangka Waktu" 
                    style="font-family: 'Rubik', sans-serif;font-size:17px; color:#FF9F1C; font-weight: 500;">
                  </div>
                  <div class="mb-3">
                    <textarea name="desc" class="form-control" id="exampleFormControlTextarea1" required placeholder="Deskripsi" cols="30" rows="10"
                      style="font-family: 'Rubik', sans-serif;font-size:17px; color:#FF9F1C; font-weight: 500;"></textarea>
                  </div>
                  <div class="mb-3">
                    <input class="form-control numberformat" required placeholder="Point" name="harga_point"
                      style="font-family: 'Rubik', sans-serif;font-size:17px; color:#FF9F1C; font-weight: 500;"
                      placeholder="">
                  </div>
                  <div class="buttonn" style="text-align: right;">
                    <div class="col">
                      <button type="submit" class="btn btn-7" style="background: #F86D6D; border-radius: 7px; color: white;">Add</button>
                      <button type="button" class="btn btn-8" data-dismiss="modal" style="background: #283246; border-radius: 7px; color: white;">Cancel</button>
                    </div>
                  </div>
                </form>
                <!-- Form Ahir -->
              </div>
            </div>
          </div>
        </div>
        <!-- End Modal Add Reward -->
        <!-- ---------tabel------------- -->
        <div class="cards">
          <table class="table table-dark" style="background: #252633;">
            <thead>
              <th class="th-1">No</th>
              <th class="th-3">Judul</th>
              <th class="th-3">Foto</th>
              <th class="th-3">Deskripsi</th>
              <th class="th-3">Poin</th>
              <th class="th-3">Jangka Waktu</th>
              <th class="th-3">Action</th>
              <th class="th-2"></th>
            </thead>
            <tbody>
              @foreach ($reward as $i => $r)
              <tr>
                <td>{{ $i+1 }}</td>
                <td>{{ $r->judul }}</td>
                <td>
                  <a href="{{asset(Storage::url('reward/'.$r->image))}}"itemprop="contentUrl" data-size="1600x950"><img src="{{asset(Storage::url('reward/'.$r->image))}}" alt="Image description" style="height:100px ;width: 200px;"></a>
                </td>
                <td style="width: 300px;">{{ $r->desc }}</td>
                <td>{{ number_format($r->harga_point,0,'.','.') }}</td>
                <td>{{ $r->batas }}</td>
                <td style="text-align: center;">
                  <div class="d-flex">
                      <button class="btn btn-4" data-toggle="modal" data-target="#editReward{{ $i }}">Edit</button>
                      <button class="btn btn-5 ml-2" data-toggle="modal" data-target="#detailReward{{ $i }}">Detail</button>
                      @if (!$r->transactionReward()->exists())
                      <button type="button" class="btn btn-danger btn-sm ml-2" data-toggle="modal" data-target="#deleteModal{{$i}}">Delete</button> 
                      @endif    
                  </div>
                </td>
              </tr>
              <!-- Modal Delete -->
              <div class="modal fade" id="deleteModal{{$i}}" tabindex="-1" role="dialog" aria-labelledby="deleteModal" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content" style="border-radius: 20px; background: #F2F2F2;">
                          <div class="modal-header">
                              <h5 class="modal-title">Delete Reward</h5>
                              <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                          </div>
                          <div class="modal-body">
                          <form class="theme-form" action="{{route('reward.delete',$r->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf 
                            @method('delete') 
                            <h5 style="font-family: 'Rubik', sans-serif;font-size:17px; color:#FF9F1C; font-weight: 500;">Apakah anda yakin akan menghapus?</h4>
                              <div class="modal-footer ">
                                <button type="submit" class="btn btn-7" style="background: #F86D6D; border-radius: 7px; color: white;">Delete</button>
                              </form>
                                <button class="btn btn-8" data-dismiss="modal" aria-label="Close" style="background: #283246; border-radius: 7px; color: white;">Cancel</button>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <!-- End Modal Delete -->
              <!-- Modal Edit -->
                <div class="modal fade" id="editReward{{ $i }}" aria-hidden="true"
                  aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content" style="border-radius: 20px; background: #F2F2F2;">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalToggleLabel">Edit Reward</h5>
                      </div>
                      <div class="modal-body">
                        <!-- form -->
                        <form action="{{route('reward.edit',$r->id)}}" method="POST" enctype="multipart/form-data">
                          @csrf  
                          @method('put')
                          <div class="mb-3">
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Title" name="judul" value="{{$r->judul}}" required
                              style="font-family: 'Rubik', sans-serif;font-size:17px; color:#FF9F1C; font-weight: 500;"
                              placeholder="">
                          </div>
                          <div class="mb-3">
                            <label>Choose Thumbnail</label>
                            <input class="form-control form-control-sm" id="formFileSm" type="file" name="image">
                          </div>
                          <div class="mb-3">
                            <input required id="datepicker" value="{{$r->batas}}" class="datepicker-here form-control digits" type="text" data-range="true" name="batas" data-multiple-dates-separator="/" data-language="en" data-original-title="" title="" data-date-format="yyyy-mm-dd" placeholder="Jangka Waktu" 
                            style="font-family: 'Rubik', sans-serif;font-size:17px; color:#FF9F1C; font-weight: 500;">
                          </div>
                          <div class="mb-3">
                            <textarea required name="desc" class="form-control" id="exampleFormControlTextarea1" rows="3"
                              style="font-family: 'Rubik', sans-serif;font-size:17px; color:#FF9F1C; font-weight: 500;">{{$r->desc}}</textarea>
                          </div>
                          <div class="mb-3">
                            <input required class="form-control numberformat" laceholder="Point" name="harga_point" value="{{$r->harga_point}}"
                              style="font-family: 'Rubik', sans-serif;font-size:17px; color:#FF9F1C; font-weight: 500;"
                              placeholder="">
                          </div>
                          <div class="buttonn" style="text-align: right;">
                            <div class="col">
                              <button type="submit" class="btn btn-7" style="background: #F86D6D; border-radius: 7px; color: white;">Edit</button>
                              <button type="button" class="btn btn-8" data-dismiss="modal" style="background: #283246; border-radius: 7px; color: white;">Cancel</button>
                            </div>
                          </div>
                        </form>
                        <!-- Form Ahir -->
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End Modal Edit -->
                <!-- Modal Detail -->
                  <div class="modal fade" id="detailReward{{ $i }}" aria-hidden="true"
                    aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content" style="border-radius: 20px; background: #F2F2F2;">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalToggleLabel">Detail Reward</h5>
                        </div>
                        <div class="modal-body">
                          <!-- form -->
                          <form action="">
                            <div class="gambar-1">
                              <img src="{{asset(Storage::url('/reward/'.$r->image))}}" itemprop="thumbnail" alt="Image description">
                            </div>
                            <div class="mb-3">
                              <label>Judul</label>
                              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Title" name="judul" value="{{$r->judul}}"
                                style="font-family: 'Rubik', sans-serif;font-size:17px; color:#FF9F1C; font-weight: 500;"
                                readonly>
                            </div>
                            <div class="mb-3">
                              <label>Jangka Waktu</label>
                              <input readonly id="datepicker" value="{{$r->batas}}" class="datepicker-here form-control digits" type="text" data-range="true" name="batas" data-multiple-dates-separator="/" data-language="en" data-original-title="" title="" data-date-format="yyyy-mm-dd" placeholder="Jangka Waktu" 
                              style="font-family: 'Rubik', sans-serif;font-size:17px; color:#FF9F1C; font-weight: 500;">
                            </div>
                            <div class="mb-3">
                              <label>Deskripsi</label>
                              <textarea name="desc" class="form-control" id="exampleFormControlTextarea1" rows="3"
                                style="font-family: 'Rubik', sans-serif;font-size:17px; color:#FF9F1C; font-weight: 500;" readonly>{{$r->desc}}</textarea>
                            </div>
                            <div class="mb-3">
                              <label>Point</label>
                              <input type="text" class="form-control" id="exampleFormControlInput1" laceholder="Point" name="harga_point" value="{{$r->harga_point}}"
                                style="font-family: 'Rubik', sans-serif;font-size:17px; color:#FF9F1C; font-weight: 500;"
                                readonly>
                            </div>
                            <div class="buttonn" style="text-align: right;">
                              <div class="col">
                                <button type="button" class="btn btn-8" data-dismiss="modal" style="background: #283246; border-radius: 7px; color: white;">Cancel</button>
                              </div>
                            </div>
                          </form>
                          <!-- Form Ahir -->
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End Modal Detail  -->
              @endforeach
            </tbody>
          </table>
        </div>
        <!-- ---------tabel------------- -->
      </div>
    </div>

  </div>
  <!--Row-->
</div>
@endsection