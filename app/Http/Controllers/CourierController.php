<?php

namespace App\Http\Controllers;

use App\Courier;
use Illuminate\Http\Request;

class CourierController extends Controller
{
    public function index()
    {
        $kurir = Courier::get(['id','name']);
        return view('tests.exspedisi.index',compact('kurir'));
        
    }
    public function store(Request $request)
    {
        
        $msg = [
            'required' => 'Inputan :attribute wajib diisi',
        ];
        $this->validate($request,[
            'name' => 'required|unique:couriers',
        ], $msg);
        Courier::create([
            'name'  =>  $request->name
        ]);
        return redirect()->back();
    }
    public function edit(Request $request,$id)
    {
        $msg = [
            'required' => 'Inputan :attribute wajib diisi',
        ];
        $this->validate($request,[
            'name' => 'required',
        ], $msg);
        Courier::findOrFail($id)->update([
            'name' => $request->name
        ]);
        return redirect()->back();
    }
    public function delete($id)
    {
        Courier::findOrFail($id)->delete();
        return redirect()->back();
    }
}
