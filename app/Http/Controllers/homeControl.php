<?php

namespace App\Http\Controllers;

use App\Models\confirmAns;
use Illuminate\Http\Request;

class homeControl extends Controller
{
    public function home()
    {
        $confirmation = confirmAns::all();
        // $a = 0;
        return view('home', [
            "confirmAns" => $confirmation
        ]);
    }
}
