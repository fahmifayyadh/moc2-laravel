<td>

    @if ($t->status == 'selesai')
    <span class="badge badge-pill badge-success" style="color: white;font-size:12px">Selesai</span>
    @endif
    @if ($t->status == 'pembayaran' && is_null($t->bukti))
    <span class="badge badge-pill badge-warning" style="color: white;font-size:12px">Menunggu Pembayaran</span>
    @elseif(!is_null($t->bukti) && $t->status != 'proses' && $t->status != 'selesai' && $t->status != 'batal' && $t->status != 'refund')
    <span class="badge badge-pill badge-primary" style="color: white;font-size:12px">Menunggu Konfirmasi</span>
    @endif
    @if ($t->status == 'proses' && is_null($t->delivery->no_resi))
    <span class="badge badge-pill badge-info" style="color: white;font-size:12px">Sedang Diproses</span>
    @elseif(!is_null($t->delivery->no_resi) && $t->status != 'selesai')
    <span class="badge badge-pill badge-secondary" style="color: white;font-size:12px">Sedang Dikirim</span>
    
    @endif
    @if ($t->status == 'batal')
    <span class="badge badge-pill badge-danger" style="color: white;font-size:12px">Batal</span>
    @endif
    @if ($t->status == 'refund')
    <span class="badge badge-pill badge-danger" style="color: white;font-size:12px">Refund</span>
    @endif
</td>