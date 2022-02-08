@include('tests.mail.komponen.head')
 <table style="width: 90%; margin: 0 auto; background-color: #fff; border-radius: 8px">
              <tbody>
                  <tr class="text-center">
                      <td style="padding: 30px">
                          <h6 style="font-weight: 600">{{$details['judul']}}</h6>
                          <p>Dear {{$details['username']}},</p>
                          <p>{!!$details['keterangan']!!}</p>
                          @if($details['email'] ?? false)
                          <p><b>Harap login menggunakan E-mail & password berikut:</b></p>
                          <p>{!!$details['email']!!}</p>
                          <p>{!!$details['password']!!}</p>
                          @endif
                          <div style="border: 3px solid #ee831f;
                          padding: 10px;
                          border-radius:10px;">
          
                            <p style="text-align: center;font-size: 120%;line-height: 1.2;"><b>Detail Produk</b></p>
                              
                              <table style="width:100%">
                                <thead>
                                  <tr style="background-color:#C3E6CC; border:1px">
                                    <th scope="col">Produk</th>
                                    <th scope="col">Jenis</th>
                                    <th scope="col">Harga</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    @foreach ($details['nama_barang'] as $i => $item)
                                    <td>{{count($details['nama_barang']) <= 1 ? null : "ke-".($i+1)}} :{{$item}}</td>
                                    @endforeach
                                    <td>{{$details['jenis']}}</td>
                                    <td>{{$details['price']}}</td>
                                  </tr>
                                </tbody>
                              </table>

                          </div><br>
                          <p>Terimakasih Sudah Menjadi Patner Kami.</p>
                          <h5 style="margin-bottom: 0">
                            <br>Master Online Comunity
                          </h5>
                      </td>
                  </tr>
              </tbody>
          </table>
@include('tests.mail.komponen.footer')