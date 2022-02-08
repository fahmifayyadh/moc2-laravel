<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Paket extends Model
{
    use SoftDeletes;
    protected $guarded = [];
    public function course()
    {
        return $this->belongsToMany(
            Course::class,
            'courses_pakets',
            'paket_id',
            'course_id');
    }

    public function transCourse()
    {
    	return $this->hasMany(TransactionCourse::class);	
    }
    public function agent()
    {
        return $this->hasMany(Agent::class);
    }
    public function sales()
    {
        return $this->hasOne(SalesPage::class);
    }
}
