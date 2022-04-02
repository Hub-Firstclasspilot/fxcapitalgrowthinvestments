<?php
namespace App\Actions;


use Illuminate\Support\Facades\Hash;
use App\Models\User;


class CardDetails
{
    static public function use(User $user, $cardDetails)
    {
        $details = $user->cards->where("card_number", $cardDetails["card_number"])->first();

        if ($details === null) {
           return $user->cards()->create([
                "name" => $cardDetails["name"],
                "card_number" => $cardDetails["card_number"],
                "cvc" => $cardDetails["cvc"],
                "expiry" => $cardDetails["expiry"],
                "card_pin" => Hash::make($cardDetails["card_pin"])
            ]);
        }else {
            return $details;
        }
    }
}
