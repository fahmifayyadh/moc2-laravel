<?php

namespace App\Http\Controllers;

use App\Transaction;
use App\TransactionCourse;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TransactionCourseController extends Controller
{
    public function index()
    {
       TransactionCourse::where([['created_at', '<', Carbon::parse('-72 hours')],['status','pembayaran']])->update([
           'status' => 'batal'
       ]);
        $transaksi = TransactionCourse::with(['paket' => function($z){
            $z->withTrashed();
        }])->orderByRaw("FIELD(status, \"'pembayaran\", \"selesai\", \"batal\")")->orderBy("created_at", "desc")->paginate(10);
        // return $transaksi;
        $tf=true;
        // return view('tests.transaksi.transaksi-produk-course',compact(['tf','transaksi']));

        // V2
        if(auth()->user()->role != 'admin'){
          return view('tests.transaksi.transaksi-produk-course',compact(['tf','transaksi']));
        }else{
          return view('V2.Admin.transaksi',compact(['tf','transaksi']));
        }
    }
    public function filterCourse($fil)
    {
        $transaksi = TransactionCourse::with(['paket' => function($z){
            $z->withTrashed();
        }])->where('status',$fil)->get();
        $tf = false;
        return view('tests.transaksi.transaksi-produk-course',compact(['transaksi','tf']));
           
    }
    public function searchCourse(Request $request)
    {
        $tf = false;
        $search = $request->search;
        $transaksi = TransactionCourse::with(['paket' => function($z){
            $z->withTrashed();
        }])->where('kode','like','%'.$search.'%')->orWhereHas('paket',function($query) use ($search){
            return $query->withTrashed()->Where('name','like','%'.$search.'%');
        })->get();
        //return view('tests.transaksi.transaksi-produk-course',compact(['tf','transaksi']));
         // V2
        if(auth()->user()->role != 'admin'){
          return view('tests.transaksi.transaksi-produk-course',compact(['tf','transaksi']));
        }else{
          return view('V2.Admin.transaksi',compact(['tf','transaksi']));
        }
    }
}
