@include('tests.mail.komponen.head')
<table style="width: 650px; margin: 0 auto; background-color: rgb(242, 244, 250); border-radius: 8px">
                <tbody>
                    <tr class="text-center">
                        <td style="padding: 30px">
                            <h6 style="font-weight: 600">{{$details['judul']}}</h6>
                            <p>Dear {{$details['username']}},</p>
                            <p>{!!$details['keterangan']!!}</p>
                            <div style="border: 3px solid #ee831f;
                            padding: 10px;
                            border-radius: 10px;">
                                <p style="text-align: center;font-size: 120%;line-height: 1.2;"><b>Detail Barang</b></p>
                                <table class="table table-bordered">
                                  <thead>
                                    <tr class="table-warning">
                                      <th scope="col">Produk</th>
                                      <th scope="col">Qty</th>
                                      <th scope="col">Harga</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>{{$details['nama_barang']}}</td>
                                      <td>{{$details['kuantiti']}}</td>
                                      <td>{{$details['price']}}</td>
                                    </tr>
                                  </tbody>
                                </table>
                            </div><br>
                            <p>Terimakasih Sudah Menjadi Patner Kami.</p>
                            <p style="margin-bottom: 0">
                                <br>Master Online Comunity</p>
                        </td>
                    </tr>

                </tbody>
            </table>
@include('tests.mail.komponen.footer')