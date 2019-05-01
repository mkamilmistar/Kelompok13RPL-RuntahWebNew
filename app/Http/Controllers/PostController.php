<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function diy()
    {
        $posts = Post::all();
        return view('sites.diy', compact('posts'));
    }
}
