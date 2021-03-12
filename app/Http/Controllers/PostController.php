<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('post.index',compact('posts'));
    }

    public function create()
    {
        return view('post.create');
    }

    public function store(PostRequest $request)
    {
        Post::create($request->validated());
        return redirect()->route('posts.index')->with('success','Data Berhasil Disimpan');
    }

    public function edit(Post $post)
    {
        return view('post.edit',compact('post'));
    }

    public function update(PostRequest $request, Post $post)
    {
        $post->update($request->validated());
        return redirect()->route('posts.index')->with('success','Data Berhasil Diubah');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index')->with('success','Data Berhasil Dihapus');
    }
}
