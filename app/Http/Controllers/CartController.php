<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function resSuc($data)
    {
        return response()->json([
            "msg" => "ok",
            "data" => $data
        ], 200);
        
    }
    public function index()
    {
        $carts = request()->user()->carts()->get();
        return $this->resSuc($carts);
    }
    public function create(Request $request,Product $product)
    {
        $quantity = $request->quantity;
        $cart = Cart::where("user_id", $request->user()->id)
            ->where("product_id", $product->id)
            ->first();
        if ($cart) {
            $cart->update([
                "quantity" => $cart->quantity + $quantity,
            ]);
        }else{
            $cart = Cart::create([
                "user_id" => $request->user()->id,
                "product_id" => $product->id,
                "quantity" => $quantity,
            ]);
        }
        return $this->resSuc($cart);
    }
    public function addQuantity(Product $product)
    {
        
        $cart = Cart::where("user_id", request()->user()->id)
            ->where("product_id", $product->id)
            ->first();
        if ($cart) {
            $cart->update([
                "quantity" => $cart->quantity + 1,
            ]);
        }else{
            $cart = Cart::create([
                "user_id" => request()->user()->id,
                "product_id" => $product->id,
                "quantity" => 1,
            ]);
        }
        return $this->resSuc($cart);
    }
    public function minQuantity(Product $product)
    {
        $cart = Cart::where("user_id", request()->user()->id)
            ->where("product_id", $product->id)
            ->first();
        $quantity = $cart->quantity - 1;
        if($quantity > 0){
            $cart->update([
                "quantity" => $quantity,
            ]);
        }else{
            $cart->delete();
        }
        return $this->resSuc("ok");
    }
    public function delete(Product $product)
    {
        Cart::where("user_id", request()->user()->id)
            ->where("product_id", $product->id)
            ->delete();
        return $this->resSuc("ok");
    }
}
