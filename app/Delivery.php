<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    protected $guarded = [];
    public function transaksi()
    {
        return $this->hasMany(Transaction::class);
    }
    public function province()
    {
        return $this->belongsTo(Province::class);
    }
    public function city()
    {
        return $this->belongsTo(City::class);
    }
    public function subdistrict()
    {
        return $this->belongsTo(Subdistrict::class);
    }
}
