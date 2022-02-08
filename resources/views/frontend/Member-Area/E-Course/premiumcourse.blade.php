@extends('frontend.layouts.master')
@section('content')
<div class="page-body">
  <div class="container-fluid">
    <div class="page-header">
      <div class="row">
        <div class="col-12">
          <!-- Container-fluid starts-->
          <div class="container">

            <div class="col-sm-12">
              <div class="card">
                <div class="card-body">
                  <div class="invoice">
                    <div style="padding-left: px;">
                      <div>
                        <div>
                          <div class="row">
                            <div class="col-sm-6">
                              <div class="media">
                                <div class="media-left"> </div>
                                <div class="media-body m-l-20">
                                  <h4 class="media-heading">Akses Materi E-Course</h4>
                                </div>
                              </div>
                              <!-- End Info-->
                            </div>
                            <div class="col-sm-6">
                              <div class="text-md-right">
                                <br>
                                <br>
                                <div class="dropdown-basic">
                                  <div class="row justify-content-end">
                                    <div style="padding-left: 10px;">
                                      <!-- <button class="btn btn-info btn-lg" type="button">Tambah Course</button> -->
                                    </div>
                                    <!-- <button class="btn btn-pill btn-info btn-sm" type="button" data-original-title="btn btn-pill btn-info btn-sm" title="">Tambah Course</button> -->
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- End Title-->
                          </div>
                        </div>
                      </div>
                      <hr>
                      <!-- End InvoiceTop-->

                      <!-- Start Invoice Top-->

                      <!-- End Invoice Mid-->
                      <!-- <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                      <li class="breadcrumb-item">Data Tables</li>
                    </ol> -->
                    <!-- Container-fluid starts-->
                    <div class="container-fluid product-wrapper">
                      <div class="product-grid">
                        <div class="feature-products">
                          <div class="row">
                            <div class="col-md-6 products-total">
                              <div class="square-product-setting d-inline-block"><a class="icon-grid grid-layout-view" href="#" data-original-title="" title=""><i data-feather="grid"></i></a></div>
                              <div class="square-product-setting d-inline-block">
                                <a class="icon-grid m-0 list-layout-view" href="#" data-original-title="" title="">
                                  <i data-feather="list"></i></a></div>
                                  <span class="d-none-productlist filter-toggle">
                                    Filters<span class="ml-2"><i class="toggle-data" data-feather="chevron-down"></i></span></span>
                                    <div class="grid-options d-inline-block">
                                    </div>
                                  </div>
                                  <div class="col-md-6 text-right"><span class="f-w-600 m-r-5"></span>
                                    <div class="select2-drpdwn-product select-options d-inline-block">
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-sm-3">
                                    <div class="product-sidebar">
                                      <div class="filter-section">
                                        <div class="card">
                                          <div class="card-header">
                                            <h6 class="mb-0 f-w-600">Filters<span class="pull-right"><i class="fa fa-chevron-down toggle-data"></i></span></h6>
                                          </div>
                                          <div class="left-filter">
                                            <div class="card-body filter-cards-view animate-chk">
                                              <div class="product-filter">
                                                <h6 class="f-w-600">Daftar Materi</h6>
                                                <div class="checkbox-animated mt-0">
                                                  <label class="d-block" for="edo-ani5">
                                                    <input class="radio_animated" id="edo-ani5" type="radio" data-original-title="" title=""  href="">Sosial Media ads
                                                  </label>
                                                  <label class="d-block" for="edo-ani6">
                                                    <input class="radio_animated" id="edo-ani6" type="radio" data-original-title="" title="">Media Promosi
                                                  </label>
                                                  <label class="d-block" for="edo-ani7">
                                                    <input class="radio_animated" id="edo-ani7" type="radio" data-original-title="" title="">E-book Strategi
                                                  </label>
                                                  <label class="d-block" for="edo-ani8">
                                                    <input class="radio_animated" id="edo-ani8" type="radio" data-original-title="" title="">Tutorial
                                                  </label>
                                                  <label class="d-block" for="edo-ani9">
                                                    <input class="radio_animated" id="edo-ani9" type="radio" data-original-title="" title="">Premium Course
                                                  </label>
                                                </div>
                                              </div>

                                            </div>
                                            <div class="col-md-9 col-sm-12">
                                              <form>

                                              </form>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="product-wrapper-grid">
                                  <div class="row">
                                    <div class="col-xl-3 col-sm-6 xl-4">
                                      <div class="card">
                                        <div class="product-box">
                                          <div class="product-img"><img class="img-fluid" src="../assets/images/ecommerce/01.jpg" alt="">
                                            <div class="product-hover">
                                              <ul>

                                                <li>
                                                  <button class="btn" type="button" data-toggle="modal" data-target="#exampleModalCenter"><i class="icon-eye"></i></button>
                                                </li>

                                              </ul>
                                            </div>
                                          </div>

                                          <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
                                            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <div class="product-box row">
                                                    <div class="product-img col-md-6"><img class="img-fluid" src="../assets/images/ecommerce/01.jpg" alt=""></div>
                                                    <div class="product-details col-md-6 text-left">
                                                      <h4>Facebook ads</h4>
                                                      <div class="product-view">
                                                        <h6 class="f-w-600">Keunggulan Facebook Ads</h6>
                                                        <p class="mb-0"></p>
                                                      </div>
                                                      <div class="product-qnty">
                                                        <h6 class="f-w-600"></h6>
                                                        <fieldset>
                                                        </fieldset>
                                                        <div class="addcart-btn">
                                                          <button class="btn btn-primary" type="button">Putar Video</button>
                                                          <button class="btn btn-primary" type="button">Selesai</button>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="product-details">
                                            <h4>Keunggulan Facebook Ads</h4>
                                            <p>Materi</p>

                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-xl-3 col-sm-6 xl-4">
                                      <div class="card">
                                        <div class="product-box">
                                          <div class="product-img">
                                            <img class="img-fluid" src="../assets/images/ecommerce/02.jpg" alt="">
                                            <div class="product-hover">
                                              <ul>

                                                <li>
                                                  <button class="btn" type="button" data-toggle="modal" data-target="#exampleModalCenter1"><i class="icon-eye"></i></button>
                                                </li>

                                              </ul>
                                            </div>
                                          </div>
                                          <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter1" aria-hidden="true">
                                            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <div class="product-box row">
                                                    <div class="product-img col-md-6"><img class="img-fluid" src="../assets/images/ecommerce/02.jpg" alt=""></div>
                                                    <div class="product-details col-md-6 text-left">
                                                      <h4>Facebook ads Policy</h4>
                                                      <div class="product-view">
                                                        <h6 class="f-w-600">Details</h6>
                                                        <p class="mb-0"></p>
                                                      </div>
                                                      <div class="product-qnty">
                                                        <h6 class="f-w-600"></h6>
                                                        <fieldset>
                                                        </fieldset>
                                                        <div class="addcart-btn">
                                                          <button class="btn btn-primary" type="button">Putar Video</button>
                                                          <button class="btn btn-primary" type="button">Selesai</button>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="product-details">
                                            <h4>Facebook ads Policy</h4>
                                            <p></p>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-xl-3 col-sm-6 xl-4">
                                      <div class="card">
                                        <div class="product-box">
                                          <div class="product-img"><img class="img-fluid" src="../assets/images/ecommerce/03.jpg" alt="">
                                            <div class="product-hover">
                                              <ul>

                                                <li>
                                                  <button class="btn" type="button" data-toggle="modal" data-target="#exampleModalCenter2"><i class="icon-eye"></i></button>
                                                </li>

                                              </ul>
                                            </div>
                                          </div>
                                          <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter2" aria-hidden="true">
                                            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <div class="product-box row">
                                                    <div class="product-img col-md-6"><img class="img-fluid" src="../assets/images/ecommerce/03.jpg" alt=""></div>
                                                    <div class="product-details col-md-6 text-left">
                                                      <h4>Traffic Temperature</h4>

                                                      <div class="product-view">
                                                        <h6 class="f-w-600">Details</h6>
                                                        <p class="mb-0"></p>
                                                      </div>

                                                      <div class="product-qnty">
                                                        <h6 class="f-w-600"></h6>
                                                        <fieldset>

                                                        </fieldset>
                                                        <div class="addcart-btn">
                                                          <button class="btn btn-primary" type="button">Putar Video</button>
                                                          <button class="btn btn-primary" type="button">Selesai</button>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="product-details">
                                            <h4>Traffic Temperature</h4>
                                            <p></p>

                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-xl-3 col-sm-6 xl-4">
                                      <div class="card">
                                        <div class="product-box">
                                          <div class="product-img">
                                            <img class="img-fluid" src="../assets/images/ecommerce/04.jpg" alt="">
                                            <div class="product-hover">
                                              <ul>

                                                <li>
                                                  <button class="btn" type="button" data-toggle="modal" data-target="#exampleModalCenter3"><i class="icon-eye"></i></button>
                                                </li>

                                              </ul>
                                            </div>
                                          </div>
                                          <div class="modal fade" id="exampleModalCenter3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter3" aria-hidden="true">
                                            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <div class="product-box row">
                                                    <div class="product-img col-md-6"><img class="img-fluid" src="../assets/images/ecommerce/04.jpg" alt=""></div>
                                                    <div class="product-details col-md-6 text-left">
                                                      <h4>Targeting</h4>

                                                      <div class="product-view">
                                                        <h6 class="f-w-600">Details</h6>
                                                        <p class="mb-0"></p>
                                                      </div>

                                                      <div class="product-qnty">
                                                        <h6 class="f-w-600">Action</h6>
                                                        <fieldset>

                                                          <div class="addcart-btn">
                                                            <button class="btn btn-primary" type="button">Putar Video</button>
                                                            <button class="btn btn-primary" type="button">Selesai</button>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×  </span></button>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="product-details">
                                              <h4>Targeting</h4>
                                              <p></p>

                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-xl-3 col-sm-6 xl-4">
                                        <div class="card">
                                          <div class="product-box">
                                            <div class="product-img"><img class="img-fluid" src="../assets/images/ecommerce/02.jpg" alt="">
                                              <div class="product-hover">
                                                <ul>

                                                  <li>
                                                    <button class="btn" type="button" data-toggle="modal" data-target="#exampleModalCenter4"><i class="icon-eye"></i></button>
                                                  </li>

                                                </ul>
                                              </div>
                                            </div>
                                            <div class="modal fade" id="exampleModalCenter4" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter4" aria-hidden="true">
                                              <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                  <div class="modal-header">
                                                    <div class="product-box row">
                                                      <div class="product-img col-md-6"><img class="img-fluid" src="../assets/images/ecommerce/02.jpg" alt=""></div>
                                                      <div class="product-details col-md-6 text-left">
                                                        <h4>Broad Audiences</h4>
                                                        <div class="product-view">
                                                          <h6 class="f-w-600">Details</h6>
                                                          <p class="mb-0"></p>
                                                        </div>
                                                        <div class="product-qnty">
                                                          <h6 class="f-w-600">Action</h6>
                                                          <fieldset>
                                                          </fieldset>
                                                          <div class="addcart-btn">
                                                            <button class="btn btn-primary" type="button">Putar Video</button>
                                                            <button class="btn btn-primary" type="button">Selesai</button>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="product-details">
                                              <h4>Broad Audiences</h4>
                                              <p></p>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-xl-3 col-sm-6 xl-4">
                                        <div class="card">
                                          <div class="product-box">

                                            <div class="product-img"><img class="img-fluid" src="../assets/images/ecommerce/03.jpg" alt="">
                                              <div class="product-hover">
                                                <ul>

                                                  <li>
                                                    <button class="btn" type="button" data-toggle="modal" data-target="#exampleModalCenter5"><i class="icon-eye"></i></button>
                                                  </li>

                                                </ul>
                                              </div>
                                            </div>
                                            <div class="modal fade" id="exampleModalCenter5" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter5" aria-hidden="true">
                                              <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                  <div class="modal-header">
                                                    <div class="product-box row">
                                                      <div class="product-img col-md-6"><img class="img-fluid" src="../assets/images/ecommerce/03.jpg" alt=""></div>
                                                      <div class="product-details col-md-6 text-left">
                                                        <h4>Membuat Creative Ads</h4>
                                                        <div class="product-view">
                                                          <h6 class="f-w-600">Details</h6>
                                                          <p class="mb-0"></p>
                                                        </div>
                                                        <div class="product-qnty">
                                                          <h6 class="f-w-600">Action</h6>
                                                          <fieldset>
                                                          </fieldset>
                                                          <div class="addcart-btn">
                                                            <button class="btn btn-primary" type="button">Putar Video</button>
                                                            <button class="btn btn-primary" type="button">Selesai</button>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×  </span></button>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="product-details">
                                              <h4>Membuat Creative Ads</h4>
                                              <p></p>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- Container-fluid Ends-->
                    </div>
                  </td>
                </tr>
                <tr>
                </tr>
              </tbody>
            </table>
          </div>
          <!-- End Table-->
        </div>
        <!-- End Table-->
      </div>
    </div>
  </div>
</div>
<!-- End InvoiceBot-->
</div>
</div>
<!-- End Invoice-->
<!-- End Invoice Holder-->
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</tr>
</tbody>
</table>
</div>
</div>

</div>
</div>
</div>
</div>
</div>
</div>

@endsection                        <!-- Bookmark Ends-->
</div>
</div>
</div>
</div>
