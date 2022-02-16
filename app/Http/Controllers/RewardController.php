<?php

namespace App\Http\Controllers;

use App\Reward;
use App\TransactionReward;
use Carbon\Carbon;

use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class RewardController extends Controller
{
    public function member()
    {
        $reward = Reward::whereDate('batas','>=',Carbon::now()->format('Y-m-d'))->get();
        // return view('tests.reward.member',compact('reward'));

        // V2
        return view('V2.Member.reward',compact('reward'));
    }
    public function admin()
    {
        $reward = Reward::whereDate('batas','>=',Carbon::now()->format('Y-m-d'))->get();
        // return view('tests.reward.admin',compact('reward'));

        // V2
        return view('V2.Admin.reward',compact('reward'));
    }
    public function create(Request $request)
    {
            $file = $request->file('image');
            $fileName = substr(md5(microtime()), 0, 100).'.'.$file->getClientOriginalExtension();
            $request->file('image')->storeAs('public/reward/',$fileName);
        
        Reward::create([
            'judul' => $request->judul,
            'image' => $fileName,
            'desc' => $request->desc,
            'harga_point' => $request->harga_point,
            'batas' => $request->batas
        ]);
        return redirect()->back();
    }
    public function edit(Request $request,Reward $reward)
    {
        $fileName = $reward->image;
        if($request->file('image') != null){
            File::delete(storage_path('app/public/reward/'.$fileName));
            $file = $request->file('image');
            $fileName = substr(md5(microtime()), 0, 100).'.'.$file->getClientOriginalExtension();
            $request->file('image')->storeAs('public/reward/',$fileName);
        }
        $reward->update([
            'judul' => $request->judul,
            'image' => $fileName,
            'desc' => $request->desc,
            'harga_point' => $request->harga_point,
            'batas' => $request->batas
        ]);
        return redirect()->back();
    }
    public function destroy(Reward $reward)
    {
        $reward->delete();
        return redirect()->back();
    }
    public function tukar(Reward $reward)
    {
       
        if(auth()->user()->point - $reward->harga_point >= 0){
            TransactionReward::create([
                'user_id' => auth()->user()->id,
                'reward_id' => $reward->id,
                'judul' => $reward->judul,
                'harga_point' => $reward->harga_point,
            'batas' => $reward->batas,
            ]);
            auth()->user()->update([
                'point' => auth()->user()->point - $reward->harga_point,
            ]);
            toastr('berhasil membeli','success');
        }else{
            toastr('Point anda tidak mencukupi','warning');
        }
        
        return redirect()->back();
    }
    public function riwayatMember()
    {
        if(auth()->user()->role == 'member'){
            $tw = TransactionReward::where('user_id',auth()->user()->id)->get();
            // return view('tests.reward.tukar',compact('tw'));

            // V2
            return view('V2.Member.history-reward',compact('tw'));

        }else{
            $tw = TransactionReward::get();
            // return view('tests.reward.informasi',compact('tw'));

            // V2
            return view('V2.Admin.history-reward',compact('tw'));

            
        }
    }
}
