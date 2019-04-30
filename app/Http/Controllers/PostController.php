<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function create()
    {
        return view('sites.diypost');
    }

    public function publish()
    {
        Post::create([
            'title' => request('title'),
            'content' => request('content')
        ]);

        return redirect('/diy');
    }

    public function editpost($id)
    {
        $posts = Post::find($id);
        return view('sites.diyedit', compact('posts'));
    }

    public function updatepost($id)
    {
        $posts = Post::find($id);
        $posts->update([
            'title' => request('title'),
            'content' => request('content')
        ]);
        return redirect('/diy')->with('sukses', 'post updated!');
    }

    public function diy()
    {
        $posts = Post::all();
        return view('sites.diy', compact('posts'));
    }

    public function deletepost($id)
    {
        $posts = Post::find($id);
        $posts->delete();
        return redirect('/diy')->with('sukses', 'Post berhasil dihapus');
    }
}
