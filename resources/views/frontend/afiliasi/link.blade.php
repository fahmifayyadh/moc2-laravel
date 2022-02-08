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
                                  <h2 class="media-heading">Link Afiliasi</h2>
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
                        <h3></h3>
                        <!-- Start Invoice Top-->
                        <br>
                        <h4 class="ui header">Link Produk</h4>
                        <form id="affiliate-link-generator" class="ui form">
                          <div class="ui fluid action input">
                            <select id="product_id" name="product_id" class="ui fluid dropdown select2-hidden-accessible" data-select2-id="product_id" tabindex="-1" aria-hidden="true">
                              <option value="" data-select2-id="6">Tunggu sebentar... kami sedang mengambil semua data produk</option>
                              <option value="685" data-select2-id="7"> Glowing Packages #685</option>
                              <option value="683" data-select2-id="8"> Acne + Glowing Packages 70 Skin #683</option>
                              <option value="681" data-select2-id="9"> Acne Packages 7 Skin #681</option>
                              <option value="679" data-select2-id="10"> 7GF Serum 30 ml #679</option>
                              <option value="677" data-select2-id="11"> Glass Skin Essence Serum 15 ml #677</option>
                              <option value="675" data-select2-id="12"> Instabright Sunscreen SPF 30 15 gr #675</option>
                              <option value="673" data-select2-id="13"> Acne Sleeping Emulsion 15 gr #673</option>
                              <option value="671" data-select2-id="14"> Acne Care Sleeping Essence 15 gr #671</option>
                              <option value="669" data-select2-id="15"> Acne Care Essence Mousse 60 ml #669</option>
                              <option value="664" data-select2-id="16"> Acne Facial Foam 60 ml #664</option>
                              <option value="663" data-select2-id="17"> Revolution Bright 250ml #663</option>
                              <option value="661" data-select2-id="18"> Revolution Bright 100ml #661</option>
                              <option value="477" data-select2-id="19"> Admin Online Course #477</option>
                              <option value="268" data-select2-id="20"> Platinum Membership #268</option>
                              <option value="389" data-select2-id="21"> MOC Membership #389</option>
                              <option value="362" data-select2-id="22"> Ecourse Hypnowriting secrets #362</option>
                              <option value="272" data-select2-id="23"> Affiliate Buku Master Secrets #272</option>
                              <option value="271" data-select2-id="24"> Buku Master Secrets Facebook &amp;#038; Instagram ads #271</option>
                              <option value="270" data-select2-id="25"> Buku Master Secrets Instagram 4.0 #270</option>
                              <option value="269" data-select2-id="26"> 7 days Private Mentoring #269</option>
                              <option value="32" data-select2-id="27"> Private membership #32</option>
                              <option value="26" data-select2-id="28"> Ecourse Facebook &amp;#038; Instagram Ads #26</option>
                              <option value="16" data-select2-id="29"> premium membership #16</option>
                              <option value="13" data-select2-id="30"> gold membership #13</option>
                            </select><span class="select2 select2-container select2-container--default select2-container--above" dir="ltr" data-select2-id="5" style="width: 100%;">
                              <span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-product_id-container">
                                <button id="affiliate-link-generator-button" class="ui primary button">Generate</button>
                              </div>
                            </form>
                            <div id="affiliate-link-holder">
                              <div class="field">
                                <a href="#" data-toggle="tooltip" title="Link menuju ke halaman landing / sales page">Halaman Penjualan / Sales Page</a>
                                <div class="ui fluid action input">
                                  <input id="aff-link-0" name="aff-link-0" type="text" value="https://member.masteronlinecommunity.com/aff/1/679/" readonly="">
                                  <button class="ui teal right labeled icon button copy-btn" data-clipboard-target="#aff-link-0"><i class="copy icon"></i> Copy</button>
                                </div>
                              </div>
                              <br>
                              <div class="field">
                                <a href="#" data-toggle="tooltip" title="Link menuju ke halaman checkout">Halaman Checkout</a>
                                <div class="ui fluid action input">
                                  <input id="aff-link-1" name="aff-link-1" type="text" value="https://member.masteronlinecommunity.com/aff/1/679/checkout" readonly="">
                                  <button class="ui teal right labeled icon button copy-btn" data-clipboard-target="#aff-link-1"><i class="copy icon"></i> Copy</button>
                                </div>
                              </div>
                            </div>
                            <hr>
                            <br>
                              <form id="aff-link-parameter" class="ui form" data-select2-id="aff-link-parameter" style="display: block;">
                                <br>
                                <div class="two fields">
                                  <div class="field">
                                    <h5 class="ui header">Platform</h5>
                                    <select name="param-platform" id="param-platform" class="select2-filled select2-hidden-accessible" data-select2-id="param-platform" tabindex="-1" aria-hidden="true">
                                      <option value="" data-select2-id="2">--Pilih Platform--</option>
                                      <option value="fb" data-select2-id="36">Facebook
                                      </option>
                                      <option value="ins" data-select2-id="37">Instagram
                                      </option>
                                      <option value="insto" data-select2-id="38">Instagram Story
                                      </option>
                                      <option value="what" data-select2-id="39">whatsapp
                                      </option>
                                      <option value="email" data-select2-id="40">Email
                                      </option>
                                      <option value="line" data-select2-id="41">Line</option>
                                    </select><span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" data-select2-id="1" style="width: 100%;">
                                      <span class="selection">
                                        <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-param-platform-container">
                                          <span class="select2-selection__rendered" id="select2-param-platform-container" role="textbox" aria-readonly="true" title="Instagram Story">Instagram Story</span>
                                          <span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span>
                                          <span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                        </div>
                                        <br>
                                        <div class="field">
                                          <h5 class="ui header">ID</h5>
                                          <input type="text" name="param-id" id="param-id" placeholder="Isikan acak.">
                                        </div>
                                      </div>
                                      <br>
                                      <h5 class="ui header">Kupon</h5>
                                      <div class="field">
                                        <select name="param-coupon" id="param-coupon" class="select2-filled select2-hidden-accessible" data-select2-id="param-coupon" tabindex="-1" aria-hidden="true">
                                          <option value="" data-select2-id="4">--Pilih Kupon--</option>
                                          <option value="PROMOMEMBER">PROMOMEMBER</option>
                                          <option value="PROMONEWNORMAL">PROMONEWNORMAL</option>
                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="3" style="width: 100%;">
                                          <span class="selection">
                                            <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-param-coupon-container">
                                              <span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span>
                                              <span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                            </div>
                                            <center> <button class="btn btn-primary btn-sm" type="submit">Tambahkan parameter</button>
                                            </form>
                                            <br>
                                            <br>
                                            <hr>
                                            <div class="alert alert-info">
                                              <strong>Info!</strong> Parameter akuisisi data berfungsi jika anda ingin mengetahui asal lead atau pembeli anda
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
