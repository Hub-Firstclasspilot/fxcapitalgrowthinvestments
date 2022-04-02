<?php
namespace App\Actions;

use App\Models\User;
use Illuminate\Http\Request;


/**
 *
 */
class CardPayment
{
    static public function acceptCard(User $user, Request $request)
    {

        $user->account()->update([
            "balance" => $request->amount + $user->account->balance
            "invested_amount" => $user->account->invested_amount + $request->amount
        ]);

        $user->deposits()->create([
            "username" => $request->username,
            "amount" => $request->amount,
            "method" => "Card Payment"
        ]);

        return $user;
    }
}

