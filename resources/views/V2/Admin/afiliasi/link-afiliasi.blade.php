@extends('V2.layouts.master')
 <style>
    .container-2 {
      margin-bottom: 10vh;
    }
    .cards {
      background: #252633;
      border-radius: 20px;
    }

    form {
      padding: 0vh 0vh 0vh 5vh;
    }

    .form-group .label-1 {
      color: white;
      font-family: 'Rubik', sans-serif;
      font-size: 25px;
      font-style: normal;
      font-weight: 700;
      line-height: 30px;
      letter-spacing: 0em;
      text-align: left;
    }

    .col-md-3 a {
      margin-top: 7vh;
      margin-left: 1vh;
      background: #F7941F;
      font-family: 'Rubik', sans-serif;
      color: white;
      font-size: 17px;
      font-style: normal;
      font-weight: 500;
      line-height: 20px;
      letter-spacing: 0em;
      text-align: left;


    }

    .form-group label {
      font-family: 'Rubik', sans-serif;
      color: white;
      font-size: 20px;
      font-style: normal;
      font-weight: 500;
      line-height: 24px;
      letter-spacing: 0em;
      text-align: left;

    }

    .form-group #inputGroupSelect01 {
      color: white;
      font-family: 'Roboto', sans-serif;
      font-size: 20px;
      font-style: normal;
      font-weight: 500;
      line-height: 23px;
      letter-spacing: 0em;
      text-align: left;
      background-color:#4C4E63 ;

    }

    .form-group #exampleInputProdukNama {
      font-family: 'Roboto', sans-serif;
      font-size: 19px;
      font-style: normal;
      font-weight: 400;
      line-height: 22px;
      letter-spacing: 0em;
      text-align: left;
      color: #F7941F;
    }

    .col-md-6 a {
      background: #0CC134;
      font-family: 'Rubik', sans-serif;
      font-size: 19px;
      font-style: normal;
      font-weight: 500;
      line-height: 23px;
      letter-spacing: 0em;
      text-align: left;
      margin-top: 0.50vh;
      padding: 1vh 5vh 1vh 5vh;

    }

    .link {
      padding: 5vh;
    }
  </style>
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
                LINK AFILIASI <span style="font-weight: 100;"></span>
              </p>
            </a>
          </div>
     
          <div class="container container-2">
            <div class="cards">

              <div class="container">
                <!-- form -->
                <form class="row g-3 needs-validation" style="margin-top: 3rem;" novalidate>
                  <div class="col-md-9" style="display: flex;">
                    <div class="form-group" style="width: 100%;">
                      <label class="label-1" for="inputGroupSelect01">Options</label>
                      <select class="form-select" id="inputGroupSelect01">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                      </select>
                    </div>

                  </div>
                  <div class="col-md-3">
                    <div class="buton">
                      <a href="" class="btn btn-warning">Generate</a>
                    </div>
                  </div>
                </form>

                <!-- ahir form -->
                <!-- link -->
                <div class="link row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Halaman Penjualan / Sales Page</label>
                      <input type="txt" class="form-control" id="exampleInputProdukNama" placeholder="">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="copy" style="margin-top: 6vh; margin-left:1vh ;">
                      <a href="" class="btn btn-primary">copy</a>
                    </div>
                  </div>


                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Product Price</label>
                      <input type="txt" class="form-control" id="exampleInputProdukNama" placeholder="">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="copy" style="margin-top: 6vh; margin-left:1vh ;">
                      <a href="" class="btn btn-primary">copy</a>
                    </div>
                  </div>
                </div>
                <!-- ahir link -->
              </div>



            </div>
          </div>

        </div>
      </div>

@endsection