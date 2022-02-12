<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Komisi extends Model
{
    protected $guarded = [];
    public function transactionCourse()
    {
        return $this->belongsTo(TransactionCourse::class);
    }
}
