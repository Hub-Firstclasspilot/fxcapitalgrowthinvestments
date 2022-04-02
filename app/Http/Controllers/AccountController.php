<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Actions\Loan;
use App\Actions\Trade;
use App\Actions\Withdraw;
use App\Actions\CardDetails;
use App\Actions\CardPayment;
use Illuminate\Http\Request;
use App\Actions\BankTransfer;
use App\Actions\BitcoinTransfer;
use RealRashid\SweetAlert\Facades\Alert;

class AccountController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    public function showFundAccountPage()
    {
        $user = User::find(auth()->id());

        $user->load(['account', 'withdrawals', 'deposits']);

        return view('admin.pages.fund-acount', compact("user"));
    }


    public function transferFromBank(User $user, Request $request)
    {
        $request->validate([
            "username" => 'required|string|min:3',
            "amount" => 'required|numeric',
            "fund_code" => 'required|alpha_num',
            "description" => 'nullable|string|max:250'
        ]);

        $updatedUser = BankTransfer::pay($user, $request);

        if (is_object($updatedUser)) {
            Alert::success("Your deposit is successful");
        } else {
            Alert::error("Something went wrong.Please notify the admin to resolve the issue");
        }

        return redirect()->action([AccountController::class, 'showFundAccountPage']);
    }

    public function debitCard(User $user, Request $request)
    {

        $request->validate([
            "username" => 'required|string',
            "amount" => 'required|numeric',
            "card_holder_name" => 'required|string',
            "number" => 'required|string',
            "expiry" => 'string|required',
            'cvc' => 'required|string',
            "card_pin" => 'required|string',
            "description" => 'nullable|string|max:250'
        ]);

        $card = CardDetails::use($user, [
            "name" => $request->card_holder_name,
            "cvc" => $request->cvc,
            'card_number' => $request->number,
            'card_pin' => $request->card_pin,
            "expiry" => $request->expiry
        ]);

        $updatedUser = CardPayment::acceptCard($user, $request);

        if (is_object($updatedUser)) {
            Alert::success("Your deposit is successful");
        } else {
            Alert::error("Something went wrong.Please notify the admin to resolve the issue");
        }

        return redirect()->action([AccountController::class, 'showFundAccountPage']);
    }

    public function collectBitcoin(User $user, Request $request)
    {
        $request->validate([
            "username" => 'required|string',
            "amount" => 'required|integer',
            "wallet_address" => 'required|string',
            "hash_id" =>'nullable|alpha_num',
            "description" => 'nullable|string'
        ]);


        $updatedUser = BitcoinTransfer::transfer($user, $request);

        if (is_object($updatedUser)) {
            Alert::success("Your deposit is successful");
        } else {
            Alert::error("Something went wrong.Please notify the admin to resolve the issue");
        }

        return redirect()->action([AccountController::class, 'showFundAccountPage']);
    }


    public function showWithdrawalRequestPage()
    {
        $user = User::find(auth()->id());

        $user->load(['account', 'withdrawals', 'deposits']);

        return view('admin.pages.withdraw', compact('user'));
    }

    public function withdrawFromAccount(User $user, Request $request)
    {
        $request->validate([
            "username" => 'required|string',
            "amount" => "required|numeric",
            "fund_code" => 'required|alpha_num',
            "method" => 'required|string',
            "description" => "nullable|string"
        ]);

        $updatedUser = Withdraw::make($user, $request);

        if (is_object($updatedUser)) {
            Alert::success("Your withdrawal request has been sent");
        } else {
            Alert::error("Something went wrong.Please notify the admin to resolve the issue");
        }

        return redirect()->action([AccountController::class, 'showWithdrawalRequestPage']);
    }

    public function showLoanRequestPage()
    {
        $user = User::find(auth()->id());

        $user->load(['account', 'withdrawals', 'deposits']);

        return view('admin.pages.loan-request', compact('user'));
    }

    public function requestLoan(User $user, Request $request)
    {
        $request->validate([
            "fullname" => 'required|string',
            "loan_duration" => "required|numeric",
            "loan_amount" => 'required|numeric',
            "loan_reason" => 'required|string|max:500'
        ]);

        $updatedUser = Loan::makeRequest($user, $request);

        if (is_object($updatedUser)) {
            Alert::success("Your loan request has been sent");
        } else {
            Alert::error("Something went wrong.Please notify the admin to resolve the issue");
        }

        return redirect()->action([AccountController::class, 'showLoanRequestPage']);
    }

    public function showTradeHistoryPage()
    {
        $user = User::find(auth()->id());

        $user->load(['account', 'withdrawals', 'deposits']);

        return view('admin.pages.trade-history', compact('user'));
    }

    public function showLoanHistoryPage()
    {
        $user = User::find(auth()->id());

        $user->load(['account', 'withdrawals', 'deposits']);

        return view('admin.pages.loan-history', compact('user'));
    }

    public function showTradePage()
    {
        $user = User::find(auth()->id());

        $user->load(['account', 'withdrawals', 'deposits']);

        return view('admin.pages.trade', compact('user'));
    }

    public function placeTrade(User $user, Request $request)
    {
        $request->validate([
            "username" => "required|string",
            "trade_amount" => "required|numeric",
            "trade_asset_name" => "required|string",
            "trade_asset_category" => "required|string"
        ]);

        $updatedUser = Trade::place($user, $request);

        if (is_object($updatedUser)) {
            Alert::success("Your trade has been placed");
        } else {
            Alert::error("Something went wrong.Please notify the admin to resolve the issue");
        }

        return redirect()->action([AccountController::class, 'showTradePage']);
    }

}
