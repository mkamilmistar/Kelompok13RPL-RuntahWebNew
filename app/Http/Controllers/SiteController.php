<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Wilayah;
use App\Report;
use App\Event;
use App\Join;
use App\Post;

class SiteController extends Controller
{

    public function home()
    {

        $events = Event::all()->take(6);
        $users = User::where(['role' => 'volunteer']);
        $point = User::where('point', '>=', 500);
        $event = Event::all();
        $join = Join::where('status', 'Selesai');
        $posts = Post::all()->take(3);
        //dd($information);
        return view('sites.home', compact('events', 'users', 'point', 'event', 'join', 'posts'));
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
