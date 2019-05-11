<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Volunteer;
use App\User;
use App\Wilayah;
use App\Report;
use Auth;

class SiteController extends Controller
{
    public function home()
    {
        return view('sites.home');
    }

    public function profile(Request $request)
    {
        $data_volunteer = \App\Volunteer::all();
        return view('sites.profile', ['data_volunteer' => $data_volunteer]);
    }

    public function about()
    {
        return view('sites.about');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function information(Request $request)
    {
        $information = Wilayah::all();
        return view('sites.information', compact('information'));
    }
}
