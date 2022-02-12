<?php

namespace App\Http\Controllers;

use App\Bank;
use App\Payout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PayoutController extends Controller
{
    public function __construct(){
        $this->xendit = new XenditController; 
    }
    public function index()
    {
        $bank = Bank::where('type','gateway')->get();
        return view('tests.pencairan.index',compact('bank'));
    }
    function riwayat()
    {
        $pay = Payout::get();
        return view('tests.pencairan.riwayat',compact('pay'));
    }
    public function create(Request $request)
    {
        DB::transaction(function() use($request){
            $p = Payout::create([
                'user_id' => auth()->user()->id,
                'amount' => $request->amount,
                'no_rekening' => $request->no_rekening,
                'name' => $request->name,
                'bank' => $request->bank
            ]);
            // $this->xendit->payout($p->id,$p->amount,$p->bank,$p->name,$p->no_rekening,'Pencairan dana atas nama '.$p->name);
        });
            return redirect()->back();
    }
}
