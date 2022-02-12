@extends('layouts.master')
@section('content')
<div class="page-body">
  <div class="container-fluid">
    <div class="page-header" style="padding-top:0;padding-bottom:10px">
   
    </div>
  </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col call-chat-sidebar col-sm-12">
                <div class="card">
                    <div class="card-body chat-body">
                        <div class="chat-box">
                            <!-- Chat left side Start-->
                            <div class="chat-left-aside">
                                <div class="media"><img class="rounded-circle user-image"
                                        src="{{auth()->user()->foto ? asset(Storage::url('/user/'.auth()->user()->foto)): asset('assets/images/user/1.jpg')}}"
                                        alt="">
                                    <div class="about">
                                        <div class="name f-w-600">{{auth()->user()->name}}</div>
                                        {{-- <div class="status">Status...</div> --}}
                                    </div>
                                </div>
                                <div class="people-list" id="people-list">
                                    <div class="search">
                                        <form class="theme-form">
                                            <div class="form-group">
                                                <form action="{{route('chat.index')}}" method="get">
                                                    <input class="form-control" type="text" name="name"
                                                        placeholder="search name"><i class="fa fa-search"></i>
                                                </form>
                                            </div>
                                        </form>
                                    </div>
                                    <ul class="list">
                                        @foreach ($user as $u)
                                        @if ($u->id != auth()->user()->id)

                                        <li class="clearfix"><img class="rounded-circle user-image"
                                                src="{{$u->foto ? asset(Storage::url('/user/'.$u->foto)): asset('assets/images/user/1.jpg')}}"
                                                alt="">
                                            <div style="{{$u->from_user_count > 0 ? 'background-color: green;': null}}" class="status-circle away"></div>
                                            <div class="about">
                                                <a href="{{route('chat.pesan',$u->id)}}">
                                                    <div style="cursor: pointer" class="name">
                                                        {{Str::limit($u->name,11)}}</div>
                                                </a>
                                                <div class="status text-info">belum terbaca:{{$u->from_user_count}}
                                                </div>
                                            </div>
                                        </li>
                                        @endif
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <!-- Chat left side Ends-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col call-chat-body">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="row chat-box">
                            <!-- Chat right side start-->
                            @if ($chat != null)
                            <div class="col pr-0 chat-right-aside" style="flex: none;max-width:100%">
                                <!-- chat start-->
                                <div class="chat">
                                    <!-- chat-header start-->
                                    <div class="chat-header clearfix"><img class="rounded-circle"
                                            src="{{$us->foto ? asset(Storage::url('/user/'.$us->foto)): asset('assets/images/user/1.jpg')}}"
                                            alt="">
                                        <div class="about">
                                            <div class="name">{{$us->name}}</div>

                                        </div>
                                        <ul class="list-inline float-left float-sm-right chat-menu-icons">

                                        </ul>
                                    </div>
                                    <!-- chat-header end-->
                                    <div class="chat-history chat-msg-box custom-scrollbar">
                                        <ul>


                                            @foreach ($chat as $c)
                                            @if ($c->from_user_id == auth()->user()->id)

                                            <li class="clearfix">
                                                <div class="message other-message pull-right text-right"><img
                                                        style="width: 4em;height:2em;border-radius:50%;"
                                                        class="float-right chat-user-img img-30"
                                                        src="{{auth()->user()->foto ? asset(Storage::url('/user/'.auth()->user()->foto)): asset('assets/images/user/1.jpg')}}"
                                                        alt="">
                                                    <div class="message-data"><span
                                                            class="message-data-time">{{$c->created_at->diffForHumans()}}</span>
                                                    </div>{!!$c->pesan!!}
                                                </div>
                                            </li>
                                            @else
                                            <li>
                                                <div class="message my-message text-left"><img
                                                        style="width: 4em;height:2em;border-radius:50%;"
                                                        class="float-left chat-user-img img-30"
                                                        src="{{$us->foto ? asset(Storage::url('/user/'.$us->foto)): asset('assets/images/user/1.jpg')}}"
                                                        alt="">
                                                    <div class="message-data"><span
                                                            class="message-data-time">{{$c->created_at->diffForHumans()}}</span>
                                                          </div>{!!$c->pesan!!}
                                                        </div>
                                                      </li>
                                                      @endif
                                                      @endforeach
                                                      
                                                    </ul>
                                                  </div>
                                        <!-- end chat-history-->
                                        <div class="chat-message clearfix" style="padding: 10px;">
                                            <div class="row">

                                                <div class="col-xl-12 d-flex">
                                                   
                                                    <form action="{{route('chat.create',$us->id)}}" method="post">
                                                        @csrf
                                                        <div class="input-group text-box">
                                                            <textarea class="form-control input-txt-bx"
                                                                id="message-to-send" name="pesan">
                              </textarea>
                                                            <div class="input-group-append">
                                                                <button class="btn btn-primary"
                                                                    type="submit">SEND</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end chat-message-->
                                        <!-- chat end-->
                                        <!-- Chat right side ends-->
                                    </div>
                                </div>
                            </div>
                            @endif
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
        $(document).ready(function(){
        
                $('.footer').hide();
            
           
        });
    </script>
@endsection