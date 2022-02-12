<?php

namespace App\Http\Controllers;

use App\Banner;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BannerController extends Controller
{
    public function index()
    {
        $banner = Banner::get();
         // return view('tests.banner.index', compact('banner'));;

        if(auth()->user()->role != 'admin'){
        // return view('tests.banner.index', compact('banner'));
        }else{
          return view('V2.Admin.kelola-banner', compact('banner')); 
        }
    }
    public function create()
    {
        return view('tests.banner.create');
    }
    public function store(Request $request)
    {
        if(Banner::count() == 10){
            toastr()->error('batas Upload banner hanya 10', 'Gagal');

            return redirect()->route('banner.index');
        }
        $msg = [
            'required' => 'Inputan :attribute wajib diisi',
        ];
        $validator = Validator::make($request->all(),[
            'img' => ['required', 'image', 'max:5120'],
        ], $msg);
        if ($validator->fails()) {
            foreach ($validator->errors()->toArray() as $e) {
                toastr()->error($e[0], 'Gagal Menyimpan');
            }
            return redirect()->back();
        }
        $file = $request->file('img');
        $fileName = substr(md5(microtime()), 0, 100) . '.' . $file->getClientOriginalExtension();
        $request->file('img')->storeAs('public/banner/', $fileName);
        Banner::create([
            'link' => $request->link ? (substr($request->link,0,3) == 'htt' ? $request->link :'http://'.$request->link) :'#',
            'img' => $fileName
        ]);
        toastr()->success('Sukses Create Banner', 'Berhasil');
        return redirect()->route('banner.index');
    }
    public function edit(Banner $banner)
    {
        return view('tests.banner.edit',compact('banner'));
    }
    public function update(Request $request,Banner $banner)
    {
        $msg = [
            'required' => 'Inputan :attribute wajib diisi',
        ];
        $validator = Validator::make($request->all(),[
            'img' => ['nullable', 'image', 'max:5120'],
        ], $msg);
        if ($validator->fails()) {
            foreach ($validator->errors()->toArray() as $e) {
                toastr()->error($e[0], 'Gagal Menyimpan');
            }
            return redirect()->back();
        }
        $fileName = $banner->img;
        if(!is_null($request->img)){
            File::delete(storage_path('app/public/banner/'.$fileName));
            $file = $request->file('img');
            $fileName = substr(md5(microtime()), 0, 100) . '.' . $file->getClientOriginalExtension();
            $request->file('img')->storeAs('public/banner/', $fileName);
        }
        $banner->update([
            'link' => $request->link ? (substr($request->link,0,3) == 'htt' ? $request->link :'http://'.$request->link) :'#',
            'img' => $fileName
        ]);
        toastr()->success('Sukses Update', 'Berhasil');
        return redirect()->route('banner.index');
    }
    public function destroy(Banner $banner)
    {
        $banner->delete();
        toastr()->success('Sukses Menghapus', 'Berhasil');
        return redirect()->back();
    }
}
