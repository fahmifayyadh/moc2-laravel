<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $guarded = [];

    public function Product()
    {
        return $this->belongsTo(Product::class);
    }

}
