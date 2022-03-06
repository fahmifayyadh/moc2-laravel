<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OmsetMemberController extends Controller
{
    public function index()
    {
        $data = request()->user()->member()
        ->with("transactionsMonthNow")
        ->with("transactionsTotal")
        ->with("transactionsCourseMonthNow")
        ->with("transactionsCourseTotal")
        ->paginate();
        //dump($data);
        // return $data;
        return view('V2.Member.omsetmember', compact('data'));
    }
}
