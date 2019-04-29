<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;


class UserController extends Controller
{
    public function profile(Request $request)
    {
        $users = User::all();
        dd($users);
        return view('sites.profile', compact('users'));
    }
}
