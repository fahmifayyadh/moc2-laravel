<?php

namespace App\Http\Controllers;

use App\Kupon;
use Illuminate\Http\Request;

class KuponController extends Controller
{
    public function index()
    {
        $kupon = Kupon::orderBy('created_at', 'desc')->get();
        return view('tests.kupon.index', compact('kupon'));
    }
    public function create()
    {
        return view('tests.kupon.create');
    }
    public function store(Request $request)
    {
        try {
            //code...
            Kupon::create([
                'product' => $request->product == '1' ? true : false,
                'course'  => $request->course == '1' ? true : false,
                'kode'    => strtolower($request->kode),
                'nominal' => $request->nominal,
                'batas'   => $request->batas,
                'penggunaan' => $request->penggunaan
            ]);
        } catch (\Throwable $th) {
            toastr()->error($th->getMessage(), 'error');
            return redirect()->back();
        }
        toastr()->success('berhasil membuat kupon', 'success');
        return redirect()->route('kupon.index');
    }
    public function edit(Kupon $kupon)
    {
        return view('tests.kupon.edit', compact('kupon'));
    }
    public function update(Request $request, Kupon $kupon)
    {
        try {
            //code...
            $kupon->update([
                'product' => $request->product == '1' ? true : false,
                'course'  => $request->course == '1' ? true : false,
                'kode'    => strtolower($request->kode),
                'nominal' => $request->nominal,
                'batas'   => $request->batas,
                'penggunaan' => $request->penggunaan
            ]);
        } catch (\Throwable $th) {

            toastr()->error($th->getMessage(), 'error');
            return redirect()->back();
            //throw $th;
        }
        toastr()->success('berhasil edit kupon', 'success');

        return redirect()->route('kupon.index');
    }
    public function delete(Kupon $kupon)
    {
        $kupon->delete();
        toastr()->success('berhasil hapus kupon', 'success');
        return redirect()->back();
    }
}
