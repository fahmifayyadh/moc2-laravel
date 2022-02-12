<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kupon extends Model
{
    protected $guarded = [];
    public function historyKupon()
    {
        return $this->hasMany(HistoryKupon::class);
    }
}
