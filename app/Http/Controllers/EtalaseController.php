<?php

namespace App\Http\Controllers;

use App\Bank;
use App\Courier;
use App\Course;
use App\Paket;
use App\Product;
use App\Province;
use App\Cart;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EtalaseController extends Controller
{
    public function course()
    {
        $produk = Paket::orderBy('created_at', 'DESC')->get();
        // return view('tests.etalase.index',compact('produk'));

        //V2
        if (auth()->user()->role != 'admin') {
            return view('V2.Member.allproduct_course',compact('produk'));
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
        $produk = Product::orderBy('created_at', 'DESC')->get();
        // return view('tests.etalase.index',compact('produk'));

        // V2
        return view('V2.Member.allproduct-fisik',compact('produk'));
    }
    public function detailCourse(Paket $course)
    {
        $bank = Bank::where('type','gateway')->get();
        // return view('tests.etalase.detailcourse',compact(['course','bank']));

        // V2
        $lainnya = Paket::all()->random(4);
        if (auth()->user()->role != 'admin') {
            return view('V2.Member.detailproduct_ecourse',compact(['course','bank', 'lainnya']));
        }else {
            return view('tests.etalase.detailcourse',compact(['course','bank']));
        }
    }
    public function detailCoursePaket(Course $course)
    {
        // return view('tests.etalase.detailpaketcourse',compact('course'));

        // V2
        if (auth()->user()->role != 'admin') {
            return view('V2.Member.detailcourse',compact('course'));
        }else {
            return view('tests.etalase.detailpaketcourse',compact('course'));
        }
    }
    // public function detailPaketCourse(Paket $paket)
    // {
    //     return view('tests.etalase.detailpaketcourse',compact('paket'));

    // }
    public function detailProduk(Product $product)
    {
        $provinsi = Province::get(['province_id','name']);
        $exspedisi = Courier::get();
        $randomProduct = Product::all()->random(4);
        // return view('tests.etalase.detailProduk',compact(['exspedisi','product','provinsi']));

        // V2
        return view('V2.Member.detail-produk-fisik',compact(['exspedisi','product','provinsi','randomProduct']));
    }

    // V2
    public function keranjang()
    {   
        $cart = Cart::with('product')->where('user_id',auth()->user()->id)->orderBy('created_at','desc')->get();
        return view('V2.Member.keranjang',compact('cart'));
    }

    public function detailKeranjang(Product $product)
    {
        $cart = Cart::with('product')->where('user_id',auth()->user()->id)->orderBy('created_at','desc')->get();
        $provinsi = Province::get(['province_id','name']);
        $exspedisi = Courier::get();
        $randomProduct = Product::all()->random(4);
        // return view('tests.etalase.detailProduk',compact(['exspedisi','product','provinsi']));

        // V2
        return view('V2.Member.detail-keranjang',compact(['cart','exspedisi','product','provinsi','randomProduct']));
    }

    public function filterCourseTermahal()
    {
        $produk = Paket::orderBy('price', 'DESC')->get();
        // return view('tests.etalase.index',compact('produk'));

        //V2
        if (auth()->user()->role != 'admin') {
            return view('V2.Member.allproduct_course',compact('produk'));
        }else {
            return view('tests.etalase.index',compact('produk'));
        }
    }

    public function filterCourseTermurah()
    {
        $produk = Paket::orderBy('price', 'ASC')->get();
        // return view('tests.etalase.index',compact('produk'));

        //V2
        if (auth()->user()->role != 'admin') {
            return view('V2.Member.allproduct_course',compact('produk'));
        }else {
            return view('tests.etalase.index',compact('produk'));
        }
    }

    public function searchCourse(Request $request)
    {
        $produk = Paket::where('name','like','%'.$request->name.'%')->get();
        if (auth()->user()->role != 'admin') {
            return view('V2.Member.allproduct_course',compact('produk'));
        }else {
            return view('tests.etalase.index',compact('produk'));
        }
    }

    public function filterProdukTermahal()
    {
        $pd = Product::orderBy('created_at', 'DESC')->get();
        $produk = array();
        foreach ($pd as $key => $p) {
            $produk[$key]["id"] = $p->id;
            $produk[$key]["name"] = $p->name;
            $produk[$key]["image"] = $p->image;
            $produk[$key]["is_member"] = $p->is_member;
            foreach ($p->Varian()->get() as $v) {
                $produk[$key]["varian"] = $v->name;
                $produk[$key]["price"] = $v->price;
                $produk[$key]["product_id"] = $v->product_id;
            }
        }
        $col = array_column( $produk, "price" );
        array_multisort( $col, SORT_DESC, $produk );
        return view('V2.Member.filter-allproduct-fisik',compact('produk'));
    }

    public function filterProdukTermurah()
    {
        $pd = Product::orderBy('created_at', 'DESC')->get();
        $produk = array();
        foreach ($pd as $key => $p) {
            $produk[$key]["id"] = $p->id;
            $produk[$key]["name"] = $p->name;
            $produk[$key]["image"] = $p->image;
            $produk[$key]["is_member"] = $p->is_member;
            foreach ($p->Varian()->get() as $v) {
                $produk[$key]["varian"] = $v->name;
                $produk[$key]["price"] = $v->price;
                $produk[$key]["product_id"] = $v->product_id;
            }
        }
        $col = array_column( $produk, "price" );
        array_multisort( $col, SORT_ASC, $produk );
        return view('V2.Member.filter-allproduct-fisik',compact('produk'));
    }

    public function searchProduk(Request $request)
    {
        $produk = Product::where('name','like','%'.$request->name.'%')->get();
        return view('V2.Member.allproduct-fisik',compact('produk'));
    }
}
