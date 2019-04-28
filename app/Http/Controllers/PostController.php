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

        return redirect('/');
    }

    public function diy()
    {
        $posts = Post::all();
        return view('sites.diy', compact('posts'));
    }
}
