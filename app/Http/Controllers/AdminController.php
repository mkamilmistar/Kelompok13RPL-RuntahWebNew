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
            $data_volunteer = \App\User::all();
        }
        return view('admin.index', ['data_volunteer' => $data_volunteer]);
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

    public function publishpost(Request $request)
    {
        $post = new Post;
        $post->post_id = Auth::user()->id;
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->save();

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

    public function information(Request $request)
    {
        $information = Information::all();
        //dd($information);
        return view('admin.information', compact('information'));
    }

    public function publishinfo()
    {
        Information::create([
            'kecamatan' => request('kecamatan'),
            'date' => request('date'),
            'time' => request('time')
        ]);

        return redirect('/admins/information');
    }

    //AKHIR INFORMATION

    public function report(Request $request)
    {
        $report = Report::all();
        //dd($report);
        return view('admin.report', compact('report'));
    }
}
