<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use Auth;
use App\Information;
use App\Report;


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

        return view('admin.dashboard');
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

    public function delete(user $user)
    {
        $user->delete();
        return redirect('/admins/dashboard')->with('sukses', 'Data berhasil dihapus');
    }
}
