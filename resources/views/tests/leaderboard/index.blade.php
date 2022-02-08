@extends('layouts.master',['title' => 'Ledaerboard All User'])
@section('head')
        <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/date-picker.css')}}">
@endsection
@section('content')
<style>
    .shadow{background-color:#e2e2e2;
</style>
<div class="page-body">
    <div class="container-fluid">
      <div class="page-header">
        <div class="row">
          <div class="col-lg-6">
            <h3 style="color:#fff;">Leaderboard</h3>
            
          </div>
        </div>
      </div>
    </div>
{{-- modal --}}
<div class="modal fade" id="filter-leaderboard" tabindex="-1" role="dialog" aria-labelledby="preview-course" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content p-l-10 p-r-10 ">
          <div class="modal-header">
              <h5 class="modal-title">Filter LeaderBoard</h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
          </div>
          <div class="modal-body">
          <form action="{{route('user.filterLeaderboard')}}" method="GET">
            <div class="form-group row">
              <p>Nb: cara Pencarian jika mencari tanggal 20 saja berarti 20-21, jika dari tanggal 23-25 berarti 23-26</p>  
              <input required class="datepicker-here form-control digits" type="text" data-range="true" name="tanggal" data-multiple-dates-separator="/" data-language="en" data-original-title="" title="" data-date-format="yyyy-m-d" >
            </div>
            <div class="form-group row">
                <select class="form-control field" data-type="select" id="inputsize" name="prod">
                  <option value="">all</option>
                <option value="fisik">Product</option>
                <option value="course">E-course</option>
                </select>
            </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-primary" type="submit">Save changes</button>
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
          </div>
        </form>
      </div>
  </div>
</div>
{{-- endModal --}}
    <div class="row mb-3 justify-content-end">
      <div class="col-md-3">
    <div class="btn-showcase">
      <button data-toggle="modal" data-target="#filter-leaderboard" class="btn btn-square btn-warning btn-lg" type="button" title=""><i class="icofont icofont-filter"></i>Filter</button>
    </div>
  </div>
  </div>
    <div class="table-responsive">
    <table class="table">
      <tbody>
        @foreach ($users as $k=>$u)
            
        <tr class="{{$k % 2 == 0 ? 'bg-white' : ''}} shadow">
        <th class="align-middle text-secondary"><h6>{{$k+1}}</h6></th>
          <td>
            <img src="{{$u->foto ? asset(Storage::url('/user/'.$u->foto)): asset('/assets/images/user.jpg')}}" class="img-fluid" style="width: 3em;height:3em;border-radius:50%;" alt="">
          </td>
          @php
            $paket = $u->transactions()->where('status','selesai')->count()+$u->transactionsCourse()->where('status','selesai')->count()+$u->dummy_count; 
            $sp='';
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
            $ts = App\User::where('sponsor',$u->email)->count();
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
            <td class="align-middle text-secondary"><h6 style="display: inline">{{$u->name}}</h6></td>
            <td class="align-middle text-secondary"> <span class="badge badge-primary ml-2">{{$sp}}</span><span class="badge badge-success">{{$rm}}</span></td>
            <td class="align-middle text-secondary"><h6>{{$u->transactions_count + $u->transactions_course_count+$u->dummy_count}} Transaksi</h6></td>
            @if(auth()->user()->role == 'admin')
            <td data-toggle="modal" data-target="#editl{{$u->id}}" class="align-middle text-secondary"><button class="btn btn-sm btn-primary">Edit</button></td>
            @endif
          </tr>
        {{-- modal --}}
<div class="modal fade" id="editl{{$u->id}}" tabindex="-1" role="dialog" aria-labelledby="preview-course" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content p-l-10 p-r-10 ">
          <div class="modal-header">
              <h5 class="modal-title">Edit LeaderBoard</h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
          </div>
          <div class="modal-body">
          <form action="{{route('dummy.store',$u->id)}}" method="POST">
            @csrf
            <div class="form-group row">
                <input class="form-control field" placeholder="jumlah data" value="{{$u->dummy_count}}" type="number" name="jumlah">
            </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-primary" type="submit">Save changes</button>
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
          </div>
        </form>
      </div>
  </div>
</div>
{{-- endModal --}}
        @endforeach
      </tbody>
    </table>
    </div>
    <!-- Container-fluid Ends-->
</div> 
@endsection
@section('footer') 
 <script src="{{asset('/assets/js/datepicker/date-picker/datepicker.js')}}"></script>
    <script src="{{asset('/assets/js/datepicker/date-picker/datepicker.en.js')}}"></script>
    <script src="{{asset('/assets/js/datepicker/date-picker/datepicker.custom.js')}}"></script>

@endsection