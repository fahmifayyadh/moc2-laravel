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
    <div class="bs-example">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
          <a href="#" class="navbar-brand">
            <h4 class="nav-item nav-link active" >My Course</h4>
          </a>
            <div class="col-8">
                        <h6 class="nav-item nav-link active" style="color:white" > Progress </h6>
              <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 20%;" aria-valuenow="20"
                aria-valuemin="0" aria-valuemax="100">20%</div>
              </div>
            </div>
          </div>
        </nav>
      </div>
    <div class="content">
        <div class="row d-xl-block d-lg-block d-md-block d-sm-none d-none">
            <div class="sidebar col-md-3 card bg-dark">
                <h5 class="text-center m-2 font-weight-bold">Master Online Comunity</h5>
                <div class="data">
                    <div class="card text-light" style="background-color:#EC3C27">
                    <span class="pl-2 m-2">BAB: pertama
                    </span>
                    </div>
            </div>
            <div class="data ml-5">
                <a href="#" class="">
                        <div class="card bg-warning text-light">
                        <span class="pl-2 m-2">course awal <i class="fas fa-eye"></i></span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-3"></div>
            <div class="col-xl-9 col-lg-9 col-sm-12 col-md-9 col-12">
                <div class="container">
                <h4 class="pt-2">subcourse name</h4>
                    <div class="content-data">
         ini isi

                  <!-- example -->
                       <!-- end example -->
                    </div>
                </div>

                {{-- //versi web --}}
                <div class="d-xl-block d-lg-block d-md-block d-sm-none d-none">
                    <nav class="navbar navbar-dark bg-white navbar-expand fixed-bottom" style="margin-left:30%; margin-bottom: 0px;">
                        <ul class="navbar-nav nav-justified w-60">
                            <li class="nav-item float-right">
                                <div class="nav-link">
                                    <button class="btn btn-secondary"><< </button>
                                    </div>
                            </li>
                            <li class="nav-item float-left">
                                <div class="nav-link">
                                <form action="" method="post">
                                    @csrf
                                   <input type="number" value="1" name="page" hidden>
                                    <button class="btn btn-success" type="submit">Tandai sudah dibaca</button>
                                </form>
                                </div>
                            </li>
                            <li class="nav-item float-right">
                                <a href="" class="nav-link">
                                    <button class="btn btn-primary"> >> </button>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>

                {{-- Versi Mobile --}}
                <div class="d-xl-none d-lg-none d-md-none d-sm-block d-block">
                    <nav class="navbar navbar-dark bg-white navbar-expand fixed-bottom" style="margin-bottom: 0px;">
                        <ul class="navbar-nav nav-justified w-60">
                            <li class="nav-item float-right">
                                <div class="nav-link">
                                    <button class="btn btn-secondary"><< </button>
                                    </div>
                            </li>
                            <li class="nav-item float-left">
                                <div class="nav-link">
                                <form action="" method="post">
                                    @csrf
                                   <input type="number" value="1" name="page" hidden>
                                    <button class="btn btn-success" type="submit">Tandai sudah dibaca</button>
                                </form>
                                </div>
                            </li>
                            <li class="nav-item float-right">
                                <a href="" class="nav-link">
                                    <button class="btn btn-primary"> >> </button>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>

            </div>
        </div>
        <div class="row d-xl-none d-lg-none d-sm-block d-md-none d-block col-xl-9 col-lg-9 col-sm-12 col-md-9 col-12">
            <div class="sidebar col-md-3 card">
                <h5 class="text-center m-2 font-weight-bold">Master Online Comunity</h5>
                <div class="data">
                    <div class="card text-light" style="background-color:#EC3C27">
                    <span class="pl-2 m-2">BAB: pertama
                    </span>
                    </div>
            </div>
            <div class="data ml-5">
                <a href="#" class="">
                        <div class="card bg-primary text-light">
                        <span class="pl-2 m-2">course awal <i class="fas fa-eye"></i></span>
                        </div>
                    </a>
                </div>
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
