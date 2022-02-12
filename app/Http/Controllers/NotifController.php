<?php

namespace App\Http\Controllers;

use App\Notif;
use Illuminate\Http\Request;

class NotifController extends Controller
{
    public function view()
    {
        $notif = Notif::where('user_id',auth()->user()->id)->where('status','baca')->orderBy('created_at','desc')->take(5)->get();
        return $notif;
    }
    public function all()
    {
        
        $notif = Notif::where('user_id',auth()->user()->id)->orderBy('created_at','desc')->get();
        return $notif;
    }
    public function status()
    {
        
        $notif = Notif::where([['user_id',auth()->user()->id],['status','baca']])->count();
        return $notif;
    }
    public function baca(Notif $id)
    {
        $id->update([
        'status' => 'terbaca'
            ]);
            return redirect()->back();
    }
}
