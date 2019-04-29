<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;


class UserController extends Controller
{
    public function profile(Request $request)
    {
        $users = Auth::user();

        return view('sites.profile', compact('users'));
    }
}
