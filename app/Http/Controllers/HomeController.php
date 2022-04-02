<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

 /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = User::find(auth()->id());

        $user->load(['account', 'withdrawals', 'deposits']);

        return view('admin.index', compact("user"));
    }

    public function profile()
    {
        $user = User::find(auth()->id());

        $user->load(['account', 'withdrawals', 'deposits']);

        return view('admin.pages.profile', compact("user"));
    }

    public function updatePassword()
    {
        //validation
        request()->validate([
            'old_password' => 'required|string',
            'password' => 'required|confirmed|string'
        ]);

        //change password
        if (Hash::check(request()->password, auth()->user()->password)) {
            $user = User::find(auth()->id());
            $user->update([
                "password" => Hash::make(request()->password)
            ]);

            Alert::toast("Your password has successfully been changed", "success");

            return redirect()->route('profile');
        }

        Alert::toast("Something went wrong and we couldn't do what you expected", 'error');

        return redirect()->route('profile');
    }
}
