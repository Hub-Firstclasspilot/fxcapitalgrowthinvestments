<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;

class ContactController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $request->validate([
            "fullname" => "required|string",
            "phone" => "required|numeric",
            "message" => "required|max:250"
        ]);

        Mail::to("support@energyglobalinvestment.com")->send(new ContactMail($request));

        Alert::success("We have reeived your email! We'll be in touch shortly");

        return redirect('/');
    }
}
