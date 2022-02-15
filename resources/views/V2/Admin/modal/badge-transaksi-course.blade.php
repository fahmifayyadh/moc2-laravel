<td>
@if ($t->status == 'selesai')
<span class="badge badge-pill badge-success"
        style="color: white;font-size:12px">Selesai</span>
@elseif($t->status == 'pembayaran' && is_null($t->bukti))
<span class="badge badge-pill badge-warning"
        style="color: white;font-size:12px">Menunggu Pembayaran</span>
@elseif(!is_null($t->bukti) && $t->status == 'pembayaran')
<span class="badge badge-pill badge-secondary"
        style="color: white;font-size:12px">Menunggu Konfirmasi</span>
@elseif($t->status == 'batal')
<span class="badge badge-pill badge-danger"
        style="color: white;font-size:12px">Expired</span>

@endif
</td>
