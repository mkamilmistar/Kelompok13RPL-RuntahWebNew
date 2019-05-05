<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Volunteer;
use App\User;
use App\Information;
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
        return view('sites.register');
    }

    public function information(Request $request)
    {
        $information = Information::all();
        return view('sites.information', compact('information'));
    }


    public function report()
    {
        return view('sites.report');
    }
    public function postreport(Request $request)
    {
        $report = new Report;
        $report->report_id = Auth::user()->id;
        $report->report = $request->input('report');
        $report->save();

        return redirect('/');
    }
}
