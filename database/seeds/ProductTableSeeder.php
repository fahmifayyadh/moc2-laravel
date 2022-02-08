<?php

use App\Bank;
use App\Product;
use App\Varian;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Product::class, 10)->create()->each(function($u) {
            $u->Varian()->save(factory(Varian::class)->make());
        });

        Bank::create([
            'name' => 'bri',
            'code' => 'bri',
            'nama_pemilik' => 'moc',
            'no_rekening' => '7385268746',
            'type'=>'personal'
        ]);
        Bank::create([
            'name' => 'bca',
            'code' => 'bca',
            'nama_pemilik' => 'moc',
            'no_rekening' => '7382668746',
            'type'=>'personal'
        ]);
        Bank::create([
            'name' => 'bni',
            'code' => 'bni',
            'nama_pemilik' => 'moc',
            'no_rekening' => '7382688746',
            'type'=>'personal'
        ]);
    }
}
