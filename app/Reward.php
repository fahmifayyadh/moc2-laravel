<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reward extends Model
{
    protected $guarded = [];
    public function transactionReward()
    {
        return $this->hasMany(TransactionReward::class);
    }
}
