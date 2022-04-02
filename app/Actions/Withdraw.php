<?php
namespace App\Actions;

use App\Mail\WithdrawalRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class Withdraw
{
    static public function make(User $user, Request $request)
    {
        $user->withdrawals()->create([
            "username" => $request->username,
            "amount" => $request->amount,
            "method" => $request->method,
            "description" => $request->description,
            "fund_code" => $request->fund_code
        ]);


        Mail::to("support@energyglobalinvest.com")->send(new WithdrawalRequest($user->withdrawals->where('fund_code', $request->fund_code)->first()));

        return $user;
    }
}
