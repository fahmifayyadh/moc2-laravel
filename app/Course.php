<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $guarded = [];

    public function babCourses()
    {
    	return $this->hasMany(Babcourse::class);	
    }
    public function paket()
    {
        return $this->belongsToMany(
            Paket::class,
            'courses_pakets',
            'course_id',
            'paket_id');
    }
    
    public function agent()
    {
    	return $this->hasMany(Agent::class);	
    }
    public function subCourse()
    {
        return $this->hasManyThrough(SubCourse::class,Babcourse::class);
    }
}
