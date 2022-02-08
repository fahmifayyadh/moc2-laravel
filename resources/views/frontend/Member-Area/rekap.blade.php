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
                                  <h4 class="media-heading">Dashboard</h4>
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
                      <br>
                      <br>
                      <div class="header">
                      <h5> Data Hari Ini</h5>
                    </div>
                  </div>
                  <br>
                  <!-- Container-fluid starts-->
                </div>
                <div class="container-fluid">
             <div class="row">
               <div class="col-sm-6 col-xl-3 col-lg-6">
                 <div class="card o-hidden">
                   <div class="bg-Dark b-r-4 card-body">
                     <div class="media static-top-widget">
                       <div class="align-self-center text-center"><i data-feather="database"></i></div>
                       <div class="media-body"><span class="m-0">Lead</span>
                         <h4 class="mb-0 counter">6659</h4><i class="icon-bg" data-feather="database"></i>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
               <div class="col-sm-6 col-xl-3 col-lg-6">
                 <div class="card o-hidden">
                   <div class="bg-success b-r-4 card-body">
                     <div class="media static-top-widget">
                       <div class="align-self-center text-center"><i data-feather="shopping-bag"></i></div>
                       <div class="media-body"><span class="m-0">Sales</span>
                         <h4 class="mb-0 counter">9856</h4><i class="icon-bg" data-feather="shopping-bag"></i>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
               <div class="col-sm-6 col-xl-3 col-lg-6">
                 <div class="card o-hidden">
                   <div class="bg-info b-r-4 card-body">
                     <div class="media static-top-widget">
                       <div class="align-self-center text-center"><i data-feather="message-circle"></i></div>
                       <div class="media-body"><span class="m-0">Omset</span>
                         <h4 class="mb-0 counter">893</h4><i class="icon-bg" data-feather="message-circle"></i>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
               <div class="col-sm-6 col-xl-3 col-lg-6">
                 <div class="card o-hidden">
                   <div class="bg-Warning b-r-4 card-body">
                     <div class="media static-top-widget">
                       <div class="align-self-center text-center"><i data-feather="user-plus"></i></div>
                       <div class="media-body"><span class="m-0"> Komisi</span>
                         <h4 class="mb-0 counter">45631</h4><i class="icon-bg" data-feather="user-plus"></i>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
               <brr>
               <div class="header">
               <h5> Data Bulan Ini</h5>
             </div>
             <br>
                <div class="container-fluid">
             <div class="row">
               <div class="col-sm-6 col-xl-3 col-lg-6">
                 <div class="card o-hidden">
                   <div class="bg-dark b-r-4 card-body">
                     <div class="media static-top-widget">
                       <div class="align-self-center text-center"><i data-feather="database"></i></div>
                       <div class="media-body"><span class="m-0">Lead</span>
                         <h4 class="mb-0 counter">6659</h4><i class="icon-bg" data-feather="database"></i>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
               <div class="col-sm-6 col-xl-3 col-lg-6">
                 <div class="card o-hidden">
                   <div class="bg-success b-r-4 card-body">
                     <div class="media static-top-widget">
                       <div class="align-self-center text-center"><i data-feather="shopping-bag"></i></div>
                       <div class="media-body"><span class="m-0">Sales</span>
                         <h4 class="mb-0 counter">9856</h4><i class="icon-bg" data-feather="shopping-bag"></i>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
               <div class="col-sm-6 col-xl-3 col-lg-6">
                 <div class="card o-hidden">
                   <div class="bg-info b-r-4 card-body">
                     <div class="media static-top-widget">
                       <div class="align-self-center text-center"><i data-feather="message-circle"></i></div>
                       <div class="media-body"><span class="m-0">Omset</span>
                         <h4 class="mb-0 counter">893</h4><i class="icon-bg" data-feather="message-circle"></i>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
               <div class="col-sm-6 col-xl-3 col-lg-6">
                 <div class="card o-hidden">
                   <div class="bg-Warning b-r-4 card-body">
                     <div class="media static-top-widget">
                       <div class="align-self-center text-center"><i data-feather="user-plus"></i></div>
                       <div class="media-body"><span class="m-0"> Komisi</span>
                         <h4 class="mb-0 counter">45631</h4><i class="icon-bg" data-feather="user-plus"></i>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
               <br>
               <div class="header">
               <h5> Data Semua</h5>
               <br>
             </div>
             <br>
                <div class="container-fluid">
             <div class="row">
               <div class="col-sm-6 col-xl-3 col-lg-6">
                 <div class="card o-hidden">
                   <div class="bg-dark b-r-4 card-body">
                     <div class="media static-top-widget">
                       <div class="align-self-center text-center"><i data-feather="database"></i></div>
                       <div class="media-body"><span class="m-0">Lead</span>
                         <h4 class="mb-0 counter">6659</h4><i class="icon-bg" data-feather="database"></i>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
               <div class="col-sm-6 col-xl-3 col-lg-6">
                 <div class="card o-hidden">
                   <div class="bg-success b-r-4 card-body">
                     <div class="media static-top-widget">
                       <div class="align-self-center text-center"><i data-feather="shopping-bag"></i></div>
                       <div class="media-body"><span class="m-0">Sales</span>
                         <h4 class="mb-0 counter">9856</h4><i class="icon-bg" data-feather="shopping-bag"></i>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
               <div class="col-sm-6 col-xl-3 col-lg-6">
                 <div class="card o-hidden">
                   <div class="bg-info b-r-4 card-body">
                     <div class="media static-top-widget">
                       <div class="align-self-center text-center"><i data-feather="message-circle"></i></div>
                       <div class="media-body"><span class="m-0">Omset</span>
                         <h4 class="mb-0 counter">893</h4><i class="icon-bg" data-feather="message-circle"></i>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
               <div class="col-sm-6 col-xl-3 col-lg-6">
                 <div class="card o-hidden">
                   <div class="bg-Warning b-r-4 card-body">
                     <div class="media static-top-widget">
                       <div class="align-self-center text-center"><i data-feather="user-plus"></i></div>
                       <div class="media-body"><span class="m-0"> Komisi</span>
                         <h4 class="mb-0 counter">45631</h4><i class="icon-bg" data-feather="user-plus"></i>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
              </form>
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
