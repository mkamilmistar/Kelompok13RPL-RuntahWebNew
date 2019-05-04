<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Volunteer;
use App\User;
use App\Information;
use App\Report;

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
    public function postreport()
    {
        Report::create([
            'report' => request('report'),
            'report_id' => request('report_id'), 
        ]);
        
        return redirect('/');
    }
    public function postregister(Request $request)
    {
        //insert ke table volunteer
        $user = new \App\User;
        $user->role = 'volunteer';
        $user->name = $request->nama_depan;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->remember_token = str_random(60);
        $user->save();

        //insert ke table volunteer
        $request->request->add(['user_id' => $user->id]);
        $volunteer = \App\Volunteer::create($request->all());
        return redirect('/')->with('sukses', 'Berhasil Mendaftar!');
    }
}
