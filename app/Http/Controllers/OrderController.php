<?php

namespace App\Http\Controllers;

use App\Bank;
use App\Course;
use App\Delivery;
use App\Paket;
use App\Transaction;
use App\TransactionCourse;
use App\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function course()
    {
        $transCourse = TransactionCourse::where('user_id',auth()->user()->id)->with('kupon')->with(['paket' => function($z){
            $z->withTrashed();
        }])->orderBy("created_at", "desc")->get();
        $bank = Bank::query();
        $personal = Bank::where('type','personal')->get();
        $cx = true;
        // return view('tests.order.order-status-course', compact(['personal','transCourse','bank','cx']));

        //V2
        return view('V2.Member.myorder-produk-course', compact(['personal','transCourse','bank','cx']));
    }
    public function fisik()
    {
        $transFisik = Transaction::where('user_id',auth()->user()->id)->with('delivery')->with('kupon')->with(['product' => function($x){
            $x->withTrashed();
        }])->orderBy("created_at", "desc")->get();
        $bank = Bank::where('type','personal')->get();
        $cx = true;
        // return view('tests.order.order-status', compact(['transFisik','bank','cx']));

        //V2
        return view('V2.Member.myorder-produk-fisik', compact(['transFisik','bank','cx']));
    }
    public function filter($fil)
    {
        $transFisik = Transaction::where('user_id',auth()->user()->id)->where('status', $fil)->with('delivery')->with('kupon')->with(['product' => function($x){
            $x->withTrashed();
        }])->orderBy("status", "desc")->orderBy("created_at", "desc")->get();
        $bank = Bank::where('type','personal')->get();
        // return view('tests.order.order-status',compact(['transFisik','bank']));

        //V2
        return view('V2.Member.myorder-produk-fisik',compact(['transFisik','bank']));
    }

    public function filterCourse($fil)
    {
        $transCourse =TransactionCourse::where('user_id',auth()->user()->id)->where('status',$fil)->with(['paket' => function($x){
            $x->withTrashed();
        }])->get();
        $bank = Bank::query();
        $personal = Bank::where('type','personal')->get();
        //return view('tests.order.order-status-course', compact(['personal','transCourse','bank']));

        //V2
        return view('V2.Member.myorder-produk-course', compact(['personal','transCourse','bank']));
    }
    public function bukti(Request $request, Transaction $transaction)
    {
        ini_set('upload_max_filesize','30M');
        ini_set('post_max_size','30M');
        $msg = [
            'required' => 'Inputan :attribute wajib diisi',
        ];
        $this->validate($request, [
            'bukti' => 'required|image',

        ], $msg);
        $file = $request->file('bukti');
        $fileName = substr(md5(microtime()), 0, 100) . '.' . $file->getClientOriginalExtension();
        $request->file('bukti')->storeAs('public/bukti/', $fileName);

        $transaction->update([
            'bukti' => $fileName,
        ]);
        return redirect()->back();
    }
    public function buktiCourse(Request $request, TransactionCourse $transaction)
    {
        ini_set('upload_max_filesize','30M');
        ini_set('post_max_size','30M');
        $msg = [
            'required' => 'Inputan :attribute wajib diisi',
        ];
        $this->validate($request, [
            'bukti' => 'required|image',

        ], $msg);
        $file = $request->file('bukti');
        $fileName = substr(md5(microtime()), 0, 100) . '.' . $file->getClientOriginalExtension();
        $request->file('bukti')->storeAs('public/bukti/', $fileName);

        TransactionCourse::where('kode',$transaction->kode)->update([
            'bukti' => $fileName,
            'status' => 'pembayaran'
        ]);
        return redirect()->back();
    }
    public function invoice(Request $request,Transaction $transaction)
    {
        $t = $transaction;
        $d = $transaction->delivery;
        $b = Bank::findOrFail($request->bank);
        //return view('tests.transaksi.invoice', compact('d', 't', 'b'));

         // V2
        return view('V2.Member.detail-pembayaran', compact('d', 't', 'b'));
    }
    public function invoiceCourse(Request $request,TransactionCourse $transaction)
    {
         $namabank = '';
         $invoice='';
         $an = '';
         $y = new \App\Http\Controllers\XenditController;
         $x = $y->invoice($transaction->link_invoice ?? null);
                    foreach ($x['available_banks'] as $v) {
                        if ($v['bank_code'] == $request->bank) {
                            $invoice = $v['bank_account_number'];
                            $namabank = $v['bank_code'];
                            $an = $v['account_holder_name'];
                        }
                    }
                $n = $namabank;
                $b = $invoice;
                $t= $transaction;
                return view('tests.transaksi.invoiceCourse',compact(['an','x','n','b','t']));
    }
}
