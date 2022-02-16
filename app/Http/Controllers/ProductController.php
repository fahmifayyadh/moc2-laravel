<?php

namespace App\Http\Controllers;

use \App\Varian;
use \App\Product;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->generateID = mt_rand(1000000000,9999999999);
        $this->generateVarianID = mt_rand(1000000000,9999999999);
        $this->generateUnique = mt_rand(1000000000,9999999999);
    }

    public function index()
    {
        $products = Product::All();
        // return view('tests.fisik.index',compact('products'));

        // V2
        return view('V2.Admin.kelola-produk.produk-fisik',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('tests.fisik.add-fisik');

        // V2
        return view('V2.Admin.kelola-produk.create-produk-fisik');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $point_pembeli = floatval(str_replace(',', '.', str_replace('.', '', $request->point_pembeli)));
        $point_sponsor = floatval(str_replace(',', '.', str_replace('.', '', $request->point_sponsor)));
        $commission = floatval(str_replace(',', '.', str_replace('.', '', $request->commission)));

        $fileName = null;
        $msg = [
            'numeric' => 'Inputan :attribute harus berupa angka',
            'required' => 'Inputan :attribute wajib diisi',
        ];
        $this->validate($request,[
            'name' => 'required',
            'image' => 'nullable|image|max:2048',
            'point' => 'numeric|min:0',
            'berat' => 'nullable|numeric'
        ], $msg);
        if ($request->file('image') != null) {
            $file = $request->file('image');
            $fileName = substr(md5(microtime()), 0, 100).'.'.$file->getClientOriginalExtension();
            $request->file('image')->storeAs('public/product/main/',$fileName);
        }
        $named = $request->name;
        $a = Product::create([
            'id'   => $this->generateID,
            'name' => Str::title($named),
            'slug' => Str::slug(preg_replace('/[^a-zA-Z0-9\']/', '-', $named)) .'-' . $this->generateUnique,
            'desc' => $request->desc,
            'image'=> $fileName,
            'point_pembeli' => (int)$point_pembeli,
            'point_sponsor' => (int)$point_sponsor,
            'commission' => (int)$commission,
            'berat' => $request->berat,
            'length' => $request->length,
            'width' => $request->width,
            'height' => $request->height,
        ]);
        for ($i=0; $i < count($request->nameVarian); $i++) { 
            Varian::create([
                'id' => mt_rand(1000000000,9999999999),
                'product_id' => $a->id,
                'name' => $request->nameVarian[$i],
                'price' => $request->priceVarian[$i],
            ]);
        }
        return redirect()->route('produk.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $product = Product::where('slug',$slug)->firstOrFail();
        dd($product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        // return view('tests.fisik.edit-fisik', compact('product'));

        // V2
        return view('V2.Admin.kelola-produk.edit-produk-fisik', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $point_pembeli = floatval(str_replace(',', '.', str_replace('.', '', $request->point_pembeli)));
        $point_sponsor = floatval(str_replace(',', '.', str_replace('.', '', $request->point_sponsor)));
        $commission = floatval(str_replace(',', '.', str_replace('.', '', $request->commission)));

        $msg = [
            'numeric' => 'Inputan :attribute harus berupa angka',
            'required' => 'Inputan :attribute wajib diisi',
        ];
        $this->validate($request,[
            'name' => 'required',
            'image' => 'nullable|image|max:2048',
            'point' => 'numeric|min:0',
            'berat' => 'nullable|numeric'
            // 'price' => 'numeric|min:0',
        ], $msg);
        
        $p = Product::findOrFail($id);
        $fileName = $p->image; 
        if ($request->file('image') != null) {
            File::delete(storage_path('app/public/product/main/'.$fileName));
            $file = $request->file('image');
            $fileName = substr(md5(microtime()), 0, 100).'.'.$file->getClientOriginalExtension();
            $request->file('image')->storeAs('public/product/main/',$fileName);
        }

        $named = $request->name;
        Product::where('id',$id)
        ->update([
            'name' => $p->name==$named ? $p->name : Str::title($named),
            'slug' => $p->name==$named ? $p->slug : Str::slug(preg_replace('/[^a-zA-Z0-9\']/', '-', $named)) .'-' . $this->generateUnique,
            'desc' => $request->desc,
            'image'=> $fileName,
            'berat' => $request->berat,
            'length' => $request->length,
            'width' => $request->width,
            'height' => $request->height,
            'point_pembeli' => (int)$point_pembeli,
            'point_sponsor' => (int)$point_sponsor,
            'commission' => (int)$commission,
            
        ]);
        // Varian::whereId($request->varianID)->update([
        //     'name' 
        // ]);
        return redirect()->route('produk.index');
    }
    public function updateVarian(Request $request, $id)
    {
        Varian::whereId($id)
        ->update([
            'name' => $request->nameVarian,
            'price' => $request->priceVarian,
        ]);
        return redirect()->back();
    }
    public function storeVarian(Request $request, $id)
    {
        Varian::create([
            'id' => mt_rand(1000000000,9999999999),
            'product_id' => $id,
            'name' => $request->nameVarian,
            'price' => $request->priceVarian,
        ]);
        return redirect()->back();
    }

    public function deleteVarian($id)
    {
        Varian::destroy($id);
        return redirect()->back();
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Product $product)
    {
        $product->delete();
        return redirect()->back();
    }
    public function search(Request $request)
    {
        $products = Product::where('name','like','%'.$request->name.'%')
        ->orWhere('point_pembeli',$request->point)
        ->orWhere('commission',$request->price)
        ->get();
        // ->orWhere('desc','like','%'.$request->desc.'%')
        // return view('tests.fisik.index',compact('products'));

        // V2
        return view('V2.Admin.kelola-produk.produk-fisik',compact('products'));
    }
}
