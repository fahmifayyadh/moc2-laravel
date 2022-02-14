<?php

namespace App\Http\Controllers;

use App\Delivery;
use App\Notif;
use App\Transaction;
use App\TransactionCourse;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;

class ManualTransactionController extends Controller
{
    public function __construct()
    {
        $this->fcm = new FcmController;
    }
    public function index()
    {
        Transaction::where([['created_at', '<', Carbon::parse('-72 hours')], ['bukti', '=', null], ['status', 'pembayaran']])->update([
            'status' => 'batal'
        ]);
        $transaksi = Transaction::with(['product' => function($x){
            $x->withTrashed();
        }])->orderByRaw("FIELD(status, \"'pembayaran\", \"proses\", \"selesai\", \"batal\")")->orderBy("created_at", "desc")->paginate(10);
        // return $transaksi; 'selesai','pembayaran','proses','batal','refund' orderByRaw("FIELD(status, \"'pembayaran\", \"proses\", \"selesai\", \"batal\")")
        return view('tests.transaksi.transaksi-produk-fisik', compact('transaksi'));
        
         // V2
        if(auth()->user()->role != 'admin'){
          return view('tests.transaksi.transaksi-produk-fisik',compact(['transaksi']));
        }else{
          return view('V2.Admin.transaksi-produk-fisik',compact(['transaksi']));
        }
    }
    public function filterFisik($fil)
    {
        $transaksi = Transaction::with(['product' => function($x){
            $x->withTrashed();
        }])->where('status', $fil)->get();
        $tr = false;
        // return view('tests.transaksi.transaksi-produk-fisik', compact(['transaksi', 'tr']));

        // V2
        if(auth()->user()->role != 'admin'){
            return view('tests.transaksi.transaksi-produk-fisik', compact(['transaksi', 'tr']));
        }else{
            return view('V2.Admin.transaksi-produk-fisik', compact(['transaksi', 'tr']));
        }
    }
    public function searchFisik(Request $request)
    {
        $search = $request->search;
        $transaksi = Transaction::with(['product' => function($x){
            $x->withTrashed();
        }])->where('kode', 'like', '%' . $search . '%')->orWhereHas('product', function ($query) use ($search) {
            return $query->withTrashed()->Where('name', 'like', '%' . $search . '%');
        })->orWhereHas('user', function ($query) use ($search) {
            return $query->Where('name', 'like', '%' . $search . '%');
        })->get();
        $tr = false;

        //return view('tests.transaksi.transaksi-produk-fisik', compact(['transaksi', 'tr']));

        // V2
        if(auth()->user()->role != 'admin'){
            return view('tests.transaksi.transaksi-produk-fisik', compact(['transaksi', 'tr']));
        }else{
            return view('V2.Admin.transaksi-produk-fisik', compact(['transaksi', 'tr']));
        }
    }
    public function bukti(Request $request, Transaction $transaction)
    {
        if ($request->konfrim_bukti == 'tolak') {
            File::delete(storage_path('app/public/bukti/' . $transaction->bukti));
            $transaction->update([
                'bukti' => null,
            ]);
            $n = Notif::create([
                'user_id' => $transaction->user->id,
                'isi' => 'bukti transfer dengan kode barang #' . $transaction->kode . ' ditolak',
            ]);
            if($transaction->user->app_token != null){
                $this->fcm->sendAll('bukti transfer',$n->isi,null,[$transaction->user->app_token]);
            }
        } else {
            $transaction->update([
                'status' => 'proses',
            ]);
            $n = Notif::create([
                'user_id' => $transaction->user->id,
                'isi' => 'pembelian produk #' . $transaction->kode . ' sedang diproses',
            ]);
            if($transaction->user->app_token != null){
                $this->fcm->sendAll('bukti transfer',$n->isi,null,[$transaction->user->app_token]);
            }
            $details = [
                'judul' => 'Pesanan Diproses',
                'keterangan' => "Pemabayaran anda telah kami terima,mohon untuk menunggu pesanan anda sedang kami proses",
                'nama_barang' =>  $transaction->product()->withTrashed()->first()->name,
                'price' => $transaction->price,
                'kuantiti' => $transaction->kuantiti,
                'username' => $transaction->user->name,

            ];
            Mail::to($transaction->user->email)->send(new \App\Mail\PesananProses($details));
        }
        toastr()->success('pembayaran terverifikasi', 'Berhasil');
        return redirect()->back();
    }
    public function buktiCourse(Request $request, TransactionCourse $transaction)
    {
        if ($request->konfrim_bukti == 'tolak') {
            File::delete(storage_path('app/public/bukti/' . $transaction->bukti));

            TransactionCourse::where('kode', $transaction->kode)->update([
                'bukti' => null,
                'status' => 'batal'
            ]);
            $n = Notif::create([
                'user_id' => $transaction->user->id,
                'isi' => 'pembelian course #' . $transaction->kode . ' bukti ditolak',
            ]);
            if($transaction->user->app_token != null){
                $this->fcm->sendAll('bukti transfer',$n->isi,null,[$transaction->user->app_token]);
            }
        } elseif ($request->konfrim_bukti == 'terima' && TransactionCourse::where('kode', $transaction->kode)->first()->status != 'selesai') {
            $chk = DB::transaction(function () use ($transaction) {
                $chk = $transaction->agent->user ?? null;
                TransactionCourse::where('kode', $transaction->kode)->update([
                    'status' => 'selesai',
                ]);
                $n = Notif::create([
                    'user_id' => $transaction->user->id,
                    'isi' => 'pembelian course #' . $transaction->kode . ' selesai',
                ]);
                if($transaction->user->app_token != null){
                    $this->fcm->sendAll('bukti transfer',$n->isi,null,[$transaction->user->app_token]);
                }
                if ($transaction->paket->is_member) {
                    $transaction->user()->update([
                        'status' => 'active'
                    ]);
                    if ($transaction->user->batas != null) {
                        $transaction->user()->update([
                            'batas' =>  Carbon::parse($transaction->user->batas)->addDays(365),
                        ]);
                    }
                }
                if ($chk != null) {
                    $transaction->agent->user()->update([
                        'point' => $transaction->agent->user->point + $transaction->point_sponsor,
                    ]);
                    $ag = Notif::create([
                        'user_id' => $transaction->agent->user->id,
                        'isi' => 'anda mendapatkan komisi Rp.' . number_format($transaction->commission,0,'.','.').' dari penjualan #'.$transaction->kode,
                    ]);
                    if($transaction->agent->user->app_token != null){
                        $this->fcm->sendAll('penambahan komisi',$ag->isi,null,[$transaction->agent->user->app_token]);
                    }
                    $ag = Notif::create([
                        'user_id' => $transaction->agent->user->id,
                        'isi' => 'anda mendapatkan point dari penjualan ' . $transaction->paket->name .' '. $transaction->point_sponsor,
                    ]);
                    if($transaction->agent->user->app_token != null){
                        $this->fcm->sendAll('penambahan komisi',$ag->isi,null,[$transaction->agent->user->app_token]);
                    }
                } elseif ($transaction->user->sponsor != null) {
                    $spon = User::where('email', $transaction->user->sponsor)->first();
                    $spon->update([
                        'point' => $spon->point + $transaction->point_sponsor,
                    ]);
                    $sp = Notif::create([
                        'user_id' => $spon->id,
                        'isi' => 'anda mendapatkan komisi Rp.' .number_format($transaction->commission,0,'.','.').' dari penjualan #'.$transaction->kode,
                    ]);
                    if($spon->app_token != null){
                        $this->fcm->sendAll('penambahan komisi',$sp->isi,null,[$spon->app_token]);
                    }
                    $sp = Notif::create([
                        'user_id' => $spon->id,
                        'isi' => 'anda mendapatkan point dari penjualan ' . $transaction->paket->name .' '. $transaction->point_sponsor,
                    ]);
                    if($spon->app_token != null){
                        $this->fcm->sendAll('penambahan point',$sp->isi,null,[$spon->app_token]);
                    }
                }
                $transaction->user()->update([
                    'point' => $transaction->user->point + $transaction->point_pembeli,
                ]);
                return $chk;
            });
            $details = [
                'judul' => 'Produk berhasil dibeli',
                'nama_barang' =>  [$transaction->paket->name],
                'price' => $transaction->price,
                'username' => $transaction->user->name,
                'jenis' => 'E-course'
            ];
            $details['keterangan'] = "Selamat anda berhak mendaptkan point senilai " . $transaction->point_pembeli;
            Mail::to($transaction->user->email)->send(new \App\Mail\MenungguPembayaranCourse($details));
            if ($chk != null) {

                $details['keterangan'] = "Selamat anda berhak mendaptkan point sponsor senilai " . $transaction->point_sponsor . " serta komisi senilai " . $transaction->commission;
                $details['username'] = $transaction->agent->user->name;
                Mail::to($transaction->agent->user->email)->send(new \App\Mail\MenungguPembayaranCourse($details));
            } elseif ($transaction->user->sponsor != null) {
                $spon = User::where('email', $transaction->user->sponsor)->first();
                $details['keterangan'] = "Selamat anda berhak mendaptkan point sponsor senilai " . $transaction->point_sponsor . " serta komisi senilai " . $transaction->commission;
                $details['username'] = $spon->name;
                Mail::to($spon->email)->send(new \App\Mail\MenungguPembayaranCourse($details));
            }
        }
        return redirect()->back();
    }
    public function selesai(Transaction $transaction)
    {
        if($transaction->status != 'selesai'){
            
        
        $transaction->update([
            'status' => 'selesai',
        ]);
        $transaction->user()->update([
            'point' => $transaction->user->point + $transaction->point_pembeli,
        ]);
        if ($transaction->user->sponsor != null) {
            $spon = User::where('email', $transaction->user->sponsor)->first();
            $spon->update([
                'point' => $spon->point + $transaction->point_sponsor,
            ]);
            $sp = Notif::create([
                'user_id' => $spon->id,
                'isi' => $transaction->kode.'# point afiliasi dari produk #' . $transaction->product->name . ' selesai dikirim',
            ]);
            Notif::create([
                'user_id' => $spon->id,
                'isi' => $transaction->kode.'# penambahan komisi dari produk #' . $transaction->product->name,
            ]);
            if($spon->app_token != null){
                $this->fcm->sendAll('penambahan komisi',$sp->isi,null,[$spon->app_token]);
            }
        }
        $pr = Notif::create([
            'user_id' => $transaction->user->id,
            'isi' => 'pembelian produk #' . $transaction->product->name . ' selesai',
        ]);
        if($transaction->user->app_token != null){
            $this->fcm->sendAll('pembelian produk',$pr->isi,null,[$transaction->user->app_token]);
        }
    }
        return redirect()->back();
    }
    public function resi(Request $request, Transaction $transaction)
    {
        $transaction->delivery()->update([
            'no_resi' => $request->resi
        ]);
        $rs = Notif::create([
            'user_id' => $transaction->user->id,
            'isi' => $transaction->kode.'# Produk dengan nama #' . $transaction->product->name . ' telah terkirim',
        ]);
        if($transaction->user->app_token != null){
            $this->fcm->sendAll('pengiriman produk',$rs->isi,null,[$transaction->user->app_token]);
        }
        $details = [
            'judul' => 'Pesanan dalam pengiriman',
            'keterangan' => "Selamat pesanan anda sedang menuju lokasi anda dengan <b>No Resi: " . $request->resi . "</b>",
            'nama_barang' =>  $transaction->product()->withTrashed()->first()->name,
            'price' => $transaction->price,
            'kuantiti' => $transaction->kuantiti,
            'username' => $transaction->user->name,
        ];
        Mail::to($transaction->user->email)->send(new \App\Mail\PesananProses($details));
        toastr()->success('Resi berhasil diinput', 'Sukses');
        return redirect()->back();
    }
    public function cancle(Transaction $transaction)
    {
        $transaction->update([
            'status' => 'batal'
        ]);
        $cn = Notif::create([
            'user_id' => $transaction->user->id,
            'isi' => $transaction->kode.'# pembelian produk #' .$transaction->product->name . ' dibatalkan',
        ]);
        if($transaction->user->app_token != null){
            $this->fcm->sendAll('pembatalan pembelian',$cn->isi,null,[$transaction->user->app_token]);
        }
        $details = [
            'judul' => 'Pesanan dibatalkan',
            'keterangan' => "Produk yang akan anda beli telah dibatalkan",
            'nama_barang' =>  $transaction->product()->withTrashed()->first()->name,
            'price' => $transaction->price,
            'kuantiti' => $transaction->kuantiti,
            'username' => $transaction->user->name,
        ];
        Mail::to($transaction->user->email)->send(new \App\Mail\PesananProses($details));
        return redirect()->back();
    }
    public function refund(Transaction $transaction)
    {
        $transaction->update([
            'status' => 'refund'
        ]);
        $rf = Notif::create([
            'user_id' => $transaction->user->id,
            'isi' => $transaction->kode.'# pengembalian uang dengan pembelian produk #' .$transaction->product->name. ' telah kami kirim',
        ]);
        if($transaction->user->app_token != null){
            $this->fcm->sendAll('pengambilan pembelian',$rf->isi,null,[$transaction->user->app_token]);
        }
        $details = [
            'judul' => 'Pengembalian Uang',
            'keterangan' => "Mohon maaf produk yang anda beli sedang tidak ada, untuk itu uang pengembalian telah kami transfer",
            'nama_barang' =>  $transaction->product()->withTrashed()->first()->name,
            'price' => $transaction->price,
            'kuantiti' => $transaction->kuantiti,
            'username' => $transaction->user->name,
        ];
        Mail::to($transaction->user->email)->send(new \App\Mail\PesananProses($details));
        return redirect()->back();
    }
}
