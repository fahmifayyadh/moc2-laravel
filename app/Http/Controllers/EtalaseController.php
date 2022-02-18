<?php

namespace App\Http\Controllers;

use App\Bank;
use App\Courier;
use App\Course;
use App\Paket;
use App\Product;
use App\Province;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EtalaseController extends Controller
{
    public function course()
    {
        $produk = Paket::get();
        // return view('tests.etalase.index',compact('produk'));

        //v2
        if (auth()->user()->role != 'admin') {
            return view('v2.member.allproduct_course',compact('produk'));
        }else {
            return view('tests.etalase.index',compact('produk'));
        }
    }
    // public function paketCourse()
    // {
    //     $paket = Paket::where('name','!=','reguler')->has('course')->with('course')->get();
    //  if($paket->count() == 0 || $paket[0]->course->count() == 0){
    //         $paket = [];
    // }
    //     return view('tests.etalase.paketCourse',compact('paket'));
    // }
    public function produk()
    {
        $produk = Product::get();
        // return view('tests.etalase.index',compact('produk'));

        // V2
        return view('V2.Member.allproduct-fisik',compact('produk'));
    }
    public function detailCourse(Paket $course)
    {
        $bank = Bank::where('type','gateway')->get();
        return view('tests.etalase.detailcourse',compact(['course','bank']));
    }
    public function detailCoursePaket(Course $course)
    {
        return view('tests.etalase.detailpaketcourse',compact('course'));
    }
    // public function detailPaketCourse(Paket $paket)
    // {
    //     return view('tests.etalase.detailpaketcourse',compact('paket'));

    // }
    public function detailProduk(Product $product)
    {
        $provinsi = Province::get(['province_id','name']);
        $exspedisi = Courier::get();
        return view('tests.etalase.detailProduk',compact(['exspedisi','product','provinsi']));

        // V2
        // return view('V2.Member.detail-produk-fisik',compact(['exspedisi','product','provinsi']));
    }

    // V2
    public function keranjang()
    {
        return view('V2.Member.keranjang');
    }
}
