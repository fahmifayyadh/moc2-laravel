<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KomisiFisik extends Model
{
    protected $guarded = [];
    public function transaction()
    {
        return $this->belongsTo(Transaction::class);
    }
}
