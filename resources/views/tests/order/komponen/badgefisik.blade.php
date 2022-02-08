<td>
@if ($tf->status == 'selesai')
<span class="badge badge-pill badge-success" style="color: white;font-size:12px">Selesai</span>
@endif
@if ($tf->status == 'pembayaran' && is_null($tf->bukti))
<span class="badge badge-pill badge-warning" style="color: white;font-size:12px">Menunggu Pembayaran</span>
@elseif(!is_null($tf->bukti) && $tf->status != 'proses' && $tf->status != 'selesai' && $tf->status != 'batal' && $tf->status != 'refund')
<span class="badge badge-pill badge-primary" style="color: white;font-size:12px">Menunggu Konfirmasi Bukti</span>

@endif
@if ($tf->status == 'proses' && is_null($tf->delivery->no_resi))
<span class="badge badge-pill badge-info" style="color: white;font-size:12px">Sedang Diproses</span>
@elseif(!is_null($tf->delivery->no_resi) && $tf->status == 'proses')
<span class="badge badge-pill badge-secondary" style="color: white;font-size:12px">Sedang Dikirim</span>

@endif
@if ($tf->status == 'batal')
<span class="badge badge-pill badge-danger" style="color: white;font-size:12px">Pesanan Ditolak</span>
@endif
@if ($tf->status == 'refund')
<span class="badge badge-pill badge-danger" style="color: white;font-size:12px">Refund:uang telah dikirim</span>
@endif
</td>