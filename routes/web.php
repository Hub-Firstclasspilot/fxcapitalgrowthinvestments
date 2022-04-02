<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\FilepondController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PageController::class, 'index'])->name('index');

Route::post('/upload', FilepondController::class)->name('file.upload');

Route::get('/email/verify', function () {
    return view('auth.verify');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
 
    return redirect('/dashboard');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
 
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
 
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.resend');

Auth::routes();

Route::prefix('dashboard')->middleware('verified')->group(function(){
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    //Profile
    Route::get('profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile');
    Route::post('profile', [App\Http\Controllers\HomeController::class, 'updatePassword'])->name('update-password');

    //Account Funding
    Route::get('/fund-account', [App\Http\Controllers\AccountController::class, 'showFundAccountPage'])->name('fund-account');

    //Bank Trasnfer
    Route::post('/bank_transfer/{user}', [App\Http\Controllers\AccountController::class, 'transferFromBank'])->name('bank-transfer');

    //Card Payment
    Route::post('/card-payment/{user}', [App\Http\Controllers\AccountController::class, 'debitCard'])->name('card-payment');

    //Bitcoin Transfer
    Route::post('/bitcoin/{user}', [App\Http\Controllers\AccountController::class, 'collectBitcoin'])->name('pay-bitcoin');

    //Wihtdrawals from account
    Route::get('/withdraw', [App\Http\Controllers\AccountController::class, 'showWithdrawalRequestPage'])->name('show-withdrawal-page');

    Route::post('/withdraw/{user}', [App\Http\Controllers\AccountController::class, 'withdrawFromAccount'])->name('withdraw');

    //loan requests
    Route::get('/request-loan', [App\Http\Controllers\AccountController::class, 'showLoanRequestPage'])->name('show-loan-request-page');

    Route::post('/request-loan/{user}', [App\Http\Controllers\AccountController::class, 'requestLoan'])->name('request-loan');

    //History
    Route::get('/trade-history', [App\Http\Controllers\AccountController::class, 'showTradeHistoryPage'])->name('show-trade-history');

    //place trades
    Route::get('/trade', [App\Http\Controllers\AccountController::class, 'showTradePage'])->name('show-trade-page');

    Route::post('/trade/{user}', [App\Http\Controllers\AccountController::class, 'placeTrade'])->name("place-trade");
});