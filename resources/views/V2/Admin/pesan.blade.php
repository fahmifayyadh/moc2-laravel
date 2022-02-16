@extends('V2.layouts.master')
@section('title','Pesan')
<style type="text/css">
  .avatar{
    height: 48px;
    width: 48px;
  }
    .hr-sect {
    display: flex;
    flex-basis: 100%; 
    align-items: center;
    color: #9DA7B5;
    margin: 8px 0px;
    font-family: Roboto;
    font-style: normal;
    font-weight: 300;
    font-size: 15px;
    line-height: 18px;

}
.state{
    position: relative;
    display: block;
    background-color: #f8d62b;
    height: 0.65rem;
    width: 0.65rem;
    z-index: 2;
    /* margin-left: 1.35rem; */
    right: 0.8rem;
    /* bottom: -2rem; */
    top: 2.5rem;
    border-radius: 50%;
    border: 0.1rem solid #fff;
}
.cari-logo{
    position: absolute;
    padding: 17px 12px;
}
.chat-input{
    padding: 12px 20px 12px 40px;
    width: 90%;
    color: #79818F;
     border: 1px solid #54545A;
    box-sizing: border-box;
    border-radius: 5px;
    background-color: transparent;
}
.chat-left{
    width: 1066px;
    height: auto;
    color: #FF9F1C;
    text-align: right;
}
.chat-right{
    background: #252633;
    border-radius: 20px;
    width: 1066px;
    height: auto;
    color: #FFFFFF;
    
}
.hr-sect:before,
.hr-sect:after {
    content: "";
    flex-grow: 1;
    background: rgba(0, 0, 0, 0.35);
    height: 1px;
    font-size: 0px;
    line-height: 0px;
    margin: 0px 10px;
}
.text-title{
	margin: 5px 0;
	font-family: Roboto;
	font-style: normal;
	font-weight: bold;
	font-size: 25px;
	line-height: 29px;
	color: #FF9F1C;
}
.text-small{
	font-family: Roboto;
	font-style: normal;
	font-weight: bold;
	font-size: 20px;
	line-height: 29px;
	margin-left: 0;
	color: #FFFFFF;
}
.card.chat-room .members-panel-1,
.card.chat-room .chat-1 {
position: relative;
overflow-y: scroll; }

.card.chat-room .members-panel-1 {
height: 570px; }

.card.chat-room .chat-1 {
height: 495px; }

