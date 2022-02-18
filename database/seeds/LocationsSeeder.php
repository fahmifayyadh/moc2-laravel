<?php

use App\Province;
use App\City;
use App\Courier;
use App\Subdistrict;
use Illuminate\Database\Seeder;
use Kavist\RajaOngkir\Facades\RajaOngkir;

class LocationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $daftarProvinsi = RajaOngkir::provinsi()->all();
        $daftarKurir = ['jne', 'tiki', 'pos'];
        foreach ($daftarKurir as $kurir) {
            Courier::create([
                'name' => $kurir,
            ]);
        }
        foreach ($daftarProvinsi as $provinceRow) {
            Province::create([
                'province_id' => $provinceRow['province_id'],
                'name'        => $provinceRow['province'],
            ]);
            $daftarKota = RajaOngkir::kota()->dariProvinsi($provinceRow['province_id'])->get();
            foreach ($daftarKota as $cityRow) {
                City::create([
                    'province_id'   => $provinceRow['province_id'],
                    'city_id'       => $cityRow['city_id'],
                    'name'          => $cityRow['city_name'],
                ]);
                // $kecamatan = RajaOngkir::kecamatan()->dariKota($cityRow['city_id'])->get();
                // foreach ($kecamatan as $k) {
                //     Subdistrict::create([
                //         'city_id' => $cityRow['city_id'],
                //         'subdistrict_id' => $k['subdistrict_id'],
                //         'name' => $k['subdistrict_name'],
                //     ]);
                // }
            
            }
        }
    }
}
