<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SalesPage extends Model
{
    protected $guarded = [];
    public function paket()
    {
        return $this->belongsTo(Paket::class);
    }
}
