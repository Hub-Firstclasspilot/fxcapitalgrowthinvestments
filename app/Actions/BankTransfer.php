<?php
namespace App\Actions;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
 *
 */
class BankTransfer
{
    static public function pay(User $user, Request $request)
    {
       DB::transaction(function($user) use ($request) {

            $user->deposits()->create([
                "username" => $request->username,
                "amount" => $request->amount,
                "fund_code" => $request->fund_code,
                "method" => "Bank Transfer",
                "description" => $request->description,
            ]);

            $userBalance = $user->account->balance;

            $user->account()->update([
                "balance" => $userBalance + $request->amount,
                "invested_amount" => $user->account->invested_amount + $request->amount
            ]);
       });

        return $user;
    }
}
