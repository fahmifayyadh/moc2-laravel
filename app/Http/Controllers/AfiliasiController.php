<?php

namespace App\Http\Controllers;

use App\Agent;
use App\Course;
use App\Paket;
use App\Product;
use App\TransactionCourse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;

class AfiliasiController extends Controller
{
    public function index()
    {
        // dd(URL::to('/'));
        $products = Paket::get(['id', 'name']);

        // return view('tests.afiliasi.index', compact('products')); 

        // V2
        if(auth()->user()->role != 'admin'){
          return view('tests.afiliasi.index', compact('products')); 
        }else{
          return view('v2.admin.afiliasi.link-afiliasi', compact('products')); 
        }

    }
    public function generate(Request $request)
    {
        if (is_null($request->product)) {
            toastr()->warning('Pilih produk terlebih dahulu', 'warning');
            return redirect()->back();
        }
        $products = Paket::get(['id', 'name']);
        try {
            //code...
            $ag       = Agent::where('user_id', auth()->user()->id)->where('paket_id', $request->product)->first();
            if ($ag) {
                $link = URL::to('/') . '/order-sponsor/' . auth()->user()->id . '/' . $ag->kode;
                return view('tests.afiliasi.index', compact(['link', 'products']));
            } else {
                
                $coki = 0;
            do {
                $kode  = Str::random(6 + $coki);
                $coki += 1;
            } while (Agent::where('kode', $kode)->first());
            $crr = Paket::findOrFail($request->product);
                Agent::create([
                    'user_id'   => auth()->user()->id,
                    'paket_id' => $crr->id,
                    'kode'      => $kode,
                    ]);
                    
                }
            } catch (\Throwable $th) {
                toastr()->error($th->getMessage(), 'Error');
                return redirect()->back();
            }
        $link = URL::to('/') . '/order-sponsor/' . auth()->user()->id . '/' . $kode;
        //return view('tests.afiliasi.index', compact(['link', 'products']));

        // V2
        if(auth()->user()->role != 'admin'){
          return view('tests.afiliasi.index', compact(['link', 'products'])); 
        }else{
          return view('v2.admin.afiliasi.link-afiliasi', compact(['link', 'products'])); 
        }
    }
    public function status()
    {
        if (auth()->user()->role == 'admin') {
            $agents = Agent::with(['transaksi'])->with(['paket' => function($z){
                $z->withTrashed();
            }])->paginate(10);
        } else {
           $transaksi = TransactionCourse::whereHas('agent',function($z){
                return $z->where('user_id',auth()->user()->id);
            })->orderByDesc('created_at')->paginate(10);
        return view('tests.afiliasi.status', compact('transaksi'));
        }
        //return view('tests.afiliasi.list-stats', compact('agents'));

         // V2
        if(auth()->user()->role != 'admin'){
          return view('tests.afiliasi.list-stats', compact('agents'));
        }else{
          return view('v2.admin.afiliasi.status-afiliasi', compact('agents')); 
        }
    }
}
