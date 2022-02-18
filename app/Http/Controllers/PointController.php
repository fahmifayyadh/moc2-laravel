<?php

namespace App\Http\Controllers;

use App\TransactionCourse;
use App\TransactionReward;
use Illuminate\Http\Request;

class PointController extends Controller
{
    public function getPoint()
    {
        $p = TransactionCourse::whereHas('agent',function($query){
            return $query->where('user_id',auth()->user()->id);
        })->where('status','selesai')->sum('point_sponsor');
        $pp = TransactionReward::where('user_id',auth()->user()->id)->sum('harga_point');
        $p = $p-$pp;
        return $p;
    }
}
