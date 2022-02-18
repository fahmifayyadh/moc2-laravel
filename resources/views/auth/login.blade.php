<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style>
      body {
    margin: 0;
    padding: 0;
    background-image: url('https://masteronlinecommunity.com/wp-content/uploads/2020/09/LP-3-min-scaled.jpg') ;
    /* background-color: #cccccc; */


  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
    height: 100vh;
    /* height: 100%; */
  }
  .logo{
      padding-top: 30px;
    display: block;
    margin-left: auto;
    margin-right: auto;
    /* width: 50%; */
    /* width: 200px; */
    width: auto;
    height: 150px;
  }
  form h3{
      padding-top: 10px;
      padding-bottom: 20px;
  }

  #login .container #login-row #login-column #login-box {
    border-radius: 10px;
    text-align: center;
    margin-top: 20px;
    max-width: 600px;
    height: 400px;
    /* border: 1px solid #9C9C9C; */
    background-color: rgba(109, 107, 107, 0.6);
    color: white;
  }
  #login .container #login-row #login-column #login-box #login-form {
    padding: 20px;
  }
  #login .container #login-row #login-column #login-box #login-form #register-link {
    margin-top: -85px;
  }
      .notes{
        margin-top:40px;
        color:orange;
      }
      .notes p {
        font-style:italic;
        text-align:center;
      }

    </style>
   <title>Login</title>
  </head>
  <body>
    <div id="login">
        <img class="logo" src="https://raw.githubusercontent.com/suainul1/dewisata/main/logo.png" alt="">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="{{route('login')}}" method="post">
                            @csrf
                            <h3 class="text-center text">LOGIN</h3>
                            <div class="form-group">
                                <!-- <label for="username" class="text">Username:</label><br> -->
                                <input id="email" type="email"
                                              class="form-control @error('email') is-invalid @enderror" name="email"
                                              value="{{ old('email') }}" required autocomplete="email" placeholder="Email" autofocus>
                                @error('email')
                                  <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                  </span>
                                @enderror
                            </div>
                            <div class="form-group">
                              <input id="password" type="password"
                                             class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password"
                                             required autocomplete="current-password">

                              @error('password')
                                  <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                            </div>
                            <div class="form-group">
                              <input id="checkbox1" class="form-check-input" type="checkbox" name="remember"
                                              {{ old('remember') ? 'checked' : '' }}>

                                      <label class="form-check-label" for="checkbox1">
                                          {{ __('Remember Me') }}
                                      </label>

                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-warning " value="Login">
                            </div>
                            <div class="form-group">
                              @if (Route::has('password.request'))
                                          <a class="text-light" href="{{ route('password.request') }}">
                                              {{ __('Forgot Your Password?') }}
                                          </a>
                              @endif
                            </div>
                            
                        </form>
                    </div>
                </div>
                <div class="notes">
                  <p>Untuk pengguna smartphone android dan Iphone silakan download aplikasi MOC mobile di playstore/appstore dan login di aplikasi MOC Mobile setelah terdaftar</p>
              </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  </body>
</html>
