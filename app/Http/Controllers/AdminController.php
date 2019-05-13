<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Volunteer;
use App\Wilayah;
use App\Report;
use App\Event;
use App\Join;
use App\Post;



class AdminController extends Controller
{
    public function adminlogin()
    {
        return view('admin.adminlogin');
    }

    public function adminpostlogin(Request $request)
    {
        if (auth::attempt($request->only('email', 'password'))) {
            return redirect('/admins/dashboard');
        }
        return redirect('/admins/login');
    }

    public function adminlogout()
    {
        Auth::logout();
        return redirect('/admins/login');
    }

    public function admins()
    {
        return redirect('/admins/login');
    }

    public function index(Request $request)
    {
        if ($request->has('cari')) {
            $data_volunteer = \App\User::where('nama_depan', 'LIKE', '%' . $request->cari . '%')->get();
        } else {
            $data_volunteer = User::where('role', 'volunteer')->get();
            $data_admin = User::where('role', 'admin')->get();
        }
        return view('admin.index', compact('data_volunteer', 'data_admin'));
    }

    public function dashboard()
    {
        $events = Event::all()->take(6);
        $users = User::where(['role' => 'volunteer']);
        $point = User::where('point', '>=', 500);
        $event = Event::all();
        $join = Join::where('status', 'Selesai');
        $posts = Post::all()->take(3);
        //dd($information);
        return view('admin.dashboard', compact('events', 'users', 'point', 'event', 'join', 'posts'));
    }


    public function edit($id)
    {
        $users = \App\User::find($id);
        return view('admin.edit', compact('users'));
    }

    public function update(Request $request, $id)
    {
        $users = \App\User::find($id);
        $users->update($request->all());
        return redirect('/admins/dashboard')->with('sukses', 'Data Berhasil diedit');
    }

    public function delete($id)
    {
        $users = User::find($id);
        $users->delete();
        return redirect('/admins/index')->with('sukses', 'Volunteer berhasil dihapus');
    }
}
