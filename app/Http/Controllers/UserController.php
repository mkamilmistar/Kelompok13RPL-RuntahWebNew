<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function profile(Request $request)
    {
        $users = Auth::user();
        return view('sites.profile', compact('users'));
    }

    public function edit(Request $request)
    {
        $users = Auth::user();
        return view('sites.editprofile', compact('users'));
    }

    public function save(Request $request)
    {
        $this->validate($request, [
            'user_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nama_depan' => 'required',
            'nama_belakang' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'nomor_telepon' => 'required',
            'email' => 'required',
        ]);


        $users = User::find(Auth::user()->id);
        //buat upload gambar
        if ($request->hasFile('user_image')) {
            $request->file('user_image')->move('images/user/', $request->file('user_image')->getClientOriginalName());
            $users->user_image = $request->file('user_image')->getClientOriginalName();
        }

        $users->id = Auth::user()->id;
        $users->nama_depan = $request->input('nama_depan');
        $users->nama_belakang = $request->input('nama_belakang');
        $users->jenis_kelamin = $request->input('jenis_kelamin');
        $users->nomor_telepon = $request->input('nomor_telepon');
        $users->alamat = $request->input('alamat');
        $users->nik_pengguna = $request->input('nik_pengguna');
        $users->email = $request->input('email');
        $users->save(); //save all

        return redirect('/profile')->with('sukses', 'Profile updated!');
    }

    public function changepassword()
    {
        return view('Auth.changepassword');
    }

    public function savepassword(Request $request)
    {
        $this->validate($request, [
            'oldpassword' => 'required',
            'password' => 'required|confirmed'

        ]);
        $hashedPassword = Auth::user()->password;
        if (Hash::check($request->oldpassword, $hashedPassword)) {
            $users = User::find(Auth::id());
            $users->password = Hash::make($request->password);
            $users->save();
            Auth::logout();
            return redirect()->route('login')->with('sukses', "Password terupdate");
        } else {
            return redirect()->back()->with('gagal', "Password error");
        }
    }
}
