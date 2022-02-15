<?php

namespace App\Http\Controllers;

use App\Banner;
use App\Berita;
use App\Komisi;
use App\Transaction;
use App\TransactionCourse;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function dashboard()
    {
        if(auth()->user()->status == 'pembeli'){
            return redirect()->route('order.order-status-course');
        }elseif(auth()->user()->role == 'member'){
            if(auth()->user()->batas != null && auth()->user()->batas < Carbon::now() ){
                auth()->user()->update([
                    'status' => 'pembeli'
                ]);
            }
            $saldo = TransactionCourse::where('status','selesai')->where(function($que){
                $que->doesntHave('komisi')->orWhereHas('komisi',function($c){
                    return $c->where('status','!=','selesai');
                });
            })->where(function($query){
                $query->WhereHas('user',function($z){
                    return $z->where('sponsor',auth()->user()->email);
                })->orWhereHas('agent',function($q){
                    return $q->where('user_id',auth()->user()->id);
                });
            })->sum('commission')+Transaction::where('status','selesai')->where(function($que){
                $que->doesntHave('komisiFisik')->orWhereHas('komisiFisik',function($c){
                    return $c->where('status','!=','selesai');
                });
            })->WhereHas('user',function($z){
                return $z->where('sponsor',auth()->user()->email);
            })->sum('commission');
            $leadnow = auth()->user()->point;
            $salesnow = User::whereDate('created_at', '=', Carbon::today()->toDateString())->where('sponsor',auth()->user()->email)->count();
            $omsetnow =  TransactionCourse::whereDate('created_at', '=', Carbon::today()->toDateString())->whereHas('agent',function($q){
                return $q->where('user_id',auth()->user()->id);
            })->where('status','selesai')->count();

           $leadbulan = auth()->user()->point;
           $salesbulan = User::whereMonth('created_at', '=', date('m'))->where('sponsor',auth()->user()->email)->count();
            $omsetbulan =  TransactionCourse::whereMonth('created_at', '=', date('m'))->whereHas('agent',function($q){
                return $q->where('user_id',auth()->user()->id);
            })->where('status','selesai')->count();

            $lead = auth()->user()->point;
             $sales = User::where('sponsor',auth()->user()->email)->count();
             $omset =  TransactionCourse::whereHas('agent',function($q){
                return $q->where('user_id',auth()->user()->id);
            })->where('status','selesai')->count();
            // $berita = new BeritaController;
            // $berita = $berita->berita();
            $berita = Berita::orderBy('created_at', 'DESC')->paginate(5);
            $banner = Banner::get();
            
            
            $us = User::where('id',auth()->user()->id)->withCount(['transactions' => function($q){
            $q->where('status','selesai');
        }])->withCount(['transactionsCourse' => function($z){
            $z->where('status','selesai');
        }])->withCount('dummy')->first();
            //return view('tests.dashboard.rekap',compact(['us','banner','berita','saldo','salesnow','omsetnow','leadnow','salesbulan','omsetbulan','leadbulan','sales','omset','lead']));


            // v2
           return view('v2.member.dashboard',compact(['us','banner','berita','saldo','salesnow','omsetnow','leadnow','salesbulan','omsetbulan','leadbulan','sales','omset','lead']));


        }else{
            //$x = new XenditController;
            $saldo = 10000;

            $salesnow = User::whereDate('created_at', '=', Carbon::today()->toDateString())->where('role','member')->where('status','active')->count();
            $omsetnow =  intval(Transaction::whereDate('created_at', '=', Carbon::today()->toDateString())->where('status','selesai')->sum('price')) + intval(TransactionCourse::whereDate('created_at', '=', Carbon::today()->toDateString())->where('status','selesai')->sum('price'));
            $leadnow = intval(Transaction::whereDate('created_at', '=', Carbon::today()->toDateString())->where('status','selesai')->count()) + intval(TransactionCourse::whereDate('created_at', '=', Carbon::today()->toDateString())->where('status','selesai')->count());

            $salesbulan = User::whereMonth('created_at', '=', date('m'))->where('role','member')->where('status','active')->count();
            $omsetbulan =  intval(Transaction::whereMonth('created_at', '=', date('m'))->where('status','selesai')->sum('price')) + intval(TransactionCourse::whereMonth('created_at', '=', date('m'))->where('status','selesai')->sum('price'));
            $leadbulan = intval(Transaction::whereMonth('created_at', '=', date('m'))->where('status','selesai')->count()) + intval(TransactionCourse::whereMonth('created_at', '=', date('m'))->where('status','selesai')->count());


            $sales = User::where('role','member')->where('status','active')->count();
            $omset =  intval(Transaction::where('status','selesai')->sum('price')) + intval(TransactionCourse::where('status','selesai')->sum('price'));
            $lead = intval(Transaction::where('status','selesai')->count()) + intval(TransactionCourse::where('status','selesai')->count());

            //return view('tests.dashboard.rekap',compact(['saldo','salesnow','omsetnow','leadnow','salesbulan','omsetbulan','leadbulan','sales','omset','lead']));

            // V2
            return view('V2.Admin.dashboard',compact(['saldo','salesnow','omsetnow','leadnow','salesbulan','omsetbulan','leadbulan','sales','omset','lead']));


        }

    }
}
