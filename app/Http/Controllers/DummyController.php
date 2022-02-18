<?php

namespace App\Http\Controllers;

use App\Dummy;
use App\User;
use Illuminate\Http\Request;

class DummyController extends Controller
{
    public function store(Request $request, User $id)
    {
        $d = Dummy::where('user_id',$id->id)->count();
        if($request->jumlah > $d){
            for ($i=0; $i < $request->jumlah - $d; $i++) { 
                $id->dummy()->create([
                    'user_id' => $id->id,
                ]);
            }
        }elseif($request->jumlah < $d){
            Dummy::where('user_id',$id->id)->take($d - $request->jumlah)->delete();
        }
        toastr()->success('berhasil mengubah leaderboard','success');
        return redirect()->back();
    }
}
