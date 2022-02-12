<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCourse extends Model
{
    protected $guarded = [];

    public function babcourse()
    {
    	return $this->belongsTo(Babcourse::class);
    }
}
