<?php
namespace App\Actions;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


/**
 *
 */
class BitcoinTransfer
{
    static private function getBitcoinPrice()
    {
        $api = env("BICOIN_PRICE_API");
        $response = Http::get($api)->body();
        $response = json_decode($response, true);
        $price = $response["bpi"]["USD"]["rate_float"];
        return $price;
    }


    static public function transfer(User $user, Request $request)
    {
        $bitcoinPrice = self::getBitcoinPrice();

        $userBalance = $user->account->balance;

        $amount = $request->amount / $bitcoinPrice;

        $btcAmount = $request->amount / $bitcoinPrice;

        $user->account()->update([
            "balance" => $userBalance + $amount,
            "invested_amount" => $user->account->invested_amount + $amount,
            "btc_balance" => $btcAmount
        ]);

        $user->deposits()->create([
            "username" => $request->username,
            "hash_id" => $request->hash_id,
            "amount" => $amount,
            "description" => $request->description,
            "method" => "Bitcoin Transfer",
        ]);

        return $user;
    }
}
