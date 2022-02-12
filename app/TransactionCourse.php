<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransactionCourse extends Model
{
    protected $guarded = [];
    public function paket()
    {
        return $this->belongsTo(Paket::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function agent()
    {
        return $this->belongsTo(Agent::class);
    }
    public function komisi()
    {
        return $this->hasOne(Komisi::class);
    }
    public function progress()
    {
        return $this->hasMany(Progress::class);
    }
    public function kupon()
    {
        return $this->belongsTo(Kupon::class);
    }
}
