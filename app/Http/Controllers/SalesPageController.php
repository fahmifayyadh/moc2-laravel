<?php

namespace App\Http\Controllers;

use App\SalesPage;
use Illuminate\Http\Request;

class SalesPageController extends Controller
{
    public function create(Request $request,$paket_id)
    {
        if(SalesPage::where('paket_id',$paket_id)->exists()){
            SalesPage::where('paket_id',$paket_id)->update([
            'link' => $request->link ? (substr($request->link,0,3) == 'htt' ? $request->link :'http://'.$request->link) :'#',
            ]);
        }else{
            SalesPage::create([
                'paket_id' => $paket_id,
                'link' => $request->link ? (substr($request->link,0,3) == 'htt' ? $request->link :'http://'.$request->link) :'#',
            ]);
        }
        return redirect()->back();
    }
    public function delete(SalesPage $id)
    {
        $id->delete();
        return redirect()->back();
    }
}
