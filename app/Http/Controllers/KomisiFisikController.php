<?php

namespace App\Http\Controllers;

use App\KomisiFisik;
use App\Notif;
use App\User;
use App\Transaction;
use Illuminate\Http\Request;

class KomisiFisikController extends Controller
{
    public function __construct()
    {
        $this->xendit = new XenditController;
    }
    public function index()
    {
        if (auth()->user()->role == 'member') {
            $transaksi = Transaction::whereHas('user',function($z){
                return $z->where('sponsor',auth()->user()->email);
            })->with(['product' => function($x){
                $x->withTrashed();
            }])->with('komisiFisik')->where('status','selesai')->paginate(10);
            return view('V2.Member.komisiFisik', compact('transaksi'));
        } else {
            $bank = $this->xendit->getBank();
            $transaksi = Transaction::whereHas('user',function($z){
                return $z->where('sponsor', '!=', null);
            })->with(['product' => function($x){
                $x->withTrashed();
            }])->where('status','selesai')->paginate(10);
            //return view('tests.afiliasi.afiliasiFisik', compact(['transaksi','bank']));

            // V2
            return view('V2.Admin.afiliasi.komisi-fisik', compact(['transaksi','bank'])); 
        
        }
    }
    public function batal(Request $request)
    {
        try {
            //code...
            $k = KomisiFisik::create([
                'transaction_id' => $request->trans,
                'no_rekening' => '0',
            'amount' => 0,
            'bank' => 'null',
            'name' => 'null',
            'status' => 'batal'
            ]);
    
                $z = User::where('email',$k->transaction->user->sponsor)->first();
                if($z != null){
                      Notif::create([
                        'user_id' => $z->id,
                        'isi' => 'komisi anda dibatalkan dari penjualan produk #'.$k->transaction->kode,
                    ]);
                }
          
        } catch (\Throwable $th) {
            //throw $th;
            toastr()->error($th->getMessage(), 'error');
            return redirect()->back();
        }
        toastr()->success('sukses membatalkan komisi','success');

        return redirect()->back();
    }
    public function konfrim(Request $request)
    {
        $u = KomisiFisik::findOrFail($request->id_komisi);
        $u->update([
            'status' => 'selesai'
        ]);
        toastr()->success('sukses mengkonfirmasi','success');
        return redirect()->back();
    }
    public function bayar(Request $request)
    {
        $msg = [
            'numeric' => 'Inputan :attribute harus berupa angka',
            'required' => 'Inputan :attribute wajib diisi',
        ];
        $this->validate($request, [
            'no_rekening' => 'required|numeric'
        ], $msg);
        try {
            $ps = Transaction::findOrFail($request->id_transaksi)->commission;
           $k =  KomisiFisik::create([
                'transaction_id' => $request->id_transaksi,
                'no_rekening' => $request->no_rekening,
                'amount' => $ps,
                'bank' => $request->bank,
                'name' => $request->name,
                'status' => 'menunggu'
                ]);
                $z = User::where('email',$k->transaction->user->sponsor)->first();
                 Notif::create([
                        'user_id' => $z->id,
                        'isi' => 'komisi anda telah di transfer Rp.' .number_format($k->transaction->commission,0,'.','.')  .' dari penjualan produk #'.$k->transaction->kode,
                    ]);
            } catch (\Throwable $th) {
                toastr()->error($th->getMessage(), 'error');
                return redirect()->back();
            }
        toastr()->success('berhasil dibayar','success');
                
        return redirect()->back();
    }
}
