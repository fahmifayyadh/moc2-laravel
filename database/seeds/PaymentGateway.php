<?php

use App\Bank;
use App\Http\Controllers\XenditController;
use Illuminate\Database\Seeder;

class PaymentGateway extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $xendit = new XenditController();
        $get = $xendit->getBank();

        foreach ($get as $g) {
            Bank::create([
                'name'=>$g['name'],
                'code'=>$g['code'],
                'type' => 'gateway'
            ]);
    }
    }
}
