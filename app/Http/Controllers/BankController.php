<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Bank;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class BankController extends Controller
{
    public function index()
    {
        $x = new XenditController;
        $pembayaran = $x->getBank();
        $useBank = Bank::where('type','personal')->get();
        $useBankk = Bank::where('type','gateway')->get();
        return view('tests.bank.index', compact(['useBankk','pembayaran', 'useBank']));
    }
    public function createPayment(Request $request)
    {
        $msg = [
            'required' => 'Inputan :attribute wajib diisi',
        ];
        $this->validate($request, [
            'code' => 'required|unique:banks'
        ], $msg);
        Bank::create([
            'name' => 'Bank ' . ucfirst(Str::lower($request->code)),
            'code' => $request->code,
            'type' => 'gateway',
        ]);
        return redirect()->back();
    }
    public function createPersonal(Request $request)
    {
        $msg = [
            'required' => 'Inputan :attribute wajib diisi',
        ];
        $this->validate($request, [
            'name' => 'required',
            'image' => 'required|image|max:2048',
            'no_rekening' => 'required|unique:banks',
            'nama_pemilik' => 'required',
        ], $msg);
        $file = $request->file('image');
        $fileName = substr(md5(microtime()), 0, 100) . '.' . $file->getClientOriginalExtension();
        $request->file('image')->storeAs('public/bank/', $fileName);

        Bank::create([
            'name' => Str::title($request->name),
            'code' => '0',
            'image' => $fileName,
            'no_rekening' => $request->no_rekening,
            'nama_pemilik' => $request->nama_pemilik,
            'type' => 'personal'
        ]);
        return redirect()->back();
    }
    public function updatePayment(Request $request, $id)
    {
        $bank = Bank::findOrFail($id);
        $msg = [
            'required' => 'Inputan :attribute wajib diisi',
        ];
        $this->validate($request, [
            'code' => ['required', Rule::unique('banks')->ignore($id)],
        ], $msg);

        $bank->update([
            'name' => 'Bank ' . ucfirst(Str::lower($request->code)),
            'code' => $request->code,
            'type' => 'gateway',
        ]);
        return redirect()->back();
    }
    public function updatePersonal(Request $request, $id)
    {
        $bank = Bank::findOrFail($id);

        $msg = [
            'required' => 'Inputan :attribute wajib diisi',
        ];
        $this->validate($request, [
            'name' => 'required',
            'no_rekening' => ['required', Rule::unique('banks')->ignore($id)],
            'nama_pemilik' => 'required',
        ], $msg);

        $bank->update([
            'name' => Str::title($request->name),
            'code' => '0',
            'no_rekening' => $request->no_rekening,
            'nama_pemilik' => $request->nama_pemilik,
            'type' => 'personal'
        ]);
        if (!is_null($request->file('image'))) {
            $file = $request->file('image');
            $fileName = substr(md5(microtime()), 0, 100) . '.' . $file->getClientOriginalExtension();
            $request->file('image')->storeAs('public/bank/', $fileName);
            $bank->update([
                'image' => $fileName,
            ]);
        }

        return redirect()->back();
    }
    public function delete($id)
    {
        Bank::findOrFail($id)->delete();
        return redirect()->back();
    }
}
