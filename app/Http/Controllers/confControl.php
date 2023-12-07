<?php

namespace App\Http\Controllers;

use App\Models\confirmAns;
use Illuminate\Http\Request;

class confControl extends Controller
{
    public function confirm()
    {
        return view('confirm');
    }

    public function doConfirm(Request $request)
    {
        // dd($request->author);
        confirmAns::create([
            'name' => $request->name_input,
            'email' => $request->mail_input,
            'confirm' => $request->conf_input,
            // 'updated_at' => now()
        ]);

        return redirect('/home');
        // coding how to insert in to database php myadmmin
    }
}
