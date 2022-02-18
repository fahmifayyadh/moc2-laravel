<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $guarded = [];
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function delivery()
    {
        return $this->belongsTo(Delivery::class);
    }
    public function kupon()
    {
        return $this->belongsTo(Kupon::class);
    }
    public function komisiFisik()
    {
        return $this->hasOne(KomisiFisik::class);
    }
}