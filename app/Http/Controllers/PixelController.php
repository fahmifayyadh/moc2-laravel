<?php

namespace App\Http\Controllers;

use App\Agent;
use App\Course;
use App\Paket;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class PixelController extends Controller
{
    public function index()
    {
       $courses = Paket::paginate(10);
       $t=false;
        return view('V2.Member.facebook',compact(['courses','t']));
    }
    public function create(Request $request)
    {
        $ag = Agent::where('user_id', auth()->user()->id)->where('paket_id', $request->product_id)->first();
        if ($ag) {
            $ag->update([
                'pixel' => $request->pixel_id,
            ]);
            $link = URL::to('/') . '/order-sponsor/' . auth()->user()->id . '/' . $ag->kode;
        } else {
            $coki = 0;
            do {
                $kode  = Str::random(6 + $coki);
                $coki += 1;
            } while (Agent::where('kode', $kode)->first());
            $crr = Paket::findOrFail($request->product_id);
                Agent::create([
                    'user_id'   => auth()->user()->id,
                    'paket_id' => $crr->id,
                    'kode'      => $kode,
                    'pixel'     => $request->pixel_id,
                ]);
           
            $link = URL::to('/') . '/order-sponsor/' . auth()->user()->id . '/' . $kode;
        }
        $t = true;
        $courses = Paket::paginate(10);
        return view('V2.Member.facebook', compact(['courses', 'link', 't']));
    }
}
