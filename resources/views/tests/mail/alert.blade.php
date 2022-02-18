@include('tests.mail.komponen.head')
<table style="width: 650px; margin: 0 auto; background-color: #fff; border-radius: 8px">
    <tbody>
        <tr>
            <td style="padding: 30px">
                <h6 style="font-weight: 600">{{$details['judul']}}</h6>
                <p>Dear {{$details['username']}},</p>
                <p>{{$details['keterangan']}}</p>
                <div style="border: 3px solid #7366ff;
                padding: 10px;
                border-radius: 50px 20px;">

                    <p style="text-align: center;font-size: 120%;line-height: 1.2;">Nama Produk :{{$details['nama_barang']}}</p>
                    <p style="text-align: center;font-size: 120%;line-height: 1.2;">Kuantiti :{{$details['kuantiti']}}</p>
                    <p style="text-align: center;font-size: 120%;line-height: 1.2;">Total Harga :{{$details['price']}}</p>
                    <p style="text-align: center;font-size: 120%;line-height: 1.2;"><b>Bayar Melalui</b></p>
                    <p style="text-align: center;font-size: 120%;line-height: 1.2;">Nama bank: {{$details['nama_bank']}}</p>
                    <p style="text-align: center;font-size: 120%;line-height: 1.2;">A.n : {{$details['nama_pemilik']}}</p>
                    <p style="text-align: center;font-size: 120%;">Nomor Rekening : {{$details['nomor_rekening']}}</p>
                </div>
                <p style="text-align: center"><a href="https://mocmembership.com"
                        style="padding: 10px; background-color: #7366ff; color: #fff; display: inline-block; border-radius: 4px">Kunjungi</a>
                </p>
                {{-- <p>If you have remember your password you can safely ignore his email.</p> --}}
                <p>Terimakasih Sudah Menjadi Patner Kami.</p>
                <p style="margin-bottom: 0">
                    Admin,<br>Master Online Comunity</p>
            </td>
        </tr>
    </tbody>
</table>
@include('tests.mail.komponen.footer')