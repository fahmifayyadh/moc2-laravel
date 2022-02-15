<?php

namespace App\Http\Controllers;

use App\Bank;
use App\Komisi;
use App\TransactionCourse;
use App\Notif;
use App\User;
use Illuminate\Http\Request;

class KomisiController extends Controller
{
    public function __construct()
    {
        $this->xendit = new XenditController;
    }
    public function index()
    {
        if (auth()->user()->role == 'member') {
            $transactionCourse = TransactionCourse::where(function($xz){
                $xz->whereHas('user',function($z){
                return $z->where('sponsor',auth()->user()->email);
            })->orWhereHas('agent',function($q){
                return $q->where('user_id',auth()->user()->id);
            });
            })->with(['paket' => function($x){
                $x->withTrashed();
            }])->where('status','selesai')->paginate(10);
            return view('V2.Member.komisi', compact('transactionCourse'));
        } else {
            $bank = $this->xendit->getBank();
            $transactionCourse = TransactionCourse::where(function($xz){
                $xz->whereHas('user',function($z){
                return $z->where('sponsor', '!=', null);
            })->orWhere('agent_id', '!=', null);
            })->where('status','selesai')->with(['paket' => function($x){
                $x->withTrashed();
            }])->paginate(10);
            return view('tests.afiliasi.afiliasi', compact(['transactionCourse','bank']));
        }
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
            $ps = TransactionCourse::findOrFail($request->id_transaksi)->commission;
            $k = Komisi::create([
                'transaction_course_id' => $request->id_transaksi,
                'no_rekening' => $request->no_rekening,
                'amount' => $ps,
                'bank' => $request->bank,
                'name' => $request->name,
                'status' => 'menunggu'
                ]);
          
                $z = User::where('email',$k->transactionCourse->user->sponsor)->first();
                 Notif::create([
                        'user_id' => $z->id,
                        'isi' => 'komisi anda telah di transfer Rp.' .number_format($k->transactionCourse->commission,0,'.','.') .' dari penjualan #'.$k->transactionCourse->kode,
                    ]);
            } catch (\Throwable $th) {
                toastr()->error($th->getMessage(), 'error');
                return redirect()->back();
            }
        toastr()->success('berhasil dibayar','success');
                
        return redirect()->back();
    }
    public function batal(Request $request)
    {
        try {
            //code...
            $k = Komisi::create([
                'transaction_course_id' => $request->trans,
                'no_rekening' => '0',
            'amount' => 0,
            'bank' => 'null',
            'name' => 'null',
            'status' => 'batal'
            ]);
            if($k->transactionCourse->user->sponsor != null){
                $z = User::where('email',$k->transactionCourse->user->sponsor)->first();
                if($z != null){
                      Notif::create([
                        'user_id' => $z->id,
                        'isi' => 'komisi anda dibatalkan dari penjualan #'.$k->transactionCourse->kode,
                    ]);
                }
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
        $u = Komisi::findOrFail($request->id_komisi);
        $u->update([
            'status' => 'selesai'
        ]);
        toastr()->success('sukses mengkonfirmasi','success');
        return redirect()->back();
    }
}
