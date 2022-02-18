<?php

namespace App\Http\Controllers;

use App\Agent;
use App\Course;
use App\Kupon;
use App\Notif;
use App\TransactionCourse;
use App\User;
use App\HistoryKupon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class OrderSponsorController extends Controller
{
    public function __construct()
    {
        $this->xendit = new XenditController;
    }
    public function index($user, $kode, $sales = null)
    {
        $user = User::findOrFail($user);
        $ag = Agent::where('kode', $kode)->first();
        if ($sales == 'salesPage' && $ag && $ag->paket->sales()->exists()) {
            return Redirect::to($ag->paket->sales->link.'?id='.$user->id.'&kode='.$kode);
        }
        return view('tests.transaksi.checkout-course', compact(['ag', 'user']));
    }
    public function invoice(Request $request, $agent)
    {
        $kupon = Kupon::where('course', 1)->where('kode', strtolower($request->kupon))->whereDate('batas', '>=', Carbon::now())->first();
        $agent = Agent::where('kode', $agent)->firstOrFail();
        if(User::where('email',$request->email)->exists()){
              toastr()->error('Maaf email yang anda masukan telah terdaftar', 'error');
            return redirect()->back();
        }
        try {
            $u = DB::transaction(function () use ($request, $agent, $kupon) {
                $u = User::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => bcrypt('moc123456'),
                    'role' => 'member',
                    'status' => 'pembeli',
                    'alamat' => $request->alamat,
                    'no_hp' => $request->no_hp,
                    'batas' => Carbon::now(),
                    'sponsor' => $agent->user->email
                ]);
                if ($u) {
                    $price = $agent->paket->price;

                    $t = TransactionCourse::create([
                        'paket_id'      => $agent->paket->id,
                        'user_id'       => $u->id,
                        'agent_id'      => $agent->id,
                        'kupon_id'      => $kupon->id ?? null,
                        'kode'          => Str::random(6),
                        'price'         => $price + rand(100, 999),
                        'batas'         => $agent->paket->batas != null ? Carbon::now()->addDays($agent->paket->batas) : null,
                        'status'        => 'pembayaran',
                        'discount'      => $kupon->nominal ?? 0,
                        'point_pembeli' => $agent->paket->point_pembeli,
                        'point_sponsor' => $agent->paket->point_sponsor,
                        'commission'    => $agent->paket->commission,
                    ]);
                    if($kupon){
                    HistoryKupon::create([
                        'user_id' => $u->id,
                        'kupon_id' => $kupon->id,
                    ]);
                }
                    $details = [
                        'judul'       => 'Menunggu Pembayaran',
                        'keterangan'  => "segera lakukan pembayaran, batas pembayaran 24 jam dari pembelian.<br> Info lebi lanjut tentang pembayaran silahkan login ke akun anda lalu buka My order->course",
                        'nama_barang' => [$t->paket->name],
                        'price'       => $t->price,
                        'username'    => $u->name,
                        'jenis'       => 'E-course',
                        'email' => $request->email,
                        'password' => 'moc123456',
                    
                    ];
                    Mail::to($u->email)->send(new \App\Mail\MenungguPembayaranCourse($details));
                    return $u;
                }
            });
        } catch (\Throwable $th) {
            //throw $th;
            toastr()->error($th->getMessage(), 'error');
            return redirect()->back();
        }
        Auth::loginUsingId($u->id);
        toastr()->success('Selamat datang di Master Online Community', 'success');
        return redirect()->route('order.order-status-course');
    }
}
