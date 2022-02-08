<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    protected $guarded = [];
    public function transaksi()
    {
        return $this->hasMany(TransactionCourse::class);
    }
    public function paket()
    {
        return $this->belongsTo(Paket::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
