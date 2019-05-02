<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use Auth;


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
            $data_volunteer = \App\User::all();
        }
        return view('admin.index', ['data_volunteer' => $data_volunteer]);
    }

    public function dashboard()
    {

        return view('admin.dashboard');
    }

    //USER KONTROL
    public function create(Request $request)
    {
        //insert ke table user
        $user = new \App\User;
        $user->role = 'volunteer';
        $user->name = $request->nama_depan;
        $user->email = $request->email;
        $user->password = bcrypt('rahasia');
        $user->remember_token = str_random(60);
        $user->save();

        //insert ke table volunteer
        //$request->request->add(['user_id' => $user->id]);
        //$volunteer = \App\Volunteer::create($request->all());
        return redirect('/admins')->with('sukses', 'Data berhasil ditambahkan');
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
        return redirect('/admins')->with('sukses', 'Data Berhasil diedit');
    }

    public function delete(user $user)
    {
        $user->delete();
        return redirect('/admins')->with('sukses', 'Data berhasil dihapus');
    }

    //AWAL POSTINGAN DIY
    public function diypost()
    {
        $posts = Post::all();
        return view('admin.diypost', compact('posts'));
    }

    public function createpost()
    {
        return view('admin.diypostcreate');
    }

    public function publishpost()
    {
        Post::create([
            'title' => request('title'),
            'content' => request('content')
        ]);

        return redirect('/admins/diypost');
    }

    public function editpost($id)
    {
        $posts = Post::find($id);
        return view('admin.diypostedit', compact('posts'));
    }

    public function updatepost($id)
    {
        $posts = Post::find($id);
        $posts->update([
            'title' => request('title'),
            'content' => request('content')
        ]);
        return redirect('/admins/diypost')->with('sukses', 'post updated!');
    }

    public function deletepost($id)
    {
        $posts = Post::find($id);
        $posts->delete();
        return redirect('/admins/diypost')->with('sukses', 'Post berhasil dihapus');
    }
    //AKHIR DIY

    //AWAL INFORMATION

    public function information()
    {
        return view('admin.information');
    }

    public function createinfo()
    {
        return view('admin.createinfo');
    }

    //AKHIR INFORMATION
}
