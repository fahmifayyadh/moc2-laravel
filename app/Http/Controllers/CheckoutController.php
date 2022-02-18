<?php

namespace App\Http\Controllers;

use Xendit\Xendit;
use App\Bank;
use App\City;
use App\Course;
use App\Delivery;
use App\HistoryKupon;
use App\Kupon;
use App\Paket;
use App\Product;
use App\Province;
use App\Subdistrict;
use App\Transaction;
use App\TransactionCourse;
use App\User;
use App\Varian;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class CheckoutController extends Controller
{
    public function __construct()
    {
        $this->rajaongkir = new OngkirController;
        $this->xendit     = new XenditController;
        $this->fcm = new FcmController;
    }
    public function index($pixel = 123, $course = null)
    {
        if (!is_null($course)) {
            $course = Course::findOrFail($course);
        }
        return view('tests.transaksi.checkout', compact(['pixel', 'course']));
    }
    public function course(Course $course)
    {
        return view('tests.transaksi.checkout', compact('course'));
    }
    public function product(Request $request, Product $product)
    {
        try {
            //code...
            $kupon  = Kupon::where('product', 1)->where('kode', strtolower($request->kode))->whereDate('batas', '>=', Carbon::now())->first();
            if($kupon){
                $cn = HistoryKupon::where([['user_id',auth()->user()->id],['kupon_id',$kupon->id]])->count();
                if($cn >= $kupon->penggunaan){
                    toastr()->error('mohon maaf kupon melebihi batas pemakaian', 'kupon');    
                    return redirect()->back();
                }
            }elseif(!is_null($request->kode)){
                toastr()->error('mohon maaf kupon tidak tersedia', 'kupon');
            }
            $harga  = [];
            $jen    = [];
            $ongkir = $this->rajaongkir->getOngkir($request->kecamatan, $product, $request->exspedisi, $request->kuantiti);
            foreach ($ongkir as $value) {
                foreach ($value['costs'] as $service) {
                    $jen[] = $service['service'];
                    foreach ($service['cost'] as $price) {
                        $harga[] = $price['value'];
                    }
                }
            }

            $bank      = Bank::where('type', 'personal')->get();
            $varian    = Varian::findOrFail($request->varian);
            $kuantiti  = $request->kuantiti;
            $exspedisi = $request->exspedisi;
            $provinsi  = Province::where('province_id', $request->provinci)->first();
            $city      = City::where('city_id', $request->kota)->first();
            $kecamatan = Subdistrict::where('subdistrict_id', $request->kecamatan)->first();
            $course    = $varian;
        } catch (\Throwable $th) {
            toastr()->error($th->getMessage(), 'error');
            return redirect()->back();
        }
        return view('tests.transaksi.checkout', compact(['kupon', 'jen', 'harga', 'kecamatan', 'bank', 'city', 'ongkir', 'course', 'provinsi', 'kuantiti', 'exspedisi']));
    }
    public function invoice(Request $request)
    {

        $kupon   = Kupon::where('product', 1)->where('kode', strtolower($request->kupon))->whereDate('batas', '>=', Carbon::now())->first();
        if($kupon){
            $cn = HistoryKupon::where([['user_id',auth()->user()->id],['kupon_id',$kupon->id]])->count();
            if($cn >= $kupon->penggunaan){
                $kupon = null;
            }
        }

        if(is_null($kupon) && !is_null($request->kode)){
            toastr()->error('mohon maaf kupon tidak tersedia', 'kupon');
        }
        $product = Product::findOrfail($request->id);
        $ongkir  = $this->rajaongkir->getOngkir($request->kecamatan, $product, $request->exspedisi, $request->kuantiti);
        $harga   = [];
        foreach ($ongkir as $value) {
            foreach ($value['costs'] as $service) {
                foreach ($service['cost'] as $price) {
                    $harga[$service['service']] = $price['value'];
                }
            }
        }
        $zz = DB::transaction(function () use ($kupon, $request, $product, $harga) {
            // cek id lok
            $kec  = Subdistrict::where('subdistrict_id', $request->kecamatan)->first();
            $cit  = City::where('city_id', $kec->city_id)->first();
            $prov = Province::where('province_id', $cit->province_id)->first();
            // 
            $varianprice = Varian::findOrfail($request->price);
            $d           = Delivery::create([
                'province_id'    => $prov->id,
                'city_id'        => $cit->id,
                'subdistrict_id' => $kec->id,
                'kurir'          => $request->exspedisi,
                'name'           => $request->name,
                'alamat'         => $request->alamat,
                'no_hp'          => $request->no_hp,
                'kode_pos'       => $request->kode_pos,
                'ongkir'         => $harga[$request->jenis],
                'jenis'          => $request->jenis
            ]);
            $t = Transaction::create([
                'product_id'    => $request->id,
                'user_id'       => auth()->user()->id,
                'kupon_id'      => $kupon->id ?? null,
                'delivery_id'   => $d->id,
                'kode'          => Str::random(6),
                'price'         => $varianprice->price + rand(100, 999),
                'kuantiti'      => $request->kuantiti,
                'status'        => 'pembayaran',
                'discount'      => $kupon->nominal ?? 0,
                'point_pembeli' => $product->point_pembeli*$request->kuantiti,
                'point_sponsor' => $product->point_sponsor*$request->kuantiti,
                'commission' => $product->commission*$request->kuantiti,
            ]);
            $b       = Bank::findOrFail($request->bank);
            if($kupon){
                HistoryKupon::create([
                    'user_id' => auth()->user()->id,
                    'kupon_id' => $kupon->id,
                ]);
            }
            $details = [
                'judul'          => 'Menunggu Pembayaran',
                'keterangan'     => "segera lakukan pembayaran, batas pembayaran 24 jam dari pembelian",
                'nama_bank'      => $b->name,
                'nama_pemilik'   => $b->nama_pemilik,
                'nomor_rekening' => $b->no_rekening,
                'nama_barang'    => $t->product->name,
                'price'          => $t->price -$t->discount,
                'kuantiti'       => $t->kuantiti,
                'username'       => auth()->user()->name,

            ];
            if(auth()->user()->app_token != null){
                $this->fcm->sendAll($details['judul'],$details['keterangan'],null,[auth()->user()->app_token]);
            }
            Mail::to(auth()->user()->email)->send(new \App\Mail\MenungguPembayaran($details));
            return [$d, $t, $b];
        });
        $d = $zz[0];
        $t = $zz[1];
        $b = $zz[2];
        toastr()->success('Terimaksih telah membeli', 'success');
        // return view('tests.transaksi.invoice', compact('d', 't', 'b'));

        // V2
        return view('V2.Member.detail-pembayaran', compact('d', 't', 'b'));
    }
    public function invoiceCourse(Request $request, Paket $course)
    {
        try {
            $kupon = Kupon::where('course', 1)->where('kode', strtolower($request->kode))->whereDate('batas', '>=', Carbon::now())->first();
            if($kupon){
                $cn = HistoryKupon::where([['user_id',auth()->user()->id],['kupon_id',$kupon->id]])->count();
                if($cn >= $kupon->penggunaan){
                    toastr()->error('mohon maaf kupon melebihi batas pemakaian', 'kupon');    
                    return redirect()->back();
                }
            }elseif(!is_null($request->kode)){
                toastr()->error('mohon maaf kupon tidak tersedia', 'kupon');
                return redirect()->back();
            }
            DB::transaction(function () use ($course, $request, $kupon) {
                if ($request->methode == 'personal') {
                    $price = $course->price + mt_rand(100, 999);
                } else {
                    $price = $course->price;
                }
                $t = TransactionCourse::create([
                    'paket_id'      => $course->id,
                    'user_id'       => auth()->user()->id,
                    'kupon_id'      => $kupon->id ?? null,
                    'kode'          => Str::random(6),
                    'price'         => $price,
                    'batas'         => $course->batas != null ? Carbon::now()->addDays($course->batas) : null,
                    'status'        => 'pembayaran',
                    'discount'      => $kupon->nominal ?? 0,
                    'point_pembeli' => $course->point_pembeli,
                    'point_sponsor' => $course->point_sponsor,
                    'commission'    => $course->commission,
                ]);

                if ($request->methode == 'gateway') {
                    $nominal = $kupon != null ? $kupon->nominal : 0;

                    $invoice = $this->xendit->createInvoice($t->id, $t->kode, auth()->user()->email, $course->desc, $price - $nominal);
                    $t->update([
                        'link_invoice' => $invoice['id'],
                    ]);
                }
                if($kupon){
                    HistoryKupon::create([
                        'user_id' => auth()->user()->id,
                        'kupon_id' => $kupon->id,
                    ]);
                }
                $details = [
                    'judul'       => 'Menunggu Pembayaran',
                    'keterangan'  => "segera lakukan pembayaran, batas pembayaran 24 jam dari pembelian.<br> Info lebi lanjut tentang pembayaran silahkan login ke akun anda lalu buka My order->course",
                    'nama_barang' => [$t->paket->name],
                    'price'       => $t->price - $t->discount,
                    'username'    => auth()->user()->name,
                    'jenis'       => 'E-course'
                ];
                if(auth()->user()->app_token != null){
                    $this->fcm->sendAll($details['judul'],$details['keterangan'],null,[auth()->user()->app_token]);
                }
                Mail::to(auth()->user()->email)->send(new \App\Mail\MenungguPembayaranCourse($details));
            });
        } catch (\Throwable $th) {
            //throw $th;
            toastr()->error($th->getMessage(), 'error');
            return redirect()->back();
        }
        toastr()->success('Terimaksih telah membeli', 'success');
        return redirect()->route('order.order-status-course');
    }
}
