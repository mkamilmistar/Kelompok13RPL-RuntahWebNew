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
        if ($request->hasFile('image')) {
            $request->file('image')->move('images/post/', $request->file('image')->getClientOriginalName());
            $post->image = $request->file('image')->getClientOriginalName();
        }
        $post->save();

        return redirect('/admins/diypost')->with('sukses', 'DIY Posted!');
    }

    public function editpost($id)
    {
        $posts = Post::find($id);
        return view('admin.diypostedit', compact('posts'));
    }

    public function updatepost(Request $request, $id)
    {
        $this->validate($request, [
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $posts = Post::find($id);
        $posts->update($request->all());
        if ($request->hasFile('image')) {
            $request->file('image')->move('images/post/', $request->file('image')->getClientOriginalName());
            $posts->image = $request->file('image')->getClientOriginalName();
            $posts->save();
        }

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