.card.chat-room .friend-list li {
border-bottom: 1px solid #e0e0e0; }
.card.chat-room .friend-list li:last-of-type {
border-bottom: none; }

.scrollbar-light-blue::-webkit-scrollbar-track {
-webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
background-color: #F5F5F5;
border-radius: 10px; }

.scrollbar-light-blue::-webkit-scrollbar {
width: 12px;
background-color: #F5F5F5; }

.scrollbar-light-blue::-webkit-scrollbar-thumb {
  border-radius: 10px;
  -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
  background-color: #82B1FF; }
.form-outline{
  width: 100%;
}
.form-outline .form-control{
    width: 100%;
    background-color: #1C1D25;
    border: none;
    position: relative;
}

</style>
@section('content')
  <div class="container-fluid mb-3">
  	 <div class="row d-flex ml-3">
  	 	<img src="{{auth()->user()->foto ? asset(Storage::url('/user/'.auth()->user()->foto)): asset('assets/images/user/1.jpg')}}" alt="avatar" class="avatar rounded-circle d-flex align-self-center mr-2 z-depth-1">
                <div class="text-title">
                  <strong>{{auth()->user()->name}}</strong>
                </div>
   </div>
  </div>
<div class="card rare-wind-gradient chat-room" style="background-color: #26262E ">
  <div class="card-body">

    <!-- Grid row -->
    <div class="row px-lg-2 px-2">

      <!-- Grid column List user -->
      <div class="col-md-6 col-xl-4 px-0">
         <form action="{{route('chat.index')}}" method="get">
        <div class="input-group rounded mb-3">
        	 <span class="cari-logo"><i class="fas fa-search"></i></span>
		    <input type="text" class="rounded chat-input" placeholder="Cari atau mulai chat baru" aria-label="Search"
		      aria-describedby="search-addon" id="carichat" onkeyup="searchchat()" name="name" />
		    </span>
       </div> 
		    </form>
        <div class="white z-depth-1 px-2 pt-3 pb-0 members-panel-1 scrollbar-light-blue">
          <ul class="list-unstyled friend-list" id="listchat">
          	@foreach ($user as $u)
          		@if ($u->id != auth()->user()->id)
            <li class="active grey lighten-3 p-2">
              <a href="{{route('chat.pesan',$u->id)}}" class="d-flex ">
                <img src="{{$u->foto ? asset(Storage::url('/user/'.$u->foto)): asset('assets/images/user/1.jpg')}}" alt="avatar" class="avatar rounded-circle d-flex align-self-center">
                <div style="{{$u->from_user_count > 0 ? 'background-color: #f8d62b;': null}}" class="state"></div>
                <div class="text-small">
                  <strong>{{$u->name}}</strong>
                 <!--  <p class="last-message text-muted">{{Str::limit($u->name,11)}}</p> -->
                </div>
                @if($u->from_user_count > 0)
                <div class="chat-footer">
                 <!--  <p class="text-smaller text-muted mb-0">Just now</p> -->
                  <span class=" badge badge-danger float-right">{{$u->from_user_count}}</span>
                </div>
                @endif
              </a>
            </li>
            @endif
            @endforeach
          </ul>
        </div>

      </div>
      <!-- Grid column -->

      <!-- Grid column list chat -->
      <div class="col-md-6 col-xl-8 pl-md-3 px-lg-auto px-0">
        @if ($chat == null)
        <div class="chat-message mt-5">
          <h3 class="center" style="text-align: center;">Select a chat or start a new conversation</h3>
        </div>
        @else
        <div class="chat-message">
          <ul class="list-unstyled chat-1 scrollbar-light-blue">
             <span class="hr-sect"><h5>PESAN MASUK</h5></span>
          	@foreach ($chat as $c)
          	  @if ($c->from_user_id == auth()->user()->id)
            <li class="d-flex justify-content mb-4">
              <img src="{{auth()->user()->foto ? asset(Storage::url('/user/'.auth()->user()->foto)): asset('assets/images/user/1.jpg')}}" alt="avatar" class="avatar rounded-circle mr-2 ml-lg-3 ml-0 z-depth-1">
              <div class="chat-body chat-rigth p-3 ml-2 z-depth-1">
                <div class="header" >
                  
                  <strong class="primary-font">{{auth()->user()->name}}</strong>
                  <small class="pull-right text-muted"><i class="far fa-clock"></i> {{$c->created_at->diffForHumans()}}</small>
                </div>
                
                <p class="mb-0" >
                 {!!$c->pesan!!}
                </p>
              </div>
            </li>
            @else
            <li class="d-flex justify-content-between mb-4">
              <div class="chat-body chat-left p-3 z-depth-1">
                <div class="header">
                  <small class="pull-right text-muted"><i class="far fa-clock"></i> {{$c->created_at->diffForHumans()}}</small>
                  <strong class="primary-font">{{$us->name}}</strong>
                </div>
              
                <p class="mb-0">
                  {!!$c->pesan!!}
                </p>
              </div>
              <img src="{{$us->foto ? asset(Storage::url('/user/'.$us->foto)): asset('assets/images/user/1.jpg')}}" alt="avatar" class="avatar rounded-circle mr-2 ml-lg-3 ml-0 z-depth-1">
            </li>
            @endif
            @endforeach
          </ul>
          <form action="{{route('chat.create',$us->id)}}" method="post">
              @csrf
           <div class="mb-3 row">
            <div class="form-outline">
              <textarea class="form-control" id="textAreaExample3" rows="4" name="pesan"></textarea>
            </div>
          <button type="submit" class="btn btn-send" style="background-color: transparent;border: none;position: absolute;height: 107px;right: 0;"><img src="{{asset('assets/images/send.png')}}" ></button>
          </div>
        </form>
        </div>
        @endif
      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
</div>
<!-- search chat -->
<script>
	function searchchat() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("carichat");
    filter = input.value.toUpperCase();
    ul = document.getElementById("listchat");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}
       $(document).ready(function(){
        $('.footer').hide();
              });
      </script>
<!--  -->
@endsection