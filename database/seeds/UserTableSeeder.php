<?php

use App\Course;
use App\Delivery;
use App\Transaction;
use App\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(Delivery::class,10)->create();
        // factory(User::class, 10)->create()->each(function($u) {
        //     $u->transactions()->save(factory(Transaction::class)->make());
        // });
        User::create([
        	'role' => 'admin',
        	'name' => 'admin',
            'email' => 'a@gmail.com',
            'alamat' => 'ngulng',
            'no_hp' => '9084598',
        	'password' => bcrypt('a'),
        ]);
        User::create([
        	'role' => 'member',
            'name' => 'suroyo',
            'alamat' => 'halo',
            'no_hp' => '8748937',
        	'email' => 'b@gmail.com',
        	'password' => bcrypt('b'),
        ]);
    //    $s =  User::first();
    //     $cr  = Course::whereHas('transactionsCourse',function($query) use($s){
    //         return $query->whereDate('batas','>=',Carbon::now()->format('Y-m-d'))->where('user_id',$s->id)->where('status','selesai');
    //     })->get();
    //     foreach ($cr as $key => $value) {
    //         $s->courses()->save($value,['progress'=>3,'batas'=>'2020-11-11']);
    //     }
    }
}
