<?php

namespace App\Http\Controllers;

use App\Berita;
use App\User;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    public function __construct()
    {
        $this->fcm = new FcmController;
    }
    public function index()
    {
        $berita = Berita::get();
        return view('V2.Admin.kelola-berita',compact('berita'));
    }
    public function create()
    {
        return view('tests.berita.create');
    }
    public function store(Request $request)
    {
        try {
            $file = $request->file('img');
                $fileName = substr(md5(microtime()), 0, 100).'.'.$file->getClientOriginalExtension();
                $request->file('img')->storeAs('public/berita/',$fileName);
            $b = Berita::create([
                'judul' => $request->judul,
                'isi' => $request->isi,
                'img' => $fileName,
                'deskripsi' => $request->deskripsi,
                'type' => $request->type,
                ]);
            } catch (\Throwable $th) {
                toastr()->error($th->getMessage(),'error');
                return redirect()->back();
            }
            $this->fcm->sendAll($b->judul,$b->deskripsi,asset(Storage::url('berita/'.$b->img)),User::where('app_token','!=',null)->get()->pluck('app_token')->toArray());
            toastr()->success('berhasil menambahkan','success');
        return redirect()->route('berita.index');
    }
    public function edit(Berita $berita)
    {
        return view('tests.berita.edit',compact('berita'));
    }
    public function update(Request $request,Berita $berita)
    {
        try {
            if($request->img != null){

                $file = $request->file('img');
                $fileName = substr(md5(microtime()), 0, 100).'.'.$file->getClientOriginalExtension();
                $request->file('img')->storeAs('public/berita/',$fileName);
            }
            
            $berita->update([
                'judul' => $request->judul,
                'isi' => $request->isi,
                'img' => $fileName,
                'deskripsi' => $request->deskripsi,
                'type' => $request->type,
                ]);
            } catch (\Throwable $th) {
                toastr()->error($th->getMessage(),'error');
                return redirect()->back();
            }
            toastr()->success('berhasil update','success');
        return redirect()->route('berita.index');
    }
    public function delete(Berita $berita)
    {
        $berita->delete();
        toastr()->success('berhasil menghapus','success');
        return redirect()->back();
    }
    public function berita()
    {
        $berita = Berita::get();
        return $berita;
    }
}
