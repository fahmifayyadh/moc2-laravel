<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
    protected $guarded = []; 

    public function Varian()
    {
    	return $this->hasMany('App\Varian','product_id');
    }
    public function transaksi()
    {
        return $this->hasMany(Transaction::class);
    }
}
