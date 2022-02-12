<?php

namespace App\Http\Controllers;

use App\City;
use App\Province;
use App\Subdistrict;
use App\User;
use Illuminate\Http\Request;
use Kavist\RajaOngkir\Facades\RajaOngkir;

class OngkirController extends Controller
{
    public function getKurir()
    {
        $a = RajaOngkir::kurir();
        dd($a);
    }
    public function getCity(Request $request)
    {
        $city = City::where('province_id', $request->province_id)->pluck('name', 'city_id');
        return response()->json($city);
    }
    public function getKecamatan(Request $request)
    {
        $kecamatan = Subdistrict::where('city_id', $request->city_id)->pluck('name', 'subdistrict_id');
        return response()->json($kecamatan);
    }
    public function getOngkir($kec,$product,$exspedisi,$kuantiti)
    {
        $params = [
            'origin'        => User::where('city', '!=', null)->where('role', 'admin')->first()->city,
            'originType'    => 'city',
            'destination'   => (int)$kec,
            'destinationType' => 'subdistrict',
            'weight'        => $product->berat*$kuantiti,
            'courier'       => $exspedisi,
        ];
        if($product->length != null ){
            $params['length'] = $product->length;
        }

        if($product->width != null ){
            $params['width'] = $product->width;
        }
        if($product->height != null ){
            $params['height'] = $product->height*$kuantiti;
        }
             $ongkir = RajaOngkir::ongkosKirim($params)->get();
             return $ongkir;
        // return $ongkir[0]['costs'][0]['cost'][0]['value'];
    }
    
}
