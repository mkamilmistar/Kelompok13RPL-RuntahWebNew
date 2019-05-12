<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function verif()
    {
        return view('auth.verify');
    }

    public function confirm()
    {
        return view('auth.confirm');
    }
}
