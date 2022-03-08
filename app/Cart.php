<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $guarded = [];
    Protected $with = ["product"];

    public function product() {
        return $this->belongsTo(Product::class);
}


}
