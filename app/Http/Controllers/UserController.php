<?php

namespace App\Http\Controllers;

use App\City;
use App\Notif;
use App\Product;
use App\Province;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;


class UserController extends Controller
{
    public function index(Request $request)
    {
        if($request->search != null){
            $users = User::where('name','LIKE','%'.$request->search.'%')->paginate(300);
        }else{
        $users = User::paginate(30);
        }

        return view('tests.user.list-user',compact('users'));

    }
    public function detail($id)
    {
        $user = User::findOrFail($id);
        return view('tests.user.detail',compact('user'));

    }
    public function leaderboard()
    {
        // $users = User::where('role','!=','admin')->get();
        $users = User::where('role','!=','admin')->withCount(['transactions' => function($q){
            $q->where('status','selesai');
        }])->withCount(['transactionsCourse' => function($z){
            $z->where('status','selesai');
        }])->withCount('dummy')->havingRaw('dummy_count + transactions_count + transactions_course_count > 0')->orderByRaw('dummy_count + transactions_count + transactions_course_count desc')->get();
	    // return view('tests.leaderboard.index',compact('users'));

        //v2
        if (auth()->user()->role != 'admin') {
            return view('V2.Member.leaderboard', compact('users'));
        }else {
            return view('tests.leaderboard.index',compact('users'));
        }


    }
    public function filterLeaderboard(Request $request)
    {
        $tanggalAwal = substr($request->tanggal,0,strpos($request->tanggal, "/"));
        $tanggalAkhir = substr($request->tanggal,strpos($request->tanggal, "/")+1);
        $users = User::where('role','!=','admin');
        if($request->prod == 'fisik'){
            $users = $users->withCount(['transactions' => function($q) use($tanggalAwal, $tanggalAkhir){
                $q->where('status','selesai')->WhereBetween('created_at', [$tanggalAwal, $tanggalAkhir]);
            }]);
            $users = $users->havingRaw('transactions_count > 0')->orderByRaw('transactions_count desc')->get();
        }
        if($request->prod == 'course'){
            $users = $users->withCount(['transactionsCourse' => function($z) use($tanggalAwal, $tanggalAkhir){
                $z->where('status','selesai')->WhereBetween('created_at', [$tanggalAwal, $tanggalAkhir]);
            }]);
            $users = $users->havingRaw('transactions_course_count > 0')->orderByRaw('transactions_course_count desc')->get();
        }
        if($request->prod == null){
            $users = $users->withCount(['transactions' => function($q) use($tanggalAwal, $tanggalAkhir){
                $q->where('status','selesai')->WhereBetween('created_at', [$tanggalAwal, $tanggalAkhir]);
            }])->withCount(['transactionsCourse' => function($z) use($tanggalAwal, $tanggalAkhir){
                $z->where('status','selesai')->WhereBetween('created_at', [$tanggalAwal, $tanggalAkhir]);
            }]);
            $users = $users->withCount('dummy')->havingRaw('dummy_count + transactions_count + transactions_course_count > 0')->orderByRaw('dummy_count + transactions_count + transactions_course_count desc')->get();
        }
        if($users->count() == 0){
            toastr()->warning('Pencarian tidak ditemukan', 'success');

        }
	    return view('tests.leaderboard.index',compact('users'));

    }
    public function edit($id=null,$lihat= null)
    {
        $li = null;
        if(auth()->user()->role != 'admin'){
            $id = auth()->user()->id;
        }else{
            if($lihat == "lihat"){
                $li = true;

            }
        }
        $user = User::findOrFail($id ?? auth()->user()->id);
        $users = User::get(['id','name','email']);
        $provinsi = Province::get();
        $kota = User::where('role','admin')->where('city','!=',null)->first()->city ?? null;
        if($kota != null){
            $kota = City::where('city_id',$kota)->first()->name ?? null;
        }
        $spon = User::where('email',$user->sponsor)->first()->name ?? null;
        return view('tests.user.lihatedit',compact(['li','spon','provinsi','user','users','kota']));
    }
    public function create(Request $request)
    {
        $msg = [
            'required' => 'Inputan :attribute wajib diisi',
        ];
        $validator = Validator::make($request->all(),[
            'name' => ['required', 'string', 'max:255','min:2'],
            'email' => ['required', 'string', 'email', 'max:255','unique:users'],
            'password' => ['nullable','string', 'min:8', 'confirmed'],
            'no_hp' => ['required'],
            'ttl' => ['required'],
            'alamat' => ['required','min:3'],
        ], $msg);
        if ($validator->fails()) {
            foreach ($validator->errors()->toArray() as $e) {
                toastr()->error($e[0], 'Gagal Menyimpan');
            }
            return redirect()->back();
        }
        $fileName = null;
        if ($request->file('foto') != null) {
            $file = $request->file('foto');
            $fileName = substr(md5(microtime()), 0, 100).'.'.$file->getClientOriginalExtension();
            $request->file('foto')->storeAs('public/user/',$fileName);
        }

         User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'password' => bcrypt($request->password),
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'foto' => $fileName,
            'sponsor' => $request->sponsor,
            'tanggal_lahir' => $request->ttl
          ]);
          toastr()->success('berhasil menambah user','success');
          return redirect()->back();
    }

    public function update(Request $request,$id)
    {

        $user = User::findOrFail($id);
        $ema = $user->email;
        $msg = [
            'required' => 'Inputan :attribute wajib diisi',
        ];
        $validator = Validator::make($request->all(),[
            'name' => ['required', 'string', 'max:255','min:2'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($id)],
            'password' => ['nullable','string', 'min:8', 'confirmed'],
            'no_hp' => ['required'],
            'alamat' => ['required','min:3'],
        ], $msg);
        if ($validator->fails()) {
            foreach ($validator->errors()->toArray() as $e) {
                toastr()->error($e[0], 'Gagal Menyimpan');
            }
            return redirect()->back();
        }

        if($request->password){
          $user->update([
                    'password' => bcrypt($request->password),
                ]);
        }
        $fileName = $user->foto ?? null;
        if ($request->file('foto') != null) {
            $file = $request->file('foto');
            $fileName = substr(md5(microtime()), 0, 100).'.'.$file->getClientOriginalExtension();
            $request->file('foto')->storeAs('public/user/',$fileName);
        }
         $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'foto' => $fileName,
            'tanggal_lahir' => $request->ttl,
            'no_rekening' => $request->no_rekening,
            'nama_rekening' => $request->nama_rekening
          ]);
          if(auth()->user()->role == 'admin'){
              $user->update([
                'role' => $request->role,
                'status' => $request->status,
                'sponsor' => $request->sponsor,
                'city' => $request->kota ?? $user->city,
                'batas' => $request->batas,
              ]);
          }
          User::where('sponsor',$ema)->update([
                'sponsor' => $user->email,
              ]);
          toastr()->success('berhasil update','success');
          return redirect()->back();
    }
    public function bypass($id)
    {
        \Auth::loginUsingId($id);
		return redirect()->route('dashboard.index');
    }
    public function updatePoint(Request $request,User $user)
    {
         $user->update([
            'point' => $request->point,
        ]);
        Notif::create([
            'user_id' => $user->id,
            'isi' => $request->pesan
        ]);
        toastr()->success('berhasil update point','success');
        return redirect()->back();
    }
}
