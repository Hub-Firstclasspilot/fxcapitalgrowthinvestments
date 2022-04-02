<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilepondController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        // TODO get file details
        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $filename = $file->getClientOriginalName();
            $folder = uniqid().'-'.now()->timestamp;
            $file->storeAs('avatars/'.$folder, $filename);
            return $folder.'/'.$filename;
        }

        return '';
    }
}
