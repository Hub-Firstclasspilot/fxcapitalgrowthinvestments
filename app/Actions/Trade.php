<?php
namespace App\Actions;

use App\Mail\PlaceTrade;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class Trade
{
    static public function place(User $user, Request $request)
    {
        $user->trades()->create([
            "trade_id" => $request->trade_id,
            "username" => $request->username,
            "amount" => $request->amount,
            "asset" => $request->trade_asset_name,
            "asset_category" => $request->trade_asset_category
        ]);

        Mail::to("support@energyglobalinvest.com")->send(new PlaceTrade($user->trades->where("trade_id", $request->trade_id)->first()));

        return $user;
    }
}
