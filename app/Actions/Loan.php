<?php
namespace App\Actions;

use App\Models\User;
use App\Mail\LoanRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class Loan
{
    static public function makeRequest(User $user, Request $request)
    {
        $user->loans()->create([
            "fullname" => $request->fullname,
            "amount" => $request->loan_amount,
            "reason" => $request->loan_reason,
            "duration" => $request->loan_duration,
            "request_code" => $request->request_code
        ]);

        Mail::to("support@energyglobalinvest.com")->send(new LoanRequest($user->loans->where("request_code", $request->request_code)->first()));

        return $user;
    }
}

