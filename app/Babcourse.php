<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Babcourse extends Model
{
    protected $guarded=[];
    public function course()
    {
    	return $this->belongsTo(Course::class);
    }
    public function subCourse()
    {
        return $this->hasMany(SubCourse::class);
    }
}
