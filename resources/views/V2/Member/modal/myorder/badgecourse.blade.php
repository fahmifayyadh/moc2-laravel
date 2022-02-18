<td>
@if ($tc->status == 'selesai')
<span class="badge badge-pill badge-success" style="color: white;font-size:12px">Selesai</span>
@endif
@if ($tc->status == 'pembayaran' && $tc->bukti== null)
<span class="badge badge-pill badge-warning" style="color: white;font-size:12px">Menunggu
        Pembayaran</span>
@elseif($tc->status == 'pembayaran' && $tc->bukti != null)
<span class="badge badge-pill badge-warning" style="color: white;font-size:12px">Menunggu
        Konfirmasi</span>
@endif
@if ($tc->status == 'batal')
<span class="badge badge-pill badge-danger" style="color: white;font-size:12px">Expired</span>
@endif
</td>