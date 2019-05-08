<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Auth;

class DIYController extends Controller
{
    //AWAL POSTINGAN DIY

    public function diy()
    {
        $posts = Post::all();
        return view('sites.diy', compact('posts'));
    }

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
}
