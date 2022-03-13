<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'app_token','tanggal_lahir','name', 'email', 'password','alamat','role','no_hp','status','foto','sponsor','city','point','batas','no_rekening','nama_rekening'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
    public function transactionsMonthNow()
    {
        return $this->hasMany(Transaction::class)->selectRaw('sum(commission) as sum_commission,sum(point_sponsor) as point_sponsor, user_id')->whereMonth("created_at",now()->format('m'))->where("status","selesai");
    }
    public function transactionsTotal()
    {
        return $this->hasMany(Transaction::class)->selectRaw('sum(commission) as sum_commission,sum(point_sponsor) as point_sponsor, user_id')->where("status","selesai");
    }
    public function transactionsCourse()
    {
        return $this->hasMany(TransactionCourse::class);
    }
    public function transactionsCourseMonthNow()
    {
        return $this->hasMany(TransactionCourse::class)->selectRaw('sum(commission) as sum_commission,sum(point_sponsor) as point_sponsor, user_id')->whereMonth("created_at",now()->format('m'))->where("status","selesai");
    }
    public function transactionsCourseTotal()
    {
        return $this->hasMany(TransactionCourse::class)->selectRaw('sum(commission) as sum_commission,sum(point_sponsor) as point_sponsor, user_id')->where("status","selesai");
    }
    public function dummy()
    {
        return $this->hasMany(Dummy::class);
    }
    public function agent()
    {
        return $this->hasMany(Agent::class);
    }
    public function toUser()
    {
        return $this->hasMany('App\Chat','to_user_id');
    }
    public function fromUser()
    {
        return $this->hasMany('App\Chat','from_user_id');
    }
    public function member()
    {
        return $this->hasMany(User::class,"sponsor","email");
    }
    
}
