<?php

namespace App\Http\Controllers;

use App\Paket;
use App\Reward;
use Xendit\Xendit;
use Illuminate\Http\Request;

class XenditController extends Controller
{
	public function __construct()
	{
		$this->keyXendit = Xendit::setApiKey('xnd_development_8Q3LOf1ApYpdcGNVQCUBbAyx71ho76ESN9qx16ctKwk0MG0Y9DeJ0TDyML4Pra');
	}
	public function getBalance()
	{
		$this->keyXendit;
		$getBalance = \Xendit\Balance::getBalance('CASH');
		return $getBalance['balance'];
	}
	public function createInvoice($id,$kode,$email,$desc,$price)
	{
		$this->keyXendit;
		$params = [
			'external_id' => $id.'_'.$kode,
			'payer_email' => $email,
			'description' => $desc,
			'amount' => $price,
		];

		$createInvoice = \Xendit\Invoice::create($params);
		return $createInvoice;
	}
	public function getBank()
	{
		$this->keyXendit;
		$getVABanks = \Xendit\VirtualAccounts::getVABanks();
		return $getVABanks;
	}
	public function payout($exid, $jumlah, $code, $name, $no, $desc)
	{
		$this->keyXendit;
		$params = [
			'external_id' => 'MOC-' . $exid,
			'amount' => $jumlah,
			'bank_code' => $code,
			'account_holder_name' => $name,
			'account_number' => $no,
			'description' => $desc,
		];

		\Xendit\Disbursements::create($params);
	}
	public function callback(Request $request)
	{
		Paket::create([
			'name' => $request->all(),
		]);
	}
	public function expinvoice($x = '')
    {
        $x = \Xendit\Invoice::expireInvoice($x);
        return $x;
    }
    public function invoice($x ='')
    {
        $this->keyXendit;
        $x = \Xendit\Invoice::retrieve($x);
        return $x;
    }
}
