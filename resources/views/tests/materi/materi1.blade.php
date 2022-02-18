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
</head>

<body>
    <!-- Image and text -->
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            {{$subcourse[0]->babcourse->course->name}}
        </a>
        <div class="col-8 row">
            <div class="col-2">
                <p class="text-light">Progres :</p>
            </div>
            <div class="col-8">
                <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: {{floor($prog)}}%;" aria-valuenow="{{floor($prog)}}"
                        aria-valuemin="0" aria-valuemax="100">{{floor($prog)}}%</div>
                </div>
            </div>
        </div>
        
    </nav>
    <div class="content">
        <div class="row">
            <div class="sidebar col-md-3 card">
                <h5 class="text-center m-2 font-weight-bold">Master Online Comunity</h5>

                {{$subcourse->links('vendor.pagination.mycourse',compact(['ar','namaCourse','babCourse']))}}
            </div>
        </div>
        <div class="row">
            <div class="col-3"></div>
            <div class="col-8">
                <div class="content">
                <h4 class="pt-2">{{$subcourse[0]->name}}</h4>
                    <div class="content-data">
         {!!$subcourse[0]->value!!}                        
              
                  <!-- example -->
                       <!-- end example -->
                    </div>
                </div>
                <nav class="navbar navbar-dark bg-white navbar-expand fixed-bottom" style="margin-left: 34%; margin-bottom: 0px;">
                    <ul class="navbar-nav nav-justified w-90">
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
</body>

</html>