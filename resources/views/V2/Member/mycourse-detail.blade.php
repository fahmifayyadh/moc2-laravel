
@section('title',' My Course Detail Membership')
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>MyCourse</title>
    <style> 
    video::-internal-media-controls-download-button {
    display:none;
}

video::-webkit-media-controls-enclosure {
    overflow:hidden;
}

video::-webkit-media-controls-panel {
    width: calc(100% + 30px); /* Adjust as needed */
}
    </style>
</head>

<body>
    <!-- Image and text -->
    <div class="bs-example">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
          <a href="{{route('myCourse.index')}}" class="navbar-brand">
            <h4 class="nav-item nav-link active" >{{$subcourse[0]->babcourse->course->name}}</h4>
          </a>
            <div class="col-8">
                        <h6 class="nav-item nav-link active" style="color:white" > Progress </h6>
              <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: {{floor($prog)}}%;" aria-valuenow="{{floor($prog)}}"
                aria-valuemin="0" aria-valuemax="100">{{floor($prog)}}%</div>
              </div>
            </div>
          </div>
        </nav>
      </div>
    <div class="content">
        <div class="row d-xl-block d-lg-block d-md-block d-sm-none d-none">
            <div class="sidebar col-md-3 card bg-dark">
                <!--<h5 class="text-center m-2 font-weight-bold">Master Online Comunity</h5>-->
                {{$subcourse->links('vendor.pagination.mycourse',compact(['ar','namaCourse','babCourse']))}}
              
            </div>
        </div>
        <div class="row bg-dark">
            <div class="col-xl-3 col-lg-3 col-md-3 bg-dark"></div>
            <div class="col-xl-9 col-lg-9 col-sm-12 col-md-9 col-12" style="padding:2%;">
                <div class="container card" style="background-color:#dee2e6">
                <h4 class="pt-2">{{$subcourse[0]->name}}</h4>
                    <div class="content-data">
                            {!!$subcourse[0]->value!!}    
                       <br>
                       <br>
                       <br>
                       <br>
                       <br>
                  <!-- example -->
                       <!-- end example -->
                    </div>
                </div>

                {{-- //versi web --}}
                <div class="d-xl-block d-lg-block d-md-block d-sm-none d-none">
                    <nav class="navbar navbar-dark bg-dark navbar-expand fixed-bottom" style="margin-left:25%; margin-bottom: 0px;padding:0px;">
                        <ul class="navbar-nav nav-justified w-60">
                           
                            {{$subcourse->links('vendor.pagination.back')}}
                            
                            {{$subcourse->links('vendor.pagination.next')}}
                          
                            <!-- back my course-->
                            <li class="nav-item float-left">
                                <div class="nav-link">
                                    <button class="btn btn-warning text-white" type="submit" style="background-color:#FF9F1C"><a href="{{route('myCourse.index')}}" style="text-decoration: none;color: white">Kembali ke Course</a></button>
                                </div>
                            </li>
                            <li class="nav-item float-right">
                                <div class="nav-link">
                                <form action="{{route('myCourse.sudaDibaca',[$trans,$course->id])}}" method="post">
                                    @csrf
                                   <input type="number" value="{{request()->page ?? 1}}" name="page" hidden>
                                    <button class="btn btn-transparant text-white" type="submit" style="background-color: #60D02B">Tandai sudah dibaca</button>
                                </form>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>

                {{-- Versi Mobile --}}
                <div class="d-xl-none d-lg-none d-md-none d-sm-block d-block">
                    <nav class="navbar navbar-dark bg-white navbar-expand fixed-bottom" style="margin-bottom: 0px;">
                        <ul class="navbar-nav nav-justified w-60" style="margin-left: 12px;">
                            {{-- <li class="nav-item float-right">
                                <div class="nav-link">
                                    <button class="btn btn-secondary"><< </button>
                                    </div>
                            </li> --}}
                            {{$subcourse->links('vendor.pagination.back')}}

                            <li class="nav-item float-left">
                                <div class="nav-link">
                                    <form action="{{route('myCourse.sudaDibaca',[$trans,$course->id])}}" method="post">
                                        @csrf
                                       <input type="number" value="{{request()->page ?? 1}}" name="page" hidden>
                                        <button class="btn btn-success" type="submit">Tandai sudah dibaca</button>
                                    </form>
                                </div>
                            </li>
                            {{$subcourse->links('vendor.pagination.next')}}
                            
                        </ul>
                    </nav>
                </div>

            </div>
        </div>
        <div class="row d-xl-none d-lg-none d-sm-block d-md-none d-block col-xl-9 col-lg-9 col-sm-12 col-md-9 col-12">
            <div class="sidebar col-md-3 card">
                <h5 class="text-center m-2 font-weight-bold">Master Online Comunity</h5>
                {{$subcourse->links('vendor.pagination.mycourse',compact(['ar','namaCourse','babCourse']))}}
                
            </div>
        </div>


        <style>
            .vertical-menu {
                width: 200px;
                height: 150px;
                overflow-y: auto;
            }

            .sidebar {
                position: fixed;
                overflow-x: hidden;
                height: 100%;
                z-index: 2;
            }

            .sidebar-data {
                padding: 20px;
            }

            .data {
                padding-top: 5px;
            }

            a:hover {
                text-decoration: none;
            }

            .content-data {
                width: 100%;
                height: 100%;
            }
        </style>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
            integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
        </script>
        <script>
        //         $(document).ready(function () {
        // $('#berr *').css("width", "100%")

        //         });

            </script>
             <script>
        $(document).ready(function(){
            
             $('.content-data img').addClass("img-fluid")
      $('.content-data video').attr("controlsList", "nodownload");
            

     
        });
    </script>
</body>

</html>
