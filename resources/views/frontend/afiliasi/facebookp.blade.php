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
                                  <h4 class="media-heading">Facebook Pixel</h4>
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
                                      <div class="dropdown">
                                        <div class="btn-group mb-0">
                                          <button class="dropbtn btn-info btn-round" type="button">Filter <span><i class="icofont icofont-arrow-down"></i></span></button>
                                          <div class="dropdown-content"><a href="#">Sudah Di Bayar</a><a href="#">Belum di bayar</a>
                                          </div>
                                        </div>
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
                        <h3></h3>
                        <!-- Start Invoice Top-->
                        <br>
                        <!-- End Invoice Mid-->
                        <!-- <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">Data Tables</li>
                      </ol> -->
                    </div>
                    <div class="col-12">
                      <!-- Bookmark Start-->
                      <div class="card">
                        <div class="table-responsive invoice-table" id="table">
                          <table class="table table-bordered table-striped">
                            <tbody>
                              <tr>
                                <td class="Number">
                                  <h5 class="p-2 mb-0">No</h5>
                                </td>
                                <td class="Penjual">
                                  <h5 class="p-2 mb-0">Produk</h5>
                                </td>
                                <td class="Status">
                                  <h5 class="p-2 mb-0">Action</h5>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <label>1</label>
                                </td>
                                <td>
                                  <p class="itemtext digits">Smart weight</p>
                                </td>
                                <td>
                                  <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#afi0">Edit</button>
                                  <div class="modal fade" id="afi0" tabindex="-1" role="dialog" aria-labelledby="afi0" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h4 class="modal-title">Edit</h4>
                                          <br>
                                              <div class="content">
                                                <hr>
                                                <br>
                                                <h5 id="product_title"> Glowing Packages #685</h5>
                                                <form id="facebook-pixel-form" class="ui form">
                                                  <div class="required field">
                                                    <br>
                                                    <label>ID Pixel</label>
                                                    <br>
                                                    <input type="text" id="id_pixel" name="id_pixel" value="" placeholder="masukan ID">
                                                    <input type="hidden" id="product_id" name="product_id" value="685">
                                                    <button class="ui primary button" type="submit">Submit</button>
                                                  </div>
                                                </form>
                                                <div class="alert-holder"></div>
                                                <div class="fb-pixel-links-holder">
                                                  <ol>
                                                    <li>
                                                      <p><b>Event pada Checkout Page</b></p>
                                                      <hr>
                                                      <p>URL Equals</p>
                                                      <div class="ui fluid action input">
                                                        <input id="fb-pixel-link-checkout" name="fb-pixel-link-checkout" type="text" value="https://member.masteronlinecommunity.com/product/glowing-packages/" readonly="">
                                                        <button class="ui teal right labeled icon button copy-btn" data-clipboard-target="#fb-pixel-link-checkout"><i class="copy icon"></i> Copy</button>
                                                      </div>
                                                    </li>
                                                    <br>
                                                    <li>
                                                      <p><b>Event pada saat menekan Beli Sekarang</b></p>
                                                      <hr>
                                                      <p></p>
                                                      <br>
                                                      <div class="ui fluid action input">
                                                        <input id="fb-pixel-link-submit" name="fb-pixel-link-submit" type="text" value="" readonly="">
                                                        <button class="ui teal right labeled icon button copy-btn" data-clipboard-target="#fb-pixel-link-submit"><i class="copy icon"></i> Copy</button>
                                                      </div>
                                                    </li>
                                                    <br>
                                                    <li>
                                                      <p><b>Event pada Redirect Page</b></p>
                                                      <hr>
                                                      <p>URL Contains</p>
                                                      <div class="ui fluid action input">
                                                        <input id="fb-pixel-link-redirect" name="fb-pixel-link-redirect" type="text" value="https://member.masteronlinecommunity.com/checkout/loading/" readonly="">
                                                        <button class="ui teal right labeled icon button copy-btn" data-clipboard-target="#fb-pixel-link-redirect"><i class="copy icon"></i> Copy</button>
                                                      </div>
                                                    </li>
                                                    <br>
                                                    <li>
                                                      <p><b>Event pada Invoice</b></p>
                                                      <hr>
                                                      <p>URL Contains</p>
                                                      <div class="ui fluid action input">
                                                        <input id="fb-pixel-link-invoice" name="fb-pixel-link-invoice" type="text" value="https://member.masteronlinecommunity.com/checkout/thank-you" readonly="">
                                                        <button class="ui teal right labeled icon button copy-btn" data-clipboard-target="#fb-pixel-link-invoice"><i class="copy icon"></i> Copy</button>
                                                      </div>
                                                    </li>

                                                  </ol>

                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        <!-- <div class="modal-footer">
                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                                        <button class="btn btn-primary" type="button">Save changes</button>
                                      </div> -->
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </td>

                          </td>
                        </tr>
                        <tr>
                          <td>
                            <label>2</label>
                          </td>
                          <td>
                            <p class="itemtext digits">Book Of idiocrasy</p>
                          </td>
                          <td>
                            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#afi">Edit</button>
                            <div class="modal fade" id="afi" tabindex="-1" role="dialog" aria-labelledby="afi" aria-hidden="true">
                              <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h4 class="modal-title">Edit</h4>
                                    <br>
                                        <div class="content">
                                          <hr>
                                          <br>
                                          <h5 id="product_title"> Glowing Packages #685</h5>
                                          <form id="facebook-pixel-form" class="ui form">
                                            <div class="required field">
                                              <br>
                                              <label>ID Pixel</label>
                                              <br>
                                              <input type="text" id="id_pixel" name="id_pixel" value="" placeholder="masukan ID">
                                              <input type="hidden" id="product_id" name="product_id" value="685">
                                              <button class="ui primary button" type="submit">Submit</button>
                                            </div>
                                          </form>
                                          <div class="alert-holder"></div>
                                          <div class="fb-pixel-links-holder">
                                            <ol>
                                              <li>
                                                <p><b>Event pada Checkout Page</b></p>
                                                <hr>
                                                <p>URL Equals</p>
                                                <div class="ui fluid action input">
                                                  <input id="fb-pixel-link-checkout" name="fb-pixel-link-checkout" type="text" value="https://member.masteronlinecommunity.com/product/glowing-packages/" readonly="">
                                                  <button class="ui teal right labeled icon button copy-btn" data-clipboard-target="#fb-pixel-link-checkout"><i class="copy icon"></i> Copy</button>
                                                </div>
                                              </li>
                                              <br>
                                              <li>
                                                <p><b>Event pada saat menekan Beli Sekarang</b></p>
                                                <hr>
                                                <p></p>
                                                <br>
                                                <div class="ui fluid action input">
                                                  <input id="fb-pixel-link-submit" name="fb-pixel-link-submit" type="text" value="" readonly="">
                                                  <button class="ui teal right labeled icon button copy-btn" data-clipboard-target="#fb-pixel-link-submit"><i class="copy icon"></i> Copy</button>
                                                </div>
                                              </li>
                                              <br>
                                              <li>
                                                <p><b>Event pada Redirect Page</b></p>
                                                <hr>
                                                <p>URL Contains</p>
                                                <div class="ui fluid action input">
                                                  <input id="fb-pixel-link-redirect" name="fb-pixel-link-redirect" type="text" value="https://member.masteronlinecommunity.com/checkout/loading/" readonly="">
                                                  <button class="ui teal right labeled icon button copy-btn" data-clipboard-target="#fb-pixel-link-redirect"><i class="copy icon"></i> Copy</button>
                                                </div>
                                              </li>
                                              <br>
                                              <li>
                                                <p><b>Event pada Invoice</b></p>
                                                <hr>
                                                <p>URL Contains</p>
                                                <div class="ui fluid action input">
                                                  <input id="fb-pixel-link-invoice" name="fb-pixel-link-invoice" type="text" value="https://member.masteronlinecommunity.com/checkout/thank-you" readonly="">
                                                  <button class="ui teal right labeled icon button copy-btn" data-clipboard-target="#fb-pixel-link-invoice"><i class="copy icon"></i> Copy</button>
                                                </div>
                                              </li>

                                            </ol>

                                          </div>
                                        </div>
                                      </div></div>
                                  <!-- <div class="modal-footer">
                                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                                  <button class="btn btn-primary" type="button">Save changes</button>
                                </div> -->
                              </div>
                            </div>
                          </div>
                        </div>
                      </td>

                    </td>
                  </tr>
                  <tr>
                    <td>
                      <label>3</label>
                    </td>
                    <td>
                      <p class="itemtext digits">H-Shcok Watch</p>
                    </td>
                    <td>
                      <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#afi7">Edit</button>
                      <div class="modal fade" id="afi7" tabindex="-1" role="dialog" aria-labelledby="afi7" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title">Edit</h4>
                              <br>
                                  <div class="content">
                                    <hr>
                                    <br>
                                    <h5 id="product_title"> H-Shock Watch #682</h5>
                                    <form id="facebook-pixel-form" class="ui form">
                                      <div class="required field">
                                        <br>
                                        <label>ID Pixel</label>
                                        <br>
                                        <input type="text" id="id_pixel" name="id_pixel" value="" placeholder="masukan ID">
                                        <input type="hidden" id="product_id" name="product_id" value="685">
                                        <button class="ui primary button" type="submit">Submit</button>
                                      </div>
                                    </form>
                                    <div class="alert-holder"></div>
                                    <div class="fb-pixel-links-holder">
                                      <ol>
                                        <li>
                                          <p><b>Event pada Checkout Page</b></p>
                                          <hr>
                                          <p>URL Equals</p>
                                          <div class="ui fluid action input">
                                            <input id="fb-pixel-link-checkout" name="fb-pixel-link-checkout" type="text" value="https://member.masteronlinecommunity.com/product/glowing-packages/" readonly="">
                                            <button class="ui teal right labeled icon button copy-btn" data-clipboard-target="#fb-pixel-link-checkout"><i class="copy icon"></i> Copy</button>
                                          </div>
                                        </li>
                                        <br>
                                        <li>
                                          <p><b>Event pada saat menekan Beli Sekarang</b></p>
                                          <hr>
                                          <p></p>
                                          <br>
                                          <div class="ui fluid action input">
                                            <input id="fb-pixel-link-submit" name="fb-pixel-link-submit" type="text" value="" readonly="">
                                            <button class="ui teal right labeled icon button copy-btn" data-clipboard-target="#fb-pixel-link-submit"><i class="copy icon"></i> Copy</button>
                                          </div>
                                        </li>
                                        <br>
                                        <li>
                                          <p><b>Event pada Redirect Page</b></p>
                                          <hr>
                                          <p>URL Contains</p>
                                          <div class="ui fluid action input">
                                            <input id="fb-pixel-link-redirect" name="fb-pixel-link-redirect" type="text" value="https://member.masteronlinecommunity.com/checkout/loading/" readonly="">
                                            <button class="ui teal right labeled icon button copy-btn" data-clipboard-target="#fb-pixel-link-redirect"><i class="copy icon"></i> Copy</button>
                                          </div>
                                        </li>
                                        <br>
                                        <li>
                                          <p><b>Event pada Invoice</b></p>
                                          <hr>
                                          <p>URL Contains</p>
                                          <div class="ui fluid action input">
                                            <input id="fb-pixel-link-invoice" name="fb-pixel-link-invoice" type="text" value="https://member.masteronlinecommunity.com/checkout/thank-you" readonly="">
                                            <button class="ui teal right labeled icon button copy-btn" data-clipboard-target="#fb-pixel-link-invoice"><i class="copy icon"></i> Copy</button>
                                          </div>
                                        </li>

                                      </ol>

                                    </div>
                                  </div>
                                </div></div>
                            <!-- <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                            <button class="btn btn-primary" type="button">Save changes</button>
                          </div> -->
                        </div>
                      </div>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <label>4</label>
                </td>
                <td>
                  <p class="itemtext digits">Nebula</p>
                </td>
                <td>
                  <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#afi2">Edit</button>
                  <div class="modal fade" id="afi2" tabindex="-1" role="dialog" aria-labelledby="afi2" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title">Edit</h4>
                          <br>
                              <div class="content">
                                <hr>
                                <br>
                                <h5 id="product_title"> Nebula #681</h5>
                                <form id="facebook-pixel-form" class="ui form">
                                  <div class="required field">
                                    <br>
                                    <label>ID Pixel</label>
                                    <br>
                                    <input type="text" id="id_pixel" name="id_pixel" value="" placeholder="masukan ID">
                                    <input type="hidden" id="product_id" name="product_id" value="685">
                                    <button class="ui primary button" type="submit">Submit</button>
                                  </div>
                                </form>
                                <div class="alert-holder"></div>
                                <div class="fb-pixel-links-holder">
                                  <ol>
                                    <li>
                                      <p><b>Event pada Checkout Page</b></p>
                                      <hr>
                                      <p>URL Equals</p>
                                      <div class="ui fluid action input">
                                        <input id="fb-pixel-link-checkout" name="fb-pixel-link-checkout" type="text" value="https://member.masteronlinecommunity.com/product/glowing-packages/" readonly="">
                                        <button class="ui teal right labeled icon button copy-btn" data-clipboard-target="#fb-pixel-link-checkout"><i class="copy icon"></i> Copy</button>
                                      </div>
                                    </li>
                                    <br>
                                    <li>
                                      <p><b>Event pada saat menekan Beli Sekarang</b></p>
                                      <hr>
                                      <p></p>
                                      <br>
                                      <div class="ui fluid action input">
                                        <input id="fb-pixel-link-submit" name="fb-pixel-link-submit" type="text" value="" readonly="">
                                        <button class="ui teal right labeled icon button copy-btn" data-clipboard-target="#fb-pixel-link-submit"><i class="copy icon"></i> Copy</button>
                                      </div>
                                    </li>
                                    <br>
                                    <li>
                                      <p><b>Event pada Redirect Page</b></p>
                                      <hr>
                                      <p>URL Contains</p>
                                      <div class="ui fluid action input">
                                        <input id="fb-pixel-link-redirect" name="fb-pixel-link-redirect" type="text" value="https://member.masteronlinecommunity.com/checkout/loading/" readonly="">
                                        <button class="ui teal right labeled icon button copy-btn" data-clipboard-target="#fb-pixel-link-redirect"><i class="copy icon"></i> Copy</button>
                                      </div>
                                    </li>
                                    <br>
                                    <li>
                                      <p><b>Event pada Invoice</b></p>
                                      <hr>
                                      <p>URL Contains</p>
                                      <div class="ui fluid action input">
                                        <input id="fb-pixel-link-invoice" name="fb-pixel-link-invoice" type="text" value="https://member.masteronlinecommunity.com/checkout/thank-you" readonly="">
                                        <button class="ui teal right labeled icon button copy-btn" data-clipboard-target="#fb-pixel-link-invoice"><i class="copy icon"></i> Copy</button>
                                      </div>
                                    </li>

                                  </ol>

                                </div>
                              </div>
                            </div></div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <label>5</label>
                      </td>
                      <td>
                        <p class="itemtext digits">Kosmetik</p>
                      </td>
                      <td>
                        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#afi9">Edit</button>
                        <div class="modal fade" id="afi9" tabindex="-1" role="dialog" aria-labelledby="afi9" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                              <h4 class="modal-title">Edit</h4>
                              <br>
                                  <div class="content">
                                    <hr>
                                    <br>
                                    <h5 id="product_title"> Glowing Packages #685</h5>
                                    <form id="facebook-pixel-form" class="ui form">
                                      <div class="required field">
                                        <br>
                                        <label>ID Pixel</label>
                                        <br>
                                        <input type="text" id="id_pixel" name="id_pixel" value="" placeholder="masukan ID">
                                        <input type="hidden" id="product_id" name="product_id" value="685">
                                        <button class="ui primary button" type="submit">Submit</button>
                                      </div>
                                    </form>
                                    <div class="alert-holder"></div>
                                    <div class="fb-pixel-links-holder">
                                      <ol>
                                        <li>
                                          <p><b>Event pada Checkout Page</b></p>
                                          <hr>
                                          <p>URL Equals</p>
                                          <div class="ui fluid action input">
                                            <input id="fb-pixel-link-checkout" name="fb-pixel-link-checkout" type="text" value="https://member.masteronlinecommunity.com/product/glowing-packages/" readonly="">
                                            <button class="ui teal right labeled icon button copy-btn" data-clipboard-target="#fb-pixel-link-checkout"><i class="copy icon"></i> Copy</button>
                                          </div>
                                        </li>
                                        <br>
                                        <li>
                                          <p><b>Event pada saat menekan Beli Sekarang</b></p>
                                          <hr>
                                          <p></p>
                                          <br>
                                          <div class="ui fluid action input">
                                            <input id="fb-pixel-link-submit" name="fb-pixel-link-submit" type="text" value="" readonly="">
                                            <button class="ui teal right labeled icon button copy-btn" data-clipboard-target="#fb-pixel-link-submit"><i class="copy icon"></i> Copy</button>
                                          </div>
                                        </li>
                                        <br>
                                        <li>
                                          <p><b>Event pada Redirect Page</b></p>
                                          <hr>
                                          <p>URL Contains</p>
                                          <div class="ui fluid action input">
                                            <input id="fb-pixel-link-redirect" name="fb-pixel-link-redirect" type="text" value="https://member.masteronlinecommunity.com/checkout/loading/" readonly="">
                                            <button class="ui teal right labeled icon button copy-btn" data-clipboard-target="#fb-pixel-link-redirect"><i class="copy icon"></i> Copy</button>
                                          </div>
                                        </li>
                                        <br>
                                        <li>
                                          <p><b>Event pada Invoice</b></p>
                                          <hr>
                                          <p>URL Contains</p>
                                          <div class="ui fluid action input">
                                            <input id="fb-pixel-link-invoice" name="fb-pixel-link-invoice" type="text" value="https://member.masteronlinecommunity.com/checkout/thank-you" readonly="">
                                            <button class="ui teal right labeled icon button copy-btn" data-clipboard-target="#fb-pixel-link-invoice"><i class="copy icon"></i> Copy</button>
                                          </div>
                                        </li>

                                      </ol>

                                    </div>
                                  </div>
                                </div></div>
                                <!-- <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                                <button class="btn btn-primary" type="button">Save changes</button>
                              </div> -->
                            </div>
                          </div>
                        </div>
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
          <div class="row">
            <div class="col-md-8">
              <ul class="pagination pagination-lg">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#">5</a></li>
                <li class="page-item"><a class="page-link" href="#">6</a></li>
                <li class="page-item"><a class="page-link" href="#">7</a></li>
                <li class="page-item"><a class="page-link" href="#">8</a></li>
                <li class="page-item"><a class="page-link" href="#">9</a></li>
                <li class="page-item"><a class="page-link" href="#">10</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
              </ul>
              <div>
              </div>
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
