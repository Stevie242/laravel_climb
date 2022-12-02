<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function home (){
        return view('public.mon-compte.mon-compte',[
            'user' =>Auth::user(),
        ]);
    }
}
